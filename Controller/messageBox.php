<?php
require ('../Model/Message.php');
session_start();

$message = $_POST['message'];
$sender = $_SESSION['userID'];
$receiver =  $_GET['personID'];

$sendMessage = ['sender' => $sender,'receiver' => $receiver ,'message' => $message , 'isRead' => 0];

$messageObj = new Message();

if ($messageObj->sendMessage($sendMessage) == 1) {
    header("Location:../View/ChatBox.php?personID=$receiver");
}