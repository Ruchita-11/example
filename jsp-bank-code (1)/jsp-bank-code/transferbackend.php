<?php
if(!isset($_SESSION)){
session_start();
} 
 
require 'dbcon.php';
$id = $_SESSION['loggedIn_cust_id'];
$an = mysqli_real_escape_string($con, $_POST["an"]);
$amt = mysqli_real_escape_string($con, $_POST["amount"]);
$pin = mysqli_real_escape_string($con, $_POST["pin"]);

$sql0 = "SELECT * FROM banksystem WHERE id=".$id;
    $result0=mysqli_query($con,$sql0);
    $row = mysqli_fetch_assoc($result0);
$sql = "SELECT * FROM banksystem WHERE accountno=".$an;
    $result=mysqli_query($con,$sql);
    $row0 = mysqli_fetch_assoc($result);
    if($pin === $row['pin'])
    {
    $_SESSION['amount'] = $row['amount'];
if($_SESSION['amount'] >= $amt)
    {

	$final = $_SESSION['amount'] - $amt;
	$sql = "UPDATE banksystem SET amount = '".$final."' where id= '".$id."' ";
        $result = mysqli_query($con, $sql);
$_SESSION['am'] = $row0['amount'];
$final0 = $_SESSION['am'] + $amt;
	$sql0 = "UPDATE banksystem SET amount = '".$final0."' where accountno= '".$an."' ";
        $result0 = mysqli_query($con, $sql0);
 
 
 if($result0)
 {              
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully transferred....');
    window.location.href='userhome.php';
    </script>");
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('ERROR:oop's sorry $query.'.mysqli_error($con));
window.location.href='usertransfer.php';
    </script>");
}
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Insufficient balance');
window.location.href='userhome.php';
    </script>");
}
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('wrong pin');
    window.location.href='usertransfer.php';
    </script>");
}
?>