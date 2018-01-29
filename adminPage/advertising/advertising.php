<?php
try {
  $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
  $result=$dbh->query("SELECT * FROM product WHERE product_trader_id='$trader_id'");
  if (isset($_POST['advertisingSubmit'])) {
    $advertising_image=$_POST['advertising_image'];
    $width=$_POST['width'];
    $height=$_POST['height'];
    $advertising_title=$_POST['advertising_title'];
    $product=$_POST['product'];

    echo $advertising_title,$advertising_image,$width,$height,$product;
    $dbh->query("INSERT INTO advertising (advertising_title,advertising_image,advertising_width,advertising_height,product_id,trader_id)VALUES('$advertising_title','$advertising_image','$width','$height','$product','$trader_id')");
    header("location:admin.php?content=adminPage/advertising/advertising_list");
  }
}catch(PDOException $e){
  print $e->getMessage();
  die();
}
?>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="settings"></i><em>Advertising</em></span>
  </div>
  <form method="post" style="float: left;">
  <table class="noborder">
    <tr>
    <tr>
    <td style="text-align:right;"><b>Advertising Title：</b></td>
    <td style="width: 200px">
    <input type="text" class="form-control" required="required" name="advertising_title">
    </td>
   </tr>
   <tr>
    <td style="text-align:right;"><b>Upload Image：</b></td>
    <td>
    <input type="file" class="form-control-file" required="required" name="advertising_image" id="exampleFormControlFile1">
    </td>
   </tr>
   <tr>
    <td style="text-align:right;"><b>Width：</b></td>
    <td>
    <div class="" style="width: 200px;">
      <input type="text" class="form-control" required="required" name="width" placeholder="Width">
    </div>
  </td>
   </tr>
   <tr>
     <td style="text-align:right;"><b>Height：</b></td>
     <td><div class="" style="width: 200px;">
      <input type="text" class="form-control" required="required" name="height" placeholder="Height">
    </div></td>
   </tr>
   
    <tr>
    <td style="text-align:right;"><b>Product：</b></td>
    <td><select class="form-control form-control-lg" required="required" name="product" style="width: 200px;">
          <?php while ($row=$result->fetch()) {
          echo "<option value='".$row['product_id']."'>".$row['product_name']."</option>";
          }?>
        </select>
    </td>
   </tr>
   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" name="advertisingSubmit" value="Upload" class="tdBtn"/></td>
   </tr>
  </table>
  </form>
 </div>
