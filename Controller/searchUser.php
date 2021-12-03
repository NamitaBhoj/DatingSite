<?php
session_start();
require ('../Model/SearchUser.php');

    $age = $_POST['age'];
    $preference = $_POST['preference'];

    foreach ($_POST['occupation'] as $arrayValue) {
        $occupation = $arrayValue;
    }

    foreach ($_POST['city'] as $arrayValue) {
        $city = $arrayValue;
    }

    $preferencesOfUser = ['occupation'=> $occupation,'city' => $city, 'age' => $age, 'preference'=>$preference];

    $preferencesOfUserObj = new SearchUser();
    $result = $preferencesOfUserObj->SearchPreferances($preferencesOfUser);

    if ($result != 'error') {
        $_SESSION['searchResult'] = $result;
        header("Location:../View/SearchProfile.php");
    }else{
        header("Location:../View/SearchProfile.php?error=notFound");
    }


