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
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0 ">Form submitted</h1>
						
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
											<th>Coordinatro Id</th>
											<th>Name</th>
											
											<!-- <th>Father Name</th> -->
											<th>Address</th>
											<th>State</th>
											<th>City</th>
											<!-- <th>District</th> -->
											
											<th>Zip Code</th>
											<th>Phone Number</th>
											<th>Email-Id</th>
											<th>Exam Date</th>
											
											<th>Action</th>
										</tr>
										<?php
											$sql    = "SELECT * FROM student ORDER BY created_at DESC";
											$result = mysql_query($sql);
											$count  = mysql_num_rows($result);

											if($count>0)
											{
												while($sid=mysql_fetch_array($result))
												{
													
													$stu_name       = $sid['stu_name'];
													$id             = $sid['stu_id'];
													$stu_fathername = $sid['stu_fname'];
													// $zone        = $sid['zone'];
													$stu_address    = $sid['addr'];
													$stu_state      = $sid['state'];
													$stu_city       = $sid['city'];
													$stu_district   = $sid['dist'];
													
													// $c_id        ='AIHEEE/'.$c_state.'/'.$zone.'/'.$id;
													$c_id           = $sid['coordinator_id'];
													$stu_zipcode    = $sid['pin'];
													$stu_phone      = $sid['num'];
													$stu_email      = $sid['email'];
													
											
											
										?>
										<tr id='row_<?php echo $sid['stu_id']; ?>'>
										        
											<td><?php echo $c_id; ?></td>
						<!--1--> 			<td><?php echo $stu_name; ?></td>
											
											
											<td><?php echo $stu_address; ?></td>
											<td><?php echo $stu_state; ?></td>
											<td><?php echo $stu_city 	; ?></td>
											
											<td><?php echo $stu_zipcode; ?></td>
											<td><?php echo $stu_phone; ?></td>
											<td><?php echo $stu_email; ?></td>
											<td><?php echo date('M j Y',strtotime($sid['created_at'])); ?></td>
											<td><input type="text" class="timepicker" name='time'></td>
											<td> 
											
											<ul class="action-list">
												<li><a href="student_form.php?sid=<?php echo $sid['stu_id']; ?>" class="btn btn-raised btn-info btn-sm">View</a></li>
												<li><a href="edit_form.php?sid=<?php echo $sid['stu_id']; ?>" class="btn btn-raised btn-primary btn-sm">Edit</a></li>
												<!-- <li><a href="javascript:void(0);" class="btn btn-raised btn-danger btn-sm " >Delete</a></li> -->
											</ul>				

											</td>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<!-- Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 
</body>

<!-- Mirrored from thememakker.com/oakleaf-admin/tables-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 18:10:20 GMT -->
</html>
