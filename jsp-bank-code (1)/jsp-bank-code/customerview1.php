<?php
include "header.php";

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
<title>Customer View</title>

</head>

<body>
<div class="container mt-5">


<div class="row">
<div class="col-md-12">

<div class="card">

<div class="card-header">

<h4>View Customer Details
<a href="customerpermission.php" class="btn btn-danger float-end">BACK</a>
</h4>
</div>

<div class="card-body">
<?php

if(isset($_GET['id']))
{
$customerac=mysqli_real_escape_string($con, $_GET['id']);
$query="SELECT*FROM banksystem WHERE id='$customerac' ";

$query_run = mysqli_query($con, $query);


if(mysqli_num_rows($query_run) > 0)

{

$customer=mysqli_fetch_array($query_run);
?>
<div class="mb-3">

<label>User Name</label>
<p class="form-control">

<?=$customer['username'];?>

</p>
</div>
<div class="mb-3">
<label>Email</label>
<p class="form-control">
<?=$customer['emaill'];?>
</p>
</div>
<div class="mb-3">
<label>Phone No</label>
<p class="form-control">
<?=$customer['phone_number'];?>

</p>
</div>
<div class="mb-3">

<label>Address</label>
<p class="form-control">

<?=$customer['location'];?>

</p>

</div>

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