<?php

namespace App\Repositories\AccountDetails;

interface AccountDetailsContract {
     public function create($request);
     public function findById($id);
     public function deposit($request, $id);
     public function withdraw($request, $id = null);
     public function findAll();
}
