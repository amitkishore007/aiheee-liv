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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
</head>
<body id="oakleaf" class="main_Wrapper">
<!-- Application Content -->
<div id="wrap" class="animsition"> 
    <!--  HEADER Content -->
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
            <ul class="nav-right pull-right list-inline"><?php
                                //$_SESSION['a_id']=$aid;
                                    if(isset($_SESSION['admin_id']) && $_SESSION['admin_id']!= ''){
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
    <!-- CONTROLS Content  -->
    <div id="controls"> 
<aside id="leftmenu">
      <div id="leftmenu-wrap">
        <div class="panel-group slim-scroll" role="tablist">
          <div class="panel panel-default">           
            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
              <div class="panel-body"> 
                <!--  NAVIGATION Content -->
                <ul id="navigation">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                  
                <li><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Administrator</span></a>
                    <ul>
                      <li><a href="admin-details.php"><i class="fa fa-angle-right"></i>Administrator</a></li>
                      
                    </ul>
                  </li>
                  
                  <li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Coordinator List</span></a>
                    <ul>
                      
                      <li class="active"><a href="view-coordinator.php"><i class="fa fa-angle-right"></i>View Coordinator</a></li>
                      <li class="active"><a href="view_form.php"><i class="fa fa-angle-right"></i>View Form</a></li>
                    </ul>
                  </li>
                  <li class="active open"><a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Employee List</span></a>
                    <ul>
                      
                      <li class="active"><a href="view-employee.php"><i class="fa fa-angle-right"></i>View Employee</a></li>
                      
                    </ul>
                  </li>
                                
                
                  
                                
              
                </ul>
                <!--/ NAVIGATION Content --> 
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
    </aside>