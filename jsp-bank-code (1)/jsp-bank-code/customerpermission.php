<?php
include "header.php";
session_start();
require 'dbcon.php';
?>

<!doctype html>

<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<title>customer permission</title>

</head>

<body>
<a href="adminhome.php" style="margin: 10px;" class="btn btn-primary float-middle">BACK TO HOME</a>

  

    <div class="container mt-4">


        <?php
include('message.php'); ?>


        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">


                        <h4><b> Customer Permission </b>

                        </h4>

                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">

                            <thead>

                                <tr>


<th>Customer Name</th>


<th>Permission</th>

   
</tr>
</thead>
<tbody>
<?php 

$query = "SELECT * FROM banksystem"; 
$query_run = mysqli_query($con, $query);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $customer)
{
if($customer['accountno'] == "")
{
?>
 <tr>
 <td><?= $customer['username']; ?></td>
<td>
<a href="customerview1.php?id=<?= $customer['id']; ?>" class="btn btn-info btn-sm">View</a>
<a href="permission.php?id=<?= $customer['id']; ?>" class="btn btn-success btn-sm">YES</a>
<form action="backendde.php" method="POST" class="d-inline">
<button type="submit" name="delete_customer1" value="<?=$customer['id'];?>" class="btn btn-danger btn-sm">NO</button>

</form>

</td>

</tr>
<?php
}
}
}
else
 {

 echo "<h5> No Record Found </h5>";
 }
 
 ?>

                                

                            </tbody>

                        </table>


                    </div>

                </div>

            </div>

        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

