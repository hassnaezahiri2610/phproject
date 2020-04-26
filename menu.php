<?php

session_start();

if (!empty($_SESSION['email'])) {
	header('Location: menu-login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Restaurant - Menu</title>

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
			<li class="nav-item active">
			  <a class="nav-link" href="menu.php">Menu</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about.php">About Us</a>
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

<header id="menu-header">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 header-location">
					<h3>MENU</h3>
					<nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-between">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Menu</li>
						</ol>   
						<!-- Button trigger modal -->
						<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-shopping-cart cart"></i></a>
						<!-- Modal -->
						<div style="color:#222;" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Soupe</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div style="text-align: left;" class="modal-body">
									<img style="height:200px;object-fit: cover;" class="card-img-top card-img" src="img/food/soupe.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Harira</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							 <form method="get" action="login.php"><button type="submit" class="btn btn-default button-check">Login</button> </form>
							  </div>
							</div>
						  </div>
						</div>
					</nav>
				</div>
			</div>		
		</div>
	</div>
</header>

<section class="food">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/soupe.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Soupe</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">30<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/spagui.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Spagui</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">35<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/meat.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Meat</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">40<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/passtilla.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Passtilla</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">24<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/poisson.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Poisson</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">30<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/salade.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Salade</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">50<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/lasagne.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Lasagne</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">34<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
				  <img class="card-img-top card-img" src="img/food/grattain.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Grattain</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <div class="card-footer">
					<small class="text-muted">40<span>$</span></small><a class="add-link" href="#"><i style="color: #cca34b;" class="fas fa-cart-plus float-right"></i></a>
				  </div>
				</div>
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