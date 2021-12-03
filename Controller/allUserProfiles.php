<?php
include '../Model/AllUserProfile.php';

function allUserProfiles() : array
{
    $allProfileDetails = new AllUserProfile();
    return $allProfileDetails->allUserDeatils();
}

