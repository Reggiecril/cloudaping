<?php $result_laptop = $dbh->query("SELECT * FROM product_laptop");
						while ($laptop = $result_laptop->fetch()) {
							$_SESSION['laptop_brand'][]= $laptop['product_laptop_brand'];
		    				$_SESSION['laptop_graphicsCard'][]= $laptop['product_laptop_graphicsCard'];
		    				$_SESSION['laptop_cpu'][]= $laptop['product_laptop_cpu'];
		    				$_SESSION['laptop_size'][]= $laptop['product_laptop_size'];
						}
						echo '<dl><dt><div class="product-category-column1">Brand:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_brand']) as $key) {
							echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop&category[brand]='.$key.'">'.$key.'</a>
									  </div>';
							
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Graphics Card:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_graphicsCard']) as $key) {
							
							echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop&category[graphicsCard]='.$key.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">CPU:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_cpu']) as $key) {
							echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop&category[cpu]='.$key.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Size:</div></dt><dd>';
						foreach (array_unique($_SESSION['laptop_size']) as $key) {
							echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=laptop&category[size]='.$key.'">'.$key.'</a>
									  </div>';
						}?>