<?php
require ('../Model/Database.php');

class MessageOperations extends Database
{
    public function senderMessageList($userID, $personID) : array {
        $query = "select * from datingsite.message where senderID = '$userID' and receiverID = '$personID'";
        return $this->execute($query);
    }

    public function receiverMessageList($userID, $personID) : array {
        $query = "select * from datingsite.message where senderID = '$personID' and  receiverID = '$userID'";
        return $this->execute($query);
    }

    public function readMessages($userID, $personID) : array {
        $query = "update message set isRead = 1 where message.receiverID = '$userID' and message.senderID = '$personID' ";
        return $this->execute($query);
    }

    public function viewReceiverProfileList($ID) : array|string {
        $query = "select * from datingsite.users
                    inner join datingsite.profileimage on users.ID = profileimage.ID
                    where users.ID = '$ID'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }
}