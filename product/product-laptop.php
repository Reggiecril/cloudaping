<?php
						echo '<dl><dt><div class="product-category-column1">Brand:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_brand']) as $key) {
							$category= $_GET['category'];
							$category['brand']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop'.$e.'">'.$key.'</a>
									  </div>';
							
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Graphics Card:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_graphicsCard']) as $key) {
							$category= $_GET['category'];
							$category['graphicsCard']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">CPU:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_cpu']) as $key) {
							$category= $_GET['category'];
							$category['cpu']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Size:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_size']) as $key) {
							$category= $_GET['category'];
							$category['size']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop'.$e.'">'.$key.'</a>
									  </div>';
						}
?>