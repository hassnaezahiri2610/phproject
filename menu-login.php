<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
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
		<div class="collapse navbar-collapse" id="navbarText">
		  <ul class="navbar-nav  mr-auto">
			<li class="nav-item">
			  <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
			  <a class="nav-link" href="menu-login.php">Menu</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about.php">About Us</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="contactus.php">Contact Us</a>
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
					<h3>MENU</h3>
					<nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-between">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Menu</li>
						</ol>   
					</nav>
				</div>				
			</div>		
		</div>
	</div>
</header>


<div id="shopping-cart">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 cart-space">
				<a id="btnEmpty" href="menu-login.php?action=empty">Empty Cart</a>
				<?php
				if(isset($_SESSION["cart_item"])){
					$total_quantity = 0;
					$total_price = 0;
				?>	
				<table class="table" cellpadding="10" cellspacing="1">
					<thead class="thead-dark table-bordered">
						<tr>
						<th style="text-align:left;" scope="col">Name</th>
						<th style="text-align:left;" scope="col">Code</th>
						<th style="text-align:right;" scope="col">Quantity</th>
						<th style="text-align:right;" scope="col">Unit Price</th>
						<th style="text-align:right;" scope="col">Price</th>
						<th style="text-align:center;"  scope="col">Remove</th>
						</tr>
					</thead>
					<tbody>
					<?php		
						foreach ($_SESSION["cart_item"] as $item){
							$item_price = $item["quantity"]*$item["price"];
							?>
									<tr>
									<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
									<td><?php echo $item["code"]; ?></td>
									<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
									<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
									<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
									<td style="text-align:center;"><a href="menu-login.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="img/icon-delete.png" alt="Remove Item" /></a></td>
									</tr>
									<?php
									$total_quantity += $item["quantity"];
									$total_price += ($item["price"]*$item["quantity"]);
							}
							?>

					<tr>
					<td colspan="2" align="right">Total:</td>
					<td align="right"><?php echo $total_quantity; ?></td>
					<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
					<td></td>
					</tr>
					</tbody>
				</table>		
				  <?php
				} else {
				?>
				<div class="no-records">Your Cart is Empty</div>
				<?php 
				}
				?>
			</div>
		</div>
	</div>
</div>

<section class="food">
	<div class="container">
		<div class="row">
				<?php
				$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
				if (!empty($product_array)) { 
					foreach($product_array as $key=>$value){
				?>
						<div class="col-lg-4">
							<div class="card">
								<form method="post" action="menu-login.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
								<img class="card-img-top card-img" src="<?php echo $product_array[$key]["image"]; ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $product_array[$key]["name"]; ?></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
								</div>
								<div class="card-footer">
									<small style="margin-right:15px;" class="text-muted"><?php echo $product_array[$key]["price"]; ?><span>$</span></small>
									<input type="text" class="product-quantity" name="quantity" value="1" size="2" />
									<button type="submit" value="Add to Cart" class="btnAddAction" ><i style="color: #cca34b;" class="fas fa-cart-plus"></i></button>
								</div>
								</form>
							</div>
						</div>
				<?php
					}
				}
	
			?>
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