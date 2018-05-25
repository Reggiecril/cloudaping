<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	
		if (!empty($_GET['favourite'])) {
			if (isset($_SESSION['customer_id'])) {
			$string = $_SERVER['REQUEST_URI'];
	        $parts = parse_url($string);
	        $queryParams = array();
	        parse_str($parts['query'], $queryParams);
	        if(isset($queryParams['product_id'])) unset($queryParams['product_id']);
	        unset($queryParams['favourite']);
	        $queryString = http_build_query($queryParams);
	        $url2 = $parts['path'] . '?' . $queryString;
				$product_id=$_GET['product_id'];
				$customer_id= $_SESSION['customer_id'];
				$update=date("Y-m-d H:i:s");
				switch($_GET["favourite"]) {
					case "add":
						$query="SELECT * FROM favourite WHERE customer_id='$customer_id'";
						$r=mysqli_query($connection,$query);
						$count=mysqli_num_rows($r);
						$favourite_result=$dbh->query($query);
						if ($count ==0) {
							$dbh->query("INSERT INTO favourite (customer_id,product_id,favourite_updateDate) VALUES ('$customer_id','$product_id','$update')");
						}else{
							while($favourite_row=$favourite_result->fetch()){
								if ($favourite_row['product_id'] != $product_id) {
									$dbh->query("INSERT INTO favourite (customer_id,product_id,favourite_updateDate) VALUES ('$customer_id','$product_id','$update')");
								}
							}
						}
						header("location: ".$url2."");
					break;
					case "remove":
						$dbh->query("DELETE FROM favourite WHERE customer_id='$customer_id' AND product_id='$product_id'");
						header("location: ".$url2."");
					break;
					case "empty":
						$dbh->query("DELETE FROM favourite WHERE customer_id='$customer_id'");
						header("location: ".$url2."");
					break;
				}
			}else{
		echo "<div class='alert alert-danger text-center'>Please Log In!<a href='index.php?content=login/login' class='btn btn-danger'>Log In</a></div>";
		}
		}
}catch(PDOException $e){
	print $e->getMessage();
	die();
}
?>