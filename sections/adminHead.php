<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="assets/css/adminStyle.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/Particleground.js"></script>
	<script type="text/javascript" src="assets/js/public.js"></script>
	<script type="text/javascript" src="assets/js/imgUp.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<div class="header">
 <div class="logo">
  <img src="assets/images/admin_logo.png" title="CloudaPing"/>
 </div>
 <div class="fr top-link">
  <a href="index.php" target="_blank" title="TO CloudaPing"><i class="shopLinkIcon"></i><span>To CloudaPing</span></a>
  <a href="admin.php?content=adminPage/admin_list" title="DeathGhost"><i class="adminIcon"></i><span>Admin：<?php echo $_SESSION['traderName'] ?></span></a>
  <a href="admin.php?content=adminPage/revise_password" title="Reset Password"><i class="revisepwdIcon"></i><span>Reset Password</span></a>
  <a href="admin.php?content=adminPage/logout" title="Exit" style="background:rgb(60,60,60);"><i class="quitIcon"></i><span>Exit</span></a>
 </div>
</div>
<?php
	$trader_id=$_SESSION['trader_id'];
	$trader_name=$_SESSION['traderName'];
?>