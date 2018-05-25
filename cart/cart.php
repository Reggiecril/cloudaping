<?php
require_once("cart/dbcontroller.php");
$db_handle = new DBController();
$url = $_SERVER['REQUEST_URI'];
if(!empty($_GET["action"])) {
        $string = $_SERVER['REQUEST_URI'];
        $parts = parse_url($string);
        $queryParams = array();
        parse_str($parts['query'], $queryParams);
        if(isset($queryParams['name'])) unset($queryParams['name']);
        if(isset($queryParams['theid'])) unset($queryParams['theid']);
        if(isset($queryParams['quantity'])) unset($queryParams['quantity']);
        unset($queryParams['action']);
        $queryString = http_build_query($queryParams);
        $url1 = $parts['path'] . '?' . $queryString;
        switch($_GET["action"]) {
            case "add":
                    $url=$_SERVER["REQUEST_URI"];
                    $id=$_GET['theid'];
                    if (!isset($_GET['quantity'])) {
                        $quantity=$_POST['item-category-quantity'];
                    }else{
                        $quantity= $_GET['quantity'];
                    }
                    $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE product_id='$id'");
                    $itemArray = array($productByCode[0]["product_name"]=>array('product_type'=>$productByCode[0]["product_type"],'product_id'=>$productByCode[0]["product_id"], 'product_mainImage'=>$productByCode[0]["product_mainImage"], 'product_name'=>$productByCode[0]["product_name"], 'quantity'=>$quantity, 'product_nowPrice'=>$productByCode[0]["product_nowPrice"]));
                    
                    if(!empty($_SESSION["cart_item"])) {
                        
                        if(in_array($productByCode[0]["product_name"],array_keys($_SESSION["cart_item"]))) {
                            foreach($_SESSION["cart_item"] as $k => $v) {
                                    if($productByCode[0]["product_name"] == $k) {
                                        if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                            $_SESSION["cart_item"][$k]["quantity"] = 0;
                                        }
                                        $_SESSION["cart_item"][$k]["quantity"] += $quantity;
                                    }
                            }
                        } else {
                            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                        }
                    } else {
                        $_SESSION["cart_item"] = $itemArray;
                    }
                    header("location: ".$url1."");
            break;
            case "remove":
                header('Location:'.$_SERVER['HTTP_REFERER'].'');
                if(!empty($_SESSION["cart_item"])) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($_GET["name"] == $k)
                                unset($_SESSION["cart_item"][$k]);              
                            if(empty($_SESSION["cart_item"]))
                                unset($_SESSION["cart_item"]);
                                
                    }
                }
                header("location: ".$url1."");
            break;
            case "empty":
                unset($_SESSION["cart_item"]);
                header("location: ".$url1."");
            break;
            
        }


}
if (isset($_GET['content'])) {
    if ($content != 'mainPages/checkout') {
        include "cart/cartIcon.php";
    }
}

    
?>