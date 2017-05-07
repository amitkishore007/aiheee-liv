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
									
								
									
									<li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Form Download</span></a>
										<ul>
											
											<li class="active"><a href="form.html"><i class="fa fa-angle-right"></i>View Form</a></li>
											
										</ul>
										
									</li>
									<li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Candidate List</span></a>
										<ul>
											
											<li class="active"><a href="view-candidate.html"><i class="fa fa-angle-right"></i>View Candidate</a></li>
											
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
    <!--  CONTENT  -->
    <section id="content">
        <div class="page page-forms-common"> 
            
            <!-- bradcome -->
            <div class="bg-light lter b-b wrapper-md mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="font-thin h3 m-0">Payement Report</h1>
                        <small class="text-muted">Welcome to Aiheee Report</small> </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                
                <div class="col-md-12">
                    <section class="boxs">
                      <div class="col-md-4">
					<section class="boxs">
						<div class="boxs-header dvd dvd-btm">
							<h1 class="custom-font"><strong>Line Area </strong>Charts</h1>							
						</div>
						<div class="boxs-body">
							<div id="line-area-example" style="height: 250px;"></div>
						</div>
					</section>
				</div>

                       
                    </section>
                </div>
            </div>
            
        </div>
    </section>
    <!--/ CONTENT --> 
</div>
<!--/ Application Content --> 
<!--Vendor JavaScripts  --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/bootstrapscripts.bundle.js"></script>
<script src="assets/js/vendor/summernote/summernote.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!--  Page Specific Scripts  --> 
<script type="text/javascript">
	$(window).load(function(){
		$('#ex1').slider({
			formatter: function(value) {
				return 'Current value: ' + value;
			}
		});
		$("#ex1").on("slide", function(slideEvt) {
			$("#ex1SliderVal").text(slideEvt.value);
		});

		$("#ex2, #ex3, #ex4, #ex5").slider();

		//load wysiwyg editor
		$('#summernote').summernote({
			height: 200   //set editable area's height
		});
		//*load wysiwyg editor
	});
</script>
	<script type="text/javascript">
        $(window).load(function(){

            Morris.Area({
                element: 'line-area-example',
                data: [
                    { y: '2009', a: 10,  b: 3 },
                    { y: '2010', a: 14,  b: 5 },
                    { y: '2011', a: 8,  b: 2 },
                    { y: '2012', a: 20, b: 15 }
                ],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                lineColors:['#746c9f','#ababab'],
                lineWidth:'0',
                grid: false,
            });
	</script>
<!--/ Page Specific Scripts -->
</body>


</html>
