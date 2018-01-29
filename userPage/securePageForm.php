<div style="padding:10px;width: 100%;border-bottom: 1px solid #eee;">
	<h2>Your Account</h2>
</div>
<div style="float:left;width: 300px;background-color: #f8f8f8;margin:10px;">
	<ul class="nav nav-pills nav-stacked">
	  <li><a href="<?php echo 'index.php?content=userPage/securePage&userPage=Profile'; ?>" style="width: 270px;">Profile<i class="fa fa-angle-right" aria-hidden="true" style="float: right;line-height: 20px;"></i></a></li>
	  <li><a href="<?php echo 'index.php?content=userPage/securePage&userPage=Your Order'; ?>" style="width: 270px;">Your Order<i class="fa fa-angle-right" aria-hidden="true" style="float: right;line-height: 20px;"></i></a></li>
	  <li><a href="<?php echo 'index.php?content=userPage/securePage&userPage=Your Address'; ?>" style="width: 270px;">Your Address<i class="fa fa-angle-right" aria-hidden="true" style="float: right;line-height: 20px;"></i></a></li>
	  <li><a href="<?php echo 'index.php?content=userPage/securePage&userPage=Your Payment'; ?>" style="width: 270px;">Your Payment<i class="fa fa-angle-right" aria-hidden="true" style="float: right;line-height: 20px;"></i></a></li>
	  <li><a href="<?php echo 'index.php?content=userPage/securePage&userPage=Your Favourite'; ?>" style="width: 270px;">Your Favourite<i class="fa fa-angle-right" aria-hidden="true" style="float: right;line-height: 20px;"></i></a></li>
	  <li><a href="<?php echo 'index.php?content=userPage/securePage&userPage=Reset Password'; ?>" style="width: 270px;">Reset Password<i class="fa fa-angle-right" aria-hidden="true" style="float: right;line-height: 20px;"></i></a></li>
	</ul>
</div>
<div style="margin-left:300px;width: 70%;margin-top:10px;background-color: #f8f8f8;">
	<div style="background-color: #eee;width: 100%;margin-left:30px;">
		<div class="panel panel-default">
            <div class="panel-heading">  
            	<h4 ><?php if (isset($_GET['userPage'])) {
            						echo $_GET['userPage'];
            						if ($_GET['userPage']=='Your Favourite') {
            							echo '<a href="index.php?content=userPage/securePage&userPage=Your Favourite&favourite=empty" class="btn btn-danger pull-right">Empty</a>';
            						}
            				}else{
            					echo 'Profile';
            				} 
            					?>
            	</h4>
            </div>
            <div class="panel-body">
            	<?php
					if(isset($_GET['userPage'])){
		                require ''.$_GET['userPage'].'.php';
		            }else{
		            	require 'Profile.php';
		            }
				?>
            </div>
        </div>
	</div>
</div>

