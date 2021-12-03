<?php
if(isset($_GET['error']) && $_GET['error'] == "invalidType"){ ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            File type is invalid.Please use jpg.
        </div>
    </div><?php
}

if(isset($_GET['error']) && $_GET['error'] == "invalidSize"){ ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            File size is to long.
        </div>
    </div><?php
}

if(isset($_GET['error']) && $_GET['error'] == "problemWithSQL"){ ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            Something went wrong Please try again.
        </div>
    </div><?php
}

session_start();
$dir_name = "../feedImages/";
$profileImage = glob($dir_name.$_SESSION['userID']."*.jpg");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Dating </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row">
        <form action="../Controller/uploadFeedImage.php" method="post" enctype="multipart/form-data">
        <div style="margin:50px;">
            <input type="file" name="feedImageToUpload"/>
            <input type="submit" name="submit" value="Add Picture"/>
        </div>
        </form>
    </div>
    <div class="row">

            <?php foreach ($profileImage as $image) { ?>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src = "<?php echo $image ?>" class="w-100 shadow-1-strong rounded mb-4"  alt=""/>
        </div>
            <?php }?>
    </div>
</div>

</body>

</html>
