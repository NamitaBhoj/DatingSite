<?php
require ('../Model/Database.php');

class Message extends Database
{
    public function sendMessage($sendMessage) : bool{
        $query = "INSERT INTO message (senderID, receiverID, text, isRead) VALUES (:sender,:receiver,:message,:isRead)";
        $result = $this->message($query, $sendMessage);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }
}