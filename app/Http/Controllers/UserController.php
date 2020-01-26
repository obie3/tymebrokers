<?php
namespace App\Http\Controllers;
use Sentinel;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\AccountBalance\AccountBalanceContract;
use App\Repositories\Deposit\DepositContract;
use App\Repositories\Debit\DebitContract;



class UserController extends Controller
{
    protected $userModel;
    protected $accountBalanceModel;
    protected $creditModel;
    protected $debitModel;

    public function __construct(UserContract $userContract,
        AccountBalanceContract $accountBalanceContract,
        DepositContract $depositContract,
        DebitContract $debitContract){
        $this->middleware('user');
        $this->userModel = $userContract;
        $this->accountBalanceModel = $accountBalanceContract;
        $this->creditModel = $depositContract;
        $this->debitModel = $debitContract;


    }

    public function index(){
       // toastr()->info('Hello... ', 'Welcome Back');
        $user = $this->userModel->findById(Sentinel::getUser()->id);
        return view('user/index')->with('user', $user);
    }

    public function create(){
        return view('client/create');
    }

    public function store(Request $request) {
        try {
           $user = $this->userModel->create($request);
           if ($user) {
                toastr()->success('User created Successfully', 'Hello... ');
                return redirect()->back();
            } else {
                return response()->json(['error' => $user], 500);
            }
       } catch (QueryException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
       }
    }

    public function edit(Request $request) {
    }

    public function update(Request $request) {
    }

    public function changePassword() {
        return view('user.changepassword');
    }

    public function updatePassword() {
        $this->validate($request, [
            'password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        try {
            $user = $this->userModel->create($request);
            if ($user) {
                toastr()->success('User created Successfully', 'Hello... ');
                return redirect()->back();
            }
            toastr()->error('Oops error encountered please try again', 'Hello... ');
            return redirect()->back();
        }catch (\QueryException $ex) {
            toastr()->error($ex, 'Hello... ');
            return redirect()->back();
        }
    }

    public function requestOtp() {
        $status = $this->userModel->generateToken();
        if($status) {
            return $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
        }
    }

    public function deposit(Request $request, $id) {
        $user = $this->userModel->findById($request->id);
        $valid = $this->validateInput($request);
        if($valid) {
            $status = $this->accountBalanceModel->deposit($request, $id);
            if($status) {
               $this->createDeposit($request, $id);
               return redirect()->back()->with(['user' => $user]);
            }
            toastr()->error('Oops Something went wrong, try again', 'Attention..');
        }
        return redirect()->back()->with(['user' => $user]);
    }

    public function fundTransfer(Request $request) {
        $user = $this->userModel->findById($request->id);
        $valid = $this->validateInput($request);
        if($valid) {
            $recipient = $this->userModel->findRecipient($request->recipient);
            if($recipient) {
                $isTokenValid = $this->validateOTP($request);
                if($isTokenValid->status) {
                    $status = $this->accountBalanceModel->withdraw($request);
                    if($status) {
                        $this->accountBalanceModel->deposit($request, $recipient->id);
                        $this->createDeposit($request, $recipient->id);
                        return $this->createDebit($request);
                    }
                    toastr()->error('Insufficient funds', 'Hello');
                    return redirect()->back()->with(['user' => $user]);
                }
                toastr()->error($isTokenValid->message, 'Hello');
                return redirect()->back()->with(['user' => $user]);
            }
            toastr()->error('Recipent doesnt exist', 'Attention..');
            return redirect()->back()->with(['user' => $user]);
        }
        return redirect()->back()->with(['user' => $user]);
    }

    //id is the id of the user to be credited
    public function createDeposit($request, $id) {
        $this->creditModel->create($request, $id);
        toastr()->success('Transaction Successful', 'Attention..');
        return true;
    }

    public function createDebit($request) {
        $user = $this->userModel->findById($request->id);
        $this->debitModel->create($request);
        toastr()->success('Transaction Successful', 'Attention..');
        return redirect()->back()->with(['user' => $user]);
    }

    public function validateInput($request) {
        if(!isset($request->amount)) {
            toastr()->error('Enter Amount to top up', 'Attention..');
            return false;
        }
        if(!is_numeric($request->amount)) {
            toastr()->error('Enter Valid Digit to top up', 'Attention..');
            return false;
        }
        return true;
    }

    public function validateOTP($request) {
        $status = $this->userModel->validateToken($request->otp);
        if($status->status){
            return true;
        }
        else {
            return $status;
        }
    }

    public function deleteuser(Request $request) {
        try {
            $user = $this->userModel->removeuser($request->all());
            if ($user) {
                return response()->json(['success'=>' Records Deleted Successfully'], 200);
            } else {
                return response()->json(['responseText' => 'Failed to Delete'], 500);
            }
        } catch (QueryException $e) {
         return response()->json(['response' => $e->getMessage()], 500);
        }
     }
}
