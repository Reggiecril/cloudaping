<?php
						echo '<dl><dt><div class="product-category-column1">Brand:</div></dt><dd>';
						foreach (array_unique($_SESSION['computer_brand']) as $key) {
							$category= $_GET['category'];
							$category['brand']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=computer'.$e.'">'.$key.'</a>
									  </div>';
							
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Case:</div></dt><dd>';
						foreach (array_unique($_SESSION['computer_case']) as $key) {
							$category= $_GET['category'];
							$category['case']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=computer'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Screen:</div></dt><dd>';
						foreach (array_unique($_SESSION['computer_screen']) as $key) {
							$category= $_GET['category'];
							$category['screen']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=computer'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">CPU:</div></dt><dd>';
						foreach (array_unique($_SESSION['computer_cpu']) as $key) {
							$category= $_GET['category'];
							$category['cpu']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=computer'.$e.'">'.$key.'</a>
									  </div>';
						}
						echo '</dd></dl><dl><dt><div class="product-category-column1">Graphics Card:</div></dt><dd>';
						foreach (array_unique($_SESSION['computer_graphicsCard']) as $key) {
							$category= $_GET['category'];
							$category['graphicsCard']=$key;
							$e='';
							foreach ($category as $k=>$v) {
								$e.='&category['.$k.']='.$v;
							}echo '<div class="product-category-column2">
										<a href="index.php?content=mainPages/product&product=computer'.$e.'">'.$key.'</a>
									  </div>';
						}
?>