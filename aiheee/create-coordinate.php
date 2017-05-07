<?php
 // include_once 'dbconnect.php';
 require_once('../includes/config.php');
 require_once('../includes/functions.php');

$query  = "SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'coordinate' ";
// $sql     =   "SELECT * FROM coordinate ORDER BY s_id DESC ";
$result  =   mysql_query($query);

// $sid     =   mysql_fetch_array($result);
// $id      =   $sid['s_id'];
// $zone    =   $sid['zone'];

// echo mysql_insert_id();
if (isset($_POST['create'])) 
{

	 $c_name 	        = $_POST['c_name'];
	 $c_lastname	    = $_POST['c_lastname'];
	 $c_fathername 	    = $_POST['c_fathername'];
	 $c_address         = $_POST['c_address'];
	 $c_state           = $_POST['c_state'];
	 $c_city 	        = $_POST['c_city'];
     $c_id              = 'AIHEEE/'.$c_state.'/'.$zone.'/'.$id;
	 $c_tehsil   	    = $_POST['c_tehsil'];
	 $c_zila 	        = $_POST['c_zila'];
	 $c_zipcode 	    = $_POST['c_zipcode'];
	 $c_phone 	        = $_POST['c_phone'];
	 $c_email 	        = $_POST['c_email'];
	 $zone              = md5(mt_rand(0,2));


	$result = mysql_query("INSERT INTO `coordinate`(`c_id`,`zone`, `c_name`, `c_lastname`, `c_fathername`, `c_address`, `c_state`, `c_city`, `c_tehsil`, `c_zila`, `c_zipcode`, `c_phone`, `c_email`) VALUES ('$c_id','$zone','$c_name','$c_lastname','$c_fathername','$c_address','$c_state','$c_city','$c_tehsil','$c_zila','$c_zipcode','$c_phone','$c_email')");

	if($result){
		 ?>
                        <script>alert('Successfully Co-ordinate Created');</script>
                        <?php
	}
	else{
		 ?>
                        <script>alert('Something Missing');</script>
                        <?php
	}
exit;
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
<form action="" method="POST">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input id="default-ml" name='c_name' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input id="threshold-ml" name='c_lastname' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father Name</label>
                                        <input id="few-ml" name='c_fathername' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input id="all-ml" name='c_address' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input id="few-ml" name='c_state' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input id="all-ml" name='c_city' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							 <div class="row">
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
                            </div>
							 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input id="few-ml" name='c_zipcode' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input id="all-ml" type="number" name='c_phone' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email-Id </label>
                                        <input id="few-ml" type="email" name='c_email' maxlength="25" class="form-control" required>
                                    </div>
                                </div>
                           
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       

<button type="submit" name='create' class="btn btn-raised btn-primary">Create</button>

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
</body>

</html>
