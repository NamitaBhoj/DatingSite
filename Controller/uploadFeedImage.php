<?php
require ("../Model/UploadFeedImage.php");
session_start();

$uploadFeedImageObj = new UploadFeedImage();

if (isset($_FILES['feedImageToUpload'])){
    $feedImage = $_FILES['feedImageToUpload'];

    if($feedImage['size'] <= 5000000){
        $allowedType = array(IMAGETYPE_JPEG);

        $fileType = exif_imagetype($feedImage['tmp_name']);

        $error = !in_array($fileType, $allowedType);

        $time = date("d-m-Y")."-".time();

        $feedImage['name'] = $_SESSION['userID']. "_" . $time . '.jpg';

        $imageName = $feedImage['name'] . $feedImage['type'];

        if (!$error){
            move_uploaded_file($feedImage['tmp_name'], "../feedImages/$feedImage[name]");

            $filePath = "feedImages/$feedImage[name]";

            if($uploadFeedImageObj->feedImagePath($_SESSION['userID'], $filePath) == 1){
                header("Location:../View/Gallery.php");
            }else{
                header("Location:../View/Gallery.php?error=problemWithSQL");
            }
        }else{
            header("Location:../View/Gallery.php?error=invalidType");
        }
    }else{
        header("Location:../View/Gallery.php?error=invalidSize");
    }
}