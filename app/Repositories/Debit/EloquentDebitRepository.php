<?php
namespace App\Repositories\Debit;

use Session;
use Mail;
use App\Debit;
use App\Repositories\Debit\DebitContract;

class EloquentDebitRepository implements DebitContract{
    public function create($request) {
        $debit = new Debit;
        $this->setDebitProperties($debit, $request);
        return $debit->save();
    }

    public function findById($id) {
        return Debit::where('user_id', $id)->first();
    }

    // public function updateAccountBalance($request){
    //     $account = $this->findById($request->id);
    //     $account->account_balance = intval(str_replace( ',', '', $account->account_balance)) + intval($request->amount);
    //     return $account->save();
    // }

    public function findAll() {
        return Debit::all();
    }

    private function setDebitProperties($debit, $request) {
        $debit->amount = $request->amount;
        $debit->narration = $request->narration;
        $debit->recipient = $request->recipient;
        $debit->recipient_id = $request->recipient;
        $debit->user_id = $request->user_id;
    }
}


?>




