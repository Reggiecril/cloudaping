<?php  
  $order_id=$_GET['order_id'];
  $order_result=$dbh->query("SELECT * FROM orders WHERE order_customer_id='$id' AND order_id='$order_id'");
  $order_row=$order_result->fetch();
  $payment_result=$dbh->query("SELECT * FROM customer_payment WHERE customer_payment_id=".$order_row['order_payment_id']." ");
  $payment_row=$payment_result->fetch();
  $address_result=$dbh->query("SELECT * FROM customer_address WHERE customer_address_id=".$order_row['order_address_id']."");
  $address_row=$address_result->fetch();
?>
<div class="panel panel-default" style="border-top: 1.5px solid #D52341;">
  <div class="panel-body" style="border-bottom: 1px solid #ddd; width: 80%;margin:0 auto;">
    <div style="width: 23%;display: inline-block;float: left;">
        <h4>Delivery Address:</h4>        <p><?php echo $address_row['customer_address_name']; ?></p>
        <p><?php echo $address_row['customer_address_first'],$address_row['customer_address_second'] ?></p>
        <p><?php echo $address_row['customer_address_city'],$address_row['customer_address_passcode'] ?></p>
     </div>
    <div class="col-xs-2 col-sm-2 col-md-2" style="width: 23%;display: inline-block;float: center;">
      <h4>Payment:</h4>
      <div style="width: 80%; font-size: 18px;">
                   <div class="card bg-primary text-white" style="border-radius: 10px;width: 270px;height: 160px;">
                  <div class="card-body"> Bank</div>
                  <div class="card-body"></br><?php $card1 = substr($payment_row['customer_payment_cardNumber'], 0, 0).'**** **** **** ***'.substr($payment_row['customer_payment_cardNumber'], 15);echo $card1;?></div>
                  <div class="card-body" style="font-size: 12px;"></br>valid: ** ** expire: ** **</div>
                  <div class="card-body">**-**-**  ********</div>
                  <div class="card-body"><img src="assets/images/payment logo.png" width="90" height="15" align="right"></div>
                  
                </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-8" style="width: 23%;display: inline-block;float: right;">
      <h4>Order Summary:</h4>
      <span style="float: right;">£<?php echo $order_row['order_totalMoney']; ?></span> <p>Item(s) Subtotal: </p>
      <span style="float: right;">£0.00</span><p>Postage & Packing:  </p>
      <span style="float: right;">£<?php echo $order_row['order_totalMoney']; ?></span><p>Total:  </p>
      <strong><span style="float: right;">£<?php echo $order_row['order_totalMoney']; ?></span><p>Grand Total:  </p></strong>
    </div>
  </div>
</div>
<div class="panel panel-default" style="border-top: 1.5px solid #D52341;">
  <div class="panel-header">
    <table class="table">
        <tr>
          <th><?php echo $order_row['order_state']; ?></th>
          <th>Total</th>
          <th>Dispatch To</th>
        </tr>
        <tr style="background-color: #ddd;">
          <td><?php $yearOnly = date('Y-m-d',strtotime($order_row['order_updateDate'])); echo $yearOnly; ?></td>
          <td>£<?php echo $order_row['order_totalMoney']; ?></td>
          <td><?php $name=$dbh->query("SELECT * FROM customer_address WHERE customer_id='$id' AND customer_address_id= ".$order_row['order_customer_id']."");
          $name_row=$name->fetch(); echo $name_row['customer_address_name'];?></td>
          <td style="text-align: right;">Order ID: <?php echo $order_row['order_id']; ?></td>
        </tr>
    </table>
  </div>
  <?php  
      $order_id=$order_row['order_id'];
      $item_result=$dbh->query("SELECT * FROM orders_item WHERE order_id = '$order_id' AND order_item_hide != 1");
      while($item_row=$item_result->fetch()){
        $product_result=$dbh->query("SELECT * FROM product WHERE product_id = ".$item_row['order_item_product']."");
        $product_row=$product_result->fetch();

  ?>
    <div class="panel-body" style="border-bottom: 1px solid #ddd; ">
      <div class="col-xs-6 col-sm-4 col-md-8">
        <h4><strong><?php $month = date('Y-m-d',strtotime($item_row['order_item_updateDate'])); echo $item_row['order_item_state']."</strong> ".$month; ?></h4>
        </br>
        <div class="col-xs-0 col-sm-0 col-md-2">
          <img src="assets/images/<?php echo $product_row['product_mainImage']; ?>" width="150" height="150">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-6" style="padding-left:45px;font-size: 20px;">
          <a href="index.php?content=mainPages/item&id=<?php echo $product_row['product_id']; ?>" style="color:#D52341;text-decoration: underline;"><?php echo $product_row['product_name'];  ?></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-6" style="padding-left:45px;font-size: 18px;">
          <?php
            $trader_result=$dbh->query("SELECT * FROM trader WHERE trader_id = ".$product_row['product_trader_id']."");
            $trader_row=$trader_result->fetch();
          ?>Sold By: 
          <a href="index.php?content=mainPages/item&id=<?php echo $product_row['product_id']; ?>" style="color:#D52341;"><?php echo $trader_row['trader_name'];  ?></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-6" style="padding-left:45px;font-size: 20px;">
          <p style="color:#D52341;">£<?php echo $product_row['product_nowPrice'];  ?></p>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-6" style="padding-left:45px;font-size: 20px;">
          <a href="index.php?content=mainPages/item&id=<?php echo $product_row['product_id']; ?>" style="color:#D52341;" class="product-ad-module-description-button">Buy it again</a>
        </div>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2" style="margin-bottom: 20px;">
          <a href="" class="product-ad-module-description-button" style="width: 150px;height:20px;text-align: center;">Track Package</a>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2" style="margin-bottom: 20px;">
          <a href="" class="product-ad-module-description-button" style="width: 150px;height:20px;text-align: center;">Leave product review</a>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2" style="margin-bottom: 20px;">
          <a href="<?php echo $url1."&hide=".$item_row['order_item_id']; ?>" class="product-ad-module-description-button" style="width: 150px;height:20px;text-align: center;">Hide the order</a>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2" style="margin-bottom: 20px;">
          <a href="" class="product-ad-module-description-button" style="width: 150px;height:20px;text-align: center;">Return</a>
      </div>
  </div>
</div>
<?php  
      }
?>