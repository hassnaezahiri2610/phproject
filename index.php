<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Restaurant - Home</title>

	<!-- Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css" ><!-- Bootstrap -->
	<link rel="stylesheet" href="css/all.min.css"/><!-- Font-Awesome icons -->
	<link rel="stylesheet" href="css/style.css" ><!-- Main CSS -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>


<body>
<!-- Navigation -->
<nav class="navbar mynav navbar-expand-lg navbar-light bg-light fixed-top">
	  <div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
		  <ul class="navbar-nav">
			<li class="nav-item active">
			  <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="menu.php">Menu</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about.php">About Us</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="contactus.php">Contact Us</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="signup.php">Sign up</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="login.php">Login</a>
			</li>
		  </ul>
		 	
		</div>
	  </div>
</nav>

<header>
	  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
		  <!-- Slide One - Set the background image for this slide in the line below -->
		  <div class="carousel-item active" style="background-image: url('img/slide1.jpg')">
			<div class="carousel-caption d-none d-md-block">
			  <h2 class="display-4 title-food">Fooday restaurant</h2>
			  <p class="lead">spent the most special time with your loved ones </p>
			  <a href="menu.php" type="button" class="btn btn-light button-menu">Show Menu</a>	  
			</div>
		  </div>
		  <!-- Slide Two - Set the background image for this slide in the line below -->
		  <div class="carousel-item" style="background-image: url('img/slide2.jpg')">
			<div class="carousel-caption d-none d-md-block">
			  <h2 class="display-4 title-food">The food you love</h2>
			  <p class="lead"> spent the most special time with your loved ones</p>
			  
              <a href="contactus.php" type="button" class="btn btn-light button-menu">Contact us</a>	  
			</div>
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
	  </div>
	    
</header>
<!-- jQuery and Bootstrap -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>