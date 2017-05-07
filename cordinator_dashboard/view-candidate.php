<?php
include_once("dbconnect.php");
include_once("check_session.php");
?>
<!doctype html>	
<html class="no-js" lang="">



<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>::Aiheee - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/datatables.bootstrap.min.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/extensions/Responsive/css/dataTables.responsive.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/extensions/ColVis/css/dataTables.colVis.min.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/extensions/TableTools/css/dataTables.tableTools.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="oakleaf" class="main_Wrapper">


<!-- Application Content  -->
<div id="wrap" class="animsition"> 
	<!-- HEADER Content -->
	<section id="header">
		<header class="clearfix"> 
			<!-- Branding -->
			<div class="branding"> <a class="brand" href="index.html"><span>Aiheee</span></a> <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a> </div>
			<!-- Branding end --> 
			
			<!-- Left-side navigation -->
			<ul class="nav-left pull-left list-unstyled list-inline">
				<li class="leftmenu-collapse"><a role="button" tabindex="0" class="collapse-leftmenu"><i class="fa fa-arrow-circle-o-left"></i></a></li>
			</ul>
			<!-- Left-side navigation end --> 
			
			<!-- Search -->
		
			<!-- Search end --> 
			
			<!-- Right-side navigation -->
			<ul class="nav-right pull-right list-inline">
                            <?php
                                //$_SESSION['c_id']=$cid;
                                    if(isset($_SESSION['c_id']) && $_SESSION['c_id']!= ''){
                                ?>
                                    <li class="dropdown">
                                        <a href="logout.php">LOGOUT</a>
                                    </li>
                                <?php
                                    }else{
                                ?>   
                                    <li class="dropdown">
                                        <a href="login.php">LOGIN</a>
                                    </li>
                                <?php
                                    }
                                ?>
				<li class="dropdown nav-profile"> <a href class="dropdown-toggle" data-toggle="dropdown"> <img src="assets/images/profile-photo.jpg" alt="" class="0 size-30x30"></a>
					
				</li>
				

			</ul>
			<!-- Right-side navigation end --> 
		</header>
	</section>
	<!--/ HEADER Content  --> 
	
	<!--  CONTROLS Content  -->
	<div id="controls"> 
		<!--SIDEBAR Content -->
			<aside id="leftmenu">
			<div id="leftmenu-wrap">
				<div class="panel-group slim-scroll" role="tablist">
					<div class="panel panel-default">						
						<div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
							<div class="panel-body"> 
								<!--  NAVIGATION Content -->
								<ul id="navigation">
									<li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
									
								
									
									<li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Form Download</span></a>
										<ul>
											
											<li class="active"><a href="form.php"><i class="fa fa-angle-right"></i>View Form</a></li>
											
										</ul>
										
									</li>
									<li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Candidate List</span></a>
										<ul>
											
											<li class="active"><a href="view-candidate.php"><i class="fa fa-angle-right"></i>View Candidate</a></li>
											
										</ul>
									</li>
									
									
																
									
									<li><a href="report.html"><i class="fa fa-star"></i> <span>Report</span></a></li>
                                   
                                    <li><a href="invoices.html"><i class="fa fa-calendar-check-o"></i> <span>Invoices</span></a></li>
                                        
									
								</ul>
								<!--/ NAVIGATION Content --> 
							</div>
						</div>
					</div>
					
					</div>
				</div>
			</div>
		</aside>
		<!--/ SIDEBAR Content --> 
		
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
						<h1 class="font-thin h3 m-0">Candidate List</h1>
						
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
											<th>
											<div class="checkbox">
													<label><input type="checkbox" name="optionsCheckboxes"></label>
												</div>
											</th>
											<th>Candidate</th>
											<th>Candidate ID</th>
											<th>Registration Date</th>
											<th>Active</th>
											<th>Contact</th>
											<th>Email</th>
											<th></th>
											<th></th>
										</tr>
									
										<tr>
						<!--1--> 			  <td>
											</td>
											<td class="nowrap"><img src="assets/images/avatar2.png" alt="Jessica Brown" width="36" height="36"><strong>Kunal</strong></td>
											<td class="maw-320"><span class="truncate">u0001</span></td>
											<td>21-Jun-2016</td>
											<td><span class="label label-info label-pill">1</span></td>
											<td>9555457807</td>
											<td>kunalsharma30798@gmail.com</td>
											<td> <button type="submit" class="btn btn-raised btn-primary">View</button>

											<td></td>
										</tr>
										
										
										
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
