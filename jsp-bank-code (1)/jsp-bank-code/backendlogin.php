<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"banking");
$query="select * from banksystem";
$result=mysqli_query($con,$query);
if(!isset($_SESSION)){
session_start();
}

 $uname = $_POST['username'];
 $pass = $_POST['password'];
 if (empty($uname)) 
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Username Required');
    window.location.href='login.php';
    </script>");
  }
else if(empty($pass))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password Rrequired');
    window.location.href='login.php';
    </script>");
  }
else
{
 $sql = "SELECT * FROM banksystem WHERE username='$uname' AND  password='$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) 
	{
            $row = mysqli_fetch_assoc($result);
            if(empty($row['accountno']))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Waiting for Admin Permission');
    window.location.href='jsphome.php';
    </script>");
  }
            if ($row['username'] === $uname && $row['password'] === $pass) 
		{
 $_SESSION['loggedIn_cust_id'] = $row['id'];
               
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully login....');
    window.location.href='userhome.php';
    </script>");
}
	}
	else
	{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('UserName and Password Worng');
    window.location.href='login.php';
    </script>");

 	}
}

?> 
