<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	$query=$_SESSION['query'];
	include 'sections/nav.php';
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
?>
<div class="product-ad">
	<div class="product-ad-title">
		<strong><p>You</p></strong>
		<strong><p>May</p></strong>
		<strong><p>Like</p></strong>
	</div>
		<?php
			$like_result = $dbh->query("SELECT * FROM product LIMIT 3");
			while ($like_row=$like_result->fetch()) {
				echo '<div class="product-ad-module">
						<img src="assets/images/'.$like_row['product_mainImage'].'" alt="log" width="100" height="100">
						<div class="product-ad-module-description">
							<div class="product-ad-module-description-title"><a href="index.php?content=mainPages/item&id='.$like_row['product_id'].'">'.$like_row['product_name'].'</a></div>
							<div class="product-ad-module-description-price">GBP:  '.$like_row['product_nowPrice'].'</div>
							<div class="product-ad-module-description-button"><a href="index.php?content=mainPages/home&action=add&theid='.$like_row['product_id'].'&quantity=1">Add To Cart</a></div>
						</div>
					</div>';
			}
		?>
</div>

<div class="product-content">
	<div class="product-right">
		<div class="product-rank-title">Popular Goods</div>
		<?php
		$rank_result = $dbh->query("SELECT * FROM product LIMIT 6");
		while($rank_row = $rank_result->fetch()){
			echo '<div class="product-rank-image">
						<img src="assets/images/'.$rank_row['product_mainImage'].'" alt="log" width="250" height="250">
						<div class="product-rank-image-description">
							<a href="index.php?content=mainPages/item&id='.$rank_row['product_id'].'">'.$rank_row['product_name'].'</a>
							<div style="color:#D52341;position:absolute;right:0;bottom:0;">GBP:  '.$rank_row['product_nowPrice'].'</div>
						</div> 
					</div>';
		}
		?>
		
	</div>
		
		<div class="product-filter">
			<a href="index.php?content=sections/searchPage&filter=sell" class="btn btn-danger">Sell</a>
			<a href="index.php?content=sections/searchPage&filter=reviews" class="btn btn-danger">Reviews</a>
			<a href="index.php?content=sections/searchPage&filter=update" class="btn btn-danger">Update Date</a>
			<a href="index.php?content=sections/searchPage&filter=price" class="btn btn-danger">Price</a>
		</div>
		<div class="product-goods">
			 <?php

					$result=$dbh->query($query);
		            while ($row = $result->fetch()){
		            	$trader_result=$dbh->query("SELECT * FROM trader WHERE trader_id = ".$row['product_trader_id']."");
		            	$trader_row=$trader_result->fetch();
		               echo '
		               	<div class="product-goods-item">
							<a href="index.php?content=mainPages/item&id='.$row['product_id'].'"><img src="assets/images/'.$row["product_mainImage"].'" alt="log" width="220" height="220"></a>
							<div class="product-goods-price">
								£'.$row["product_nowPrice"].'
							</div>
							<div class="product-goods-sell">
								Sales:'.$row["product_sell"].'
							</div>
							<div class="product-goods-name">
								<a href="index.php?content=mainPages/item&id='.$row['product_id'].'">'.$row["product_name"].'</a>
							</div>
							<div class="product-goods-trader">
								<a href="javascript:void()"><i class="fa fa-user-circle-o" aria-hidden="true"></i>'.$trader_row["trader_name"].'</a>
							</div>
						</div>
		               ';
		            }

        		?>
		</div>
		
	</div>
	
</div>
<?php 	
if (isset($_GET['filter'])) {
	echo '<script type="text/javascript">
	$(document).ready(function(){
	    $("html,body").scrollTop(400);
	});
	</script>';
}
}catch(PDOException $e){
	print $e->getMessage();
	die();
}
?>	
?>