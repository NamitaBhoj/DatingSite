<?php
require ("../Model/Database.php");

class UploadProfilePic extends Database
{
    public function checkProfileImagePath($userID) : bool{
        $query = "select * from profileimage where ID= '$userID'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }

    public function profileImagePath($userID, $filePath) : bool{
        $query = "INSERT INTO profileimage (ID, filePath) VALUES ($userID, '$filePath')";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }
}