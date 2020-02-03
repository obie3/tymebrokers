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
    public function updateUserProfile($request);
    public function recentData();
}
