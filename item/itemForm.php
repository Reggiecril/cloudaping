<div class="crumb-wrap" id="crumb-wrap">
	<div class="crumb-wrap-content">
		<div class="crumb-wrap-title">
			<?php
						echo '<div class="product-category-title-first"><a href="index.php?content=mainPages/product&product='.$product.'">'.$product.'</a></div>'; 
							$s = '';
							if (isset($_GET['category'])) {
								foreach ($category as $key => $value) {
								$s.= "&category[".$key."]=".$value."";
								echo '<div class="product-category-title-sign"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
									<div class="product-category-title-last"><a href="index.php?content=mainPages/product&product='.$product.''.$s.'">'.$value.'</a></div>';
								}
							}
							echo '<div class="product-category-title-sign"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
									<div class="product-category-title-last"><a href="javascript:void();">'.$id.'</a></div>';
						
				
			?>
		</div>
		<div class="crumb-wrap-left">
			<i class="fa fa-users" aria-hidden="true" style="color: #D52341;padding: 0 0 0 10px;"></i><a href="#"> <?php echo $row_trader['trader_name']; ?></a>
			<i class="fa fa-commenting" aria-hidden="true" style="color: #D52341;padding: 0 0 0 10px;"></i><a href="#"> Communication</a>
			<i class="fa fa-star" aria-hidden="true" style="color: #D52341;padding: 0 0 0 10px"></i><a href="<?php $url3=$_SERVER['REQUEST_URI']; echo $url3."&favourite=add&product_id=".$id; ?>"> Add Favorite</a>

		</div>
	</div>
</div>
	
<div class="item-description">
  	<div class="item-image-left">
		<div class="shang">
			<img src="assets/images/<?php echo $row['product_mainImage']; ?>" height="350" width="350" id="pian">
			<div class="yin"></div>
		</div>
		<div class="bao">
	    	<span class="item-image-left-tab-left"><img src="assets/images/disabled-prev.png" width="30px" height="50px"></span>
		    <div class="item-image-left-tab">
		      <ul class="item-image-left-tab-Ul">
		        <li>
		          <img src="assets/images/<?php echo $row['product_mainImage']; ?>" height="52" width="52" />
		        </li>
		        <li>
		          <img src="assets/images/61ikAJnULvL._SL1000_.jpg" height="52" width="52" />
		        </li>
		        <li>
		          <img src="assets/images/61ikAJnULvL._SL1000_.jpg" height="52" width="52" />
		        </li>
		        <li>
		          <img src="assets/images/61ikAJnULvL._SL1000_.jpg" height="52" width="52" />
		        </li>
		        <li>
		          <img src="assets/images/61ikAJnULvL._SL1000_.jpg" height="52" width="52" />
		        </li>
		        <li>
		          <img src="assets/images/61ikAJnULvL._SL1000_.jpg" height="52" width="52" />
		        </li>
		        <li>
		          <img src="assets/images/61ikAJnULvL._SL1000_.jpg" height="52" width="52" />
		        </li>
		        <li>
		          <img src="assets/images/61rA2AmrIfL._SL1000_.jpg" height="52" width="52" />
		        </li>
		      </ul>
		    </div>
      		<span class="item-image-left-tab-right"><img src="assets/images/disabled-next.png" width="30px" height="50px"></span>
    	</div>
  	</div>
  	<div class="item-image-right">
    	<img src="assets/images/<?php echo $row['product_mainImage']; ?>" height="600" width="600" id="zhao" />
  	</div>
  	<div class="item-description-word">
  		<h3><?php echo $row['product_name']; ?></h3>
  			<?php
			$total=0;
			$review_rating_query="SELECT * FROM review WHERE product_id=".$id."";
			$review_rating_result=$dbh->query($review_rating_query);
			$r=mysqli_query($connection,$review_rating_query);
			$count1=mysqli_num_rows($r);
			if ($count1!=0) {
				while($review_rating_row=$review_rating_result->fetch()){
					$total+=$review_rating_row['customer_rating'];
				}
				$rating= $total/$count1;
			}else{
				$rating=0;
			}
						
					?>
  		<div class="item-price">
  			<div class="item-price-reviews" >
  					<p style="color: #E4393C">Reviews</p>
  					<p style="text-align: center;"><?php echo "+ ".$count1;?></p>
  			</div>
  			<div class="item-price-origin">
  				<?php
  				if (!$row['product_originPrice'] == '') {
  					echo '<p style="display: inline-block; color: #aaa">Origin price :</p>
  					  	<del style="display: inline-block;color: #E4393C;">£'.$row['product_originPrice'].'</del>';
  				}
  				
  				?>
  				
  			</div>
  			<div class="item-price-now">
  				<h2 style="display: inline-block;color:#E4393C">Now :</h2>
  				<p style="display: inline-block; color: #E4393C;">£<?php echo $row['product_nowPrice']; ?></p>
  			</div>
  			
  		</div>
  		<div class="item-category">
  			<div class="item-rating">
	  			<p style="color: #aaa">Ratings : </p>
									<button type="button" class="btn btn-default <?php if($rating>0.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>1.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>2.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>3.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>4.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
								
  			</div>
  			<div class="item-category-color">
  				<p>Color :</p> yellow
  			</div>
  			<form method="post" action="index.php?content=mainPages/item&id=<?php echo $id; ?>&action=add&theid=<?php echo $id; ?>"> 
  			<div class="item-category-quantity">
  			
	  				<p>Quantity :</p>
	  				<input class="min" name="" type="button" value="-" />  
					<input name="item-category-quantity" type="text" value="1" /> 
					<input class="add" name="" type="button" value="+" /> 
  			
  			</div>
  			<div class="item-cart">
  				<input type="submit" name="item-cart" value="Add To Cart">
  			</div>
  			<div class="item-buy">
  				<a href="index.php?content=mainPages/checkout&id=<?php echo $id; ?>&action=add&theid=<?php echo $id; ?>&quantity=1" style="text-decoration: none;">Buy Now</a>
  			</div>
  			</form>
  		</div>
  	</div>
  	<div class="item-right">
  		<div class="item-right-title"> 
  			-----See More-----
  		</div>
  		
  			<?php
  				$right_result = $dbh->query("SELECT * FROM product WHERE product_id != '$id' LIMIT 3");
				while($right_row = $right_result->fetch()){
				
  			?>
  		<div class="item-right-image">
  			<img src="assets/images/<?php echo $right_row['product_mainImage']; ?>" width="150" height="150">
			<div class="item-right-image-description">
				<a href="index.php?content=mainPages/item&id=<?php echo $right_row['product_id']; ?>"><?php echo $right_row['product_name']; ?></a>
				<div style="color:#D52341;position:absolute;right:0;bottom:0;">GBP:  <?php echo $right_row['product_nowPrice']; ?></div>
			</div>
		</div>
			<?php
				}
			?>
  		
  	</div>
