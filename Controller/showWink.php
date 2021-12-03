<?php
function senderWink($personID) :array
{
    $showMessageObj = new MessageOperations();
    return $showMessageObj->senderMessageList($_SESSION['userID'], $personID);
}

function receiverWink($personID) : array
{
    $showMessageObj = new MessageOperations();
    return $showMessageObj->receiverMessageList($_SESSION['userID'], $personID);
}

function updateReadWink($personID) : array
{
    $readMessage = new MessageOperations();
    return $readMessage->readMessages($_SESSION['userID'], $personID);
}

function viewReceiverProfileWink($ID): array
{
    $viewProfileObj = new MessageOperations();
    $result = $viewProfileObj->viewReceiverProfileList($ID);
    if($result == 'error'){
        header("Location:../View/Index.php");
        exit();
    }
    return $result;
}