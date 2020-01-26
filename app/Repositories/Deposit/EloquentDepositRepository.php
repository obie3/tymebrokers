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
        return Credit::where('user_id', $id)->first();
    }

    public function updateAccountBalance($request){
        $account = $this->findById($request->id);
        $account->account_balance = intval( $account->account_balance) + intval(str_replace( ',', '', $request->amount));
        return $account->save();
    }

    public function findAll() {
        return Credit::all();
    }

    private function setDepositProperties($credit, $request) {
        //type = transfer or deposit
        $credit->amount = $request->amount;
        $credit->narration = $request->narration;
        $credit->type = isset($request->type) ? $request->type : 'Deposit';
        $credit->user_id = $request->account_id; //id of the user to be credited
        $credit->sender_id = Sentinel::getUser()->id;
        $credit->depositor_id = Sentinel::getUser()->id;
    }
}


?>




