<?php

namespace App\Repositories\AccountBalance;

interface AccountBalanceContract {
     public function create($request);
     public function findById($id);
     public function deposit($request, $id);
     public function withdraw($request, $id = null);
     public function findAll();
}
