<?php
require('../Model/Database.php');

class FavoriteList extends Database
{
    public function favoriteListItem($userID): bool|array|string
    {
        $query = "select distinct * from datingsite.favoritelist inner join datingsite.users on users.ID = favoritelist.personID inner join datingsite.profileimage on profileimage.ID = favoritelist.personID where favoritelist.ID = '$userID'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }

    public function youAreFavoriteOfList($userID): bool|array|string
    {
        $query = "select distinct * from datingsite.favoritelist 
        inner join datingsite.users on users.ID = favoritelist.ID 
        inner join datingsite.profileimage on profileimage.ID = favoritelist.ID 
        where favoritelist.personID = '$userID'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return "error";
        }
        return $result;
    }

    public function removePersonFromFavoriteList($personId): bool
    {
        $query = "delete from favoritelist where personID = '$personId'";
        $result = $this->execute($query);
        print_r($result);
        if (count($result) == 0) {
            return true;
        }
        return false;
    }
}