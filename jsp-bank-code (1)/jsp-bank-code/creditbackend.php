<?php
if(!isset($_SESSION)){
session_start();
} 
 
require 'dbcon.php';
$id = $_SESSION['loggedIn_cust_id'];
$amt = mysqli_real_escape_string($con, $_POST["amount"]);
$pin = mysqli_real_escape_string($con, $_POST["pin"]);

$sql0 = "SELECT * FROM banksystem WHERE id=".$id;
    $result0=mysqli_query($con,$sql0);
    $row = mysqli_fetch_assoc($result0);
    if($pin === $row['pin'])
    {
    $_SESSION['amount'] = $row['amount'];

	$final = $_SESSION['amount'] + $amt;
	$sql = "UPDATE banksystem SET amount = '".$final."' where id= '".$id."' ";
        $result = mysqli_query($con, $sql);
 
 if($result)
 {              
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully credited....');
    window.location.href='userhome.php';
    </script>");
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('ERROR:oop's sorry $query.'.mysqli_error($con));
window.location.href='usercredit.php';
    </script>");
}
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('wrong pin');
    window.location.href='usercredit.php';
    </script>");
}
?>