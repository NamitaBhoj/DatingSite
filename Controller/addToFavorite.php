<?php
require('../Model/AddToFavorite.php');
session_start();

if (isset($_SESSION['userID'])) {

    $checkFavoriteListObj = new AddToFavorite();
    $result = $checkFavoriteListObj->checkFavoriteList($_SESSION['userID'], $_GET['personId']);
    $id = $_GET['personId'];
    if ($result != 'error') {
        $addToFavoriteObj = new AddToFavorite();
        $addToFavoriteObj->addToFavoriteList($_SESSION['userID'], $_GET['personId']);

        header("Location:../View/ViewProfile.php?viewProfileID=$id");
        exit();
    } else {
        header("Location:../View/ViewProfile.php?viewProfileID=$id");
    }
}else{
    header("Location:../View/Index.php?error=notLogin");
}
