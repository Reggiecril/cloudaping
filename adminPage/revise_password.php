<?php
try {
  $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
  if (isset($_POST['resetSubmit'])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $new2_password = $_POST['new2_password'];
    $result=$dbh->query("SELECT * FROM trader WHERE trader_id='$trader_id'");
    $row=$result->fetch();
    if ($old_password==$row['trader_password']) {
      if ($new_password==$new2_password) {
        $dbh->query("UPDATE trader SET trader_password='$new_password' WHERE trader_id= '$trader_id'");
      }else{
        echo "<div class='alert alert-danger text-center'>Two new passwords have to match!</div>";
      }
    }else{
      echo "<div class='alert alert-danger text-center'>Wrong Password!</div>";
    }
  }
}catch(PDOException $e){
  print $e->getMessage();
  die();
}
?>
<div style="width: 50%; margin: 0 auto;margin-top: 100px;">
  <form method="post" id="passwordForm" action="">
    <input type="password" class="form-control" required name="old_password" id="old_password" placeholder="Old Password" autocomplete="off">
    </br>
    <input type="password" class="form-control" required name="new_password" id="new_password" placeholder="New Password" autocomplete="off">
    </br> 
    <input type="password" class="form-control" required name="new2_password" id="new2_password" placeholder="Repeat Password" autocomplete="off">
    </br>
    <input type="submit" name="resetSubmit" class="col-xs-12 btn btn-danger btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
  </form>
</div>