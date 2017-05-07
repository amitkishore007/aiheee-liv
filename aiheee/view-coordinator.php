<?php
 include_once 'dbconnect.php';
 include_once 'check_session.php';
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
			<button type="submit" class="btn btn-raised btn-primary"><a href="create-coordinate.php" style="color:white;">Create Coordinator</a> </button>
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Coordinator Users</h1>
						
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
								<table class="table table-middle">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Last Name</th>
											<th>Father Name</th>
											<th>Address</th>
											<th>State</th>
											<th>City</th>
											<th>Tehsil</th>
											<th>Zila</th>
											<th>Zip Code</th>
											<th>Phone Number</th>
											<th>Email-Id</th>
											<th>Action</th>
										</tr>
										<?php
											$sql="select * from coordinate ";
											$result=mysql_query($sql);
											$count=mysql_num_rows($result);
											if($count>0)
											{
												while($sid=mysql_fetch_array($result))
												{
													 $c_name 	= $sid['c_name'];
													 $c_lastname	= $sid['c_lastname'];
													 $c_fathername 	= $sid['c_fathername'];
													 $c_address     = $sid['c_address'];
													 $c_state       = $sid['c_state'];
													 $c_city 	= $sid['c_city'];
													
												         $c_id='AIHEEE/'.$c_state.'/'.$zone.'/'.$id;
													 $c_tehsil   	= $sid['c_tehsil'];
													 $c_zila 	= $sid['c_zila'];
													 $c_zipcode 	= $sid['c_zipcode'];
													 $c_phone 	= $sid['c_phone'];
													 $c_email 	= $sid['c_email'];
													 
											
											
										?>
										<tr>
										        
											<td><?php echo $c_id; ?></td>
						<!--1--> 			<td><?php echo $c_name; ?></td>
											<td><?php echo $c_lastname; ?></td>
											<td><?php echo $c_fathername ; ?></td>
											<td><?php echo $c_address; ?></td>
											<td><?php echo $c_state; ?></td>
											<td><?php echo $c_city 	; ?></td>
											<td><?php echo $c_tehsil; ?></td>
											<td><?php echo $c_zila; ?></td>
											<td><?php echo $c_zipcode; ?></td>
											<td><?php echo $c_phone; ?></td>
											<td><?php echo $c_email; ?></td>
											<td> <a href="view.php" class="btn btn-raised btn-primary">View Candidates</a></td>
										</tr>
										<?php }}?>	
									</tbody>
								</table>
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
