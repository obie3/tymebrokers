<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Repositories\AccountBalance\AccountBalanceContract;


class CreateAccountBalanceForUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $accountBalanceModel;

    public function __construct(AccountBalanceContract $accountBalanceModel){
        $this->accountBalanceModel = $accountBalanceModel;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreated $event) {
        try {
            $creditObject = new \StdClass;
            $creditObject->account_name = $event->user['surname'].' '.$event->user['other_names'];
            $creditObject->user_id = $event->user['id'];
            $creditObject->email = $event->user['email'];
            return $this->accountBalanceModel->create($creditObject);
        }
        catch(\Exception $ex) {
            return false;
        }

    }
}
