   <?php
        try {
            $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
            $query="SELECT * FROM product WHERE product_trader_id = ".$_SESSION['trader_id']."";
            if (isset($_POST['searchSubmit'])) {
              $search=$_POST['searchText'];
              $query.=" AND product_name LIKE '%$search%'";
            }
            $result = $dbh->query($query);
  ?>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i></i><em>Product List</em></span>
    <span class="modular fr"><a href="admin.php?content=adminPage/product/createProductForm" class="pt-link-btn">+Add Product</a></span>
  </div>
  <div class="operate">
   <form method="post" action="">
    <input type="text" class="textBox length-long" name="searchText" placeholder="Enter Product Name..."/>
    <input type="submit" name="searchSubmit" value="Search" class="tdBtn"/>
   </form>
  </div>
  <table class="list-style Interlaced">
   <tr>
    <th></th>
    <th>ID</th>
    <th>Product</th>
    <th>Type</th>
    <th>Name</th>
    <th>Origin Price</th>
    <th>Now Price</th>
    <th>Quantity</th>
    <th>Recommend</th>
    <th>New</th>
    <th>Popular</th>
    <th>Action</th>
   </tr>
<?php
            while($row = $result->fetch()){    

            
    ?>
   <tr>
    <td>
      <input type="checkbox" class="middle children-checkbox"/>
    </td>
    <td>
     <span>
     <i><?php echo $row['product_id'];?></i>
     </span>
    </td>
    <td class="center pic-area"><?php print '<img src="assets/images/'.$row['product_mainImage'].'" width="100" height="100" class="mainImage"/>'?></td>
    <td class="center" style="width: 200px">
     <span>
      <em><?php print $row['product_type'] ?></em>
     </span>
    </td>
    <td class="td-name">
      <span class="ellipsis td-name block"><?php print $row['product_name'] ?></span>
    </td>

    <td class="center" style="width: 200px">
     <span>
      <em>GBP<?php print $row['product_originPrice'] ?></em>
     </span>
    </td>
    <td class="center" style="width: 200px">
     <span>
      <em>GBP<?php print $row['product_nowPrice'] ?></em>
     </span>
    </td>
    <td class="center" style="width: 200px">
     <span>
      <em><?php print $row['product_quantity'] ?></em>
     </span>
    </td>
    <?php
    if($row['product_category'] =='recommend'){
      echo '    <td class="center"><img src="assets/images/yes.gif"/></td>
                <td class="center"><img src="assets/images/no.gif"/></td>
                <td class="center"><img src="assets/images/no.gif"/></td>';
    }else if($row['product_category'] =='new'){
      echo '    <td class="center"><img src="assets/images/no.gif"/></td>
                <td class="center"><img src="assets/images/yes.gif"/></td>
                <td class="center"><img src="assets/images/no.gif"/></td>';      
    }else if($row['product_category'] =='popular'){
      echo '    <td class="center"><img src="assets/images/no.gif"/></td>
                <td class="center"><img src="assets/images/no.gif"/></td>
                <td class="center"><img src="assets/images/yes.gif"/></td>';
    }else{
      echo '    <td class="center"><img src="assets/images/no.gif"/></td>
                <td class="center"><img src="assets/images/no.gif"/></td>
                <td class="center"><img src="assets/images/no.gif"/></td>';
    }
    ?>
    <td class="center">
     <a href="admin.php?content=adminPage/product/editProductForm&id=<?php echo $row['product_id']; ?>" title="Add"><img src="assets/images/icon_edit.gif"/></a>
     <a  href="admin.php?content=adminPage/product/product&remove=<?php echo $row['product_id']; ?>" title="Delete"><img src="assets/images/icon_drop.gif"/></a>
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
	   <input type="button" value="Delete" class="btnStyle"/>
	  </div>
	  <!-- turn page -->
	  <div class="turnPage center fr">
	   <a>Pre</a>
	   <a>1</a>
	   <a>Last</a>
	  </div>
  </div>
 </div>
