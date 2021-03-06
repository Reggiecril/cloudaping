<?php
	include "product/productQuery.php";
	include 'sections/nav.php';
?>
<?php
	if (isset($_GET['product'])) {
		$_SESSION['product'] = $_GET['product'];
		if (isset($_GET['category'])) {
			$_SESSION['category'] = $_GET['category'];
		}
		else{
			$_SESSION['category']='';
		}
	}else{
		$_SESSION['product']='';
	}
?>
<div class="product-ad">
	<div class="product-ad-title">
		<strong><p>You</p></strong>
		<strong><p>May</p></strong>
		<strong><p>Like</p></strong>
	</div>
		<?php
		if (isset($_GET['product'])) {
			$product = $_GET['product'];
			$like_result = $dbh->query("SELECT * FROM product WHERE product_type = '$product' LIMIT 3");
			while ($like_row=$like_result->fetch()) {
				echo '<div class="product-ad-module">
						<img src="assets/images/'.$like_row['product_mainImage'].'" alt="log" width="100" height="100">
						<div class="product-ad-module-description">
							<div class="product-ad-module-description-title"><a href="index.php?content=mainPages/item&id='.$like_row['product_id'].'">'.$like_row['product_name'].'</a></div>
							<div class="product-ad-module-description-price">GBP:  '.$like_row['product_nowPrice'].'</div>
							<div class="product-ad-module-description-button"><a href="'.$url.'&action=add&theid='.$like_row['product_id'].'&quantity=1">Add To Cart</a></div>
						</div>
					</div>';
			}
		}
			
		?>
</div>
<div class="product-category-title">
	<div class="product-category-title-content ">
		<?php
		try {
			$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
			if (isset($_GET['product'])) {
				$product = $_GET['product'];
				echo '<div class="product-category-title-first"><a href="index.php?content=mainPages/product&product='.$product.'">'.$product.'</a></div>'; 
				if (isset($_GET['category'])) {
					$category = $_GET['category'];
					$s = '';
					foreach ($category as $key => $value) {
						$s.= "&category[".$key."]=".$value."";
						echo '<div class="product-category-title-sign"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
							<div class="product-category-title-last"><a href="index.php?content=mainPages/product&product='.$product.''.$s.'">'.$value.'</a></div>';
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
	</div>
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
	<div class="product-left">
		<div class="product-category">
			<?php
			if (isset($_GET['product'])) {
				if (!isset($_GET['category'])) {
						include "product/productNoCategory.php";
				}else{
					if($product=='laptop'){
						include "product/product-laptop.php";
					}else if ($product=='mobile') {
						include "product/product-mobile.php";
					}else if ($product=='computer') {
						include "product/product-computer.php";
					}else if ($product=='camera') {
						include "product/product-camera.php";
					}else if ($product=='audiovideo') {
						include "product/product-audiovideo.php";
					}


				}	
			}
			?>
		</div>		
		<div class="product-filter">
			<a href="index.php?content=mainPages/product<?php if (isset($_GET['product'])){ $product=$_GET['product'];echo "&product=".$product;}if (isset($_GET['category'])) {
			$category=$_GET['category'];
			
			foreach ($category as $key => $value) {
				echo "&category[".$key."]=".$value;
			}
			
		} ?>&filter=sell" class="btn btn-danger">Sell</a>
			<a href="index.php?content=mainPages/product<?php if (isset($_GET['product'])){ $product=$_GET['product'];echo "&product=".$product;}if (isset($_GET['category'])) {
			$category=$_GET['category'];
			
			foreach ($category as $key => $value) {
				echo "&category[".$key."]=".$value;
			}
			
		} ?>&filter=reviews" class="btn btn-danger">Reviews</a>
			<a href="index.php?content=mainPages/product<?php if (isset($_GET['product'])){ $product=$_GET['product'];echo "&product=".$product;}if (isset($_GET['category'])) {
			$category=$_GET['category'];
			
			foreach ($category as $key => $value) {
				echo "&category[".$key."]=".$value;
			}
			
		} ?>&filter=update" class="btn btn-danger">Update Date</a>
			<a href="index.php?content=mainPages/product<?php if (isset($_GET['product'])){ $product=$_GET['product'];echo "&product=".$product;}if (isset($_GET['category'])) {
			$category=$_GET['category'];
			
			foreach ($category as $key => $value) {
				echo "&category[".$key."]=".$value;
			}
			
		} ?>&filter=price" class="btn btn-danger">Price</a>
		</div>
		<div class="product-goods">
			 <?php
			 	try {
					$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
		            $result = $dbh->query($query);
		            while ($row = $result->fetch()){
		               echo '
		               	<div class="product-goods-item">
							<a href="index.php?content=mainPages/item&id='.$row['product_id'].'"><img src="assets/images/'.$row["product_mainImage"].'" alt="log" width="220" height="220"></a>
							<div class="product-goods-price">
								£'.$row["product_nowPrice"].'
							</div>
							<div class="product-goods-sell">
								Sales:'.$row["product_quantity"].'
							</div>
							<div class="product-goods-name">
								<a href="index.php?content=mainPages/item&id='.$row['product_id'].'">'.$row["product_name"].'</a>
							</div>
							<div class="product-goods-trader">
								<a href="javascript:void()"><i class="fa fa-user-circle-o" aria-hidden="true"></i>'.$row["product_trader_id"].'</a>
							</div>
						</div>
		               ';
		            }

		        }catch(PDOException $e){

		            print $e->getMessage();
		            die();
		        }
            
		        	
        		?>
		</div>
		
	</div>
	
</div>	
<?php
if (isset($_GET['filter'])) {
						echo '<script type="text/javascript">
						$(document).ready(function(){
						    $("html,body").scrollTop(800);
						});
						</script>';
					}
?>