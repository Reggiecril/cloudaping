
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>Advertising List</em></span>
    <span class="modular fr"><a href="admin.php?content=adminPage/advertising/advertising" class="pt-link-btn">+Add Advertising</a></span>
  </div>
  <table class="list-style Interlaced">
   <tr>
    <th class="center">Advertising Image</th>
    <th class="center">Width</th>
    <th class="center">Height</th>
    <th class="center">Product</th>
    <th class="center">Action</th>
   </tr>
   <?php
   try {
      $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
      $result=$dbh->query("SELECT * FROM advertising WHERE trader_id='$trader_id'");
      while ($row=$result->fetch()) {
        
      $product_id=$row['product_id'];
   ?>
   <tr>
    <td class="center"><img src="assets/images/<?php echo $row['advertising_image']; ?>" width="140" height="100"></td>
    <td class="center"><?php echo $row['advertising_width']; ?></td>
    <td class="center"><?php echo $row['advertising_height']; ?></td>
    <td class="center"><?php  $result_product=$dbh->query("SELECT * FROM product WHERE product_id='$product_id'"); $row_product=$result_product->fetch(); echo $row_product['product_name'];?></td>
    <td class="center"><a href="advertising.html" title="edit"><img src="assets/images/icon_edit.gif"/></a>
     <a title="delete"><img src="assets/images/icon_drop.gif"/></a></td>
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
	  </div>
	  <!-- turn page -->
	  <div class="turnPage center fr">
	   <a>Preview</a>
	   <a>1</a>
	   <a>Last</a>
	  </div>
  </div>
 </div>
