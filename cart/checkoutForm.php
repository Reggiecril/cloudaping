<?php
	if(isset($_SESSION["cart_item"])){
		$item_total = 0;
		$count=count($_SESSION["cart_item"]);
?>
<form method="post" action="">
	<div class="checkout-title">
		<h2 align="center">Check Out</h2>
	</div>
	<div class="checkout-address">
		<div class="checkout-address-title">
			<p>1</p><p style="margin-left: 30px;">Delivery Address</p>
		</div>
		<a href="#delivery" data-toggle="modal" data-target="#delivery"><i class="fa fa-plus-circle" aria-hidden="true" ></i></a>
		<div class="checkout-address-module">
			<!--Radio group-->
			<?php  
				while ($delivery_row=$delivery_result->fetch()) {
					
					
					echo "		<div class='form-group border border-danger' style='padding:10px;'>";
					if ($delivery_row['customer_address_state']=='1') {
						echo "<input name='delivery' type='radio' class='with-gap' id='radio-address[".$delivery_row['customer_address_id']."]' checked value='".$delivery_row['customer_address_id']."' style='padding-top:20px;'>";
					}else{
						echo "<input name='delivery' type='radio' class='with-gap' id='radio-address[".$delivery_row['customer_address_id']."]' value='".$delivery_row['customer_address_id']."' style='padding-top:20px;'>";
					}   
					echo "		    <label for='radio-address[".$delivery_row['customer_address_id']."]'><strong>"
									.$delivery_row['customer_address_name']."</strong>  "
									.$delivery_row['customer_address_first'].". "
									.$delivery_row['customer_address_second'].". "
									.$delivery_row['customer_address_city'].". "
									.strtoupper($delivery_row['customer_address_passcode']).
								"</label>
							</div>";
					
				}

			?>
		</div>
	</div>

	<div class="checkout-payment">
		<div class="checkout-payment-title">
			<p>2</p><p style="margin-left: 30px;">Payment</p>
		</div>
		<a href="#payment"  data-toggle="modal" data-target="#payment"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
		<div class="checkout-payment-module">
			<?php  
				while ($payment_row=$payment_result->fetch()) {
					echo "	<div class='form-group border border-danger' style='padding:10px;'>";
					if ($payment_row['customer_payment_state']==1) {
						echo "<input name='payment' type='radio' class='with-gap' id='radio-payment[".$payment_row['customer_payment_id']."]' checked value='".$payment_row['customer_payment_id']."' style='padding-top:20px;'>";
					}else{
						echo "<input name='payment' type='radio' class='with-gap' id='radio-payment[".$payment_row['customer_payment_id']."]' value='".$payment_row['customer_payment_id']."' style='padding-top:20px;'>";
					}
							    
					echo"		    <label for='radio-payment[".$payment_row['customer_payment_id']."]'><strong>Holder: </strong> ".strtoupper($payment_row['customer_payment_holder'])."         
							    	<p>Ending in <strong>".$payment_row['customer_payment_cardLast']."</strong></p>
								</label>
							</div>";
					
				}

			?>
		</div>
	</div>

	<div style="padding-left: 30px;padding-right: 30px;">
		<div class="checkout-product-title">
			<p>3</p><p style="margin-left: 30px;">Product</p>
		</div>
		
		<div class="cartMain_hd">
			<ul class="order_lists cartTop">
				<li class="list_chk">
					<!--所有商品全选-->
					<input type="checkbox" id="all" name="checkou" class="whole_check">
					<label for="all"></label>
					All
				</li>
				<li class="list_con">Product</li>
				<li class="list_info">Name</li>
				<li class="list_price">Price(per)</li>
				<li class="list_amount">Quantity</li>
				<li class="list_sum">Total(per/item)</li>
				<li class="list_op">Action</li>
			</ul>
		</div>

		<div class="cartBox">
			<?php
			    foreach ($_SESSION["cart_item"] as $item){
			?> 
			<div class="order_content">
				<ul class="order_lists">
					<li class="list_chk">
						<input type="checkbox" id="checkbox_6" name="checkout_product[<?php echo $item['product_id']; ?>]" class="son_check">
						<label for="checkbox_6"></label>
					</li>
					<li class="list_con">
						<div class="list_img"><a href="javascript:;"><img src="assets/images/3.png" alt=""></a></div>
						<div class="list_text"><a href="javascript:;"><img src="assets/images/<?php echo $item["product_mainImage"]; ?>" width="100px" height="100px"> </a></div>
					</li>
					<li class="list_info">
						<?php echo $item["product_name"]; ?>
					</li>
					<li class="list_price">
						<p class="price"><?php echo "&pound;".$item["product_nowPrice"].".00" ?></p>
					</li>
					<li class="list_amount">
						<div class="amount_box">
							<a href="javascript:;" class="reduce reSty">-</a>
							<input type="text" name="quantity[<?php echo $item['product_id']; ?>]" value="<?php echo $item["quantity"]; ?>" class="sum">
							<a href="javascript:;" class="plus">+</a>
						</div>
					</li>
					<li class="list_sum">
						<p class="sum_price"><?php  echo "&pound;".$item["product_nowPrice"]*$item["quantity"]; ?></p>
					</li>
					<li class="list_op">
						<p class="del"><a href="<?php echo $url; ?>&action=remove&name=<?php echo $item["product_name"]; ?>" class="delBtn">Remove</a></p>
					</li>
				</ul>
			</div>
			<?php
			    $item_total += ($item["product_nowPrice"]*$item["quantity"]); 
				}
			?>
			<div class="checkout-message">
				<label for="message">Message</label>
				<textarea name="message" id="message" class="form-control" placeholder="Please enter message to trader" ></textarea>
			</div>
		</div>
		<div class="product-ad">
			<div class="product-ad-title">
				<strong><p>You</p></strong>
				<strong><p>May</p></strong>
				<strong><p>Like</p></strong>
			</div>
				<?php
					$like_result = $dbh->query("SELECT * FROM product WHERE product_category = 'popular' LIMIT 3");
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
				
					
				?>
		</div>
		<!--底部-->
		<div class="bar-wrapper">
			<div class="bar-right">
				<div class="piece"><strong class="piece_num">0</strong>items</div>
				<div class="totalMoney">Total: <strong class="total_text">0.00</strong></div>
				<input type="submit" name="checkoutSubmit" class="btn btn-danger btn-lg" value="Check Out">
			</div>
		</div>
	</div>
<?php
	}else{
		header("location: index.php");
	}
