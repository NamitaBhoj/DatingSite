<?php
require('../Model/LoginUser.php');

session_start();

$checkForPremiumUser = new LoginUser();
$result = $checkForPremiumUser->checkForMember($_SESSION['userID']);

if ($checkForPremiumUser->checkForMember($_SESSION['userID']) != 'alreadyUser') {
    $premiumMemberObj = new LoginUser();
    $premiumMemberObj->bePremiumMember($_SESSION['userID']);

    $_SESSION['PremiumUser'] = 1;

    header("Location:../View/Home.php");
} else {
    $_SESSION['PremiumUser'] = 1;
    header("Location:../View/Home.php?error=alreadyUser");
}
