<?php
session_start();
//checking if user is logged in or not
if (!isset($_SESSION['userID'])) {
    header("Location:../View/Index.php?error=notLogin");
    exit();
}

require('../Controller/allUserProfiles.php');

//getting all user details to show
$allProfileDetails = allUserProfiles();

//giving alert if user is not logged in
if (isset($_GET['error']) && $_GET['error'] == "notLogin") { ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill"/>
        </svg>
        <div>
            Login for more access.
        </div>
    </div><?php
}

//giving alert if user is already a Premium member
if (isset($_GET['error']) && $_GET['error'] == "alreadyUser") { ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill"/>
        </svg>
        <div>
            You are already Premium user.
        </div>
    </div><?php
}

//giving alert if user is not a Premium member
if (isset($_GET['error']) && $_GET['error'] == "notPremium") { ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill"/>
        </svg>
        <div>
            Be premium member first!
        </div>
    </div><?php
}
require ('header.php');
?>

<div class="backgroundImageHome text-center text-white">
    <nav class="navbar navbar-expand-lg navbar-light" style="float: right;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2">
                    <li>
                        <a class="navbar_link" href="Profile.php">Profile</a>
                    </li>
                    <li>
                        <a class="navbar_link" href="InBox.php">Inbox</a>
                    </li>
                    <li>
                        <a class="navbar_link" href="Winkbox.php">Winkbox</a>
                    </li>
                    <li>
                        <a class="navbar_link" href="SearchProfile.php">Search</a>
                    </li>
                    <li>
                        <a class="navbar_link" href="../Controller/premiumUser.php">Premium user</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row text-center" id="item_list">
        <?php
        if (is_array($allProfileDetails))
            foreach ($allProfileDetails as $value) {
                if ($value['ID'] != $_SESSION['userID']) {
                    ?>
                    <div class="col-sm-3">
<!--                        taking person Id to View profile with GET-->
                        <?php echo "<a href='ViewProfile.php?viewProfileID=" . $value['ID'] . "'>" ?>
                        <div class="thumbnail">
                            <img src="<?php echo '../' . $value['filePath'] ?>" class="rounded float-left"
                                 style="height: 250px; width: 270px; margin:20px 0 20px 0;" alt="">
                            <div>
                                <p><?php echo $value['firstName'] . " " . $value['last_name'] ?></p>
                            </div>
                        </div>
                        <?php echo "</a>"; ?>
                    </div>
                    <?php
                }
            } ?>
    </div>
</div>


</body>

</html>
