<?php
require ('../Model/Inbox.php');
session_start();

function allMessages() : array {
    $inboxMessages = new Inbox();
    return $inboxMessages->allInboxMessages($_SESSION['userID']);
}