
<?php
include "login/loginSubmit.php";
if (isset($_SESSION['customer_email'])) {
    
	header("location:index.php?content=userPage/securePage");

}
?>
<div class='header-column1'>
	<a href='index.php?content=mainPages/home'><img src='assets/images/log.png' alt='log' ></a>
	<a href="index.php?content=login/traderLogin" style="float: right;margin-right: 25px;line-height: 60px;font-size: 20px">Trader</a>
</div>
<div class="login-content">
	<div class="login-form">
		<form method="post" action="">
			<img src="assets/images/log.png" width="200px" height="30px;">
			<h1 style="float: right;margin: 10px;color: #333;">Sign In</h1>
			<div class="login-form-email">
				<label><i class="fa fa-user" aria-hidden="true"></i></label>
				<input name="email" id="email" value="" placeholder="E-mail" type="email" >
			</div>
			<div class="login-form-password">
				<label><i class="fa fa-lock" aria-hidden="true"></i></label>
				<input name="password" id="password" placeholder="Password" type="password">
			</div>
			<div class="login-form-remember-me">
				<span for="remember_me" onkeydown="check_enter(event)">Remember Me</span>
				<input id="remember_me" type="checkbox" name="remember_me" onkeydown="check_enter(event)" >
	　　		</div>
			<div>
				<input class="login-form-submit"  value="Login" name="loginSubmit" type="submit"/>
			</div>

			<div><?php  echo $_SESSION['customer_email']; ?></div>
		</form>
		<div>facebook login</div>
		<div class="login-register">
			<a href="index.php?content=login/register">Register</a>
		</div>
		<div class="login-forgot">
			<a href="index.php?content=login/register">Forgot password?</a>
		</div>
		
	</div>
</div>