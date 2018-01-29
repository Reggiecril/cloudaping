<div id="item-nav">
		<div id="item-category" onMouseOver="this.className='on'" onmouseleave="this.className=''">
			<div class="ld">
				<h2>All Products</h2><b></b>
			</div>
			<div id="allsort">
				<?php $result_laptop = $dbh->query("SELECT * FROM product_laptop");
						while ($laptop = $result_laptop->fetch()) {
							$_SESSION['laptop_brand'][]= $laptop['product_laptop_brand'];
		    				$_SESSION['laptop_graphicsCard'][]= $laptop['product_laptop_graphicsCard'];
		    				$_SESSION['laptop_cpu'][]= $laptop['product_laptop_cpu'];
		    				$_SESSION['laptop_size'][]= $laptop['product_laptop_size'];
						} 
				?>
				<div class="item-header" onMouseOver="this.className='item-header on'" onmouseleave="this.className='item-header'">
					<span><h3 style="width:197px;padding-left:10px;position:absolute;font-size:20px;font-weight: normal;"><a href="index.php?content=mainPages/product&product=laptop"  style="color:#333;">Laptop</a></h3></span>
					<div class="i-mc">
						<div class="sub">
							<dl>
								<dt style="width: 130px;display: inline-block;font-size: 16px;">Brand:<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left:10px;font-size:16px;line-height: 25px;"></i></dt>
								<dd style="width: 470px;display: inline-block;font-size: 16px;">
									<?php
									foreach(array_unique($_SESSION['laptop_brand']) as $v){
										echo '<a href="index.php?content=mainPages/product&product=laptop&category[brand]='.$v.'" style="font-size: 14px;line-height:20px;" >'.$v.'</a>';
	  								} 
	  								?>
								</dd>
							</dl>
							<dl>
								<dt style="width: 130px;display: inline-block;font-size: 16px;">GraphicsCard:<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left:10px;font-size:16px;line-height: 25px;"></i></dt>
								<dd style="width: 470px;display: inline-block;font-size: 16px;">
									<?php
									foreach(array_unique($_SESSION['laptop_graphicsCard']) as $v){
										echo '<a href="index.php?content=mainPages/product&product=laptop&category[graphicsCard]='.$v.'" style="font-size: 14px;line-height:20px;" >'.$v.'</a>';
	  								} 
	  								?>
								</dd>
							</dl>
							<dl>
								<dt style="width: 130px;display: inline-block;font-size: 16px;">CPU:<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left:10px;font-size:16px;line-height: 25px;"></i></dt>
								<dd style="width: 470px;display: inline-block;font-size: 16px;">
									<?php
									foreach(array_unique($_SESSION['laptop_cpu']) as $v){
										echo '<a href="index.php?content=mainPages/product&product=laptop&category[cpu]='.$v.'" style="font-size: 14px;line-height:20px;" >'.$v.'</a>';
	  								} 
	  								?>
								</dd>
							</dl>
							<dl>
								<dt style="width: 130px;display: inline-block;font-size: 16px;">Size:<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left:10px;font-size:16px;line-height: 25px;"></i></dt>
								<dd style="width: 470px;display: inline-block;font-size: 16px;">
									<?php
									foreach(array_unique($_SESSION['laptop_size']) as $v){
										echo '<a href="index.php?content=mainPages/product&product=laptop&category[size]='.$v.'" style="font-size: 14px;line-height:20px;" >'.$v.'</a>';
	  								} 
	  								?>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="item-header" onMouseOver="this.className='item-header on'" onmouseleave="this.className='item-header'">
					<span><h3><a href="#" style="font-size:20px;">Mobile</a></h3></span>
					<div class="i-mc">
						<dl>
							<dt><div class="product-category-column1" style="width: 30%;">Brand:</div></dt>
							<dd>
								<div class="product-category-column2">
									<a href="index.php?content=mainPages/product&product=laptop&category[brand]=">ss</a>
								</div>
							</dd>
						</dl>
					</div>
				</div>
				<div class="item-header" onMouseOver="this.className='item-header on'" onmouseleave="this.className='item-header'">
					<span><h3><a href="#" style="font-size:20px;">Computer</a></h3></span>
					<div class="i-mc">手机二级导航内容</div>
				</div>
				<div class="item-header" onMouseOver="this.className='item-header on'" onmouseleave="this.className='item-header'">
					<span><h3><a href="#" style="font-size:20px;">Camera</a></h3></span>
					<div class="i-mc">电脑二级导航内容</div>
				</div>
					<div class="item-header" onMouseOver="this.className='item-header on'" onmouseleave="this.className='item-header'">
						<span><h3><a href="#" style="font-size:20px;">Audio&Video</a></h3></span>
						<div class="i-mc">家居二级导航内容</div>
					</div>
					<div class="item-header" onMouseOver="this.className='item-header on'" onmouseleave="this.className='item-header'">
						<span><h3><a href="#" style="font-size:20px;">Others</a></h3></span>
						<div class="i-mc">男装二级导航内容</div>
					</div>
					<div class="item-header" onMouseOver="this.className='item-header on'" onmouseleave="this.className='item-header'">
						<span><h3><a href="#" style="font-size:20px;">Shops</a></h3></span>
						<div class="i-mc">鞋袜二级导航内容</div>
					</div>
					
				</div>
			</div>
			<div id="item-header-navigation">
				<li><a href="index.php">Home</a></li>
			</div>
		</div>
	</div>