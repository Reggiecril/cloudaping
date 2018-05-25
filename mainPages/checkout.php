<?php 
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	if (isset($_SESSION['customer_email'])) {
		$customer_email=$_SESSION['customer_email'];
		$result=$dbh->query("SELECT * FROM customer WHERE customer_email = '$customer_email'");
		$row=$result->fetch();
		$customer_id = $row['customer_id'];
		$delivery_result= $dbh->query("SELECT * FROM customer_address WHERE customer_id='$customer_id'");
		$payment_result= $dbh->query("SELECT * FROM customer_payment WHERE customer_id='$customer_id'");
		$error='';
		$create=date("Y-m-d H:i:s");
		$update=date("Y-m-d H:i:s");
		if (isset($_POST['checkoutSubmit'])) {
			if (isset($_POST['delivery'])) {
				if (isset($_POST['payment'])) {
					if (isset($_POST['checkout_product'])) {
						$delivery=$_POST['delivery'];
						$payment=$_POST['payment'];
						$checkout_product=$_POST['checkout_product'];
						$quantity=$_POST['quantity'];
						$message=$_POST['message'];
						$order_id=date('YmdHis').''.rand(0,1000);
						$order_state='Ordered';
						$item_state='Trader will confirm you order';
						$totalMoney=0;
						foreach ($checkout_product as $key =>$value) {
							$checkout_result=$dbh->query("SELECT * FROM product WHERE product_id = '$key'");
							$checkout_row=$checkout_result->fetch();
							$sell=$checkout_row['product_sell']+1;
							$dbh->query("UPDATE product SET product_sell ='$sell' WHERE product_id = '$key'");
							$trader=$checkout_row['product_trader_id'];
							$total= $quantity[$key]*$checkout_row['product_nowPrice'];
							$totalMoney+=$total;
							$query1="INSERT INTO orders_item
									(order_id,order_item_quantity,order_item_trader,order_item_total,order_item_product,order_item_state,order_item_createDate,order_item_updateDate)
									VALUES 
									('$order_id','$quantity[$key]','$trader','$total','$key','$item_state','$create','$update')";
							$dbh->query($query1);
						}
						$query="INSERT INTO orders
									(order_id,order_customer_id,order_address_id,order_payment_id,order_totalMoney,order_message,order_createDate,order_updateDate,order_state)
									VALUES 
									('$order_id','$customer_id','$delivery','$payment','$totalMoney','$message','$create','$update','$order_state')";
						$dbh->query($query);
						header("location:index.php?content=userPage/securePage&action=empty");
					}else{
						$error='Please select a product';
						print "<script language=\"JavaScript\">\r\n"; 
						print " alert(\"".$error."\");\r\n"; 
						print " history.back();\r\n"; 
						print "</script>"; 
						exit; 
					}
				}else{
					$error='Please select a payment method';
					print "<script language=\"JavaScript\">\r\n"; 
					print " alert(\"".$error."\");\r\n"; 
					print " history.back();\r\n"; 
					print "</script>"; 
					exit; 
				}
			}else{
				$error='Please select a address';
				print "<script language=\"JavaScript\">\r\n"; 
				print " alert(\"".$error."\");\r\n"; 				
				print " history.back();\r\n"; 
				print "</script>"; 
				exit; 
			}
			if ($error != '') {
				print "<script language=\"JavaScript\">\r\n"; 
				print " alert(\"".$error."\");\r\n"; 
				print " history.back();\r\n"; 
				print "</script>"; 
				exit; 
			}
		}
		if (isset($_POST['paymentSubmit'])) {
			$card_holder_name=$_POST['card-holder-name'];
			$card_number=$_POST['card-number'];
			$card_lastNumber = substr($card_number, -4);
			$expiry_month=$_POST['expiry-month'];
			$expiry_year=$_POST['expiry-year'];
			$cvv=$_POST['cvv'];
			$state=1;
			$dbh->query("INSERT INTO customer_payment (customer_payment_holder,customer_payment_cardNumber,customer_payment_cardLast,customer_payment_expirationMonth,customer_payment_expirationYear,customer_payment_secure,customer_payment_updateDate,customer_payment_createDate,customer_id,customer_payment_state)
						VALUES ('$card_holder_name','$card_number','$card_lastNumber','$expiry_month','$expiry_year','$cvv','$update','$create','$customer_id','$state')");
			header("location:".$_SERVER['HTTP_REFERER']);

		}
		if (isset($_POST['deliveryAddress'])) {
			$first_name=$_POST['first_name'];
			$last_name=$_POST['last_name'];
			$name=$first_name.' '.$last_name;
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$address1=$_POST['address1'];
			$address2=$_POST['address2'];
			$city=$_POST['city'];
			$passcode=$_POST['passcode'];
			$state=1;
			$dbh->query("UPDATE customer_address SET customer_address_state='0' WHERE customer_id='$customer_id'");
			$dbh->query("INSERT INTO customer_address (customer_address_name,customer_address_first,customer_address_second,customer_address_mobile,customer_address_city,customer_address_passcode,customer_address_updateDate,customer_address_createDate,customer_id,customer_address_state)
						VALUES('$name','$address1','$address2','$mobile','$city','$passcode','$update','create','$customer_id','$state')");

			header("location:".$_SERVER['HTTP_REFERER']);
		}
		include "cart/checkoutForm.php"; 
	}else{
		if (!isset($_GET['content'])) {
			header("location:index.php?checkout_error=1");
		}else{
			header("location:".$_SERVER['HTTP_REFERER']."&checkout_error=1");
		}
		
	}
}catch(PDOException $e){
	print $e->getMessage();
	die();
}	
?>