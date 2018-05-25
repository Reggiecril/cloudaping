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
    if(isset($_FILES['image'])){
          $errors= array();
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $file_type = $_FILES['image']['type'];
          $tmp = explode('.', $file_name);
            $file_extension = end($tmp);
          $image=$file_name;
          $expensions= array("jpeg","jpg","png");
          
          if(in_array($file_extension,$expensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 2097152) {
             $errors[]='File size must be excately 2 MB';
          }
          
          if(empty($errors)==true) {
             move_uploaded_file($file_tmp,"assets/images/".$image);
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
                    $mobileBrand = $_POST['mobileBrand'];
                    $mobileSize = $_POST['mobileSize'];
                    $mobileSystem = $_POST['mobileSystem'];
                    $mobilePixel = $_POST['mobilePixel'];
                    $que = "INSERT INTO product_mobile
                    (product_mobile_brand,product_mobile_size,product_mobile_system,product_mobile_pixel,product_id,trader_id)
                    VALUES
                    ('$mobileBrand','$mobileSize','$mobileSystem','$mobilePixel','".$row['product_id']."','".$_SESSION['trader_id']."')";
                    $re = $dbh->query($que);
                }else if ($productType == 'Computer') {
                    $computerBrand = $_POST['computerBrand'];
                    $computerCase = $_POST['computerCase'];
                    $computerScreen = $_POST['computerScreen'];
                    $computerCpu = $_POST['computerCpu'];
                    $computerGraphicsCard = $_POST['computerGraphicsCard'];
                    $que = "INSERT INTO product_computer
                    (product_computer_brand,product_computer_case,product_computer_screen,product_computer_cpu,product_computer_graphicsCard,product_id,trader_id)
                    VALUES
                    ('$computerBrand','$computerCase','$computerScreen','$computerCpu','$computerGraphicsCard','".$row['product_id']."','".$_SESSION['trader_id']."')";
                    $re = $dbh->query($que);
                }else if ($productType == 'Camera') {
                    $cameraBrand = $_POST['cameraBrand'];
                    $cameraType = $_POST['cameraType'];
                    $cameraPixel = $_POST['cameraPixel'];
                    $que = "INSERT INTO product_camera
                    (product_camera_brand,product_camera_Type,product_camera_Pixel,product_id,trader_id)
                    VALUES
                    ('$cameraBrand','$cameraType','$cameraPixel','".$row['product_id']."','".$_SESSION['trader_id']."')";
                    $re = $dbh->query($que);
                }else if ($productType == 'Audio&Video') {
                    $audiovideoType = $_POST['audiovideoType'];
                    $audiovideoBrand = $_POST['audiovideoBrand'];
                    $que = "INSERT INTO product_audiovideo
                    (product_audiovideo_type,product_audiovideo_brand,product_id,trader_id)
                    VALUES
                    ('$audiovideoType','$audiovideoBrand','".$row['product_id']."','".$_SESSION['trader_id']."')";
                    $re = $dbh->query($que);
                }else if ($productType == 'Others') {
                    # code...
                }
            }
            header("location:admin.php?content=adminPage/product/product_list");
            }else{
                print_r($errors);
            }
        }
    }
  
}catch(PDOException $e){

    print $e->getMessage();
    die();
}


?>