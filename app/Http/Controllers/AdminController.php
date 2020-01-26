<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\AccountBalance\AccountBalanceContract;
use App\Repositories\Deposit\DepositContract;

class AdminController extends Controller
{
    protected $userModel;
    protected $accountBalanceModel;
    protected $creditModel;
    public function __construct(UserContract $userContract,
        AccountBalanceContract $accountBalanceContract,
        DepositContract $depositContract){
        $this->middleware('admin');
        $this->userModel = $userContract;
        $this->accountBalanceModel = $accountBalanceContract;
        $this->creditModel = $depositContract;
    }

    public function index(){
        toastr()->info('Hello... ', 'Welcome Back');
        $users = $this->userModel->findAllUser();
        $activeTransfers = $this->userModel->findUserByAccountStatus('active');
        $disabledTransfers = $this->userModel->findUserByAccountStatus('disabled');
        $balanceTotal = $this->accountBalanceModel->findAll();
        return view('admin.index')->with(['users' => $users->count(),
            'activeAccounts' => $activeTransfers->count(),
            'disabledAccounts' => $disabledTransfers->count(),
            'accountTotal' => $balanceTotal->sum('account_balance')]);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'surname' => 'required',
            'other_names' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'user_type' => 'required'
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
            toastr()->success($ex, 'Hello... ');
            return redirect()->back();
        }
    }

    public function edit($id) {
        $user = $this->userModel->findById($id);
        return view('admin.edit')->with(['user' => $user]);
    }


    public function update(Request $request) {

    }

    public function changePassword() {
        return view('admin.changepassword');
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
        return view('admin.users')->with(['users' => $users]);
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
