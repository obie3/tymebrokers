<?php

namespace App\Repositories\Debit;

interface DebitContract {
     public function create($request);
     public function findById($id);
     public function findAll();
}
