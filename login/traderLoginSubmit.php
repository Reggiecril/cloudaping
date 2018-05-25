<?php
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	if (isset($_POST['loginSubmit'])){
		$email=$_POST['traderEmail'];
		$password=$_POST['traderPassword'];
		$_SESSION['message']='';
		if (!empty($email)) {
	        $email = stripslashes($email);
	        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	            
	            $_SESSION['message'] = "Please Enter A Valid Email Address";
	        }
		        if (!empty($password)) {
	        
	        		$password = stripslashes($password);
			        		$result = $dbh->query("SELECT * FROM trader WHERE trader_email='$email' AND trader_password='$password'");
						
							//is there a matching record?
							if ($row = $result->fetch()) {
								//matching record found save email and message and userID to sending page
								$_SESSION['traderName']=$row['trader_name'];
								$_SESSION['trader_id']=$row['trader_id'];
								$_SESSION['trader_password']=$row['trader_password'];
								header("location:admin.php");
							} else {
								//no matching record return fail message to sending page
								$_SESSION['message']='invalid email or wrong password';
								header('location: index.php?content=login/traderLogin');
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