<?php
						echo '<dl><dt><div class="product-category-column1">Type:</div></dt><dd>';
						foreach (array_unique($_SESSION['audiovideo_type']) as $key) {
							$category= $_GET['category'];
							$category['type']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=audiovideo'.$e.'">'.$key.'</a>
									  </div>';
							
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Brand:</div></dt><dd>';
						foreach (array_unique($_SESSION['audiovideo_brand']) as $key) {
							$category= $_GET['category'];
							$category['brand']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=audiovideo'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl>';
?>