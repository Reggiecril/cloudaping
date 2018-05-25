<!DOCTYPE html>
<html>
<?php 
    
    require 'config/init.php';
    require 'sections/adminHead.php';
    ?>
    <body>
                <?php
                require 'adminPage/menu.php';
                ?>
                <div style="float: left;">
                    <div class="admin-content">
                        <?php
                        	if(isset($_GET['content'])){
                        		require ''.$_GET['content'].'.php';
                        	}else{
                        		include "adminPage/main.php";
                        	}
                        ?>
                    </div>
                </div>
    </body>
</html>