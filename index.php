<!DOCTYPE html>
<html>
<?php 
    require 'config/init.php';
    require 'sections/head.php';
    ?>
    <body>
                <?php
                	if(isset($_GET['content'])){
                		require ''.$_GET['content'].'.php';
                	}else{
                		include "mainPages/home.php";
                	}
                ?>
    </body> 
    <?php
    require 'sections/footer.php';
    ?>  
</html>