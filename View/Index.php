<?php
require('../Controller/allUserProfiles.php');

//getting all profiles from Database for show
$allProfileDetails = allUserProfiles();

//Giving alert if user is not logged in
if(isset($_GET['error']) && $_GET['error'] == "notLogin"){ ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            Login for more access.
        </div>
    </div><?php
}

require ('header.php');
?>
<div class="backgroundImage text-center text-white">
    <nav class="navbar navbar-expand-lg navbar-light" style="float: right;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2">
                    <li>
                        <a class="navbar_link" href="Login.php">Login</a>
                    </li>
                    <li>
                        <a class="navbar_link" href="Register.php">Register</a>
                    </li>
                    <li>
                        <a class="navbar_link" href="SearchProfile.php">Search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="centerText">
        <h1 class="mb-3 h2">Welcome !</h1>
    </div>
</div>
<div class="container">
    <div class="row text-center" id="item_list">
        <?php
        if(is_array($allProfileDetails)){
        foreach ($allProfileDetails as $value) {
            ?>
            <div class="col-sm-3">
                <!--passing person ID to view their profile   -->
                <?php echo "<a href='ViewProfile.php?viewProfileID=". $value['ID'] ."'>" ?>
                    <div class="thumbnail">
                        <img src="<?php echo '../' . $value['filePath'] ?>" class="rounded float-left" style="height: 250px; width: 270px; margin:20px 0 20px 0;" alt="">
                        <div>
                            <p><?php echo  $value['firstName'] . " " . $value['last_name']?></p>
                        </div>
                    </div>
                <?php echo "</a>" ; ?>
            </div>
            <?php
        }} ?>
    </div>
</div>
</body>

</html>
