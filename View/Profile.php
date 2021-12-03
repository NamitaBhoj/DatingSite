<?php
session_start();
//checking if user is logged in or not
$userID  = $_SESSION['userID'];
if (!isset($userID)) {
    header("Location:../View/Index.php?error=notLogin");
    exit();
}
require ('../Controller/viewProfile.php');

$dir_name = "../profileImages/";
$profileImage = glob($dir_name . $userID . "_profile.jpg");

$allInformation = viewProfile($userID);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Dating </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/CSS/profilestyle.css" rel="stylesheet">
</head>

<body>

<?php
if(is_array($allInformation)){
foreach ($allInformation as $value) {
    ?>
    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col">
                <div class="portlet light profile-sidebar-portlet bordered">
                    <div class="profile-userpic" style="margin-left:170px;">
                        <?php foreach ($profileImage as $image) { ?>
                            <img src="<?php echo $image ?>" class="img-responsive" alt="">
                        <?php } ?>
                        <div class="profile-usertitle-name"> <?php echo $value["firstName"] . " " . $value["last_name"]; ?></div>
                        <div class="profile-usertitle-job"> <?php echo $value["occupation"] . " ," . $value["age"]; ?> </div>
                    </div>
                    <div class="profile-userbuttons">
                        <a href="FavoriteList.php" class="btn btn-info  btn-sm">Favorites</a>
                        <a href="Logout.php" type="button" class="btn btn-info  btn-sm">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $value["firstName"] . " " . $value["last_name"]; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $value["email"]; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $value["contact_number"]; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">City</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $value["city"]; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Birth Date</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $value["birth_date"]; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info " href="EditProfile.php">Edit</a>
                                <a class="btn btn-info" href="Gallery.php">Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}}
?>
</body>

</html>
