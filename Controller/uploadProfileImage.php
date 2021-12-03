<?php
require("../Model/UploadProfilePic.php");
session_start();

$uploadProfileImageObj = new UploadProfilePic();
$checkForProfilePath = new UploadProfilePic();

if (isset($_FILES['profilePicToUpload'])) {
    $profileImage = $_FILES['profilePicToUpload'];

    if ($profileImage['size'] <= 5000000) {
        $allowedType = array(IMAGETYPE_JPEG);

        $fileType = exif_imagetype($profileImage['tmp_name']);

        echo $fileType;

        $error = !in_array($fileType, $allowedType);

        echo $error;

        $profileImage['name'] = $_SESSION['userID'] . "_" . 'profile.jpg';

        $imageName = $profileImage['name'] . $profileImage['type'];

        if (!$error) {
            move_uploaded_file($profileImage['tmp_name'], "../profileImages/$profileImage[name]");
            $filePath = "profileImages/$profileImage[name]";

            if ($checkForProfilePath->checkProfileImagePath($_SESSION['userID']) == true) {
                if ($uploadProfileImageObj->profileImagePath($_SESSION['userID'], $filePath) == 1) {
                    header("Location:../View/EditProfile.php");
                } else {
                    header("Location:../View/EditProfile.php");
                }
            }else {
                header("Location:../View/EditProfile.php");
            }
        } else {
            header("Location:../View/EditProfile.php?error=invalidType");
        }
    } else {
        header("Location:../View/EditProfile.php?error=invalidSize");
    }
}