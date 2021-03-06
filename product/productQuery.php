<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	$query= "SELECT * FROM product";
	if (isset($_GET['product'])) {
		$product = $_GET['product'];
		$query=$query." WHERE product_type='$product'";
		if (isset($_GET['category'])){
			$category = $_GET['category'];
			if ($product=='laptop') {
				foreach ($category as $key => $value) {
					$query=$query." AND product_id IN (select product_id from product_laptop where product_laptop_".$key."= '".$value."')";
				}
			}else if ($product=='mobile') {
				foreach ($category as $key => $value) {
					$query=$query." AND product_id IN (select product_id from product_mobile where product_mobile_".$key."= '".$value."')";
				}
			}else if ($product=='computer') {
				foreach ($category as $key => $value) {
					$query=$query." AND product_id IN (select product_id from product_computer where product_computer_".$key."= '".$value."')";
				}
			}else if ($product=='camera') {
				foreach ($category as $key => $value) {
					$query=$query." AND product_id IN (select product_id from product_camera where product_camera_".$key."= '".$value."')";
				}
			}else if ($product=='audiovideo') {
				foreach ($category as $key => $value) {
					$query=$query." AND product_id IN (select product_id from product_audiovideo where product_audiovideo_".$key."= '".$value."')";
				}
			}
			
		}
		if (isset($_GET['filter'])) {
				$filter =$_GET['filter'];
				if ($filter=='sell') {
					$query.=" ORDER BY product_sell DESC";
				}
				if ($filter=='reviews') {
					$query.=" ORDER BY product_sell DESC";
				}
				if ($filter=='update') {
					$query.=" ORDER BY product_updateDate DESC";
				}
				if ($filter=='price') {
					$query.=" ORDER BY product_nowPrice DESC";
				}
			}
		
	}else{
		echo "";
	}
	
}catch(PDOException $e){
	print $e->getMessage();
	die();
}
?>