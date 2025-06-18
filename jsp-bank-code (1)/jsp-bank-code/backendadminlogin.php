<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"banking");
$query="select * from admin";
$result=mysqli_query($con,$query);

 $uname = $_POST['username'];
 $pass = $_POST['password'];
 if (empty($uname)) 
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Adminname Required');
    window.location.href='adminlogin.php';
    </script>");
  }
else if(empty($pass))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password Rrequired');
    window.location.href='adminlogin.php';
    </script>");
  }
else
{
 $sql = "SELECT * FROM admin WHERE username='$uname' AND  password='$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) 
	{
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) 
		{
               
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully login....');
    window.location.href='adminhome.php';
    </script>");
}
	}
	else
	{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('UserName and Password Worng');
    window.location.href='adminlogin.php';
    </script>");

 	}
}

?> 
