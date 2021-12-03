<?php
session_start();
include 'Database.php';

class UpdateuserInformation extends Database
{
    public function updateDetails($updatedInformation): bool
    {
        $userID = $_SESSION['userID'];
        $firstName =  $updatedInformation['firstName'];
        $lastName = $updatedInformation['lastName'];
        $email =  $updatedInformation['email'];
        $number = $updatedInformation['number'];
        $password = $updatedInformation['password'];

        $query = "UPDATE users SET firstName = '$firstName', last_name = '$lastName', email = '$email', contact_number = '$number', password = '$password' where ID= '$userID'" ;
        $result = $this->execute($query);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }
}