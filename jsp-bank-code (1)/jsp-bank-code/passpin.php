<?php   
if(!isset($_SESSION)) {
        session_start();
    }

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bulma.css"/>
	<title>Debit</title>
</head>
<body>
<style>
      body{
      	background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);		
      }
	.tops{
			margin-top: 100px;
		}
</style>
<div class="columns">
	<div class="column is-offset-4">
		<h1 class="title has-text-white  pt-3">JSP BANK  </h1>
	</div>
</div>

<form action="password.php" method="post">
	<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-5 has-text-white">Enter Old Password/Pin</label><br>
			<input type="text" class="input is-outlined column is-5 " name="op" required><br>

			<label for=""  class="is-size-5 has-text-white">New Password/Pin:</label><br>
			<input type="text" class="input is-outlined  column is-5" name="np" required><br>
			<label for=""  class="is-size-5 has-text-white">Confirm Password/Pin:</label><br>
			<input type="text" class="input is-outlined  column is-5" name="cp" required><br>
<button class="button is-primary px-6 mr-2 mb-1" name="submit" type="submit">password  </button>
<button class="button is-inverted is-outlined px-6" type="submit" formaction="pin.php">Pin</button>
</div>
</div>
</div>
</form>
</body>
</html>