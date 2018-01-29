<?php
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $string = $_SERVER['HTTP_REFERER'];
	$parts = parse_url($string);
	$queryParams = array();
	parse_str($parts['query'], $queryParams);
	if(isset($queryParams['remove'])) unset($queryParams['remove']);
	$queryString = http_build_query($queryParams);
	$url1 = $parts['path'] . '?' . $queryString;
	if (isset($_GET['remove'])) {
		$product_id=$_GET['remove'];
		$dbh->query("INSERT INTO old_product(product_id,old_product_name,old_product_type,old_product_originPrice,old_product_nowPrice,old_product_quantity,old_product_category,old_product_mainImage,old_product_trader_id,old_product_updateDate,old_product_sell) select * from product WHERE product_id='$product_id'");
		$dbh->query("DELETE FROM product WHERE product_id='$product_id'");
		header("location:".$url1);
	}
}catch(PDOException $e){
    echo $e->getMessage();
    die();
}
?>