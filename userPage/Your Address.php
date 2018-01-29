<?php
    if (isset($_POST['addressSubmit'])) {
        if (isset($_POST['someSwitchOption001'])) {
            $someSwitchOption001=$_POST['someSwitchOption001'];
            $dbh->query("UPDATE customer_address SET customer_address_state = '1' WHERE customer_address_id='$someSwitchOption001'");
            header("location:index.php?content=userPage/securePage&userPage=Success");
        }else{
            echo "<div class='alert alert-warning'>Select a address or create a new addres.</div>";
        }
    }
?>
<a href="#delivery" data-toggle="modal" data-target="#delivery" style="float: right;font-size: 34px;"><i class="fa fa-plus-circle" aria-hidden="true" ></i></a>
<form method="post" action="">
<div class="col-xs-12 col-sm-12 col-md-10 col-sm-offset-5 col-md-offset-0">
    <?php while ($address_row=$address_result->fetch()) {?>
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                    	<div class="material-switch pull-left">
                            <input id="someSwitchOptionSuccess[<?php echo $address_row['customer_address_name'];?>]" value="<?php echo $address_row['customer_address_id'];?>" name="someSwitchOption001" <?php if($address_row['customer_address_state']=='1')echo 'checked'; ?> type="radio"/>
                            <label for="someSwitchOptionSuccess[<?php echo $address_row['customer_address_name'];?>]" class="label-primary"></label>
                        </div>
                        <div style="width: 80%;padding-left: 60px; font-size: 18px;">
                        <?php echo "<strong>".$address_row['customer_address_name']."</strong>  "
                                    .$address_row['customer_address_first'].". "
                                    .$address_row['customer_address_second'].". "
                                    .$address_row['customer_address_city'].". "
                                    .strtoupper($address_row['customer_address_passcode']);
                        ?>
                        </div>
                        
                    </li>
                </ul>
    <?php }?>  
                <input type="submit" name="addressSubmit" class="btn btn-primary" value="Confirm"> 
</div>
</form>
<form method="post" action="">
        <div class="modal fade" id="delivery">
        <div class="modal-dialog">
          <div class="modal-content">

                    <fieldset>
                        <legend><h1>  Address</h1></legend>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm text-center" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm text-center" required placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control input-sm text-center" required placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" class="form-control input-sm text-center" required placeholder="Mobile no">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="address1" id="address1" class="form-control input-sm text-center" required placeholder="Address 1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="address2" id="address2" class="form-control input-sm text-center" placeholder="Address 2(Optional)">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="city" id="city" class="form-control input-sm text-center" required placeholder="City">
                                </div>
                            </div>
                           <div class="col-xs-12 col-sm-12 col-md-10 ">
                                <div class="form-group">
                                    <input type="text" name="passcode" id="passcode" class="form-control input-sm text-center" required placeholder="Passcode">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10 .btn-info">
                                <div class="form-group">
                                    <input type="submit" name="deliveryAddress" id="deliveryAddress" class="form-control btn-info text-center" value="Select">
                                </div>
                            </div>
                </fieldset>
            </div> 
        
    </div>
    </div>
</form>
