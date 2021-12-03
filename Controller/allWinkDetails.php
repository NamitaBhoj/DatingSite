<?php
require ('../Model/AllWinks.php');
session_start();

function receiverWinks() :array{
    $wink = new AllWinks();
    return $wink->receiverInboxWinks($_SESSION['userID']);
}

function senderInboxWinks() :array {
    $wink = new AllWinks();
    return $wink->senderInboxWinks($_SESSION['userID']);
}