<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Repositories\AccountDetails\AccountDetailsContract;


class CreateAccountDetails
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $accountDetailsModel;
    public function __construct(AccountDetailsContract $accountDetailsModel){
        $this->accountDetailsModel = $accountDetailsModel;

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        try {
            $accountObject = new \StdClass;
            $accountObject->bank_name = $event->user['request']->bank_name;
            $accountObject->account_name = $event->user['request']->account_name;
            $accountObject->account_number = $event->user['request']->account_number;
            $accountObject->swift_code = $event->user['request']->swift_code;
            $accountObject->routing_number = $event->user['request']->routing_number;
            $accountObject->user_id = $event->user['id'];
            return $this->accountDetailsModel->create($accountObject);
        }
        catch(\Exception $ex) {
            \Log::info('errrrr.... '.$ex);
            return false;
        }
    }
}
