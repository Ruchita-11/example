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
	<title>Transfer</title>
</head>
<body>
<style>
      body{
      	background-image: linear-gradient(to right top, #5743be, #53739e, #4d427e, #46405f, #3e3d91);
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

<form action="transferbackend.php" method="post">
	<div class="columns">
		<div class="tops column is-offset-4">
			
<label for="" class="is-size-5 has-text-white">Enter AccountNo</label><br>
			<input type="text" class="input is-outlined column is-5 " name="an" required><br>
			<label for="" class="is-size-5 has-text-white">Enter Amount</label><br>
			<input type="text" class="input is-outlined column is-5 " name="amount" required><br>

			<label for=""  class="is-size-5 has-text-white">Pin(4 digit):</label><br>
			<input type="text" class="input is-outlined  column is-5" name="pin" required><br>
			<input type="text" class="input is-outlined   column is-5 " readonly="" placeholder="JSP BANK "><br>
<div class="mt-5">
<button class="button is-primary is-outlined px-6 mb-5" name="submit" type="submit">Transfer  </button>
</div>
</div>
</div>
</form>
</body>
</html>