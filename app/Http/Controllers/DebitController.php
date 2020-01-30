<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Debit\DebitContract;
use Sentinel;

class DebitController extends Controller
{
    protected $debitModel;
    public function __construct(DebitContract $debitContract){
        $this->debitModel = $debitContract;
    }

    public function debits() {
        $debits = $this->debitModel->findAll();
        return view('admin.debits')->with(['debits' => $debits]);
    }

    public function userDebits() {
        $user = Sentinel::getUser()->id;
        $debits = $this->debitModel->findById($user);
        return view('user.debits')->with(['debits' => $debits]);
    }
}
