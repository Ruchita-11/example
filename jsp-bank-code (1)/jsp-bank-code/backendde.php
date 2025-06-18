<?php

session_start();

require 'dbcon.php';

if(isset($_POST['delete_customer1']))

{
$customerac = mysqli_real_escape_string($con, $_POST['delete_customer1']);


$query="DELETE FROM banksystem WHERE id='$customerac' ";

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

?>