<?php
require ("../Model/Database.php");

class AllUserProfile extends Database
{
    public function allUserDeatils() : array|string {
        $query = "select distinct users.ID, firstName, last_name, filePath from datingsite.users join datingsite.profileimage where users.ID = profileimage.ID";
        return $this->execute($query);
    }

    public function viewProfile($ID) : array|string {
        $query = "select * from datingsite.users where ID = '$ID'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }

    public function viewPreferredProfile(string $genderPreference) : array|string {
        $query = "select * from datingsite.users where gender_of_user = '$genderPreference'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }
}