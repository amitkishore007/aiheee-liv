<!doctype html>
<html class="no-js" lang="">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>:: Aiheee - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">
<link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">
<link rel="stylesheet" href="assets/js/vendor/summernote/summernote.css">
<link rel="stylesheet" href="assets/css/main.css">

</head>
<body id="oakleaf" class="main_Wrapper">
<!-- Application Content -->
<div id="wrap" class="animsition"> 
    <!--  HEADER Content -->
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
				<li class="dropdown nav-profile"> <a href class="dropdown-toggle" data-toggle="dropdown"> <img src="assets/images/profile-photo.jpg" alt="" class="0 size-30x30"></a>
					
				</li>
				

			</ul>
            <!-- Right-side navigation end --> 
        </header>
    </section>
    <!--/ HEADER Content  --> 
    <!-- CONTROLS Content  -->
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
									<li><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
									
								<li><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Administrator</span></a>
										<ul>
											<li><a href="admin-details.html"><i class="fa fa-angle-right"></i>Administrator</a></li>
											<li><a href="Company-expense.html"><i class="fa fa-angle-right"></i>Company Expense</a></li>
											
										</ul>
									</li>
									
									<li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Coordinator List</span></a>
										<ul>
											
											<li class="active"><a href="view-coordinator.html"><i class="fa fa-angle-right"></i>View Coordinator</a></li>
											
										</ul>
									</li>
									<li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Employee List</span></a>
										<ul>
											
											<li class="active"><a href="view-employee.html"><i class="fa fa-angle-right"></i>View Employee</a></li>
											
										</ul>
									</li>
									
									
																
									
									<li><a href="reminder.html"><i class="fa fa-star"></i> <span>Reminder</span></a></li>
                                    <li><a href="mail-compose.html"><i class="fa fa-envelope"></i> <span>Email</span></a></li>
									<li><a href="mail-compose.html"><i class="fa fa-envelope"></i> <span>SMS</span></a></li>
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
	
	<!--  CONTENT -->
	<section id="content">
		<div class="page email-page tbox tbox-sm">
			<div class="row">
				<!-- left side -->	
				<div class="col-md-3">
					<section class="boxs">
						<div class="tcol"> 
							<!-- left side -->
						
							
						</div>
					</section>
				</div>
				<!-- left side -->
				<!-- right side -->
				<div class="col-md-12">
					<section class="boxs">
						<div class="tcol"> 
						<!-- right side header -->
						<div class="p-15 bg-white b-b">
							<div class="btn-toolbar">
								
							</div>
						</div>
						<!-- /right side header --> 
						
						<!-- right side body -->
						<div class="p-15">
							<form name="newMail" class="form-horizontal mt-20">
								<div class="form-group">
									<label class="col-lg-2 control-label">To :</label>
									<div class="col-lg-10">
										<select data-placeholder="Select recipients..." multiple="" tabindex="3" class="chosen-select" style="width:96.5%;">
											<option value="ici@gmail.com">Pi@gmail.com</option>
											<option value="johny@gmail.com">johny@gmail.com</option>
											<option value="arnie@gmail.com">Akshay@gmail.com</option>
											<option value="pete@gmail.com">Dhavan@gmail.com</option>
											<option value="gorge@gmail.com">Sachin@gmail.com</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Subject :</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Content :</label>
									<div class="col-lg-10">
										<div id="summernote">Hello!</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2"> <a class="btn btn-raised btn-default">
                                        <i class="fa fa-send"></i> Send Message</a> </div>
								</div>
							</form>
						</div>
					</div>
					</section>
				</div>
				<!-- right side -->
			</div>
			
		</div>
	</section>
	<!--/ CONTENT --> 
	
</div>
<!--/ Application Content --> 

<!-- Vendor JavaScripts -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script> 
<script src="assets/js/vendor/summernote/summernote.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!--  Page Specific Scripts --> 
<script type="text/javascript">
    $(window).load(function(){

        //load wysiwyg editor
        $('#summernote').summernote({
            height: 200   //set editable area's height
        });
        //*load wysiwyg editor

    });
</script> 
<!--/ Page Specific Scripts --> 
</body>


</html>
