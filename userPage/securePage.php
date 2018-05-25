
<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	$url = "index.php?content=userPage/securePageForm";
	if(isset($_SESSION['customer_email'])){
		$string = $_SERVER['REQUEST_URI'];
		$parts = parse_url($string);
		$queryParams = array();
		parse_str($parts['query'], $queryParams);
		if(isset($queryParams['hide'])) unset($queryParams['hide']);
		$queryString = http_build_query($queryParams);
		$url1 = $parts['path'] . '?' . $queryString;
		$email=$_SESSION['customer_email'];
		$password=$_SESSION['customer_password'];
		$result = $dbh->query("SELECT * FROM customer WHERE customer_email='$email' AND customer_password='$password'");
		$row=$result->fetch();
		$id=$row['customer_id'];
		$customer_firstname =$row['customer_firstname'];
		$customer_lastname= $row['customer_lastname'];
		$review_name=$customer_lastname."".$customer_firstname;
		$payment_result=$dbh->query("SELECT * FROM customer_payment WHERE customer_id='$id'");
		$address_result=$dbh->query("SELECT * FROM customer_address WHERE customer_id='$id'");
		$order_result=$dbh->query("SELECT * FROM orders WHERE order_customer_id='$id' ");
		$favourite_result=$dbh->query("SELECT * FROM favourite WHERE customer_id='$id' ");
		if (isset($_GET['hide'])) {
			$hide=$_GET['hide'];
			$dbh->query("UPDATE orders_item
						 SET order_item_hide ='1'
						 WHERE order_item_id ='$hide'");
			header("location:".$url1);
		}
		include "sections/nav.php";
		include "securePageForm.php";
	}else{
		header("location:index.php?content=login/login");
	}
}catch(PDOException $e){
    echo $e->getMessage();
    die();
}
?>
