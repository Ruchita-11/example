<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"banking");

 $uname = $_POST['username'];
 $emaill = $_POST['emaill'];
 $pin = $_POST['pin'];
 $phone = $_POST['phone_number'];
 $birth_date = $_POST['birth_date'];
 $location = $_POST['location'];
 $password = $_POST['password'];
 $pass = $_POST['password_pass'];
 if (empty($uname)) 
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Username Required');
    window.location.href='signup.php';
    </script>");
  }
else if(empty($emaill)) 
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email Required');
    window.location.href='signup.php';
    </script>");
  }
 else if(empty($pin))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('PIN Number Required');
    window.location.href='signup.php';
    </script>");
  }
 else if(empty($phone))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Phone Number Required');
    window.location.href='signup.php';
    </script>");
  }
 else if(empty($birth_date))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Birth Date Required');
    window.location.href='signup.php';
    </script>");
  }
 else if(empty($location))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Location Required');
    window.location.href='signup.php';
    </script>");
  }
 else if(empty($password))
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password Required');
    window.location.href='signup.php';
    </script>");
  }
 else if($password != $pass)
{

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password mismatch  Rrequired');
    window.location.href='signup.php';
    </script>");
  }
else
{
 $sql = "INSERT INTO banksystem (username, emaill, pin, phone_number, birth_date, location, password, accountno, amount) VALUES ('$uname','$emaill','$pin','$phone','$birth_date','$location','$password','',0)";
        $result = mysqli_query($con, $sql);
 
 if($result)
 {              
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sucessfully registered....');
    window.location.href='jsphome.php';
    </script>");
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('ERROR:oop's sorry $query.'.mysqli_error($con));
window.location.href='signup.php';
    </script>");
}
}

?> 