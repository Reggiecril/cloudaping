<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	if (isset($_POST['searchSubmit'])) {
		$search=$_POST['searchText'];
		$select=$_POST['searchSelect'];
		$query = "SELECT * FROM product ";
		if($select=='All'){
			$query.="WHERE product_name LIKE '%$search%' OR product_nowPrice LIKE '%$search%'";
		}else if ($select=='shop') {
			$query = "SELECT * FROM trader";
		}else{
			$query.="WHERE product_type = '$select' AND (product_name LIKE '%$search%' OR product_nowPrice LIKE '%$search%')";
		}
		$_SESSION['query']=$query;
		$r=mysqli_query($connection,$query);
		$count=mysqli_num_rows($r);
		if ($count==0) {
			echo "<div class='alert alert-danger text-center'>There was no search results!</div>";
		}else{
		
				header("location:index.php?content=sections/searchPage");
			
		}
		
	}
}catch(PDOException $e){
	print $e->getMessage();
	die();
}
?>
<?php
	
?>