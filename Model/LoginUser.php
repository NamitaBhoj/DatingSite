<?php
include 'Database.php';

class LoginUser extends Database
{
    public function loginAuthenticate($email, $password) : array|string {
        $query = "select * from datingsite.users where email = '$email' and password = '$password'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }

    public function checkForMember($userID) : string|null
    {
        $query = "select * from users where ID = '$userID' and isPremium = 1";
        $result = $this->execute($query);
        if (count($result) == 1) {
            return "alreadyUser";
        }
        return null;
    }

    public function bePremiumMember($userID) : bool {
        $query = "update users set isPremium = 1 where ID = '$userID'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }
}