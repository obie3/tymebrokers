<?php
namespace App\Repositories\Debit;

use Session;
use Mail;
use Sentinel;
use App\Debit;
use App\Repositories\Debit\DebitContract;

class EloquentDebitRepository implements DebitContract{
    public function create($request) {
        $debit = new Debit;
        $this->setDebitProperties($debit, $request);
        return $debit->save();
    }

    public function findById($id) {
        return Debit::where('user_id', $id)->get();
    }

    public function findAll() {
        return Debit::with('user')->get();
    }

    private function setDebitProperties($debit, $request) {
        $debit->amount = $request->amount;
        $debit->narration = $request->narration;
        $debit->recipient = $request->recipient;
        $debit->recipient_id = $request->recipient_id;
        $debit->recipient_name = $request->recipient_name;
        $debit->recipient_phone_number = $request->recipient_phone_number;
        $debit->user_id = $request->id;
    }
}


?>




