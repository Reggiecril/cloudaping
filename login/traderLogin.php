
<?php
include "login/loginSubmit.php";
if (isset($_SESSION['email'])) {
    
	header("location:index.php?content=login/securePage");

}
?>
<div class='header-column1'>
	<a href='index.php?content=mainPages/home'><img src='assets/images/log.png' alt='log' ></a>
</div>
<div class="login-content">
	<div class="login-form">
		<form method="post" action="index.php?content=login/traderLoginSubmit">
			<h1 style="text-align: center;margin: 10px;color: #333;width: 350px;">Trader Sign In</h1>
			<div class="login-form-email">
				<label><i class="fa fa-user" aria-hidden="true"></i></label>
				<input name="traderEmail" id="email" value="" placeholder="E-mail" type="email" >
			</div>
			<div class="login-form-password">
				<label><i class="fa fa-lock" aria-hidden="true"></i></label>
				<input name="traderPassword" id="password" placeholder="Password" type="password">
			</div>
			<div class="login-form-remember-me">
				<span for="remember_me" onkeydown="check_enter(event)">Remember Me</span>
				<input id="remember_me" type="checkbox" name="remember_me" onkeydown="check_enter(event)" >
	　　		</div>
			<div>
				<input class="login-form-submit"  value="Login" name="loginSubmit" type="submit"/>
			</div>

		</form>
		<div class="login-forgot">
			<a href="index.php?content=login/register">Forgot password?</a>
		</div>
		
	</div>
</div>