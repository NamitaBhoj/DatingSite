<?php
require('../Model/AllUserProfile.php');

function viewProfile($ID): array
{
    $viewProfileObj = new AllUserProfile();
    $result = $viewProfileObj->viewProfile($ID);
    if($result == 'error'){
        header("Location:../View/Index.php");
        exit();
    }
    return $result;
}
