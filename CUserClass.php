<?php
namespace lib\userclass;

class CUserClass extends CUser
{
    public function authenticateUser($login, $password) { /* ... */ }
    public function registerUser($userData) { /* ... */ }
    public function changeUserPassword($userId, $newPassword) { /* ... */ }
    public function getUserInfo($userId) { /* ... */ }
}

$customUser = new CUser();

$userInfo = $this->getUserInfo(1);