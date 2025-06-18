<html lang="en">
<head>	
<meta charset="UTF-8">	
<meta name="viewport" content="width=`, initial-scale=1">	 
<link rel="stylesheet" type="text/css" href="bulma.css"/>
<title>Login </title>
</head>
<body>	
<style>		
body{			
background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);		
}		
.tops{			
margin-top: 120px;		
}	
</style>
<nav class="navbar has-background-primary-light" role="navigation" aria-label="main navigation"> 
<div class="navbar-brand">
<figure class="image is-128x128"> <img  src="jsp.png"> </figure> 
<a class="navbar-item" href="jsphome.php"> 
<h1 class="title is-size-3 has-text-dark"><b>JSP BANK</b></h1> 
</a> 
<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample"> 
</a>
<div class="navbar-end"> 
<div class="navbar-item"> 
<div class="buttons"> 
<a class="button is-green mr-6" href="adminlogin.php"> ADMIN </a>
<a class="button is-primary mr-6" href="signup.php"> 
<strong></strong>Sign up </a> 
<a class="button is-light" href="jsphome.php"> BACK </a> 
</div>
</div> 
</div> 
</div> 
</div>
</nav>
<form action="backendlogin.php" method="post">	
        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
<div class="columns">		
<div class="tops column is-offset-4">						
<label for="" class="is-size-3 has-text-white">Username</label><br>			
<input type="text" class="input is-primary column is-5" placeholder="Username" name="username"><br>			
<label for="" class="is-size-3 has-text-white">Password</label>
<br>			
<input type="password" class="input is-primary column is-5" placeholder=" Password" name="password"><br>			
<div class="mt-5">				
<button class="button is-primary px-6 mr-3" type="submit" name="sub">Login </button>				
</div>		
</div>	
</div>
</form>
</body>
</html>
