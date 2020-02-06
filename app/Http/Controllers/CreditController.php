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
        $user = Sentinel::getUser();
        return view('admin.credits')->with(['credits' => $credits, 'profile' => $user]);
    }

    public function userCredits() {
        $user = Sentinel::getUser()->id;
        $credits = $this->creditModel->findByUserId($user);
        return view('user.credits')->with(['credits' => $credits]);
    }

    public function editCreditDetails($id){
        $user = Sentinel::getUser();
        $transaction =  $this->creditModel->findById($id);
        return view('admin.modify')->with(['credit' => $transaction, 'profile' => $transaction]);
    }

    public function updateTransaction(Request $request){
        $this->creditModel->updateTransaction($request);
        toastr()->success('Update Successful', 'Success..' );
        return redirect()->route('admin.credits');

    }
}
