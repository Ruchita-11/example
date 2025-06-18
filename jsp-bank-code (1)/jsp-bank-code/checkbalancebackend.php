<?php 
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <link rel="stylesheet" type="text/css" href="bulma.css"/>
		<style>
.button {
	background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 4px;
}
</style>
	</head>
    <body>
	<a class="button" href="jsphome.php"><b>Back</b></a>
		
    	<style>
    		body{
    			background-image: linear-gradient(to right top, #051937, #001d2f, #001d1f, #001a0f, #101602);
    			height: 120vh;

    		}
    		.tops{
    			margin-top: 190px;
    		}
    	</style>
        <?php 


require 'dbcon.php';
if(isset($_POST['sub'])){
	$Account_number= trim(mysqli_real_escape_string($con,$_POST['account_number']));
	$Pin  = trim(mysqli_real_escape_string($con,$_POST['pin']));


	if(empty($Account_number)||empty($Pin)){
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Fill all the fields');
    window.location.href='checkbalance.php';
    </script>");
	}

	else{
		$fetch_data = "SELECT * FROM banksystem WHERE accountno = '".$Account_number."' and pin = '".$Pin."' ";
		$run_query = mysqli_query($con,$fetch_data);
		
		// checking if account name or account number exist 
		if(mysqli_num_rows($run_query) > 0 ){
			if($row_data = mysqli_fetch_assoc($run_query)){
				$_SESSION['amount'] = $row_data['amount'];

				echo "<div class='columns'>
						<div class = 'column is-offset-4'>
						<h1 class='tops is-size-3 has-text-weight-bold title pt-6 pl-3 has-text-success'>YOUR BALANCE IS   ".$_SESSION['amount']." Rupees </h1> 
						</div>
						</div>	 ";
			}
		}else{
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('incorrect account');
    window.location.href='checkbalance.php';
    </script>");
}

	}
}
?>
        <script src="js/main.js"></script>
    </body>
</html>

