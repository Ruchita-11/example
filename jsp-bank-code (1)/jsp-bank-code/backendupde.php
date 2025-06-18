<?php

session_start();

require 'dbcon.php';

if(isset($_POST['delete_customer1']))

{
$customerac = mysqli_real_escape_string($con, $_POST['delete_customer1']);


$query="DELETE FROM banksystem WHERE username='$customerac' ";

$query_run=mysqli_query($con, $query);
if($query_run)
{
$_SESSION['message']="Customer Deleted Successfully";

header("Location: customerpermission.php");
exit(0);
}
else
{
$_SESSION['message']="Customer Not Deleted";
header("Location: customerpermission.php");
exit(0);
}
}



if(isset($_POST['delete_customer']))

{
$customerac = mysqli_real_escape_string($con, $_POST['delete_customer']);


$query="DELETE FROM banksystem WHERE accountno='$customerac' ";

$query_run=mysqli_query($con, $query);
if($query_run)
{
$_SESSION['message']="Customer Deleted Successfully";

header("Location: managecustomer.php");
exit(0);
}
else
{
$_SESSION['message']="Customer Not Deleted";
header("Location: managecustomer.php");
exit(0);
}

}


if(isset($_POST['update_customer']))

{

$customerac=mysqli_real_escape_string($con, $_POST['accountno']);

$name=mysqli_real_escape_string($con, $_POST['username']);

$email=mysqli_real_escape_string($con, $_POST['emaill']);

$phone=mysqli_real_escape_string($con, $_POST['phone_number']);
$location=mysqli_real_escape_string($con, $_POST['location']);
$query="UPDATE banksystem SET username='$name', emaill='$email', phone_number='$phone', location='$location' WHERE accountno='$customerac' ";

$query_run=mysqli_query($con, $query);
if($query_run)

{
$_SESSION['message']="Customer Updated Successfully";
header("Location:managecustomer.php");
exit(0);
}

else
{
$_SESSION['message']="Customer Not Updated";
header("Location: managecustomer.php");

exit(0);
}
}



if(isset($_POST['updatecustomer1']))
{

$customerid=mysqli_real_escape_string($con, $_POST['id']);
$account=mysqli_real_escape_string($con, $_POST['accountno']);

$query="UPDATE banksystem SET  accountno='$account'  WHERE id='$customerid' ";

$query_run=mysqli_query($con, $query);
if($query_run)
{
header("Location:customerpermission.php");
exit(0);
}

else
{
$_SESSION['message']="Failed";
header("Location: customerpermission.php");

exit(0);
}
}

?>