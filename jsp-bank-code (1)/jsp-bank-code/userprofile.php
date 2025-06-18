<?php
include "header.php";

require 'dbcon.php';
 if(!isset($_SESSION)) {
        session_start();
    }
$id = $_SESSION['loggedIn_cust_id'];
$sql0 = "SELECT * FROM banksystem WHERE id=".$id;
 $result0=mysqli_query($con,$sql0);
    $row0 = mysqli_fetch_assoc($result0);
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
<a href="userhome.php" class="btn btn-danger float-end">BACK</a>
</h4>
</div>

<div class="card-body">

<div class="mb-3">

<label>User Name</label>
<p class="form-control">

<?php echo $row0["username"] ?>

</p>
</div>
<div class="mb-3">
<label>Email</label>
<p class="form-control">
<?php echo $row0["emaill"] ?>
</p>
</div>
<div class="mb-3">
<label>Phone No</label>
<p class="form-control">
<?php echo $row0["phone_number"] ?>

</p>
</div>
<div class="mb-3">

<label>Address</label>
<p class="form-control">

<?php echo $row0["location"] ?>

</p>

</div>
</div>
</div>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>