<?php
require('../Controller/inbox.php');
$allInboxMessage = allMessages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Dating </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/CSS/style.css" rel="stylesheet">
</head>

<body>
<section style="background-color: #CDC4F9;">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card" style="border-radius: 15px;">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-3">
                                    <div data-mdb-perfect-scrollbar="true" style="overflow: auto; position: relative; height: 400px">
                                        <ul class="list-unstyled mb-0">
                                            <?php foreach ($allInboxMessage as $allInboxUser) {?>
                                            <li class="p-2 border-bottom">
                                                <a href="ChatBox.php?personID=<?php echo $allInboxUser['senderID'] ?>" class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row">
                                                        <div>
                                                            <?php if(isset($allInboxUser['filePath'])) {?>
                                                            <img src="<?php echo '../' . $allInboxUser['filePath']; }?>"
                                                                 alt="avatar" class="d-flex align-self-center me-3"
                                                                 width="60">
                                                            <span class="badge bg-success badge-dot"></span>
                                                        </div>
                                                        <div class="pl-2">
                                                            <p class="fw-bold mb-0"><?php echo $allInboxUser['firstName'] . " " . $allInboxUser['last_name']?> </p>
                                                        </div>
                                                    </div>
                                                    <?php if($allInboxUser['isRead'] == 0) {?>
                                                    <div class="pt-1">
                                                        <span class="badge rounded-pill float-end"><?php echo $allInboxUser['count']?></span>
                                                    </div>
                                                    <?php } ?>
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
