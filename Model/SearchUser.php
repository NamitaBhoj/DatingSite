<?php
include 'Database.php';

class SearchUser extends Database
{
    public function SearchPreferances(array $userPreference): array|string
    {
        $occupation = $userPreference['occupation'];
        $age = $userPreference['age'];
        $gender_of_user = $userPreference['preference'];
        $city = $userPreference['city'];

        $query = "select DISTINCT  users.ID, users.firstName, users.last_name, profileimage.filePath from datingsite.users
        join datingsite.profileimage on users.ID = profileimage.ID where gender_of_user = '$gender_of_user' and occupation = '$occupation' and city = '$city' and age = '$age';";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }
}