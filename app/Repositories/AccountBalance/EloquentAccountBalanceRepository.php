<?php
namespace App\Repositories\AccountBalance;

use Session;
use Mail;
use Sentinel;
use App\AccountBalance;
use App\Repositories\AccountBalance\AccountBalanceContract;
use App\Events\TransactionCreated;


class EloquentAccountBalanceRepository implements AccountBalanceContract{
    public function create($request) {
        $accountBalance = new AccountBalance;
        $this->setAccountBalanceProperties($accountBalance, $request);
        return $accountBalance->save();
    }

    public function findById($id) {
        return AccountBalance::where('user_id', $id)->first();
    }

    public function deposit($request, $id){
        $account = $this->findById($id);
        if($account) {
            $account->account_balance = intval($account->account_balance) + intval(str_replace( ',', '',$request->amount));
            $account->save();
        }
        return true;
    }

    public function withdraw($request, $id = null){
        $user = Sentinel::getUser()->id;
        $account = $this->findById($user);
        $currentBalance = $account->account_balance;
        $account->account_balance = intval($currentBalance) - intval(str_replace( ',', '',$request->amount));
       // if($account->account_balance >= 0) {
            $account->save();
            return true;
        // }
        // return false;
    }

    public function findAll() {
        return AccountBalance::all();
    }

    private function setAccountBalanceProperties($accountBalance, $request) {
        $accountBalance->email = $request->email;
        $accountBalance->account_name = $request->account_name;
        $accountBalance->user_id = $request->user_id;
    }
}


?>




