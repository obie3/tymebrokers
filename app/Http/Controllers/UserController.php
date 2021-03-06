<?php
namespace App\Http\Controllers;
use Sentinel;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\AccountBalance\AccountBalanceContract;
use App\Repositories\Deposit\DepositContract;
use App\Repositories\Debit\DebitContract;
use App\Repositories\AccountDetails\AccountDetailsContract;


class UserController extends Controller
{
    protected $userModel;
    protected $accountBalanceModel;
    protected $creditModel;
    protected $debitModel;
    protected $accountDetailsModel;


    public function __construct(UserContract $userContract,
        AccountBalanceContract $accountBalanceContract,
        DepositContract $depositContract,
        DebitContract $debitContract,
        AccountDetailsContract $accountDetailsContract){
        $this->middleware('user');
        $this->userModel = $userContract;
        $this->accountBalanceModel = $accountBalanceContract;
        $this->accountDetailsModel = $accountDetailsContract;
        $this->creditModel = $depositContract;
        $this->debitModel = $debitContract;
    }

    public function index(){
        $user = $this->currentUser();
        return view('user/index')->with('user', $user);
    }

    public function currentUser() {
        return $this->userModel->findById(Sentinel::getUser()->id);
    }

    public function profile(){
        $user = $this->currentUser();
        return view('user/profile')->with('user', $user);
    }

    public function create(){
        return view('user/create');
    }

    public function getTransfer() {
        $status = Sentinel::getUser()->status;
        if($status == 'active') {
            return view('user/transfer');
        }
        toastr()->info('INRC is required to proceed', 'Attention... ');
        return redirect()->back();
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
        try {
            $user = $this->userModel->updateUserProfile($request);
            if ($user) {
                toastr()->success('Profile Update Successful', 'Hello... ');
                return redirect()->back();
            }
            toastr()->error('Oops error encountered please try again', 'Hello... ');
            return redirect()->back();
        }catch (\Exception $ex) {
            toastr()->error($ex, 'Attention... ');
            return redirect()->back();
        }
    }

    public function changePassword() {
        return view('user.changepassword');
    }

    public function updatePassword(Request $request) {
        $this->validate($request, [
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        if(strcmp($request->new_password, $request->confirm_password) == 0) {
            try {
                $user = $this->userModel->updatePassword($request);
                if ($user) {
                    toastr()->success('Password Update Successful', 'Hello... ');
                    return redirect()->back();
                }
                toastr()->error('Oops error encountered please try again', 'Hello... ');
                return redirect()->back();
            }catch (\Exception $ex) {
                toastr()->error($ex, 'Attention... ');
                return redirect()->back();
            }
        }else {
            toastr()->error('Password donot match', 'Attention.. ');
            return redirect()->back()->withInput();
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
        $user = $this->currentUser();
        $isValidInput = $this->validateInput($request);
        if($user->status != 'active') {
            toastr()->warning('INRC is required to proceed', 'Hello..');
            return redirect()->back()->with(['user' => $user]);
        }

        if($isValidInput) {
            $recipient = $this->accountDetailsModel->verifyRecipient($request);
                //$this->userModel->findRecipient($request->recipient);
            //if($recipient) {
                $isTokenValid = $this->validateOTP($request);
                if($isTokenValid->status == true) {
                    $status = $this->accountBalanceModel->withdraw($request);
                    // if($status) {
                        $recipient_id = $recipient ? $recipient->id : 1;
                        $this->accountBalanceModel->deposit($request, $recipient_id);
                        $this->createDeposit($request, $recipient_id);
                        $request['recipient_id'] = $recipient_id;
                        $request['recipient_name'] = $recipient ? $recipient->surname.' '.$recipient->othernames : $request->beneficiary_name;
                        $request['recipient_phone_number'] = $recipient ? $recipient->phone_number : '08000000000';
                        $request['id'] = $user->id;
                        return $this->createDebit($request);
                    // }
                    // toastr()->error('Insufficient funds', 'Hello');
                    // return redirect()->back()->with(['user' => $user]);
                }
                toastr()->error($isTokenValid->message, 'Hello');
                return redirect()->back()->with(['user' => $user]);
            // }
            // toastr()->error('Recipent doesnt exist', 'Attention..');
            // return redirect()->back()->with(['user' => $user]);
        }
        return redirect()->back()->with(['user' => $user]);
    }

    //id is the id of the user to be credited
    public function createDeposit($request, $id) {
        $this->creditModel->create($request, $id);
        toastr()->success('Transaction Successful, Account will be credited within 48hrs', 'Success..');
        return true;
    }

    public function createDebit($request) {
        $user = $this->userModel->findById($request->id);
        $this->debitModel->create($request);
        //toastr()->success('Transaction Successful, Account will be credited within 48hrs', 'Success..');
        return redirect()->back()->with(['user' => $user]);
    }

    public function validateInput($request) {
        if(!isset($request->amount)) {
            toastr()->error('Enter Amount to top up', 'Attention..');
            return false;
        }
        if(!is_numeric($request->amount)) {
            toastr()->error('Enter Valid Amount to top up', 'Attention..');
            return false;
        }
        return true;
    }

    public function validateOTP($request) {
        return $this->userModel->validateToken($request->otp);
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
