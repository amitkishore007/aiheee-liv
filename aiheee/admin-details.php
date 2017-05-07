<?php
include_once 'dbconnect.php';
 include_once 'check_session.php';
 //echo $_SESSION['admin_id'].'=================';
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
			<a href="add-admin.html"> <button type="submit" class="btn btn-raised btn-primary">Add Administrator</button></a>
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Administrator List</h1>
						
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
											
											<th>Admin ID</th>
											<th>Admin </th>
											<th>Admin Email</th>
											<th>Admin Mobile</th>
											<th>Admin Unique Id</th>
											<th>Action</th>
											
										</tr>
									    <?php
									    //where a_id = '".$_SESSION['a_id']."'
									    $query = mysql_query("select * from my_admin ");
									  
									    $num=mysql_num_rows($query);
									    if($num>0)
									    {
									    	    while($rows = mysql_fetch_array($query))
									    	    {
											    $mobile_number= $rows['admin_mobile'];
											    $admin_id = $rows['admin_id'];
											    $admin_username=$rows['admin_username'];
											    $a_id=$rows['a_id'];
											    $admin_email=$rows['admin_email'];
																			    ?>
										<tr>
						<!--1--> 			  
											
											<td class="maw-320"><span class="truncate"><?php echo $a_id; ?></span></td>
											
											<td><span class="label label-info label-pill"><?php echo $admin_username; ?></span></td>
											<td><?php echo $admin_email; ?></td>
											<td><?php echo $mobile_number; ?></td>
											<td><?php echo $admin_id; ?></td>
											<td> <a href="view.php" class="btn btn-raised btn-primary">View Candidates</a></td>
											</tr>
											
										<?php } } ?>
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

<!-- Mirrored from thememakker.com/oakleaf-admin/tables-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 18:10:20 GMT -->
</html>
