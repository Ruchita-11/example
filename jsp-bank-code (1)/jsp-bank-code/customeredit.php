<?php
include "header.php";
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>


    <title>Customer Edit</title>

</head>

<body>

  

    <div class="container mt-5">


<?php
include('message.php'); 
?>


        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">

                        <h4>Customer Edit/Update 

                            <a href="managecustomer.php" class="btn btn-danger float-end">BACK</a>

                        </h4>

                    </div>

                    <div class="card-body">


                        <?php
if(isset($_GET['accountno']))
{
$customerac = mysqli_real_escape_string($con, $_GET['accountno']);
$query = "SELECT * FROM banksystem WHERE accountno ='$customerac' ";
$query_run = mysqli_query($con, $query);
if(mysqli_num_rows($query_run) >= 1)
{ 
$customer = mysqli_fetch_array($query_run);
 ?>
<form action="backendedit.php" method="POST">
<input type="hidden" name="customerac" value="<?= $customer['accountno']; ?>">
<div class="mb-3">
<label>User Name</label>
<input type="text" name="username" value="<?=$customer['username'];?>" class="form-control">
</div>
<div class="mb-3">
<label> Email</label>
<input type="email" name="emaill" value="<?=$customer['emaill'];?>" class="form-control">
 </div>
<div class="mb-3">
<label>Phone No</label>
<input type="text" name="phone_number" value="<?=$customer['phone_number'];?>" class="form-control">
</div>
<div class="mb-3">
<label>Address</label>

                                        <input type="text" name="location" value="<?=$customer['location'];?>" class="form-control">
</div>
<div class="mb-3">
<button type="submit" name="update_customer" class="btn btn-primary">

Update Customer
</button>
</div>
</form>

<?php
}
else
{

echo "<h4>No Such Account Found</h4>";

 }
}
?>

                    </div>

                </div>

            </div>

        </div>

    </div>
<script src="bootstrap.bundle.min.js"></script>

</body>

</html>

