<?php
include '../Model/UpdateuserInformation.php';
$updateUserInformationObj = new UpdateuserInformation();

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['contact_number'];
    $password  = $_POST['password'];

    $updatedInformation = ['firstName' => $firstName, 'lastName' => $lastName, 'email' => $email, 'number' => $number, 'password' => $password];

    if($updateUserInformationObj->updateDetails($updatedInformation) == 1){
        header("Location:../View/Profile.php");
    }
}
