<?php
require ("../Model/Database.php");

class UploadFeedImage  extends Database
{
    public function feedImagePath($userID, $filePath) : bool{
        $query = "INSERT INTO feedimage (ID, filePath) VALUES ($userID, '$filePath')";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }
}