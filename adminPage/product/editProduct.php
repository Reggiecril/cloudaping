 <?php
try {

    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
  //Check to see form has been submitted    
  if(isset($_POST['editProductSubmit'])){
    //gather data from form
    $product_id=$_GET['id'];
    $productName=$_POST['productName'];
    $productType=$_POST['productType'];
    $productOrigin=$_POST['productOrigin'];
    $productNow=$_POST['productNow'];
    $productQuantity=$_POST['productQuantity'];
    $tuijian=$_POST['tuijian'];
    $image = $_POST['image'];
    $productDescription = $_POST['productDescription']; 
    date_default_timezone_set("Europe/London");
    $productUpDate = date("Y-m-d H:i:s");
    if ($image=='') {
      $image=$_POST['image1'];
    }
        //prepare query
        $query= "UPDATE product SET product_name='$productName',product_type='$productType',product_originPrice='$productOrigin',product_nowPrice='$productNow',product_quantity='$productQuantity',product_category='$tuijian',product_mainImage='$image',product_updateDate='$productUpDate' WHERE product_id='$product_id' ";        
        //run query to INSERT new record
        $result=$dbh->query($query);
        header("location:admin.php?content=adminPage/product/product_list");
    }
    
}catch(PDOException $e){

    print $e->getMessage();
    die();
}


?>