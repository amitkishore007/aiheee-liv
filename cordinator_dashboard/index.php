<?php

include_once("dbconnect.php");
include_once("check_session.php");

$s_id=$_SESSION['s_id'];

  $var=mysql_query("SELECT * FROM `coordinate` WHERE s_id='$s_id'");
  $rows = mysql_fetch_array($var);
  $c_state= $rows['c_state'];
  $c_name= $rows['c_name'];



 include_once("leftside.php");
?>

<section id="content">
		<div class="page static-page-tables"> 
			<!-- bradcome -->
			
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					
					
			</div>
			
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<section class="boxs ">
						<div class="boxs-header dvd dvd-btm">


<h2>  Welcome <? echo $c_name;?>
<br>
	
							
						</div>
						<div class="boxs-body p-0">
							<div class="table-responsive">
<form action="form.php" method='POST'>
						<select name="forma" >

  <option value="Forms">Forms</option>
  <option value="r">Engineering Entrance Exam Form</option>

</select>
    <input type="submit" value="Submit" name='form_s'>


</form>

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
<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>
</body>


</html>

