<?php
	if (isset($_POST['resetSubmit'])) {
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$new2_password = $_POST['new2_password'];
		if ($old_password=$_SESSION['customer_password']) {
			if ($new_password=$new2_password) {
				$id=$row['customer_id'];
				$dbh->query("UPDATE customer SET customer_password='$new_password' WHERE customer_id= '$id'");
			}
		}
	}
?>
<div style="width: 50%; margin: 0 auto;">
	<form method="post" id="passwordForm" action="index.php?content=userPage/securePage&userPage=Success">
		<input type="password" class="form-control" required name="old_password" id="old_password" placeholder="Old Password" autocomplete="off">
		</br>
		<input type="password" class="form-control" required name="new_password" id="new_password" placeholder="New Password" autocomplete="off">
		</br>	
		<input type="password" class="form-control" required name="new2_password" id="new2_password" placeholder="Repeat Password" autocomplete="off">
		</br>
		<input type="submit" name="resetSubmit" class="col-xs-12 btn btn-danger btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
	</form>
</div>