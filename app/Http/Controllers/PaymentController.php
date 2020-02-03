<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Repositories\ContractorPersonnel\ContractorPersonnelContract;

class PaymentController extends Controller {

    public function index() {
        return view('client.index');
    }

}
