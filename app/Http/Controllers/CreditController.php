<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Deposit\DepositContract;
use Sentinel;

class CreditController extends Controller
{
    protected $creditModel;
    public function __construct(DepositContract $depositContract){
        $this->creditModel = $depositContract;
    }

    public function credits() {
        $credits = $this->creditModel->findAll();
        return view('admin.credits')->with(['credits' => $credits]);
    }

    public function userCredits() {
        $user = Sentinel::getUser()->id;
        $credits = $this->creditModel->findById($user);
        return view('user.credits')->with(['credits' => $credits]);
    }
}
