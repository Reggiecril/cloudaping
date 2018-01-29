<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	if (isset($_POST['registerSubmit'])){
		
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$_SESSION['message']='';
		if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                    if(!ctype_alpha($firstname) && !ctype_alpha($lastname)){
                        $_SESSION['message'] = "Name must be alphabetic characters only";
                    }else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $_SESSION['message'] = 'Please enter a valid email address';
                    }else if(!count($password <= 5)){
                        $_SESSION['message'] = ' Password format must be more than 5';
					}else{
						$query="INSERT INTO customer
								(customer_firstname,customer_lastname,customer_email,customer_password) 
								VALUES('$firstname','$lastname','$email','$password')";
						$dbh->query($query);

						$_SESSION['customer_email']=$email;
						$_SESSION['customer_password']=$password;
						$_SESSION['customer_firstname']=$firstname;
						$_SESSION['customer_lastname']=$lastname;
						$_SESSION['message']='valid email';
						header("location:index.php?content=userPage/securePage");
					}
		}else{
			$_SESSION['message']="Please fill!";
		}

	} 
	$dbh = null;

}catch(PDOException $e){

    echo $e->getMessage();
    die();
  }