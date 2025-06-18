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


    <title>Customer permission</title>

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

                        <h4>Give Customer Account

                            <a href="customerpermission.php" class="btn btn-danger float-end">BACK</a>

                        </h4>

                    </div>

                    <div class="card-body">
	<p><h2>NOTE:</h2>first 10 numbers are:<b> 3029425465</b> remaining 3 would be your choice</p>




                        <?php
if(isset($_GET['id']))
{
$customerid = mysqli_real_escape_string($con, $_GET['id']);
$query = "SELECT * FROM banksystem WHERE id ='$customerid' ";
$query_run = mysqli_query($con, $query);
if(mysqli_num_rows($query_run) >= 1)
{ 
$customer = mysqli_fetch_array($query_run);
 ?>
<form action="backendpermission.php" method="POST">
<input type="hidden" name="customerid" value="<?= $customer['id']; ?>">

<div class="mb-3">
<label> Account No</label>
<input type="text" name="accountno" value="<?=$customer['accountno'];?>" class="form-control">
 </div>


<div class="mb-3">
<button type="submit" name="submit" class="btn btn-primary">
submit
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

