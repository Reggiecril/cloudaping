<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
	
	
	<link rel="stylesheet" type="text/css" href="assets/css/carts.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/angular.min.js" ></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script> 
	<script type="text/javascript" src="assets/js/menu.js" ></script>
	<script type="text/javascript" src="assets/js/item.js" ></script>	
	<script type="text/javascript" src="assets/js/remember.js" ></script>
	<script type="text/javascript" src="assets/js/carts.js" ></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
	<title>CloudaPing</title>
</head>

<?php
 date_default_timezone_set("Europe/London");
$search = "
		
		<div class='header'>
			<div class='header-column1'>
				<a href='index.php?content=mainPages/home'><img src='assets/images/log.png' alt='log' ></a>
				<div class='header-search'>
					<form action='index.php?content=sections/search' method='post'>
						<input type='text' name='searchText' height='40'>
						<select name='searchSelect'>
							<option selected='selected' value='All'>All</option>
							<option  value='laptop'>Laptop</option>
							<option  value='mobile'>Mobile</option>
							<option  value='computer'>Computer</option>
							<option  value='camera'>Camera</option>
							<option  value='audio&video'>Audio&Video</option>
							<option  value='others'>Others(X-BOX,Headset and ...)</option>
							<option  value='shop'>Shop</option>
						</select>
						<input type='submit' name='searchSubmit'  value='Search'>
					</form>
					<div class='header-popular'>
						<p>Popular search:</p>
						<a href='index.php?content=mainPages/product&product=laptop'>Laptop</a>
						<a href='index.php?content=mainPages/product&product=mobile'>Mobile</a>
						<a href='index.php?content=mainPages/product&product=computer'>Computer</a>
						<a href='index.php?content=mainPages/product&product=camera'>Camera</a>
						<a href='index.php?content=mainPages/product&product=X-Box'>X-Box</a>
						<a href='index.php?content=mainPages/product&product=headset'>Headset</a>
					</div>
				</div>
			</div>
			<div class='header-down'>
				<a href='#'><i class='fa fa-search' aria-hidden='true'></i></a>
			</div>
		</div>
		";
