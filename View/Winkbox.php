<?php
require ('../Controller/allWinkDetails.php');
$userID  = $_SESSION['userID'];
if (!isset($userID)) {
    header("Location:../View/Index.php?error=notLogin");
    exit();
}

$receiverWinks = receiverWinks();

$senderInboxWinks = senderInboxWinks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Dating </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
<section style="background-color: #CDC4F9;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card" style="border-radius: 15px;">
                    <div>
                        <h2>Received Winks</h2>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-3">
                                    <div data-mdb-perfect-scrollbar="true" style="overflow: auto; position: relative; height: 400px">
                                        <ul class="list-unstyled mb-0">
                                            <?php foreach ($receiverWinks as $allWinkUser) {?>
                                                <li class="p-2 border-bottom">
                                                    <a href="../Controller/readWink.php?personID=<?php echo $allWinkUser['senderID']?>" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <?php if(isset($allWinkUser['filePath'])) {?>
                                                                <img src="<?php echo '../' . $allWinkUser['filePath'];}?>"
                                                                     alt="avatar" class="d-flex align-self-center me-3"
                                                                     width="60">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pl-2">
                                                                <p class="fw-bold mb-0"><?php echo $allWinkUser['firstName'] . " " . $allWinkUser['last_name']?> </p>
                                                            </div>
                                                        </div>
<!--                                                        --><?php //if($allWinkUser['isRead'] == 0) {?>
                                                            <div class="pt-1">
                                                                <span class="badge rounded-pill float-end"><?php echo $allWinkUser['count']?></span>
                                                            </div>
<!--                                                        --><?php //} ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
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
<section style="background-color: #CDC4F9;">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card" style="border-radius: 15px;">
                    <div>
                        <h2>Send Winks</h2>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-3">
                                    <div data-mdb-perfect-scrollbar="true" style="overflow: auto; position: relative; height: 400px">
                                        <ul class="list-unstyled mb-0">
                                            <?php foreach ($senderInboxWinks as $allWinkUser) {?>
                                                <li class="p-2 border-bottom">
                                                    <a href="#" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <?php if(isset($allWinkUser['filePath'])) {?>
                                                                <img src="<?php echo '../' . $allWinkUser['filePath'];}?>"
                                                                     alt="avatar" class="d-flex align-self-center me-3"
                                                                     width="60">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pl-2">
                                                                <p class="fw-bold mb-0"><?php echo $allWinkUser['firstName'] . " " . $allWinkUser['last_name']?> </p>
                                                            </div>
                                                        </div>
<!--                                                        --><?php //if($allWinkUser['isRead'] == 0) {?>
                                                            <div class="pt-1">
                                                                <span class="badge rounded-pill float-end"><?php echo $allWinkUser['count']?></span>
                                                            </div>
<!--                                                        --><?php //} ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
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
</div>
</body>

</html>
