<?php
require ('../Model/Wink.php');
session_start();

session_start();
$userID  = $_SESSION['userID'];
if (!isset($userID)) {
    header("Location:../View/Index.php?error=notLogin");
    exit();
}

$personID = $_GET['personID'];

$addWink = new Wink();
$result = $addWink->addToWink($_SESSION['userID'] , $personID);
if($result == 'success'){
    header("Location:../View/ViewProfile.php?viewProfileID=$personID");
}