<?php
						echo '<dl><dt><div class="product-category-column1">Brand:</div></dt><dd>';
						foreach (array_unique($_SESSION['camera_brand']) as $key) {
							$category= $_GET['category'];
							$category['brand']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=camera'.$e.'">'.$key.'</a>
									  </div>';
							
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Type:</div></dt><dd>';
						foreach (array_unique($_SESSION['camera_type']) as $key) {
							$category= $_GET['category'];
							$category['type']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=camera'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Pixel:</div></dt><dd>';
						foreach (array_unique($_SESSION['camera_pixel']) as $key) {
							$category= $_GET['category'];
							$category['pixel']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=camera'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl>';
?>