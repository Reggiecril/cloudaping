
<?php
include "login/registerSubmit.php";
if (isset($_SESSION['email'])) {
    
	header("location:index.php?content=userPage/securePage");

}
?>
<div class='header-column1'>
	<a href='index.php?content=mainPages/home'><img src='assets/images/log.png' alt='log' ></a>
</div>
<div class="login-content">
	<div class="register-form">
		<form method="post" action="">
			<div style="border-bottom: 1px solid #D52341;padding-bottom: 20px;">
				<img src="assets/images/log.png" width="200px" height="30px;">
				<h1 style="float: right;margin: 10px;color: #333;">Sign Up</h1>
			</div>
			<div class="register-form-firstname">
				<label><i class="fa fa-user" aria-hidden="true"></i></label>
				<input name="firstname" id="firstname" value="" placeholder="Firstname" type="text" >
			</div>
			<div class="register-form-lastname">
				<label><i class="fa fa-user" aria-hidden="true"></i></label>				
				<input name="lastname" id="lastname" value="" placeholder="Lastname" type="text" >
			</div>
			<div class="register-form-email">
				<label><i class="fa fa-envelope" aria-hidden="true"></i></label>
				<input name="email" id="email" value="" placeholder="Your E-mail" type="email" >
			</div>
			<div class="register-form-password">
				<label><i class="fa fa-lock" aria-hidden="true"></i></label>
				<input name="password" id="password" placeholder="Password" type="password">
			</div>
			<div class="register-form-password">
				<label><i class="fa fa-lock" aria-hidden="true"></i></label>
				<input name="cfm-password" id="cfm-password" placeholder="Confirm Password" type="password">
			</div>
			<div><?php  echo $_SESSION['message']; ?></div>
			<input type="submit" name="registerSubmit" value="Register">
		</form>
	</div>
</div>