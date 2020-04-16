<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController(); 
if (isset($_POST["signup"])) {
    
	$name =  $_POST["name"];
	$email =  $_POST["email"];
	$password =  $_POST["password"];
	$address =  $_POST["address"];
	$city =  $_POST["city"];
	$zip =  $_POST["zip"];
	


	$sql = $db_handle->runQuery("INSERT INTO `users`( `name`, `email`, `password`, `address`, `city`, `zip` ) VALUES ('{$name}' , '{$email}' , '{$password}' ,'{$address}' , '{$city}', '{$zip}')");
 
 	if ($sql) {
			
           header("Location: menu.php");
           exit();
 
	}

}
if (isset($_POST["login"])) {

        $email =  $_POST["email"] ;
        $password = $_POST["password"] ;

		$sql1 = $db_handle->runQuery("SELECT * FROM `users` WHERE `email`='{$email}' AND `password`= '{$password}' ");

        if ($sql1) {
			$_SESSION['email'] = $_POST["email"];
            header("Location: menu-login.php");
            exit();

        } else{
			header("Location: login.php");
            exit();
		}
			
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Restaurant - Login</title>

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
		<div class="collapse navbar-collapse" id="navbarResponsive">
		  <ul class="navbar-nav">
			<li class="nav-item">
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
			<li class="nav-item active">
			  <a class="nav-link" href="login.php">Login</a>
			</li>
		  </ul>  
		</div>
	  </div>
</nav>

<header id="menu-header">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 header-location">
					<h3>LOGIN</h3>
					<nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-between">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">login</li>
						</ol>   
					</nav>
				</div>
			</div>		
		</div>
	</div>
</header>

<section class="signup">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form method="POST">
						<div class="form-group">
						  <label class="title-sign" for="inputEmail4">Email</label>
						  <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
						</div>
						<div class="form-group">
						  <label class="title-sign" for="inputPassword4">Password</label>
						  <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
						</div>
						<div class="form-group">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" id="gridCheck">
							  <label class="title-sign" class="form-check-label" for="gridCheck">
								Check me out
							  </label>
							</div>
						</div>
					  <button type="submit" class="btn btn-default button-sign" name="login">Login</button>
				</form>
			</div>
		</div>
	</div>
</section>

<footer>
<div class="container">
	<p style="margin-bottom:0;"><b>Restaurant</b> ©  Copyright All right reserved 2020</p>
</div>
</footer>

<!-- jQuery and Bootstrap -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>