?>
</form>
<?php


?>
<form method="post" action="">
<div class="modal fade" id="payment">
		<div class="modal-dialog">
	      <div class="modal-content">
	    <fieldset>
	      <legend>Payment</legend>
	      <div class="form-group">
	        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
	        <div class="col-sm-9">
	          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" required placeholder="Card Holder's Name">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
	        <div class="col-sm-9">
	          <input type="text" class="form-control" name="card-number" id="card-number" required placeholder="Debit/Credit Card Number">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
	        <div class="col-sm-9">
	          <div class="row">
	            <div class="col-xs-3">
	              <select class="form-control col-sm-10" required name="expiry-month">
	                <option>Month</option>
	                <option value="01">Jan (01)</option>
	                <option value="02">Feb (02)</option>
	                <option value="03">Mar (03)</option>
	                <option value="04">Apr (04)</option>
	                <option value="05">May (05)</option>
	                <option value="06">June (06)</option>
	                <option value="07">July (07)</option>
	                <option value="08">Aug (08)</option>
	                <option value="09">Sep (09)</option>
	                <option value="10">Oct (10)</option>
	                <option value="11">Nov (11)</option>
	                <option value="12">Dec (12)</option>
	              </select>
	            </div>
	            <div class="col-xs-3">
	              <select class="form-control" required name="expiry-year">
	                <option value="18">2018</option>
	                <option value="19">2019</option>
	                <option value="20">2020</option>
	                <option value="21">2021</option>
	                <option value="22">2022</option>
	                <option value="23">2023</option>
	                <option value="24">2024</option>
	                <option value="25">2025</option>
	                <option value="26">2026</option>
	                <option value="27">2027</option>
	                <option value="28">2028</option>
	                <option value="29">2029</option>
	                <option value="30">2030</option>
	              </select>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="form-group" >
	        <label class="col-sm-2 control-label" for="cvv">Card CVV</label>
	        <div style="width: 200px;">
	          <input type="text" class="form-control col-sm-2" name="cvv" id="cvv" required placeholder="Security Code">
	        </div>
	      </div>
	      <div class="form-group">
	        <div class="col-sm-offset-3 col-sm-9">
	          <input type="submit" name="paymentSubmit" class="btn btn-success" value="Pay Now">
	        </div>
	      </div>
	    </fieldset>
		</div>
	</div>
	</div>
</form>

<form method="post" action="">
        <div class="modal fade" id="delivery">
        <div class="modal-dialog">
          <div class="modal-content">

                    <fieldset>
                        <legend><h1>Shipping Address</h1></legend>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm text-center" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm text-center" required placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" class="form-control input-sm text-center" required placeholder="Mobile no">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="address1" id="address1" class="form-control input-sm text-center" required placeholder="Address 1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="address2" id="address2" class="form-control input-sm text-center" placeholder="Address 2(Optional)">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="city" id="city" class="form-control input-sm text-center" required placeholder="City">
                                </div>
                            </div>
                           <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="passcode" id="passcode" class="form-control input-sm text-center" required placeholder="Passcode">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 .btn-info">
                                <div class="form-group">
                                    <input type="submit" name="deliveryAddress" id="deliveryAddress" class="form-control btn-info text-center" value="Select">
                                </div>
                            </div>
                </fieldset>
            </div> 
        
    </div>
    </div>
</form>
