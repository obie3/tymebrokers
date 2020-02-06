<?php

namespace App\Repositories\Deposit;

interface DepositContract {
     public function create($request, $id);
     public function findById($id);
     public function findByUserId($userId);
     public function findAll();
     public function updateTransaction($request);
}
