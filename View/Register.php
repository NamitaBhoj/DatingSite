<?php
require('../Controller/userRegistrationList.php');

//getting array for drop-down from Controller/userRegistrationList.php
$occupationList = occupationList();
sort($occupationList);

//getting array for drop-down from Controller/userRegistrationList.php
$cityList = cityList();
sort($cityList);

//giving alert  if user add used email
if (isset($_GET['error']) && $_GET['error'] == "invalid") { ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill"/>
        </svg>
        <div>
            This email already exist! Please try with different email.
        </div>
    </div><?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Dating </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                                    src="assets/imagesForSite/registerImage.jpg"
                                    alt="Sample photo"
                                    class="img-fluid"
                                    style="height:995px;"/>
                        </div>
                        <div class="col-xl-6">
                            <form action="../Controller/insertUser.php" method="post">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Registration form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="firstName" id="form3Example1m"
                                                       class="form-control form-control-lg" pattern="[A-Za-z]{1,15}"
                                                       title="please enter alphabets!" required/>
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="lastName" id="form3Example1n"
                                                       class="form-control form-control-lg" pattern="[A-Za-z]{1,15}"
                                                       title="please enter alphabets!" required/>
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example8" name="email"
                                               class="form-control form-control-lg"
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                               title="please enter valid email!" required/>
                                        <label class="form-label" for="form3Example8">Email</label>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <div class="form-check form-check-inline">
                                            <h6 class="mb-0 me-4">Gender: </h6>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="gender"
                                                    id="femaleGender"
                                                    value="Female"
                                                    required
                                            />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="gender"
                                                    id="maleGender"
                                                    value="Male"
                                                    required
                                            />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="date" name="birthDate" id="form3Example9"
                                               class="form-control form-control-lg" required/>
                                        <label class="form-label" for="form3Example9">Date of Birth</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <select type="text" name="city[]" id="form3Example97"
                                                class="form-control form-control-lg">

                                            <?php if (is_array($cityList)) {
                                                foreach ($cityList as $namesOfCity) {
                                                    echo "<option value='$namesOfCity' >" . $namesOfCity . "</option> ";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <label class="form-label" for="form3Example97">City</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="mobileNumber" id="form3Example99"
                                               class="form-control form-control-lg" pattern=".{10}"
                                               title="Please enter 10 digit!" required/>
                                        <label class="form-label" for="form3Example99">Mobile Number</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="password"
                                               class="form-control form-control-lg" required/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <select type="text" name="occupation[]" id="form3Example97"
                                                class="form-control form-control-lg">
                                            <?php if (is_array($occupationList)){
                                                foreach ($occupationList as $namesOfJobs) {
                                                echo "<option value='$namesOfJobs' >" . $namesOfJobs . "</option> ";
                                            }}
                                            ?>
                                        </select>
                                        <label class="form-label" for="form3Example97">Occupation</label>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <div class="form-check form-check-inline">
                                            <h6 class="mb-0 me-4">Preference in : </h6>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="preference"
                                                    id="femaleGender"
                                                    value="Female"
                                                    required
                                            />
                                            <label class="form-check-label" for="femaleGender"> Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="preference"
                                                    id="maleGender"
                                                    value="Male"
                                                    required
                                            />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

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
