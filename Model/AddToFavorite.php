<?php
require ('../Model/Database.php');

class AddToFavorite extends Database
{
    public function checkFavoriteList($userID, $personID) : array | string{
        $query = "select * from favoritelist where ID = '$userID' and personID = '$personID'";
        $result = $this->execute($query);
        if (count($result) == 1) {
            return "error";
        }
        return $result;
    }

    public function addToFavoriteList($userID, $personID) : array | string{
        $query = "insert into favoritelist (ID, personID) value ('$userID', '$personID')";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }
}