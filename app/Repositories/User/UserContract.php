<?php

namespace App\Repositories\User;

interface UserContract {
    public function create($request);
    public function findAllUser();
    public function findById($id);
    public function modifyTransfer($request);
    public function findUserByAccountStatus($status);
    public function findRecipient($param);
    public function updatePassword($request);
   // public function updateAccountBalance($request);
    // public function getCompanyById();
    // public function editPassword($request);
    // public function updateAccountStatus($id, $value);
    // public function getContractorProfile();
    // public function allContractors();
}
