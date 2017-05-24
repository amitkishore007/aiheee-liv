<?php
include_once("dbconnect.php");
include_once("check_session.php");
   

?>


<?php include_once("sidebar.php");?>

<section id="content">
		<div class="page static-page-tables"> 
			<!-- bradcome -->
			
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Welcome <?php $query = mysql_query("select * from my_admin where a_id = '".$_SESSION['admin_id']."'");
    $rows = mysql_fetch_array($query);
    $mobile_number= $rows['admin_mobile'];
    $admin_id = $rows['admin_id'];
    $admin_username=$rows['admin_username']; echo $admin_username;?> Admin Dashboard</h1>
						
				</div>
			</div>
			
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<section class="boxs ">
						
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
