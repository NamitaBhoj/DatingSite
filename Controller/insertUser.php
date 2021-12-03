<?php
include '../Model/RegisterUser.php';
{
    $registerObj = new RegisterUser();

    if (isset($_POST['submit'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $birthDate = $_POST['birthDate'];
        $mobileNumber = $_POST['mobileNumber'];
        $preference = $_POST['preference'];
        $password = $_POST['password'];


        foreach ($_POST['occupation'] as $arrayValue) {
            $occupation = $arrayValue;
        }

        foreach ($_POST['city'] as $arrayValue) {
            $city = $arrayValue;
        }

        function userAge($birthDate): int
        {
            return floor((time() - strtotime($birthDate)) / 31556926);
        }

        if($registerObj->checkEmail($email) == 0){
            $userDetails = ['firstName' => $firstName, 'lastName' => $lastName, 'email' => $email,
                'contact_number' => $mobileNumber, 'city' => $city, 'password' => $password, 'gender_of_user' => $gender,
                'gender_preference' => $preference, 'birth_date' => $birthDate, 'occupation' => $occupation, 'age' => userAge($birthDate)];

            if ($registerObj->enterUser($userDetails) == 1) {
                header("Location:../View/Login.php");
            }
        }
        else{
            header("Location:../View/Register.php?error=invalid");
        }
    }else{
        header("Location:../View/index.html");
        exit();
    }
}