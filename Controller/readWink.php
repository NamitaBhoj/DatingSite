<?php
require ('../Model/AllWinks.php');
session_start();

if(isset($_GET['personID'])){
    $updateUser = new AllWinks();
    $updateUser->readWink($_GET['personID'], $_SESSION['userID']);
    header("Location:../View/Winkbox.php");
}
