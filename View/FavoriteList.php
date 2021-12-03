<?php
require('../Controller/favoriteList.php');

if (!isset($_SESSION['userID'])) {
    header("Location:../View/Index.php?error=notLogin");
    exit();
}

//checking if user is logged in or not
$userID  = $_SESSION['userID'];
if (!isset($userID)) {
    header("Location:../View/Index.php?error=notLogin");
    exit();
}

if ($_SESSION['PremiumUser'] == 1) {
    $favoriteList = favoriteListDetails();
    $youAreFavoriteOfList = youAreFavoriteOfList();
} else {
    header("Location:../View/Home.php?error=notPremium");
}
require ('header.php');
?>


<section style="background-color: #CDC4F9;">
    <div class="container py-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-5">
                <div class="card" style="border-radius: 15px;">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-3">
                                    <div data-mdb-perfect-scrollbar="true"
                                         style="overflow: auto; position: relative; height: 400px">
                                        <h2>Your Favorite List</h2>
                                        <ul class="list-unstyled mb-0">
                                            <?php if(is_array($favoriteList)){
                                            foreach ($favoriteList as $allFavorites) { ?>
                                                <li class="p-2 border-bottom">
                                                    <a href="ChatBox.php?personID="
                                                       class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <?php if (isset($allFavorites['filePath'])) { ?>
                                                                <img src="<?php echo '../' . $allFavorites['filePath'];
                                                                } ?>"
                                                                     alt="avatar" class="d-flex align-self-center me-3"
                                                                     width="60">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pl-2">
                                                                <p class="fw-bold mb-0"><?php echo $allFavorites['firstName'] . " " . $allFavorites['last_name'] ?> </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                        <div class="pt-1">
                                                            <span class="badge rounded-pill float-end">
                                                                <a href="../Controller/removePersonFromFavoriteList.php?personID=<?php echo $allFavorites['personID'] ?>">remove</a>
                                                            </span>
                                                        </div>

                                                </li>
                                            <?php }} ?>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-lg-center" style="margin-top: 50px;">
            <div class="col-md-5">
                <div class="card" style="border-radius: 15px;">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-3">
                                    <div data-mdb-perfect-scrollbar="true"
                                         style="overflow: auto; position: relative; height: 400px">
                                        <h2>You are Favorite Of</h2>
                                        <ul class="list-unstyled mb-0">
                                            <?php  if(is_array($youAreFavoriteOfList)){
                                            foreach ($youAreFavoriteOfList as $allFavorites) { ?>
                                                <li class="p-2 border-bottom">
                                                    <a href="ChatBox.php?personID="
                                                       class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <?php if (isset($allFavorites['filePath'])) { ?>
                                                                <img src="<?php echo '../' . $allFavorites['filePath'];
                                                                } ?>"
                                                                     alt="avatar" class="d-flex align-self-center me-3"
                                                                     width="60">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pl-2">
                                                                <p class="fw-bold mb-0"><?php echo $allFavorites['firstName'] . " " . $allFavorites['last_name'] ?> </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } }?>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</body>

</html>
