<?php

namespace App\Repositories\Deposit;

interface DepositContract {
     public function create($request, $id);
     public function findById($id);
     public function updateAccountBalance($request);
     public function findAll();
}
