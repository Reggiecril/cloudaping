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
        $query= "UPDATE product SET product_name='$productName',product_type='$productType',product_originPrice='$productOrigin',product_nowPrice='$productNow',product_quantity='$productQuantity',product_category='$tuijian',product_mainImage='$image',product_updateDate='$productUpDate' WHERE product_id='$product_id' ";        
        //run query to INSERT new record
        $result=$dbh->query($query);
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