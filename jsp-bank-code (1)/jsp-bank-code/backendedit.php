<?php

    include "header.php"; ?>
    <?php
    require 'dbcon.php';

    $uname = $_POST["username"];
    $email = $_POST["emaill"];
    $phno = $_POST["phone_number"];
    $address = $_POST["location"];
    $acno = $_POST["customerac"];

    $sql0 = "UPDATE banksystem SET username = '$uname',

emaill = '$email',
                                 phone_number = '$phno',
                                 location = '$address' WHERE accountno= '$acno'";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="action_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
if ((mysqli_query($con,$sql0)) === TRUE) { ?> <p id="info"><?php echo "Values Updated Successfully !"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Error: " . $sql0 . "<br>" ."<br>"; ?></p>
                <?php
                }
            ?>
        </div>

        <div class="flex-item">
            <a href="managecustomer.php" class="btn btn-primary float-end">BACK</a>
        </div>

    </div>

</body>
</html>