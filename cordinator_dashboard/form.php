<?

include_once 'dbconnect.php';
include_once("check_session.php");

if (isset($_POST["form_s"])) 
{
 $s_id=$_SESSION['s_id'];

$string='AIHEEE';
$var=mysql_query("SELECT * FROM `coordinate` WHERE s_id='$s_id'");
  $rows = mysql_fetch_array($var);
  $c_state= $rows['c_state'];
  $c_id= $rows['c_id'];

  $zone   = $rows['zone'];

$i=1;
$var1=mysql_query("SELECT * FROM `form_download` order by id desc");

while($row1=mysql_fetch_array($var1))
{
$i1=$row1[id]+$i;
$i++;
}
$serial_no1=$string .'/'. $c_state .'/'. $zone .'/'. $i1;

$var2=mysql_query("INSERT INTO `form_download`(`serial_no`, `c_id`) VALUES ('$serial_no1','$c_id')");
$var3=mysql_query("SELECT * FROM `form_download` order by id desc limit 1");

$rows3 = mysql_fetch_array($var3);
  $serial_no1= $rows3['serial_no'];
  $_SESSION['serial_no']=$serial_no1;
  



}


include_once("leftside.php");?>
	<section id="content">
		<div class="page static-page-tables"> 
			<!-- bradcome -->
			
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Engineering Entrance Exam Form</h1>
						
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
<h2> Serial No. of form:&nbsp&nbsp
<?   echo $_SESSION['serial_no'];  ?></h2>
<?
$serial_no3 =$_SESSION['serial_no'];
$var3=mysql_query("SELECT * FROM `form_download` where serial_no='$serial_no3' ");
$rows3 = mysql_fetch_array($var3);
$payment= $rows3['payment'];

if ($payment==0) 
{
include_once("make_payment.php");

}
else
{
    ?>
<button type="submit" id="create_pdf" class="btn btn-raised btn-primary"><a href="aiheee_form.php">Download</a></button>

<? } ?>	
<button type="submit"  class="btn btn-raised btn-primary"><a href="aiheee_form.html"">Download</a></button>

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
<script src="app.js"></script> 
 
<!--/ custom javascripts --> 
</body>


</html>
