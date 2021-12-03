<?php
require('../Model/Database.php');

class AllWinks  extends Database
{
    public function receiverInboxWinks($userID) : array
    {
        $query = "select * , COUNT(*) as count from wink inner join users on wink.senderID = users.ID left join profileimage on users.ID = profileimage.ID where wink.reciverID = '$userID' group by wink.senderID;";
        return $this->execute($query);
    }

    public function senderInboxWinks($userID) : array
    {
        $query = "select * , COUNT(*) as count from wink inner join users on wink.reciverID = users.ID left join profileimage on users.ID = profileimage.ID where wink.senderID = '$userID' group by wink.reciverID;";
        return $this->execute($query);
    }

    public function readWink($personID, $userID) : array
    {
        $query = "update wink set isRead = 1 where  senderID = $personID and reciverID = $userID ";
        return $this->execute($query);
    }
}