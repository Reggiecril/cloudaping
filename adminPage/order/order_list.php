<?php
   try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $query="SELECT * FROM orders_item WHERE order_item_trader='$trader_id' ";
    if (isset($_POST['searchSubmit'])) {
      $search=$_POST['searchText'];
      echo $search;
      $query.= "AND (order_id LIKE '%$search%' OR order_item_total LIKE '%$search%')";
    }
    $result=$dbh->query($query);
?>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="order"></i><em>Order List</em></span>
  </div>
  <div class="operate">
   <form method="post" action="">
    <img src="assets/images/icon_search.gif"/>
    <input type="text" class="textBox length-long" name="searchText" placeholder="Enter order id or price"/>

    <input type="submit" value="Search" name="searchSubmit" class="tdBtn"/>
   </form>
  </div>
  <table class="list-style Interlaced">
   <tr>
    <th></th>
    <th>Order_id</th>
    <th>Order_Date</th>
    <th>Dispatch To</th>
    <th>Price</th>
    <th>State</th>
    <th>Action</th>
   </tr>
   <?php
    while ($row=$result->fetch()) {
      $customer_address_result=$dbh->query("SELECT *FROM customer_address WHERE customer_address_id=(SELECT order_customer_id FROM orders WHERE order_id= '".$row['order_id']."')");
      $customer_address_row=$customer_address_result->fetch();
   ?>
   <tr>
    <td>
      <input type="checkbox"/>
    </td>
    <td >
     <a href="admin.php?content=adminPage/order/order_detail&order_id=<?php echo $row['order_id']; ?>" ><?php echo $row['order_id']; ?></a>
    </td>
    <td class="center">
     <span class="block"><?php echo $row['order_item_updateDate']; ?></span>
    </td>
    <td width="350">
     <span class="block"><?php echo $customer_address_row['customer_address_name']; ?></span>
     <address><?php echo $customer_address_row['customer_address_first'],$customer_address_row['customer_address_second'] ?></address>
    </td>
    <td class="center" width="150">
     <span><i>£</i><b><?php echo $row['order_item_total']; ?></b></span>
    </td>
    <td class="center" width="150">
     <span><?php echo $row['order_item_state']; ?></span>
    </td>
    <td class="center">
     <a href="admin.php?content=adminPage/order/order_detail&order_id=<?php echo $row['order_id']; ?>" class="inline-block" title="Look"><img src="assets/images/icon_view.gif"/></a>
     <?php
     if ( $row['order_item_state']=='Deliveried') {
       echo '<a class="inline-block" title="Delete"><img src="assets/images/icon_trash.gif"/></a>';
     }
     
     ?>
    </td>
   </tr>
    <?php
      }
    }catch(PDOException $e){
      print $e->getMessage();
      die();
    }
    ?>
  </table>
  <!-- BatchOperation -->
  <div style="overflow:hidden;">
      <!-- Operation -->
	  <div class="BatchOperation fl">
	   <input type="checkbox" id="del"/>
	   <label for="del" class="btnStyle middle">All</label>
	   <input type="button" value="Print" class="btnStyle"/>
	   <input type="button" value="Delivery" class="btnStyle"/>
	   <input type="button" value="Delete" class="btnStyle"/>
	  </div>
	  <!-- turn page -->
	  <div class="turnPage center fr">
	   <a>Preview</a>
	   <a>1</a>
	   <a>Last</a>
	  </div>
  </div>
 </div>
