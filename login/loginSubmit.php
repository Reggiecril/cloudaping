<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	if (isset($_POST['loginSubmit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$_SESSION['message']='';
		if (!empty($email)) {
	        $email = stripslashes($email);
	        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	            
	            $_SESSION['message'] = "Please Enter A Valid Email Address";
	        }
		        if (!empty($password)) {
	        
	        		$password = stripslashes($password);
			        		$result = $dbh->query("SELECT * FROM customer WHERE customer_email='$email' AND customer_password='$password'");
						
							//is there a matching record?
							if ($row = $result->fetch()) {
								//matching record found save email and message and userID to sending page
								$_SESSION['customer_id']=$row['customer_id'];
								$_SESSION['customer_email']=$row['customer_email'];
								$_SESSION['customer_password']=$row['customer_password'];
								$_SESSION['customer_firstname']=$row['customer_firstname'];
								$_SESSION['customer_lastname']=$row['customer_lastname'];
								$_SESSION['message'] = 'aaa';
								header("location:index.php?content=userPage/securePage");
							} else {
								//no matching record return fail message to sending page
								$_SESSION['message']='invalid email or wrong password';
								header('location: index.php?content=login/login');
							}
						
	   	 		}else {
	        
	         		$_SESSION['message']= "Please Enter Your Password";
	    		}

	        
	    } else {
	        
	         $_SESSION['message']['email']= "Please Enter Your Email Address";
	    }
		//build and run query to see if email details entered match any in email table
		
			
		
	}$dbh = null;

}catch(PDOException $e){

    echo $e->getMessage();
    die();
  }
?>