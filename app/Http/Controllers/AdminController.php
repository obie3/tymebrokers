<?php

namespace App\Http\Controllers;
use Sentinel;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\AccountBalance\AccountBalanceContract;
use App\Repositories\Deposit\DepositContract;
use App\Repositories\Debit\DebitContract;


class AdminController extends Controller
{
    protected $userModel;
    protected $accountBalanceModel;
    protected $creditModel;
    protected $debitModel;
    public function __construct(UserContract $userContract,
        AccountBalanceContract $accountBalanceContract,
        DepositContract $depositContract,
        DebitContract $debitContract ){
        $this->middleware('admin');
        $this->userModel = $userContract;
        $this->accountBalanceModel = $accountBalanceContract;
        $this->creditModel = $depositContract;
        $this->debitModel = $debitContract;

    }

    public function index(){
        toastr()->info('Hello... ', 'Welcome Back');
        $users = $this->userModel->findAllUser();
        $authUser = Sentinel::getUser();
        $activeTransfers = $this->userModel->findUserByAccountStatus('active');
        $disabledTransfers = $this->userModel->findUserByAccountStatus('disabled');
        $balanceTotal = $this->accountBalanceModel->findAll();
        $totalDebit = $this->debitModel->findAll();
        $recentUsers = $this->userModel->recentData();
        return view('admin.index')->with(['users' => $users->count(),
            'profile' => $authUser,
            'activeAccounts' => $activeTransfers->count(),
            'disabledAccounts' => $disabledTransfers->count(),
            'accountTotal' => $balanceTotal->sum('account_balance'),
            'totalDebits' => $totalDebit->sum('amount'),
            'recentRecords' => $recentUsers]);
    }

    public function create(){
        $authUser = Sentinel::getUser();
        return view('admin.create')->with('profile', $authUser);
    }

    public function store(Request $request) {
        // \Log::info($data);
       // dd($request);
        $this->validate($request, [
            'surname' => 'required',
            'other_names' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric|unique:users',
            'address' => 'required',
           // 'user_type' => 'required'
        ]);
        try {

            $user = $this->userModel->create($request);
            \Log::info('welcome... '.$user);

            if ($user) {
                toastr()->success('User created Successfully', 'Hello... ');
                return redirect()->back();
            }
            toastr()->error('Oops error encountered please try again', 'Hello... ');
            return redirect()->back()->withInput();
        }catch (\Exception $ex) {
            toastr()->success($ex, 'Hello... ');
            return redirect()->back()->withInput();
        }
    }

    public function activeAccounts(){
        $activeTransfers = $this->userModel->findUserByAccountStatus('active');
        return view('admin.active')->with(['users' => $activeTransfers]);
    }

    public function disabledAccounts() {
        $disabledTransfers = $this->userModel->findUserByAccountStatus('disabled');
        return view('admin.disabled')->with(['users' => $disabledTransfers]);

    }

    public function edit($id) {
        $authUser = Sentinel::getUser();
        $user = $this->userModel->findById($id);
        return view('admin.edit')->with(['user' => $user, 'profile' => $authUser]);
    }


    public function update(Request $request) {

    }

    public function changePassword() {
        $authUser = Sentinel::getUser();
        return view('admin.changepassword')->with('profile', $authUser);
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

    public function deposit(Request $request, $id) {
        $user = $this->userModel->findById($request->id);
        $valid = $this->validateInput($request);
        if($valid) {
            $status = $this->accountBalanceModel->deposit($request, $id);
            if($status) {
               return $this->createDeposit($request, $id);
            }
            toastr()->error('Oops Something went wrong, try again', 'Attention..');
        }
        return redirect()->back()->with(['user' => $user]);
    }

    //id is the id of the user to be credited
    public function createDeposit($request, $id) {
        $user = $this->userModel->findById($request->id);
        $valid = $this->validateInput($request);
        if($valid == false) {
            return redirect()->back()->with(['user' => $user]);
        }
        $this->creditModel->create($request, $id);
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


    // public function updateAccountBalance(Request $request) {
    //     $user = $this->userModel->findById($request->id);
    //     if(!isset($request->amount)) {
    //         toastr()->error('Enter Amount to top up', 'Attention..');
    //         return redirect()->back()->with(['user' => $user]);
    //     }

    //     if(!is_numeric($request->amount)) {
    //         toastr()->error('Enter Valid Digit to top up', 'Attention..');
    //         return redirect()->back()->with(['user' => $user]);
    //     }
    //     $this->accountBalanceModel->updateAccountBalance($request);
    //     toastr()->success('Transaction Successful', 'Attention..');
    //     return redirect()->back()->with(['user' => $user]);
    // }

    public function modify(Request $request) {
        $this->userModel->modifyTransfer($request);
        $user = $this->userModel->findById($request->id);
        $message = $user->status == 'disabled' ? 'Transfer Disabled Successfully' : 'Transfer Activated Successfully';
        toastr()->success($message, 'Attention..');
        return redirect()->back()->with(['user' => $user]);
    }

    public function users() {
        $users = $this->userModel->findAllUser();
        $authUser = Sentinel::getUser();
        return view('admin.users')->with(['users' => $users, 'profile' => $authUser]);
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
