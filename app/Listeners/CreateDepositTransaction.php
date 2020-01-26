<?php

namespace App\Listeners;

use App\Events\TransactionCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Repositories\Deposit\DepositContract;

class CreateDepositTransaction
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $creditModel;
    public function __construct(DepositContract $creditModel){
        $this->creditModel = $creditModel;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(TransactionCreated $event){
       // dd(isset($event->transaction['request']->transaction_type));
        $type = isset($event->transaction['request']->transaction_type) ? 'Deposite' : 'Transfered';
       // if(isset($event->transaction['request']->type) && $event->transaction['request']->type == 'credit') {
            try {
                $creditObject = new \StdClass;
                $creditObject->amount = $event->transaction['request']->amount;
                $creditObject->user_id = $event->transaction['user_id'];
                $creditObject->narration = 'nill';
                $creditObject->type = $type;
                return $this->creditModel->create($creditObject);
            }
            catch(\Exception $ex) {
                //dd($ex);
                return false;
            }
        //}

    }
}
