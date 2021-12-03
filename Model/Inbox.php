<?php
require ('../Model/Database.php');

class Inbox extends Database
{
    public function allInboxMessages($userID) : array {
        $query = "select * , COUNT(*) as count from message inner join users on message.senderID = users.ID left join profileimage on users.ID = profileimage.ID where message.receiverID = '$userID' group by message.senderID;)";
        return $this->execute($query);
    }
}