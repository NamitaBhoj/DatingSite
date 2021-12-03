<?php

include 'Database.php';

class RegisterUser extends Database
{
    public function enterUser($userDetails) : bool{
        $query = "INSERT INTO users (firstName, last_name, email, contact_number, city, password, gender_of_user, gender_preference, birth_date, occupation, age) VALUES (:firstName,:lastName,:email,:contact_number,:city,:password,:gender_of_user,:gender_preference,:birth_date,:occupation,:age)";
        $result = $this->registerUser($query, $userDetails);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }

    public  function checkEmail($email) : bool{
        $query = "select * from datingsite.users where email = '$email'";
        $result = $this->execute($query);

        if (count($result) == 0) {
            return false;
        }
        return true;
    }
}