<html lang="en">
<head>	
<meta charset="UTF-8">	
<meta name="viewport" content="width=device-width, initial-scale=1">	 
<link rel="stylesheet" type="text/css" href="bulma.css"/>	<title>JSPBANK </title>
</head>
<body>
<style>	
body{		background-image: linear-gradient(to right top, #282d34, #1c272b, #14201f, #0f1813, #0b0f02);		height:120vh;
}	
.jsp{		
margin-top: 120px;	
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
<a class="button is-primary mr-6" href="signup.php"> 
<strong>Sign up</strong> </a> 
<a class="button is-light" href="login.php"> Log in </a> 
</div>
</div> 
</div> 
</div> 
</div>
</nav>
<div class="jsp columns">	
<div class="column ml-6">		
<div class="card">			
<header class="card-header title ">MOVING FUNDS LIKE SPEEDS</header>			<div class="card-content">				
<p>MORE SECURITY PROVIDED.	</p>			
</div>			
<form action="">					
<button class="button is-success is-outlined ml-4" formaction="checkbalance.php">Check Balance </button>				
<button class="button is-info has-background-black mb-5" formaction="deposit.php">Deposit</button>			
</form>		
</div>	
</div>	
<div class="column mr-6 ">		
<div class="card">			
<header class="card-header title ">Learn More</header>			
<div class="card-content">				
<p>HELP CAN PROVIDED HERE.	CONTACT OUR HELPLINE FOR MORE DETAILS.</p>			
</div>			
<form action="">									
<button class="button is-outlined is-inverted ml-4" formaction="contact.php">Customer care 
</button>					
<button class="button is-success mb-5">Know more </button>		
</form>		
</div>	
</div>
</div>
</body>
</html>