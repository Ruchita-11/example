<html>
<head>
<meta charset="utf-8">


<title>Sidebar Menu with sub-menu | CodingNepal</title>


<link rel="stylesheet" href="style.css">


<script src="https://code.jquery.com/jquery-3.4.1.js">
</script>


<script src="https://kit.fontawesome.com/a876d05399.js">
</script>


</head>




<body>


<nav class="sidebar">




  <div class="text">Admin Menu</div>


  <ul>




     <li><a href="adminhome.php">Home</a></li>


     <li>

<a href="mycustomers.php" class="serv-btn">My Customers </a>
</li>
     
   <li><a href="customerpermission.php">Customer Permission</a></li>


     <li><a href="managecustomer.php">Manage Customers</a></li> 
     <li><a href="jsphome.php">Logout</a></li>
  </ul>


</nav>




<script>

$('.feat-btn').click(function(){
$('nav ul'.feat-show').toggleclass("show");
});
$('.serv-btn').click(function(){
$('nav ul'.feat-show').toggleclass("show1");
});
</script>
</body>
</html>
