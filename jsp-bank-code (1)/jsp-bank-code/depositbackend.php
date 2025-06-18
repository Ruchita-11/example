<?php
session_start();

require 'dbcon.php';


if(isset($_POST['submit']))
{

	$Account_number= trim(mysqli_real_escape_string($con,$_POST['account_number']));
	$Amount_to_deposit  = trim(mysqli_real_escape_string($con,$_POST['amount_to_deposit']));
	$Account_name= trim(mysqli_real_escape_string($con,$_POST['account_name']));
	$Depositor_name  = trim(mysqli_real_escape_string($con,$_POST['depositor_name']));

	if(empty($Account_number)||empty($Amount_to_deposit) || empty($Account_name) || empty($Depositor_name))
	{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Fill all the fields');
    window.location.href='deposit.php';
    </script>");
	}
	else
	{
	$fetch_data = "SELECT * FROM banksystem WHERE username = '".$Account_name."' and accountno = '".$Account_number."' ";
	$run_query= mysqli_query($con,$fetch_data);

		// checking if account name or account number exist 
		if(mysqli_num_rows($run_query) > 0 )
		{
			while ($row_data = mysqli_fetch_assoc($run_query))
				{
					$_SESSION['accountno'] = $row_data['accountno'];
					$_SESSION['username'] = $row_data['username'];
					// update repesent amount in the database
					$_SESSION['amount'] = $row_data['amount'];
					$update_totalamount =  "UPDATE banksystem SET amount = '".$Amount_to_deposit."' + '".$_SESSION['amount']."'   where username= '".$Account_name."'  ";
					mysqli_query($con,$update_totalamount);
					echo ("<script LANGUAGE='JavaScript'>
    				window.alert('deposited successfully');
   					window.location.href='jsphome.php';
    				</script>");
				}
		}
		else
		{
			echo ("<script LANGUAGE='JavaScript'>
    		window.alert('incorrect account details');
   	 		window.location.href='deposit.php';
    		</script>");
		}
	}
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('incorrect account');
    window.location.href='deposit.php';
    </script>");
}
?>