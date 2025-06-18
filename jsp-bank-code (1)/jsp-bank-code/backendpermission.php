<?php

    include "header.php";
    require 'dbcon.php';

    $id = $_POST["customerid"];
    $acno = $_POST["accountno"];
    $sql0 = "UPDATE banksystem SET accountno = '$acno' WHERE id='$id'";
    $query_run = mysqli_query($con, $sql0);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="action_style.css">
</head>

<body>
    <div class="flex-container">
      <div class="flex-item">
                <?php
if ($query_run === TRUE) { ?> <p id="info"><?php echo "Permission Granted Successfully !"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Error: " . $sql0 . "<br>" ."<br>"; ?></p>
                <?php
                }
            ?>
        </div>

        <div class="flex-item">
            <a href="customerpermission.php" class="btn btn-primary float-end">BACK</a>
        </div>

    </div>

</body>
</html>