<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Repositories\Debit\DebitContract;
use App\Events\TransactionCreated;

class CreateDebitTransaction
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $debitModel;
    public function __construct(CreditContract $debitContract){
        $this->debitModel = $debitContract;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(TransactionCreated $event){
        //$type = isset($event->transaction['request']->transaction_type) ? 'Deposite' : 'Transfered';
        if(isset($event->transaction['request']->type) && $event->transaction['request']->type == 'debit') {
            try {
                $debitObject = new \StdClass;
                $debitObject->amount = $event->transaction['request']->amount;
                $debitObject->user_id = $event->transaction['user_id'];
                $debitObject->narration = 'nill';
                $debitObject->type = $type;
                //$creditObject->type = $event->transaction['request']->type;
                return $this->debitModel->create($debitObject);
            }
            catch(\Exception $ex) {
                return false;
            }
        }
    }
}
