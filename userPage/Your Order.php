<?php  
  while ($order_row=$order_result->fetch()) {
?>
<div class="panel panel-default" style="border-top: 1.5px solid #D52341;">
  <div class="panel-header">
    <table class="table">
        <tr>
          <th><?php echo $order_row['order_state']; ?></th>
          <th>Total</th>
          <th>Dispatch To</th>
          <th style="text-align: right;"><?php echo $order_row['order_id']; ?></th>
        </tr>
        <tr style="background-color: #ddd;">
          <td><?php $yearOnly = date('Y-m-d',strtotime($order_row['order_updateDate'])); echo $yearOnly; ?></td>
          <td>£<?php echo $order_row['order_totalMoney']; ?></td>
          <td><?php $name=$dbh->query("SELECT * FROM customer_address WHERE customer_id='$id' AND customer_address_id= ".$order_row['order_customer_id']."");
          $name_row=$name->fetch(); echo $name_row['customer_address_name'];?></td>
          <td style="text-align: right;"><a href="index.php?content=userPage/securePage&userPage=Order Detail&order_id=<?php echo $order_row['order_id']; ?>" class="btn btn-danger">Order Detail</a></td>
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
          <a href="index.php?content=userPage/securePage&userPage=Your Order&review=<?php echo $product_row['product_id']; ?>" class="product-ad-module-description-button" style="width: 150px;height:20px;text-align: center;">Leave Your Review</a>
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
  }
?>
<?php
if (isset($_GET['review'])) {
  $_SESSION['review']=$_GET['review'];
  echo '<script type="text/javascript">
            $(window).on("load",function(){
                $("#review").modal("show");
            });
        </script>';
}
if (isset($_POST['reviewSubmit'])) {
      $title=$_POST['title'];
      $content=$_POST['content'];
      $rating=$_POST['rating'];
      $review=$_SESSION['review'];
      $helper=0;
      $update=date("Y-m-d H:i:s");
      echo $review_name,$review;
      echo $id,$rating,$title,$content,$update,$helper;
      $dbh->query("INSERT INTO review (customer_id,product_id,customer_rating,customer_name,review_title,review_content,review_updateDate,review_helper)
            VALUES ('$id','$review','$rating','$review_name','$title','$content','$update','$helper')");

    }

?>
<form method="post" action="index.php?content=userPage/securePage&userPage=Your Order">
        <div class="modal fade" id="review">
        <div class="modal-dialog">
          <div class="modal-content">

                    <fieldset>
                        <legend><h1 class="text-center">Review<?php echo $product_row['product_id']; ?></h1></legend>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control input-sm text-center" required placeholder="Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <textarea name="content" id="content" class="form-control input-sm text-center" required placeholder="Comment"></textarea>
                                </div>
                            </div>
                           <div class="col-xs-12 col-sm-12 col-md-10 ">
                            <div class="review-block-rate text-center" style="font-size:24px;margin-bottom: 20px;">
                              How You Like this Product: 
                              <select name="rating" style="width: 100px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5" selected="selected">5</option>
                              </select>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 .btn-info">
                                <div class="form-group">
                                    <input type="submit" name="reviewSubmit" id="reviewSubmit" class="form-control btn-info text-center" value="Add Review">
                                </div>
                            </div>
                </fieldset>
            </div> 
        
    </div>
    </div>
</form>

