<?php
namespace App\Repositories\Deposit;

use Session;
use Mail;
use App\Credit;
use Sentinel;
use Carbon\Carbon;
use App\Repositories\Deposit\DepositContract;

class EloquentDepositRepository implements DepositContract{
    public function create($request, $id) {
        $credit = new Credit;
        $request['account_id'] = $id;
        $request->transaction_id = rand(10,99).rand(100,999).rand(100,990).rand(10,99);
        $this->setDepositProperties($credit, $request);
        return $credit->save();
    }

    public function findByUserId($userId) {
        return Credit::where('user_id', $id)->get();
    }

    public function findById($id) {
        return Credit::find($id);
    }

    public function findAll() {
        return Credit::with('user')->get();
    }

    public function updateTransaction($request) {
        $data = $this->findById($request->id);
        $data->depositor_name = $request->depositor_name;
        $data->created_at =Carbon::createFromFormat('m/d/Y', $request->date_created)->toDateTimeString();
        $data->narration = $request->narration;
        return $data->save();

    }

    private function setDepositProperties($credit, $request) {
        //type = transfer or deposit
        $user = Sentinel::getUser();
        $sender_name = $user->surname.' '.$user->other_names;
        $credit->amount = $request->amount;
        $credit->narration = isset($request->narration) ? $request->narration : 'Deposit';
        $credit->type = isset($request->type) ? $request->type : 'Deposit';
        $credit->user_id = $request->account_id; //id of the user to be credited
        $credit->depositor_id = $user->id;
        $credit->transaction_id = $request->transaction_id;
        $credit->depositor_name = isset($request->sender_name) ? $reuest->sender_name : $sender_name;
        $credit->depositor_phone_number = $user->phone_number;
    }
}


?>




