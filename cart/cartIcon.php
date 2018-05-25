<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
    $count=count($_SESSION["cart_item"]);
?>  
<script type="text/javascript">
$(function(){
    $(".cart_form").hide();
    $(".cart-icon").click(function(){
        $(".cart_form").toggle(
            function(){
                $(this).closest(".cart_form").find(".cart_form").slideUp();
            },
            function(){
                $(this).closest(".cart_form").find(".cart_form").slideDown();
            }
        );
    });
});
</script>
<div class="cart">
    <div class="cart_form">   
        <h3 style="text-align: center;border-bottom: 4px double #ccc;padding-bottom: 15px;"> Your Basket </h3>
          
    <?php       
    foreach ($_SESSION["cart_item"] as $item){
    ?>
                <div style="border-bottom: 2px solid #ccc;margin-right: 10px;margin-left: 10px;height: 100px;">
                    <div style="display: inline-block;">
                        <img src="assets/images/<?php echo $item["product_mainImage"]; ?>" width="70px" height="70px" style="display: inline-block;">
                        <div style="display: inline-block;width: 250px;">
                            <div style="">
                                <a style="color: #D52341;display: inline-block;"><?php echo $item["product_name"]; ?></a>
                            </div>
                            
                            <div>
                                <p class="product_nowPrice" style=""><?php echo "&pound;".$item["product_nowPrice"].".00" ?></p>
                            </div>
                            <div style="float: right;width: 100px;">
                                <p style="display: inline-block;">Quantity: </p>
                                <p style="display: inline-block;"><?php echo $item["quantity"]; ?></p>
                            </div>
                        </div>
                    </div>
                    <div style="float: right;display: inline-block;">
                        <a href="<?php echo $url; ?>&action=remove&name=<?php echo $item["product_name"]; ?>"><i class="fa fa-times" aria-hidden="true" style="color: red;font-size: 25px;"></i></a>
                    </div>
                    
                </div>               
    <?php
        $item_total += ($item["product_nowPrice"]*$item["quantity"]); 
    }
    ?>

    <div style="border-bottom:1px solid #ccc;">
        <a href="<?php echo $url; ?>&action=empty" style="display: inline-block;color: #D52341;font-size: 20px;" align=left>Clear</a>
        <p class="product_nowPrice-total" colspan="5" style="display: inline-block;color: #D52341;font-size: 20px; float: right;" ><strong>Total:</strong> <?php echo "&pound;".$item_total.".00" ?></p>
    </div>
    <div style="width: 100%;">
        <a href="<?php echo $url; ?>" style="text-align: center;margin-left:30px;margin-bottom: 10px;color:#D52341"> <h4>Continue Shoping</h4></a>
        <a href="index.php?content=mainPages/checkout" style="text-align: center;margin-bottom: 10px;color:#D52341"><h4> Check Out</h4></a>
    </div>

    </div>
    <div class="cart-icon">
            <img src="assets/images/cart.jpg" alt="cart" width="50px" height="50px" style="border: 1px solid #fff;border-radius: 10px;">
            <span><?php if(isset($_SESSION["cart_item"])) echo $count; ?></span>
        
    </div>
</div>
    <?php
    }
    ?>