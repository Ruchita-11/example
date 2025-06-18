<?php
include "header.php";
if(!isset($_SESSION)){
session_start();
} 
    include "usersidebar.php";
    include "dbcon.php";
    $id = $_SESSION['loggedIn_cust_id'];
$sql0 = "SELECT * FROM banksystem WHERE id=".$id;
    $result0=mysqli_query($con,$sql0);
    $row0 = mysqli_fetch_assoc($result0);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userhomestyle.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome <?php echo $row0["username"] ?> !&nbsp<br>Your account:<?php echo $row0["accountno"] ?><br>Your balance:<?php echo $row0["amount"] ?>&nbsp</h1>
            <p id="customer" style="max-width:800px">
From here you can manage all of your Internet Banking transactions.
                You can credit/debit your cash, view your balance, edit your password details and even change them. You can also post feedback on this Bank.
                <br>
                Therefore please do not misuse your customer control to create trouble.
            </p>
        </div>
    </div>

</body>
</html>