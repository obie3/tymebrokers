<?php
namespace App\Http\Controllers;
use Sentinel;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\Deposit\DepositContract;
use App\Repositories\AccountBalance\AccountBalanceContract;
// use App\Events\TransactionCreated;

class AccountBalanceController extends Controller
{
    protected $userModel;
    protected $accountBalanceModel;
    protected $depositModel;
    public function __construct(AccountBalanceContract $accountBalanceContract,
        UserContract $userContract,
        DepositContract $depositContract){
        //$this->middleware('user');
        $this->accountBalanceModel = $accountBalanceContract;
        $this->userModel = $userContract;
        $this->depositModel = $depositContract;
    }

    public function store(Request $request) {

    }

    public function edit(Request $request) {

    }

    public function update(Request $request) {

    }

    // public function updateAccountBalance(Request $request) {
    //     $user = $this->userModel->findById($request->id);
    //     $valid = $this->validateInput($request);
    //     if($valid == false) {
    //         return redirect()->back()->with(['user' => $user]);
    //     }
    //     $status = $this->accountBalanceModel->updateAccountBalance($request);
    //     if($status) {
    //         if($request->type == 'credit') {
    //             return $this->createDeposit($request);
    //         }
    //         return $this->createWithdrawal($request);
    //     }
    //     else {
    //         toastr()->error('Insufficient funds', 'Attention..');
    //         return redirect()->back()->with(['user' => $user]);
    //     }
    // }

    // public function createDeposit($request) {
    //     $user = $this->userModel->findById($request->id);
    //     toastr()->success('Transaction Successful', 'Attention..');
    //     $this->depositModel->create($request);
    //     return redirect()->back()->with(['user' => $user]);
    // }

    // public function createWithdrawal($request) {
    //     $user = $this->userModel->findById($request->id);
    //     $this->depositModel->create($request);
    //     toastr()->success('Transaction Successful', 'Attention..');
    //     return redirect()->back()->with(['user' => $user]);
    // }

    // public function validateInput($request) {
    //     if(!isset($request->amount)) {
    //         toastr()->error('Enter Amount to top up', 'Attention..');
    //         return false;
    //     }
    //     if(!is_numeric($request->amount)) {
    //         toastr()->error('Enter Valid Digit to top up', 'Attention..');
    //         return false;
    //     }
    //     return true;
    // }



}
