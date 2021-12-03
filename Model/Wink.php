<?php
require ('../Model/Database.php');

class Wink extends Database
{
    public function addToWink($userID, $personID) : array | string {
        $query = "insert into wink (senderID, reciverID, isRead) value ('$userID', '$personID', 0)";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "success";
        }
        return $result;
    }
}