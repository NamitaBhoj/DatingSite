<?php
//giving alert if user entered worng email and password
if(isset($_GET['error']) && $_GET['error'] == "invalid"){ ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            Email or Password is wrong! Try again!
        </div>
    </div><?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Dating </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<section class="h-100">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img
                                src="assets/imagesForSite/loginimage.jpg"
                                alt="Sample photo"
                                class="img-fluid"
                                style="height:480px;"/>
                        </div>

                        <div class="col-xl-6">
                            <form action="../Controller/loginValidation.php" method="post">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Login</h3>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Email</label>
                                    </div>


                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example97" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Password</label>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <input type="submit" name="submit" class="btn btn-outline-dark btn-lg ms-2">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>
