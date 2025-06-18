<html lang="en">
<head>	
<!-- <meta charset="UTF-8"> -->	
<meta name="viewport" content="width=device-width, initial-scale=1">	 
<link rel="stylesheet" type="text/css" href="bulma.css"/>
<title>SIGNUP</title>
</head>
<body>
<style>	
body{		
background-image: linear-gradient(to right top, #16181a, #213243, #294f70, #336da1, #418bd5);	
}
</style>
<nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation"> 
<div class="navbar-brand">
<figure class="image is-128x128"> <img  src="jsp.png"> </figure> 
<a class="navbar-item" href="jsphome.php"> 
<h1 class="title is-size-3 has-text-white"><b>JSP BANK</b></h1> 
</a> 
<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample"> 
</a>
<div class="navbar-end"> 
<div class="navbar-item"> 
<div class="buttons"> 
<a class="button is-green mr-6" href="adminlogin.php"> ADMIN </a>
<a class="button is-primary mr-6" href="jsphome.php"> 
<strong>BACK</strong> </a> 
<a class="button is-light" href="login.php"> Log in </a> 
</div>
</div> 
</div> 
</div> 
</div>
</nav>
<div class="columns">	
<div class="column is-offset-4">		
<h1 class="title has-text-white pt-4"> JSP BANK  </h1>	
</div>
</div>
<form action="backendsignup.php" method="post">	
<div class="columns">		
<div class="column is-offset-4">						<label for="" class="is-size-5 has-text-primary">Username</label>
<br>			
<input type="text" class="input is-outlined column is-5 " name="username">
<br>			
<label for="" class="is-size-5 has-text-primary">Email</label>
<br>			
<input type="text" class="input is-outlined column is-5"name="emaill">
<br>			
<label for="" class="is-size-5 has-text-primary">Make a 4 digit pin </label>
<br>			
<input type="text" class="input is-outlined column is-5" name="pin">
<br>			
<label for="" class="is-size-5 has-text-primary">Phone Number </label>
<br>			
<input type="text" class="input is-outlined column is-5" name="phone_number">
<br>			
<label for="" class="is-size-5 has-text-primary">Birth date </label>
<br>			
<input type="date" class="input is-outlined column is-5 "name="birth_date">
<br>			
<label for="" class="is-size-5 has-text-primary">Address</label>
<br>			
<input type="text" class="input is-outlined column is-5" name="location">
<br>			
<label for="" class="is-size-5 has-text-primary">Password</label>
<br>			
<input type="password" class="input is-outlined column is-5" name="password">
<br>				
<label for="" class="is-size-5 has-text-primary">Password Repert</label>
<br>			
<input type="password" class="input is-outlined column is-5 " name="password_pass">
<br>						
<div class="mt-5">				
<button class="button is-primary px-6 mr-3" name="sub" type="submit">signup</button>				
<a class="button is-light px-5 mr-6" href="login.php"> <strong>Login</strong> </a>		
</div>		
</div>	
</div>
</form>
</body>
</html>