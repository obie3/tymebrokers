<?php
namespace App\Repositories\AccountDetails;

use Session;
use Mail;
use Sentinel;
use App\AccountDetails;
use App\Repositories\AccountDetails\AccountDetailsContract;
use App\Events\TransactionCreated;


class EloquentAccountDetailsRepository implements AccountDetailsContract{
    public function create($request) {
        //$user = Sentinel::getUser()->id;
        $user = $request->user_id;
        $exist = $this->findById($user);
        $accountDetails = $exist ? $exist : new AccountDetails;
        $this->setAccountDetailsProperties($accountDetails, $request);
        return $accountDetails->save();
    }

    public function findById($id) {
        return AccountDetails::where('user_id', $id)->first();
    }

    public function deposit($request, $id){
        $account = $this->findById($id);
        $account->account_balance = intval($account->account_balance) + intval(str_replace( ',', '',$request->amount));
        return $account->save();
    }

    public function verifyRecipient($request){
        return AccountDetails::where('bank_name', $request->bank_name)
         ->where('account_number', $request->account_number)
         ->where('swift_code', $request->swift_code)
         ->where('routing_number', $request->routing_number)->first();

    }

    public function withdraw($request, $id = null){
        $account = $this->findById($request->id);
        $currentBalance = $account->account_balance;
        $account->account_balance = intval($currentBalance) - intval(str_replace( ',', '',$request->amount));
        if($account->account_balance >= 0) {
            $account->save();
            return true;
        }
        return false;
    }

    public function findAll() {
        return AccountDetails::all();
    }

    private function setAccountDetailsProperties($accountDetails, $request) {
        $accountDetails->account_number = $request->account_number;
        $accountDetails->account_name = $request->account_name;
        $accountDetails->bank_name = $request->bank_name;
        $accountDetails->swift_code = $request->swift_code;
        $accountDetails->routing_number = $request->routing_number;
        $accountDetails->user_id = $request->user_id;



    }
}


?>




