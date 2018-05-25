<?php
   try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $order_id=$_GET['order_id'];
    $result=$dbh->query("SELECT * FROM orders WHERE order_id='$order_id'");
    $row=$result->fetch();
    $orders_item_query="SELECT * FROM orders_item WHERE order_id= '$order_id' AND order_item_trader='$trader_id'";
    $orders_item_result=$dbh->query($orders_item_query);
    $address_result=$dbh->query("SELECT * FROM customer_address WHERE customer_address_id='".$row['order_address_id']."'");
    $address_row=$address_result->fetch();
?>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="order"></i><em>Order ID：<?php echo $order_id; ?></em></span>
  </div>
  <dl class="orderDetail">
   <dt class="order-h">Order Description</dt>
   <dd>
    <ul>
     <li>
      <span class="h-cont h-right" style="width: 150px;">Dispatch To：</span>
      <span class="h-cont h-left"><?php echo $address_row['customer_address_name']; ?></span>
     </li>
     <li>
      <span class="h-cont h-right">Mobile：</span>
      <span class="h-cont h-left"><?php echo $address_row['customer_address_mobile']; ?></span>
     </li>
     <li>
      <span class="h-cont h-right" style="width: 150px;">Delivery Address:</span>
      <span class="h-cont h-left"><?php echo $address_row['customer_address_first'],$address_row['customer_address_second']; ?></span>
     </li>
     <li>
      <span class="h-cont h-right">Order Date：</span>
      <span class="h-cont h-left"><?php echo $row['order_updateDate']; ?></span>
     </li>
    </ul>
   </dd>
   <dd style="padding:1em 0;">
    <span><b>Order Message：</b></span>
    <span><?php echo $row['order_message']; ?></span>
   </dd>
   <dd>
    <table class="list-style">
     <tr>
      <th>Product Image</th>
      <th>Product Name</th>
      <th>Price(per/item)</th>
      <th>Quantity</th>
      <th>Total(per/item)</th>
     </tr>
     <?php
      while($orders_item_row=$orders_item_result->fetch()){
        $product_result=$dbh->query("SELECT * FROM product WHERE product_id ='".$orders_item_row['order_item_product']."'");
        $product_row=$product_result->fetch();

     ?> 
     <tr>
      <td><img src="assets/images/<?php echo ""; ?>" class="thumbnail"/></td>
      <td><?php echo $product_row['product_name']; ?></td>
      <td>
       <span>
        <i>￥</i>
        <em><?php echo $product_row['product_nowPrice']; ?></em>
       </span>
      </td>
      <td><?php echo $orders_item_row['order_item_quantity']; ?></td>
      <td>
       <span>
        <i>￥</i>
        <em><?php echo $orders_item_row['order_item_total']; ?></em>
       </span>
      </td>
     </tr>
     <tr>
     </tr>
     <?php

      }
     ?>
     <tr>
      <td colspan="5">
       <div class="fr">
        <span style="font-size:15px;font-weight:bold;">
         <i>Total：￥</i>
         <b><?php echo $row['order_totalMoney']; ?></b>
        </span>
       </div>
      </td>
     </tr>
    </table>
   </dd>
   <dd>
    <table class="noborder">
     <tr>
      <td width="10%" style="text-align:right;"><b>Manager：</b></td>
      <td>
       <textarea class="block" style="width:80%;height:35px;outline:none;"></textarea>
      </td>
     </tr>
    </table>
   </dd>
   <dd>
      <!-- Operation -->
    <div class="BatchOperation">
     <input type="button" value="Print" class="btnStyle"/>
     <input type="button" value="Package" class="btnStyle"/>
     <input type="button" value="Delivery" class="btnStyle"/>
     <input type="button" value="Canel" class="btnStyle"/>
    </div>
   </dd>
  </dl>
 </div>
<?php
  }catch(PDOException $e){
      print $e->getMessage();
      die();
    }
?>
   