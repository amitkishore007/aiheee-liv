<?php
 // include_once 'dbconnect.php';
 require_once('../includes/config.php');
 require_once('../includes/functions.php');

if (!isset($_GET['cid'])) {
   
   redirect_to('Location: view-coordinator.php');
   exit;
}

$cid = (int) $_GET['cid'];


$coordinator = find_by_field('coordinate','s_id',$cid);
       

if (isset($_POST['edit'])) 
{

     
	 $c_name 	        = escape_string($_POST['c_name']);
	 $c_lastname	    = escape_string($_POST['c_lastname']);
	 $c_fathername 	    = escape_string($_POST['c_fathername']);
	 $c_address         = escape_string($_POST['c_address']);
	 $c_state           = escape_string($_POST['c_state']);
	 $c_city 	        = escape_string($_POST['c_city']);
	 $coordinator_id   	= escape_string($_POST['coordinator_id']);
	 // $c_zila 	        = escape_string($_POST['c_zila']);
	 $c_zipcode 	    = escape_string($_POST['c_zipcode']);
	 $c_phone 	        = escape_string($_POST['c_phone']);
	 $c_email 	        = escape_string($_POST['c_email']);
	


     // $qry  = "INSERT INTO coordinate(c_name,c_id, c_lastname, c_fathername, c_address, c_state, c_city, c_zipcode, c_phone, c_email) ";
     // $qry .= " VALUES('{$c_name}','{$coordinator_id}','{$c_lastname}','{$c_fathername}','{$c_address}','{$c_state}','{$c_city}','{$c_zipcode}','{$c_phone}','{$c_email}')";
     $qry  = "UPDATE coordinate SET c_name = '{$c_name}',c_id = '{$coordinator_id}', c_lastname = '{$c_lastname}', c_fathername = '{$c_fathername}', c_address = '{$c_address}', c_state = '{$c_state}', c_city = '{$c_city}', c_zipcode = '{$c_zipcode}' , c_phone = '{$c_phone}', c_email = '{$c_email}' WHERE s_id={$cid}";

     $result = mysql_query($qry);

    confirm($result);

	if(mysql_affected_rows($db)==1){

        $_SESSION['success'] = "Coordinator updated successfuly !";            

       
    } else{
    
        $_SESSION['danger'] = "something went wrong, please try later !";            

    }

}


?>


        <!--SIDEBAR Content -->
        <?php
   include_once("sidebar.php");
   ?>
		
		<!--RIGHTBAR Content -->
		
		<!--/ RIGHTBAR Content --> 
	</div>
	<!--/ CONTROLS Content --> 
	
	<!-- CONTENT  -->
	<section id="content">
		<div class="page static-page-tables"> 
			<!-- bradcome -->
			
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					
                  <?php echo session_message('danger'); ?>
                  <?php echo session_message('success'); ?>
                     
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Coordinate Form</h1>
						
				    </div>
			</div>
			
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<section class="boxs ">
						<div class="boxs-header dvd dvd-btm">
							
							
						</div>
						<div class="boxs-body p-0">
							<div class="table-responsive">
								<div class="row">
                <div class="col-md-12">
                    <section class="boxs">
                      
                        <div class="boxs-body">
                            <div class="row">
<form action="edit_coordinator.php?cid=<?php echo $cid; ?>" method="POST">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input id="default-ml" name='c_name' maxlength="25" class="form-control" value="<?php echo $coordinator['c_name']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input id="threshold-ml" name='c_lastname' maxlength="25" class="form-control" value="<?php echo $coordinator['c_lastname']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father Name</label>
                                        <input id="few-ml" name='c_fathername' maxlength="25" class="form-control" value="<?php echo $coordinator['c_fathername']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input id="all-ml" name='c_address' maxlength="25" class="form-control" value="<?php echo $coordinator['c_address']; ?>" required>
                                    </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input id="few-ml" name='c_state' maxlength="25" class="form-control" value="<?php echo $coordinator['c_state']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input id="all-ml" name='c_city' maxlength="25" class="form-control" value="<?php echo $coordinator['c_city']; ?>" required>
                                    </div>
                                </div>
                            </div>
							<!--  <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tehsil</label>
                                        <input id="few-ml" name='c_tehsil' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zila</label>
                                        <input id="all-ml" name='c_zila' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                            </div> -->
							 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input id="few-ml" name='c_zipcode' maxlength="25" class="form-control" value="<?php echo $coordinator['c_zipcode']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input id="all-ml" type="number" name='c_phone' maxlength="25" value="<?php echo $coordinator['c_phone']; ?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email-Id </label>
                                        <input id="few-ml" type="email" name='c_email' maxlength="25" value="<?php echo $coordinator['c_email']; ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Coordinator id </label>
                                        <input id="few-ml" type="text" name='coordinator_id' maxlength="25" class="form-control" value="<?php echo $coordinator['c_id']; ?>" required>
                                    </div>
                                </div>
                           
								 <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                       

                                    <button type="submit" name='edit' class="btn btn-raised btn-primary">Submit</button>

                                    </div>
                                </div>
                            </div>
                           </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<!--/ CONTENT --> 
</div>
<!--/ Application Content --> 

<!--  Vendor JavaScripts  -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/datatablesscripts.bundle.js"></script>
<!--/ vendor javascripts --> 

<!-- Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 
<script type="text/javascript">
    $('document').ready(function() {
    setTimeout(function(){

        $('.cordinator-error').fadeOut(1000);

    },3000);
    });
</script>
</body>

</html>
