<?php
if(!isset($_SESSION)){
session_start();
} 
 
require 'dbcon.php';
$id = $_SESSION['loggedIn_cust_id'];
$op = mysqli_real_escape_string($con, $_POST["op"]);
$np = mysqli_real_escape_string($con, $_POST["np"]);
$cp = mysqli_real_escape_string($con, $_POST["cp"]);
if($np != $cp)
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Pin mismatch');
    window.location.href='passpin.php';
    </script>");
  }
  else{

$sql0 = "SELECT * FROM banksystem WHERE id=".$id;
    $result0=mysqli_query($con,$sql0);
    $row = mysqli_fetch_assoc($result0);
    if($op === $row['pin'])
    {
	$sql = "UPDATE banksystem SET pin = '".$np."' where id= '".$id."' ";
        $result = mysqli_query($con, $sql);
 
 if($result)
 {              
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Pin changed....');
    window.location.href='userhome.php';
    </script>");
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('ERROR:oop's sorry $query.'.mysqli_error($con));
window.location.href='passpin.php';
    </script>");
}
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Incorrect pin');
window.location.href='passpin.php';
    </script>");
}
}
?>