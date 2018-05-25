<?php
    if (isset($_POST['paymentSubmit'])) {
        if (isset($_POST['someSwitchOption002'])) {
            $someSwitchOption002=$_POST['someSwitchOption002'];
            $dbh->query("UPDATE customer_payment SET customer_payment_state = '1' WHERE customer_payment_id='$someSwitchOption002'");
            header("location:index.php?content=userPage/securePage&userPage=Success");
        }else{
            echo "<div class='alert alert-warning'>Select a payment or create a new addres.</div>";
        }
    }
?>
<a href="#payment" data-toggle="modal" data-target="#payment" style="float: right;font-size: 34px;"><i class="fa fa-plus-circle" aria-hidden="true" ></i></a>
<form method="post" action="">
<div class="col-xs-12 col-sm-12 col-md-10 col-sm-offset-5 col-md-offset-0">
		<?php while ($payment_row=$payment_result->fetch()) {?>
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                    	<div class="material-switch pull-left">
                            <input id="someSwitchOptionSuccess[<?php echo $payment_row['customer_payment_id'];?>]" value="<?php echo $payment_row['customer_payment_id'];?>" name="someSwitchOption002" <?php if($payment_row['customer_payment_state']=='1')echo 'checked'; ?> type="radio"/>
                            <label for="someSwitchOptionSuccess[<?php echo $payment_row['customer_payment_id'];?>]" class="label-success"></label>
                        </div>
                        <div style="width: 80%;padding-left: 60px; font-size: 18px;">
                        	<div class="card bg-primary text-white" style="border-radius: 10px;width: 300px;height: 180px;">
						    	<div class="card-body"> Bank</div>
						    	<div class="card-body"></br><?php $card1 = substr($payment_row['customer_payment_cardNumber'], 0, 0).'**** **** **** ***'.substr($payment_row['customer_payment_cardNumber'], 15);echo $card1;?></div>
						    	<div class="card-body" style="font-size: 12px;"></br>valid: ** ** expire: ** **</div>
						    	<div class="card-body">**-**-**  ********</div>
						    	<div class="card-body"><img src="assets/images/payment logo.png" width="120" height="25" align="right"></div>
						    	
						  	</div>
                        </div>
                        
                    </li>
                </ul> 
        <?php }?> 
                <input type="submit" name="paymentSubmit" class="btn btn-primary" value="Confirm"> 

</div>
</form>
<?php 
if (isset($_POST['paymentSubmit'])) {
			$card_holder_name=$_POST['card-holder-name'];
			$card_number=$_POST['card-number'];
			$card_lastNumber = substr($card_number, -4);
			$expiry_month=$_POST['expiry-month'];
			$expiry_year=$_POST['expiry-year'];
			$cvv=$_POST['cvv'];
			$state=1;
			echo $card_holder_name,$card_number,$card_lastNumber,$expiry_month,$expiry_year,$cvv,$update,$create,$customer_id,$state;
			$dbh->query("INSERT INTO customer_payment (customer_payment_holder,customer_payment_cardNumber,customer_payment_cardLast,customer_payment_expirationMonth,customer_payment_expirationYear,customer_payment_secure,customer_payment_updateDate,customer_payment_createDate,customer_id,customer_payment_state)
						VALUES ('$card_holder_name','$card_number','$card_lastNumber','$expiry_month','$expiry_year','$cvv','$update','$create','$id','$state')");
			header("location:".$_SERVER['HTTP_REFERER']);

		}
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
	      <div class="form-group">
	        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
	        <div class="col-sm-8">
	          <input type="text" class="form-control" name="cvv" id="cvv" required placeholder="Security Code">
	        </div>
	      </div>
	      <div class="form-group">
	        <div class="col-sm-offset-3 col-sm-9">
	          <input type="submit" class="btn btn-success" value="Pay Now">
	        </div>
	      </div>
	    </fieldset>
		</div>
	</div>
	</div>
</form>