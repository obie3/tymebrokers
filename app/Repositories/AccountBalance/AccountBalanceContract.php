<?php

namespace App\Repositories\AccountBalance;

interface AccountBalanceContract {
     public function create($request);
     public function findById($id);
     public function deposit($request, $id);
     public function withdraw($request, $id = null);
     public function findAll();
    // public function getUserById();
    // public function getCompanyById();
    // public function find($id);
    // public function editPassword($request);
    // public function updateAccountStatus($id, $value);
    // public function getContractorProfile();
    // public function allContractors();
}
