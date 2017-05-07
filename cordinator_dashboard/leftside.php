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
			<div class="branding"> <a class="brand" href="index.php"><span>Aiheee</span></a> <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a> </div>
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
				<li class="dropdown nav-profile">
                              <?php
                                //$_SESSION['s_id']=$aid;
                                    if(isset($_SESSION['s_id']) && $_SESSION['s_id']!= ''){
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
                                ?><a href class="dropdown-toggle" data-toggle="dropdown"> <img src="assets/images/profile-photo.jpg" alt="" class="0 size-30x30"></a>
					
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
									
									
																
									
									<li><a href="report.php"><i class="fa fa-star"></i> <span>Report</span></a></li>
                                   
                                    <li><a href="invoices.php"><i class="fa fa-calendar-check-o"></i> <span>Invoices</span></a></li>
                                        
									
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