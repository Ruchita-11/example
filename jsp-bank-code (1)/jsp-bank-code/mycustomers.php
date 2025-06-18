<?php
include "header.php";
include "adminsidebar.php";
session_start();
require 'dbcon.php';
?>

<!doctype html>

<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link  type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="adminhomestyle.css">
<title> My customer</title>

</head>

<body>

  

    <div class="flex-container container mt-4">


        <?php
include('message.php'); ?>


        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">

                        <h4> <b> My Customer Details</b>

                        </h4>

                    </div>

                    <div class="card-body">


                        <table class="table table-bordered table-striped">

                            <thead>

                                <tr>


<th>Customer Name</th>


<th>Account NO</th>

                                    
<th>Email</th>

                                    
<th>Phone</th>

                                    
<th>Birth Date</th>

                                    
<th>Address</th>


<th>Password</th>
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
if($customer != "")
{
if($customer['accountno'] != "")
{
?>
 <tr>
 <td><?= $customer['username']; ?></td>
<td><?= $customer['accountno']; ?></td>
<td><?= $customer['emaill']; ?></td>
<td><?= $customer['phone_number']; ?></td>
<td><?= $customer['birth_date']; ?></td>
<td><?= $customer['location']; ?></td>
<td><?= $customer['password']; ?></td>
</tr>
<?php
}
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

