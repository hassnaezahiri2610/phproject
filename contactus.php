<!DOCTYPE html>
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
				<li class="nav-item active">
			  <a class="nav-link" href="contactus.php">Contact Us</a>
			</li>
			<li class="nav-item ">
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
					<h3>CONTACT US</h3>
					<nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-between">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Signup</li>
						</ol>   
					</nav>
				</div>
			</div>		
		</div>
	</div>
</header>
  <div style="margin-top:30px;" class=" container content">
        <div class="formDiv">
            <form action="send_form_email.php" method="post" id="frmLogin">
               
                <div class="form-group">
                    <label for="emailInput">
                        Full Name:
                    </label>
                    <input type="text" class="form-control" aria-describedby="name" id="name" name="name" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="emailInput">
                        Email:
                    </label>
                    <input type="email" class="form-control" aria-describedby="Email Address" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="emailInput">
                        Telephone:
                    </label>
                    <input type="text" class="form-control" aria-describedby="Telephone" id="telephone" name="telephone" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="emailInput">
                        Comments:
                    </label>
                    <textarea name="comments" class="form-control" id="comments" cols="30" rows="10">
                </textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-outline-success" value="Send" name="email_send">

                </div>

            </form>
        </div>
    </div>
    </div>



</body>



<!-- jQuery and Bootstrap -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>