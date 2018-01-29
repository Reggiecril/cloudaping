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
				<li data-id="5"> <a href="index.php?content=mainPages/product&product=audioVideo"><span>Audio&Video</span></a></li>
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
    			$mobile_brand = array();
    			$mobile_graphicsCard = array();
    			$mobile_cpu = array();
    			$mobile_size = array();
    			while ($mobile = $result_mobile->fetch()) {
    				$mobile_brand[]= $mobile['product_mobile_brand'];
    				$mobile_graphicsCard[]= $mobile['product_mobile_graphicsCard'];
    				$mobile_cpu[]= $mobile['product_mobile_cpu'];
    				$mobile_size[]= $mobile['product_mobile_size'];
    			}
    			/* computer */
    			$result_computer = $dbh->query("SELECT * FROM product_computer");
    			$computer_brand = array();
    			$computer_graphicsCard = array();
    			$computer_cpu = array();
    			$computer_size = array();
    			while ($computer = $result_computer->fetch()) {
    				$computer_brand[]= $computer['product_computer_brand'];
    				$computer_graphicsCard[]= $computer['product_computer_graphicsCard'];
    				$computer_cpu[]= $computer['product_computer_cpu'];
    				$computer_size[]= $computer['product_computer_size'];
    			}
    			/* camera */
    			$result_camera = $dbh->query("SELECT * FROM product_camera");
    			$camera_brand = array();
    			$camera_graphicsCard = array();
    			$camera_cpu = array();
    			$camera_size = array();
    			while ($camera = $result_camera->fetch()) {
    				$camera_brand[]= $camera['product_camera_brand'];
    				$camera_graphicsCard[]= $camera['product_camera_graphicsCard'];
    				$camera_cpu[]= $camera['product_camera_cpu'];
    				$camera_size[]= $camera['product_camera_size'];
    			}
    			/* camera */
    			$result_camera = $dbh->query("SELECT * FROM product_camera");
    			$camera_brand = array();
    			$camera_graphicsCard = array();
    			$camera_cpu = array();
    			$camera_size = array();
    			while ($camera = $result_camera->fetch()) {
    				$camera_brand[]= $camera['product_camera_brand'];
    				$camera_graphicsCard[]= $camera['product_camera_graphicsCard'];
    				$camera_cpu[]= $camera['product_camera_cpu'];
    				$camera_size[]= $camera['product_camera_size'];
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
							foreach($_SESSION['laptop_graphicsCard'] as $v){
								
								echo '<a href="index.php?content=mainPages/product&product=laptop&category[graphicsCard]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
					
				</dl>
					<dl>
					<dt><a >CPU<i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach($_SESSION['laptop_cpu'] as $v){
								echo '<a href="index.php?content=mainPages/product&product=laptop&category[cpu]='.$v.'">'.$v.'</a>';
  							} 
  						?>						
					</dd>
					
				</dl>
				<dl>
					<dt><a >Size：<i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach($_SESSION['laptop_size'] as $v){
								echo '<a href="index.php?content=mainPages/product&product=laptop&category[size]='.$v.'">'.$v.'</a>';
  							} 
  						?>
					</dd>
				</dl>
				<dl>
					<dt><a >Shop <i> &gt;</i></a> </dt>
					<dd>
						<?php 
							foreach($_SESSION['laptop_brand'] as $v){
								echo '<a href="index.php?content=mainPages/product&product=laptop&category=brand">'.$v.'</a>';
  							} 
  						?>
						
					</dd>
					
				</dl>
			</div>
			<div class="sub hide" data-id="2">
				<dl>
					<dt><a >Brand: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Size: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
						
					</dd>
				</dl>
				<dl>
					<dt><a >System: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
						
					</dd>
				</dl>
				<dl>
					<dt><a >Pixel: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
						
					</dd>
				</dl>
				<dl>
					<dt><a >Shop: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
						
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="3">
				<dl>
					<dt><a >Brand: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Case: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Screen: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >CPU: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Graphics Card: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="4">
				<dl>
					<dt><a >Brand: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Type: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Pixel: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Other: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">Lenses</a>
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="5">
				<dl>
					<dt><a >Headset: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">Bluetooth</a>
					</dd>
				</dl>
				<dl>
					<dt><a >VR:  <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Speakers: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >收音机: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >麦克风： <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >MP3/MP4： <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Tablet： <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="6">
				<dl>
					<dt><a >X-Box: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >PSP: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Screen: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >CPU: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
				<dl>
					<dt><a >Graphics Card: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
			</div>
			<div class="sub hide" data-id="7">
				<dl>
					<dt><a >X-Box: <i> &gt;</i></a> </dt>
					<dd>
						<a href="index.php?content=mainPages/product">官方直售</a>
					</dd>
				</dl>
			</div>	
		</div> 
		<?php
		}catch(PDOException $e){

			    print $e->getMessage();
			    die();
			}
    	
		?>
	</div>
	<div class="home-rank">
		<div class="home-rank-title">
			<p>Popular</p>
		</div>
	</div>
	<div class="home-like">
		<div class="home-like-title">
			<p>You May Like</p>
		</div>
	</div>
</section>
