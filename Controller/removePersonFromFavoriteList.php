<?php
require('../Model/FavoriteList.php');
session_start();

if(isset($_GET['personID'])){
    $favoriteListObj = new FavoriteList();
    if($favoriteListObj->removePersonFromFavoriteList($_GET['personID']) == true){
        header("Location:../View/FavoriteList.php");
    }
}



