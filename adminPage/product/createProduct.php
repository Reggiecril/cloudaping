 <?php
try {

    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
  //Check to see form has been submitted    
  if(isset($_POST['addProductSubmit'])){
    //gather data from form
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
        //prepare query
        $query= "INSERT INTO product
        (product_name,product_type,product_originPrice,product_nowPrice,product_quantity,product_category,product_mainImage,product_trader_id,product_updateDate)
        VALUES
        ('$productName', '$productType', '$productOrigin', '$productNow' , '$productQuantity', '$tuijian' , '$image', '".$_SESSION['trader_id']."' , '$productUpDate')";
        
        //run query to INSERT new record
        $result=$dbh->query($query);
        $id = $dbh->query("SELECT product_id FROM product WHERE product_name = '$productName' and product_trader_id = ".$_SESSION['trader_id']."");
        while($row = $id->fetch()){
            if ($productType=='Laptop') {
                $laptopBrand = $_POST['laptopBrand'];
                $laptopGraphicsCard = $_POST['laptopGraphicsCard'];
                $laptopCpu = $_POST['laptopCpu'];
                $laptopSize = $_POST['laptopSize'];
                $que = "INSERT INTO product_laptop
                (product_laptop_brand,product_laptop_graphicsCard,product_laptop_cpu,product_laptop_size,product_id,trader_id)
                VALUES
                ('$laptopBrand','$laptopGraphicsCard','$laptopCpu','$laptopSize','".$row['product_id']."','".$_SESSION['trader_id']."')";
                $re = $dbh->query($que);
            }else if ($productType == 'Mobile') {
                # code...
            }else if ($productType == 'Computer') {
                # code...
            }else if ($productType == 'Camera') {
                # code...
            }else if ($productType == 'Audio&Video') {
                # code...
            }else if ($productType == 'Others') {
                # code...
            }
        }
        header("location:admin.php?content=adminPage/product/product_list");
    }
  
}catch(PDOException $e){

    print $e->getMessage();
    die();
}


?>