</div>  
<div class="item-down">
	<div class="item-down-left">
		<p style="border-bottom: 1px solid #ddd;padding: 10px 0 10px 0;">We recommend</p>
		<?php
	  		$down_left_result = $dbh->query("SELECT * FROM product WHERE product_id != '$id' AND product_trader_id = ".$row['product_trader_id']." LIMIT 6");
			while($down_left_row = $down_left_result->fetch()){
  		?>
		<a href="index.php?content=mainPages/item&id=<?php echo $down_left_row['product_id']; ?>"><img src="assets/images/<?php echo $down_left_row['product_mainImage']; ?>" width="180px" height="180px;"></a>
		<a href="index.php?content=mainPages/item&id=<?php echo $down_left_row['product_id']; ?>" style="text-align: center;"><?php echo $down_left_row['product_name']; ?></a>
		<h3 style="color: #D52341; text-align: center; margin-top: 10px;">£<?php echo $down_left_row['product_nowPrice']; ?></h3>
		<?php } ?>
	</div>

	<div class="item-down-right">
		<div class="item-down-right-all">
				<div class="item-down-right-tab">
			    	<a href="javascript:;" class="on">Description</a>
			        <a href="javascript:;">Reviews(<?php echo $count1; ?>)</a>
			        <a href="javascript:;">Records</a>
			        <a href="javascript:;">Others</a>
			    </div>
			    <div class="item-down-right-content">
			    	<ul>
			    		<?php
			    			$product_detail_result=$dbh->query("SELECT * FROM product_description WHERE product_id =".$id."");
			    			$product_detail_row=$product_detail_result->fetch();
			    		?>
			        	<li><blockquote class="blockquote">
							  <p class="mb-0"><?php echo $product_detail_row['product_detail']; ?></p>
							</blockquote></li>
			            <li>
			            	<div class="col-sm-5">
								<div class="rating-block">
									<h4>Average Rating</h4>
									<h2 class="bold padding-bottom-7"><?php echo $rating; ?> <small>/ 5</small></h2>
									<button type="button" class="btn btn-default <?php if($rating>0.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>1.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>2.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>3.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-default <?php if($rating>4.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-sm" aria-label="Left Align">
									  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</button>
								</div>
							</div>
							<div class="col-sm-5">
								<h4>Rating breakdown</h4>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
											<span class="sr-only">80% Complete (primary)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;">1</div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
											<span class="sr-only">80% Complete (primary)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;">1</div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
											<span class="sr-only">80% Complete (primary)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;">0</div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
											<span class="sr-only">80% Complete (primary)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;">0</div>
								</div>
								<div class="pull-left">
									<div class="pull-left" style="width:35px; line-height:1;">
										<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
									</div>
									<div class="pull-left" style="width:180px;">
										<div class="progress" style="height:9px; margin:8px 0;">
										  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
											<span class="sr-only">80% Complete (primary)</span>
										  </div>
										</div>
									</div>
									<div class="pull-right" style="margin-left:10px;">0</div>
								</div>
							</div>
							<div class="col-sm-10">
								<hr/>
								<div class="review-block">
									<?php
										$review_result=$dbh->query("SELECT * FROM review WHERE product_id =".$id."");
										while($review_row=$review_result->fetch()){
									?>
									<div class="row" style="margin-bottom: 20px;margin-top: 20px; border-bottom: 2px dotted #eee;">

										<div class="col-sm-2" style="height: 100px;">
											<div class="review-block-name"><h4 href="#"><?php echo $review_row['customer_name']; ?></h4></div>
											<div class="review-block-date"><?php echo $review_row['review_updateDate']; ?><br/>1 day ago</div>
										</div>
										<div class="col-sm-14">
											<div class="review-block-rate">
												<button type="button" class="btn <?php if($review_row['customer_rating']>=0.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-xs" aria-label="Left Align">
												  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
												<button type="button" class="btn <?php if($review_row['customer_rating']>=1.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-xs" aria-label="Left Align">
												  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
												<button type="button" class="btn <?php if($review_row['customer_rating']>=2.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-xs" aria-label="Left Align">
												  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
												<button type="button" class="btn <?php if($review_row['customer_rating']>=3.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-grey btn-xs" aria-label="Left Align">
												  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
												<button type="button" class="btn <?php if($review_row['customer_rating']>=4.5) echo "btn-danger"; else echo "btn-grey"; ?> btn-grey btn-xs" aria-label="Left Align">
												  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											</div>
											<div class="review-block-title"><?php echo $review_row['review_title']; ?></div>
											<div class="review-block-description"><?php echo $review_row['review_content']; ?></div>
										</div>
									</div>	
									<?php
										}
									?>
								</div>	
							</div>	
			            </li>
			            <li>
			            	<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col" class="text-left">Product</th>
							      <th scope="col">Trader</th>
							      <th scope="col">Quantity</th>
							      <th scope="col" class="text-right">Customer</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
								  	$order_item_result=$dbh->query("SELECT * FROM orders_item WHERE order_item_product=".$id."");
								  	while ($order_item_row=$order_item_result->fetch()) {
								  		$order=$dbh->query("SELECT * FROM customer WHERE customer_id=(select order_customer_id from orders where order_id=".$order_item_row['order_id'].")");
								  		$order_row=$order->fetch();

							  	?>
							    <tr>
							      <td scope="row" class="text-left"><img src="assets/images/<?php echo $row['product_mainImage']; ?>" height="50" width="50"></td>
							      <td><?php echo $row_trader['trader_name']; ?></td>
							      <td><?php echo $order_item_row['order_item_quantity']; ?></td>
							      <td class="text-right"><?php echo $order_row['customer_firstname'],$order_row['customer_lastname'];?></td>
							    </tr>
							    <?php
							    	}
							    ?>
							  </tbody>
							</table>
			            </li>
			            <li><p>Others</p></li>
			        </ul>
			    </div>
		</div>

	</div>
</div>
<div class="item-cart">
	
</div>