if (isset($_GET['content'])){
	$content =$_GET['content'];
	if ($content == 'mainPages/home') {
		//for index.php
		print"
			<header>
			<div class='header-left'>
				<div style='display: inline-block;'>
					Welcome to <a href='index.php?content=mainPages/home'>CloudaPing</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'><img src='assets/images/UK.png' width='20px' height='12px'>UK</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'>About Us</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'>App</a>
				</div>
			</div>
			<div class='header-right'>";
			if (isset($_SESSION['customer_email'])) {
				print "
						<div style='display: inline-block;'>
							<a href='index.php?content=userPage/securePage&userPage=Your Order'>Your Order</a>
						</div>
						<div style='display: inline-block;'>
							|     
						</div>
						<div style='display: inline-block;'>
							<a href='index.php?content=userPage/securePage'><i class='fa fa-id-card-o' aria-hidden='true'></i>".$_SESSION['customer_firstname']."</a>
						</div>
						<div style='display: inline-block;'>
							| 
						</div>
						<div style='display: inline-block;'>
							<a href='index.php?content=login/logout'>Logout</a>
						</div>
					</div>
			</header>";		
			}else{
				print"
					<div style='display: inline-block;'>
						<a href='index.php?content=userPage/securePage&userPage=Your Order'>Your Order</a>
					</div>
					<div style='display: inline-block;'>
						|     
					</div>
					<div style='display: inline-block;'>
						<a href='index.php?content=login/login'>Sign In</a>
					</div>
					<div style='display: inline-block;'>
						|     
					</div>
					<div style='display: inline-block; padding: 0 5px 0 0'>
						<a href='index.php?content=login/register'>Sign Up</a>
					</div>
			</div>
		</header>
		";}
		print $search;
	}else if($content == 'login/login' || $content == 'login/register' || $content == 'login/traderLogin') {
		//for login.php
		print "";
	}else{
		//for other page
		print"
			<header>
			<div class='header-left'>
				<div style='display: inline-block;'>
					Welcome to <a href='index.php?content=mainPages/home'>CloudaPing</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'><img src='assets/images/UK.png' width='20px' height='12px'>UK</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'>About Us</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'>App</a>
				</div>
			</div>
			<div class='header-right'>";
			if (isset($_SESSION['customer_email'])) {
				print "
						<div style='display: inline-block;'>
							<a href='index.php?content=userPage/securePage&userPage=Your Order'>Your Order</a>
						</div>
						<div style='display: inline-block;'>
							|     
						</div>
						<div style='display: inline-block;'>
							<a href='index.php?content=userPage/securePage'><i class='fa fa-id-card-o' aria-hidden='true'></i>".$_SESSION['customer_firstname']."</a>
						</div>
						<div style='display: inline-block;'>
							| 
						</div>
						<div style='display: inline-block;'>
							<a href='index.php?content=login/logout'>Logout</a>
						</div>
					</div>
			</header>";
			}else{
				print"
					<div style='display: inline-block;'>
						<a href='index.php?content=userPage/securePage&userPage=Your Order'>Your Order</a>
					</div>
					<div style='display: inline-block;'>
						|     
					</div>
					<div style='display: inline-block;'>
						<a href='index.php?content=login/login'>Sign In</a>
					</div>
					<div style='display: inline-block;'>
						|     
					</div>
					<div style='display: inline-block; padding: 0 5px 0 0'>
						<a href='index.php?content=login/register'>Sign Up</a>
					</div>
				</div>
			</header>
			";}
		print "<div class='header-column1'>
			<a href='index.php?content=mainPages/home'><img src='assets/images/log.png' alt='log' ></a>
			<div class='header-search'>
				<form action='index.php?content=sections/search' method='post'>
					<input type='text' name='searchText' height='40'>
					<select name='searchSelect'>
							<option selected='selected' value='All'>All</option>
							<option  value='laptop'>Laptop</option>
							<option  value='mobile'>Mobile</option>
							<option  value='computer'>Computer</option>
							<option  value='camera'>Camera</option>
							<option  value='audio&video'>Audio&Video</option>
							<option  value='others'>Others(X-BOX,Headset and ...)</option>
							<option  value='shop'>Shop</option>
					</select>
					<input type='submit' name='searchSubmit'  value='Search'>
				</form>
				<div class='header-popular'>
					<p>Popular search:</p>
					<a href='index.php?content=mainPages/product&product=laptop'>Laptop</a>
					<a href='index.php?content=mainPages/product&product=mobile'>Mobile</a>
					<a href='index.php?content=mainPages/product&product=computer'>Computer</a>
					<a href='index.php?content=mainPages/product&product=camera'>Camera</a>
					<a href='index.php?content=mainPages/product&product=X-Box'>X-Box</a>
					<a href='index.php?content=mainPages/product&product=headset'>Headset</a>
				</div>
			</div>
		</div>
		";
	}	
}else{
	//for index.php
	print"
			<header>
			<div class='header-left'>
				<div style='display: inline-block;'>
					Welcome to <a href='index.php?content=mainPages/home'>CloudaPing</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'><img src='assets/images/UK.png' width='20px' height='12px'>UK</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'>About Us</a>
				</div>
				<div style='display: inline-block;'>
					| 
				</div>
				<div style='display: inline-block;'>
					<a href='#'>App</a>
				</div>
			</div>
			<div class='header-right'>";
			if (isset($_SESSION['customer_email'])) {
				print "
						<div style='display: inline-block;'>
							<a href='index.php?content=userPage/securePage&userPage=Your Order'>Your Order</a>
						</div>
						<div style='display: inline-block;'>
							|     
						</div>
						<div style='display: inline-block;'>
							<a href='index.php?content=userPage/securePage'><i class='fa fa-id-card-o' aria-hidden='true'></i>".$_SESSION['customer_firstname']."</a>
						</div>
						<div style='display: inline-block;'>
							| 
						</div>
						<div style='display: inline-block;'>
							<a href='index.php?content=login/logout'>Logout</a>
						</div>
					</div>
			</header>";
			}else{
				print"
					<div style='display: inline-block;'>
						<a href='index.php?content=userPage/securePage&userPage=Your Order'>Your Order</a>
					</div>
					<div style='display: inline-block;'>
						|     
					</div>
					<div style='display: inline-block;'>
						<a href='index.php?content=login/login'>Sign In</a>
					</div>
					<div style='display: inline-block;'>
						|     
					</div>
					<div style='display: inline-block; padding: 0 5px 0 0'>
						<a href='index.php?content=login/register'>Sign Up</a>
					</div>
			</div>
		</header>
		";}
	print $search;
}
if (isset($_GET['checkout_error'])) {
	echo "<script type='text/javascript'>
			var r=confirm('You need login!')
		  if (r==true)
		    {
		    window.location.href='index.php?content=login/login';
		    }
		  else
		    {
		    document.write('You pressed Cancel!')
		    }
		    </script>";
}
include "cart/cart.php";
include "sections/favourite.php";
?>