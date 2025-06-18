<html lang="en">
<head>	
<!-- <meta charset="UTF-8"> -->	
<meta name="viewport" content="width=device-width, initial-scale=1">	 
<link rel="stylesheet" type="text/css" href="bulma.css"/>
<title>ADD CUSTOMERS</title>
</head>
<body>
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
<a class="button is-green mr-6" href="managecustomer.php"> BACK </a>
</div>
</div> 
</div> 
</div> 
</div>
</nav>
<style>	
body{		
background-image: linear-gradient(to right top, #16181a, #213243, #294f70, #336da1, #418bd5);	
}
</style>

<form action="backendsignup1.php" method="post">	
<div class="columns">		
<div class="column is-offset-4">						
<label for="" class="is-size-5 has-text-primary">Username</label>
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
</div>		
</div>	
</div>
</form>
</body>
</html>