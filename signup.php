<?php session_start(); ?>
<?php include('dbcontroller.php') ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Restaurant - SignUp</title>

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
			<li class="nav-item active">
			  <a class="nav-link" href="signup.php">Sign up</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="login.php">Login</a>
			</li>
		  </ul> 
		  <span class="navbar-text" style="padding: .5rem 1rem;">&#128100; Welcome!<a style="color:#185694;font-weight:600;" href="#"><?php echo $_SESSION['email']; ?></a></span><a style="text-decoration:none;color:red;" href="logout.php">&#9747</a> 
		</div>
	  </div>
</nav>

<header id="menu-header">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 header-location">
					<h3>SIGN UP</h3>
					<nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-between">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Signup</li>
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
				<form  name="frmRegistration" method="POST" action="signup_send_email.php" >
			        
			           <?php
                 if (! empty($errorMessage) && is_array($errorMessage)) {
                      ?>	
                 <div class="error-message">
                    <?php 
                 foreach($errorMessage as $message) {
                echo $message . "<br/>";
                  }
                    ?>
                    </div>
                  <?php
                      }
                          ?>
			           
						<div class="form-group">
						<label class="title-sign" for="fullname">Full Name</label>
						<input type="text" class="form-control" id="fullname" name="name" placeholder="Full Name" 
						value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
					  </div>
						<div class="form-group">
						  <label class="title-sign" for="inputEmail4">Email</label>
						  <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email"
						  value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" >
						</div>
						 <div class="form-row">
						<div class="form-group col-md-6">
						  <label class="title-sign" for="inputPassword4">Password</label>
						  <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" value="">
						</div>
						<div class="form-group col-md-6">
						  <label class="title-sign" for="confirm_password"> Confirmed assword</label>
						 <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password"  value="">
						</div>
					  </div>
					  <div class="form-group" >
						<label class="title-sign" for="inputAddress">Address</label>
						<input type="text" class="form-control" name="address" id="inputAddress"
						value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>">
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label class="title-sign" for="inputCity">City</label>
						  <input type="text" class="form-control" name="city" id="inputCity"
						  value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>">
						</div>
						<div class="form-group col-md-6">
						  <label class="title-sign" for="inputZip">Zip</label>
						  <input type="text" class="form-control" name="zip" id="inputZip"
						  value="<?php if(isset($_POST['zip'])) echo $_POST['zip']; ?>">
						</div>
					  </div>
					  <div class="form-group">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" id="gridCheck">
						  <label class="title-sign" class="form-check-label" for="gridCheck">
							Check me out
						  </label>
						</div>
					  </div>
					  <button type="submit" name="signup" class="btn btn-default button-sign" >Sign Up</button>
					  <p>
  		               Already a member? <a href="login.php"> Login</a>
                   	</p>
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