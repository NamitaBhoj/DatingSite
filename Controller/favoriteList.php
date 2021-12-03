<?php
require('../Model/FavoriteList.php');
session_start();

function favoriteListDetails(): array | string
{
    $favoriteListObj = new FavoriteList();
    return $favoriteListObj->favoriteListItem($_SESSION['userID']);
}

function youAreFavoriteOfList() : array | string{
    $favoriteListObj = new FavoriteList();
    return $favoriteListObj->youAreFavoriteOfList($_SESSION['userID']);
}

