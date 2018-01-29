<div class="col-md-2 col-xs-4 col-sm-2 col-lg-2">
                    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                </div>
                <div class="col-md-2 col-xs-4 col-sm-2 col-lg-2" >
                    <div class="container" >
                        <h2><?php echo $row['customer_firstname'],$row['customer_lastname']; ?></h2>
                    </div>
                    <hr>
                    <ul class="container details" >
                        <li><p><i class="fa fa-user-o" aria-hidden="true"></i>  <?php echo $row['customer_firstname'],$row['customer_lastname']; ?></p></li>
                        <li><p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $row['customer_email'];?></p></li>
                        <li><p><i class="fa fa-mobile" aria-hidden="true"></i> <?php $newMobile1 = substr($row['customer_phoneNumber'], 0, 6).'****'.substr($row['customer_phoneNumber'], 9);echo $newMobile1;?></p></li>
                    </ul>
                    <hr>
                    <div class="col-sm-10 col-xs-12 tital " >Date Of Joining: <?php echo $row['customer_joinDate'];?></div>
                </div>
