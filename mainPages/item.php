<?php
	include 'sections/nav.php';
	try {
		$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
		$id = $_GET['id'];
		if (isset($_GET["product"])) {
			$product = $_SESSION['product'];
			$category = $_SESSION['category'];
			$result=$dbh->query("SELECT * FROM product WHERE product_id = ".$id."");
			$row = $result->fetch();
		}else{
			$result=$dbh->query("SELECT * FROM product WHERE product_id = ".$id."");
			$row = $result->fetch();
			$product=$row['product_type'];
		}
		$result_trader=$dbh->query("SELECT * FROM trader WHERE trader_id = ".$row['product_trader_id']."");
		$row_trader = $result_trader->fetch();
		include 'item/itemForm.php';
	}catch(PDOException $e){
		print $e->getMessage();
		ie();
	}
?>
