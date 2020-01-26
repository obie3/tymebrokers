<?php
namespace App\Repositories\Deposit;

use Session;
use Mail;
use App\Credit;
use Sentinel;
use App\Repositories\Deposit\DepositContract;

class EloquentDepositRepository implements DepositContract{
    public function create($request, $id) {
        $credit = new Credit;
        $request['account_id'] = $id;
        $this->setDepositProperties($credit, $request);
        return $credit->save();
    }

    public function findById($id) {
        return Credit::where('user_id', $id)->get();
    }

    public function updateAccountBalance($request){
        $account = $this->findById($request->id);
        $account->account_balance = intval( $account->account_balance) + intval(str_replace( ',', '', $request->amount));
        return $account->save();
    }

    public function findAll() {
        return Credit::with('user')->get();
    }

    private function setDepositProperties($credit, $request) {
        //type = transfer or deposit
        $user = Sentinel::getUser();
        $credit->amount = $request->amount;
        $credit->narration = $request->narration;
        $credit->type = isset($request->type) ? $request->type : 'Deposit';
        $credit->user_id = $request->account_id; //id of the user to be credited
        $credit->depositor_id = $user->id;
        $credit->depositor_name = $user->surname.' '.$user->other_names;
        $credit->depositor_phone_number = $user->phone_number;
    }
}


?>




