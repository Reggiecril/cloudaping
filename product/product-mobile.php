<?php
						echo '<dl><dt><div class="product-category-column1">Brand:</div></dt><dd>';
						foreach (array_unique($_SESSION['mobile_brand']) as $key) {
							$category= $_GET['category'];
							$category['brand']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=mobile'.$e.'">'.$key.'</a>
									  </div>';
							
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Size:</div></dt><dd>';
						foreach (array_unique($_SESSION['mobile_size']) as $key) {
							$category= $_GET['category'];
							$category['size']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=mobile'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">System:</div></dt><dd>';
						foreach (array_unique($_SESSION['mobile_system']) as $key) {
							$category= $_GET['category'];
							$category['system']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=mobile'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Size:</div></dt><dd>';
						foreach (array_unique($_SESSION['mobile_pixel']) as $key) {
							$category= $_GET['category'];
							$category['pixel']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=mobile'.$e.'">'.$key.'</a>
									  </div>';
						}
?>