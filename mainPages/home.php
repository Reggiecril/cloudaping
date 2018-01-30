<script type="text/javascript">
$(function(){
	$(".header-column1").hide();
	$(".fa-search").click(function(){
		$(".header-column1").toggle(
			function(){
				$(this).closest(".header-column1").find(".header-column1").slideUp();
			},
			function(){
				$(this).closest(".header-column1").find(".header-column1").slideDown();
			}
		);
	});
});
</script>
<section class="home-section">
	<div style="height: 40px;width: 100%; font-size: 28px;padding: 10px; color: #D52341;">
		<p> <i class="fa fa-bars" aria-hidden="true"></i>   Products</p>
	</div>

	<div class="flexslider">
		<ul class="slides">
			<li><a href="index.php?content=mainPages/product"><img src="assets/images/d7e5ee71fa9452b10dbcda80c0b5f3c4.jpg" height="500" width="1000px"></a></li>
			<li><a href="index.php?content=mainPages/product"><img src="assets/images/xbox one commercial $399.png" height="500" width="1000px"></a></li>
			<li><a href="index.php?content=mainPages/product"><img src="assets/images/beats-ad-800x332.jpg" height="500" width="1000px"></a></li>
			<li><a href="index.php?content=mainPages/product"><img src="assets/images/Screen-Shot-2014-01-02-at-4.27.12-AM.png" height="500" width="1000px"></a></li>
			<li><a href="index.php?content=mainPages/product"><img src="assets/images/1491587284_screen_shot_2017-04-07_at_10.47.03_am.jpg" height="500" width="1000px"></a></li>
		</ul>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.flexslider').flexslider({
				directionNav: true,
				pauseOnAction: false
			});
		});
	</script>

	<div class="containor">
		<div class="nav_left">
			<ul>
				<li data-id="1"> <a href="index.php?content=mainPages/product&product=laptop"><span>Laptop</span></a></li>
				<li data-id="2"> <a href="index.php?content=mainPages/product&product=mobile"><span>Mobile</span></a></li>
				<li data-id="3"> <a href="index.php?content=mainPages/product&product=computer"><span>Computer</span></a></li>
				<li data-id="4"> <a href="index.php?content=mainPages/product&product=camera"><span>Camera</span></a></li>
				<li data-id="5"> <a href="index.php?content=mainPages/product&product=audio&video"><span>Audio&Video</span></a></li>
				<li data-id="6"> <a href="index.php?content=mainPages/product&product=others"><span>Others</span></a></li>
				<li data-id="7"> <a href="index.php?content=mainPages/product&product=shops"><span>Shops</span></a></li>
			</ul>
		</div>
		<?php
			try {

    			$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    			/* laptop */
    			$result_laptop = $dbh->query("SELECT * FROM product_laptop");
    			$_SESSION['laptop_brand'] = array();
    			$_SESSION['laptop_graphicsCard'] = array();
    			$_SESSION['laptop_cpu'] = array();
    			$_SESSION['laptop_size'] = array();
    			while ($laptop = $result_laptop->fetch()) {
    				$_SESSION['laptop_brand'][]= $laptop['product_laptop_brand'];
    				$_SESSION['laptop_graphicsCard'][]= $laptop['product_laptop_graphicsCard'];
    				$_SESSION['laptop_cpu'][]= $laptop['product_laptop_cpu'];
    				$_SESSION['laptop_size'][]= $laptop['product_laptop_size'];
    			}
    			/* mobile */
    			$result_mobile = $dbh->query("SELECT * FROM product_mobile");
    			$_SESSION['mobile_brand'] = array();
    			$_SESSION['mobile_size'] = array();
    			$_SESSION['mobile_system'] = array();
    			$_SESSION['mobile_pixel'] = array();
    			while ($mobile = $result_mobile->fetch()) {
    				$_SESSION['mobile_brand'][]= $mobile['product_mobile_brand'];
    				$_SESSION['mobile_size'][]= $mobile['product_mobile_size'];
    				$_SESSION['mobile_system'][]= $mobile['product_mobile_system'];
    				$_SESSION['mobile_pixel'][]= $mobile['product_mobile_pixel'];
    			}
    			/* computer */
    			$result_computer = $dbh->query("SELECT * FROM product_computer");
    			$_SESSION['computer_brand'] = array();
    			$_SESSION['computer_case'] = array();
    			$_SESSION['computer_screen'] = array();
    			$_SESSION['computer_cpu'] = array();
    			$_SESSION['computer_graphicsCard'] = array();
    			while ($computer = $result_computer->fetch()) {
    				$_SESSION['computer_brand'][]= $computer['product_computer_brand'];
    				$_SESSION['computer_case'][]= $computer['product_computer_case'];
    				$_SESSION['computer_screen'][]= $computer['product_computer_screen'];
    				$_SESSION['computer_cpu'][]= $computer['product_computer_cpu'];
    				$_SESSION['computer_graphicsCard'][]= $computer['product_computer_graphicsCard'];
    			}
    			/* camera */
    			$result_camera = $dbh->query("SELECT * FROM product_camera");
    			$_SESSION['camera_brand'] = array();
    			$_SESSION['camera_type'] = array();
    			$_SESSION['camera_pixel'] = array();
    			while ($camera = $result_camera->fetch()) {
    				$_SESSION['camera_brand'][]= $camera['product_camera_brand'];
    				$_SESSION['camera_type'][]= $camera['product_camera_type'];
    				$_SESSION['camera_pixel'][]= $camera['product_camera_pixel'];
    			}
    			/* audio&video */
    			$result_audioVideo = $dbh->query("SELECT * FROM product_audiovideo GROUP BY product_audiovideo_type");
    			$_SESSION['audiovideo_type']  = array();
    			while ($audioVideo = $result_audioVideo->fetch()) {
    				$_SESSION['audiovideo_type'][]= $audioVideo['product_audiovideo_type'];
    				
    			}
    			
		?>
		<div class="nav_right">
			<div class="sub hide" data-id="1">
				<dl>
					<dt><a href="javascript:void()">Brand:<i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['laptop_brand']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=laptop&category[brand]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
					
				</dl>
					<dl>
					<dt><a >Graphics card:<i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['laptop_graphicsCard']) as $v){
								
								echo '<a href="index.php?content=mainPages/product&product=laptop&category[graphicsCard]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
					
				</dl>
					<dl>
					<dt><a >CPU<i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['laptop_cpu']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=laptop&category[cpu]='.$v.'">'.$v.'</a>';
  							} 
  						?>						
					</dd>
					
				</dl>
				<dl>
					<dt><a >Size：<i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['laptop_size']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=laptop&category[size]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				
			</div>
			<div class="sub hide" data-id="2">
				<dl>
					<dt><a >Brand: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['mobile_brand']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=mobile&category[brand]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >Size: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['mobile_size']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=mobile&category[size]='.$v.'">'.$v.'</a>';
  							} 
  						?>
						
					</dd>
				</dl>
				<dl>
					<dt><a >System: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['mobile_system']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=mobile&category[system]='.$v.'">'.$v.'</a>';
  							} 
  						?>
						
					</dd>
				</dl>
				<dl>
					<dt><a >Pixel: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['mobile_pixel']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=mobile&category[pixel]='.$v.'">'.$v.'</a>';
  							} 
  						?>
						
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="3">
				<dl>
					<dt><a >Brand: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['computer_brand']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=computer&category[brand]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >Case: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['computer_case']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=computer&category[case]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >Screen: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['computer_screen']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=computer&category[screen]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >CPU: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['computer_cpu']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=computer&category[cpu]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >Graphics Card: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['computer_graphicsCard']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=computer&category[graphicsCard]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="4">
				<dl>
					<dt><a >Brand: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['camera_brand']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=camera&category[brand]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >Type: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['camera_type']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=camera&category[type]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >Pixel: <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach(array_unique($_SESSION['camera_pixel']) as $v){
								echo '<a href="index.php?content=mainPages/product&product=camera&category[pixel]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="5">
				<?php 
				foreach(array_unique($_SESSION['audiovideo_type']) as $v){
					$re=$dbh->query("SELECT * FROM product_audiovideo WHERE product_audiovideo_type='".$v."'");
					echo "<dl>
								<dt><a >".$v.": <i> &gt;</i></a> </dt><dd>";
					$_SESSION['audiovideo_brand']=array();
					while($ow=$re->fetch()){
						$_SESSION['audiovideo_brand'][]= $ow['product_audiovideo_brand'];
						echo "
								<a href='index.php?content=mainPages/product&product=audiovideo&category[type]=".$v."&category[brand]=".$ow['product_audiovideo_brand']."'>".$ow['product_audiovideo_brand']."</a>
						";
					}
					echo "</dd></dl>";
  				} 
  				?>

			</div>
			<div class="sub hide" data-id="7">
				<dl>
					<dt><a >X-Box: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">a</a>
					</dd>
				</dl>
			</div>	
		</div> 
		
	</div>
	<div class="home-rank">
		<div class="home-rank-title">
			<p>Popular</p>
		</div>
		<div class="home-rank-content">
			<?php
			$rank_result=$dbh->query("SELECT * FROM product WHERE product_category='popular' ORDER BY rand() LIMIT 15");
			while ($rank_row=$rank_result->fetch()) {
				
			?>
			<div class="home-rank-item">
				<a href="index.php?content=mainPages/item&id=<?php echo $rank_row['product_id']; ?>" >
					<div class="home-rank-item-image">
					<img src="assets/images/<?php echo $rank_row['product_mainImage']; ?>" width="142px" height="142px">
					</div>
					<div class="home-rank-item-product">
						<?php echo $rank_row['product_name'];?>
					</div>
					<div class="home-rank-item-price">
						<?php echo "£".$rank_row['product_nowPrice'];?>
					</div>
				</a>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<div class="home-rank">
		<div class="home-rank-title">
			<p>New</p>
		</div>
		<div class="home-rank-content">
			<?php
			$new_result=$dbh->query("SELECT * FROM product WHERE product_category='new' ORDER BY rand() LIMIT 15");
			while ($new_row=$new_result->fetch()) {
				
			?>
			<div class="home-rank-item">
				<a href="index.php?content=mainPages/item&id=<?php echo $new_row['product_id']; ?>" >
					<div class="home-rank-item-image">
					<img src="assets/images/<?php echo $new_row['product_mainImage']; ?>" width="142px" height="142px">
					</div>
					<div class="home-rank-item-product">
						<?php echo $new_row['product_name'];?>
					</div>
					<div class="home-rank-item-price">
						<?php echo "£".$new_row['product_nowPrice'];?>
					</div>
				</a>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<div class="home-rank">
		<div class="home-rank-title">
			<p>Recommend</p>
		</div>
		<div class="home-rank-content">
			<?php
			$recommend_result=$dbh->query("SELECT * FROM product WHERE product_category='recommend' ORDER BY rand() LIMIT 15");
			while ($recommend_row=$recommend_result->fetch()) {
				
			?>
			<div class="home-rank-item">
				<a href="index.php?content=mainPages/item&id=<?php echo $recommend_row['product_id']; ?>" >
					<div class="home-rank-item-image">
					<img src="assets/images/<?php echo $recommend_row['product_mainImage']; ?>" width="142px" height="142px">
					</div>
					<div class="home-rank-item-product">
						<?php echo $recommend_row['product_name'];?>
					</div>
					<div class="home-rank-item-price">
						<?php echo "£".$recommend_row['product_nowPrice'];?>
					</div>
				</a>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<div class="home-like">
		<div class="home-like-title">
			<p>You May Like</p>
		</div>
		<div class="home-rank-content">
			<?php
			$like_result=$dbh->query("SELECT * FROM product ORDER BY rand() LIMIT 15");
			while ($like_row=$like_result->fetch()) {
				
			?>
			<div class="home-rank-item">
				<a href="index.php?content=mainPages/item&id=<?php echo $like_row['product_id']; ?>" >
					<div class="home-rank-item-image">
					<img src="assets/images/<?php echo $like_row['product_mainImage'];?>" width="142px" height="142px">
					</div>
					<div class="home-rank-item-product">
						<?php echo "£".$like_row['product_name'];?>
					</div>
					<div class="home-rank-item-price">
						<?php echo "£".$like_row['product_nowPrice'];?>
					</div>
				</a>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
<?php
}catch(PDOException $e){
	print $e->getMessage();
	die();
}
    	
?>