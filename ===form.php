<?php  
 
include_once("PhpIncludes/connection_info.php");
include_once("PhpIncludes/database_connection.php");
$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);
/*if(isset($_POST['submit']))
{
    //echo 'str';
    $stu_name=$_POST['stu_name'];
    $stu_fname=$_POST['stu_fname'];
    $image=$_POST['image'];
    $INSERT=mysql_query("insert into student set stu_name='".$stu_name."',stu_fname='".$stu_fname."'");
    header('location:make_payment.php');
    exit();
    //echo "str";
}*/
$country=addslashes(trim($_POST['country']));
$city=$_POST['city'];
$state=$_POST['state'];
if($_POST['country']!='' && $_POST['country']!=0)
	{
		$countryArr=explode('@@',$_POST['country']);
		$countryId=$countryArr[0];
		$country=$countryArr[1];
	}
	if($_POST['state']!='')
	{
		$stateArr=explode('@@',$_POST['state']);
		$stateId=$stateArr[0];
		$state=$stateArr[1];
	}
	if($_POST['city']!='')
	{
		$cityArr=explode('@@',$_POST['city']);
		$cityId=$cityArr[0];
		$city=$cityArr[1];
	}

$errorMsg='';
session_start();
if(isset($_POST['submit']))
{
    //echo 'str';
	$fn=$_FILES['file']['name'];
	$tmn=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmn, "img/user/".$fn);
   $stu_name=$_POST['stu_name'];
   $stu_fname=$_POST['stu_fname'];
   $addr=$_POST['addr'];
   $t_id=$_POST['t_id'];
   $div_id=$_POST['div_id'];
   $st_id=$_POST['st_id'];
   //$pin=$_POST['pin'];
   $email=$_POST['email'];
   //$addr=$_POST['addr'];
   $state=$_POST['state'];
   //$dist=$_POST['city'];
   $city=$_POST['city'];
   $num=$_POST['num'];
   $dob=$_POST['dob'];
   $edu_pass=$_POST['edu_pass'];
   $perc=$_POST['perc'];
   $year_pass=$_POST['year_pass'];
   $income=$_POST['income'];
   $citizen=$_POST['citizen'];
   $tenth=$_POST['tenth'];
   $twelth=$_POST['twelth'];
   $graduate=$_POST['graduate'];
   $board=$_POST['board'];
   $institute=$_POST['institute'];
   $declar=$_POST['declar'];
   $pin=mysql_real_escape_string($_POST['pin']);
   foreach($pin as $pincode)
   {
       $pi=$pincode['pin'];
   }
  
    $INSERT=mysql_query("INSERT INTO `student`(
    `stu_name`, `stu_fname`, `image`, `addr`, `state`,  `city`, `email`,`num`,`edu_pass`,`perc`,`year_pass`,`income`,`citizen`,`tenth`,`twelth`,`graduate`,`board`,`institute`,`declar`) VALUES ('$stu_name','$stu_fname','$fn','$addr','$state','$city','$email','$num','$edu_pass','$perc','$year_pass','$income','$citizen','$tenth','$twelth','$graduate','$board','$institute','$declar') ");

    header('location:make_payment.php');
    exit();
}
?>
<!doctype html>
<html>
<head><title>All India Higher Education Entrance Examination | AIHEEE ( CET - 2017 ) | Application Form </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<style>
.img1 {
    background-color: #FFFEFC;
    width: 150px;
    height:180px;
    border: 1px solid #9C9A9A;
    padding: 15px;
    margin: 15px;
    float: right;
    margin-right: 60px;
}

	.state{
	    
	}
	.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #fffefc 40%, #fffefc);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 2px solid #AAA;
   color: #555;
   font-size:22px;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

</style>
<body style="background-color: #FFFEFC;">
    <img src="images/logo.png" alt="AIHEEE">
    <form name="form" method="post" enctype="multipart/form-data">
<table style="width: 100%; background-color:#009500;">
<tr><td style="width: 20%; padding: 10px;">
</td>
<td style="width: 70%; padding: 10px;">
<h2 style="color:#FFFFFF; align:left;">ALL INDIA HIGHER EDUCATION ENTRANCE EXAMINATION 
<br>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AIHEEE ( CET - 2017 ) </h2></td></tr></table>
<center><h1>Application Form</h1></center>
<table Width="100%">
    <?php if($errorMsg!=''){?>
    <?php echo $errorMsg;?>
    <?php } ?>
<tr>
 
<td width="20%" style="font-size:30px;">
1. Name :</td>
 <td width="20%"><input type="text" name="stu_name" size="70"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" ></td>
	<td rowspan="2">
	<div class="img1"><center><p style="margin-top:50px;">Upload Your Recent Photo</p>
    </center><br><br><br><br><br>image size 240*320 only 2kb-2mb <br><br></div>
  
    <form action="myform.cgi"> <br><br><input type="file" name="file"  id="fileupload"  style="float: right;">  </form>


</tr>

<tr>

	<td width="20%" style="font-size:30px;">2.Father's Name :</td>
 <td width="30%">
 <input type="text" name="stu_fname" size="70"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" placeholder=""></td>
</tr>
</table>

<br>
<table Width="100%">
	<tr Width="100%">
		<td Width="100%" style="font-size:30px;">3. Address :
		 <input type="text" name="addr" size="70"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" placeholder="">
		 </td>
		</tr>
	
	
	
	<tr>
		<td width="30%" style="font-size:30px;">State:
		
			<select name="state"  style="width:30%; padding:12px; margin-right:10px;" >			
			<option value="0">Select state</option>
			<?php
			 $snt=mysql_query("select * from states ");
			 $num1=mysql_num_rows($snt);
			 if($num1>0)
			 {
			     $sr=0;
			 
			 while($arcnt1=mysql_fetch_array($snt))
			 
			
			 {
			     $sr++;
				 
					?>
						<option value="<?php echo $arcnt1['id']; ?>"><?php echo $arcnt1['name']; ?></option>
						<?php
			 }			
			 }
			?>
			</select>

		5.Dist :<select name="city"  style="width:30%; padding:12px;>			
			<option value="0">Select city</option>
			<?php
			 $sntcity=mysql_query("select * from division  ");
			  $num1=mysql_num_rows($sntcity);
			 if($num1>0)
			 {
			     $sr=0;
			 
			 while($sncitylist=mysql_fetch_array($sntcity))
			 
			
			 {
			     $sr++;
				 
					?>
						<option value="<?php echo $sncitylist['div_id']; ?>"<?php if($sncitylist['div_id']==$sncitylist['div_id']) echo 'checked'; ?>><?php echo $sncitylist['district']; ?></option>
						<?php
			 }	
			 }
			?>
			</select> <br>
	6.City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="city" size="35"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px; width:300px
    margin: 5px;" placeholder="">&nbsp;&nbsp;

		7.Pin :	&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="pin[]" size="1"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 1px;
    margin: 3px;">
			<input type="text" size="1" name="pin[]" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 1px;
    margin: 3px;">
			<input type="text" size="1" name="pin[]" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 1px;
    margin: 3px;">
			<input type="text" size="1" name="pin[]" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 1px;
    margin: 3px;">
			<input type="text" size="1" name="pin[]" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 1px;
    margin: 3px;"> 
			<input type="text" size="2" name="pin[]" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 1px;
    margin: 3px;">


	</td>
	
	</tr></table>
	<br>
	
	<br>
<table Width="100%">
	<tr Width="100%">
		<td Width="100%" style="font-size:30px;">8. Email Id
			<input type="text" name="email" size="50"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
			9. Mobile No.: <input type="text" name="num" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin:0px;">
						

			</td>
		</tr>
	</table><br>
	<table Width="100%">
<tr Width="100%">
	<td Width="100%" style="font-size:30px;">10. Date Of Birth :
		<input type="text" size="1" name="dob"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
		<input type="text" size="1" name="dob" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
		<input type="text" size="1" name="dob" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
		<input type="text" size="1" name="dob" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
		<input type="text" size="1" name="dob"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
		<input type="text" size="1" name="dob"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
		<input type="text" size="1" name="dob" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
		<input type="text" size="1" name="dob" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
	</td>
</tr>
</table><br>
<table Width="100%">
<tr Width="100%">
		<td Width="100%" style="font-size:30px;">11. Category:<input type="checkbox" name="checkbox[]" value="GEN"<?php if(is_array($vehicle)) { if(in_array(GEN,$vehicle)) echo 'checked';} ?>> GEN
		
		<input type="checkbox" name="checkbox[]" value="ST"<?php if(is_array($vehicle)) { if(in_array(ST,$vehicle)) echo 'checked';} ?>>	ST 
		<input type="checkbox" name="checkbox[]" value="SC"<?php if(is_array($vehicle)) { if(in_array(SC,$vehicle)) echo 'checked';} ?>>	SC 
		<input type="checkbox" name="checkbox[]" value="OBC"<?php if(is_array($vehicle)) { if(in_array(OBC,$vehicle)) echo 'checked';} ?>>	OBC 
		<input type="checkbox" name="checkbox[]" value="PH"<?php if(is_array($vehicle)) { if(in_array(PH,$vehicle)) echo 'checked';} ?>>	PH 
		<input type="checkbox" name="checkbox[]" value="OTHERS"<?php if(is_array($vehicle)) { if(in_array(OTHERS,$vehicle)) echo 'checked';} ?>>	OTHERS 
		 </td>
		</tr>
	</table><br>
	<table Width="100%">
<tr Width="100%">
		<td Width="100%" style="font-size:30px;">12. Examination Last Passed / Appeared :
			<select class="soflow-color" name="edu_pass"  style="width:600px;">
  <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
  <option>Select</option>
  <option>10<sup>th</sup></option>
   <option>12<sup>th</sup></option>
   <option>Graduation</option>
 
 
</select>
		</td>
</tr></table><br>
<table Width="100%">
<tr>
		<td width="30%" style="font-size:30px;">13. Percentage Of Marks :
			<input type="text"  name="perc" size="5"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;"> 
		14. Year of Passing :<input type="text" name="year_pass" size="5"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;"> 
		15.	Family's Annual Income :<input type="text" name="income" size="5"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 8px;
    margin: 5px;">
			
		</td>
	</tr></table><br>
	<table Width="100%">

	<tr Width="100%">
		<td Width="100%" style="font-size:30px;">16. Indian Citizen : 
			<input type="text" name="citizen" size="30" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;">
			 NRI Citizen : <input type="text" name="citizen" size="30"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;">  
			</td>
		</tr>
</table><br>



<p style="font-size:30px;">17. Details of last attended Institute / School / College.</p>

<table Width="100%" style="border: 2px solid black; border-collapse: collapse;">
<tr >
		<th style=" border: 2px solid black; border-collapse: collapse; font-size:25px;">Exam</th>
		<th style=" border: 2px solid black; border-collapse: collapse; font-size:25px;">School / College</th>
		<th style=" border: 2px solid black; border-collapse: collapse; font-size:25px;">Board</th>
		<th style=" border: 2px solid black; border-collapse: collapse; font-size:25px;">Subject</th>
		<th style=" border: 2px solid black; border-collapse: collapse; font-size:25px;">Year of Passing</th>
		<th style=" border: 2px solid black; border-collapse: collapse; font-size:25px;">% Of Marks</th>
</tr>
<tr >
		<td style=" border: 2px solid black; border-collapse: collapse; font-size:25px;" ><center> Xth</center>
			  
		</td>
		<td> <input type="text" name="board[]"  size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;" ><input type="text" name="board[]" size="10"  style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"><input type="text" name="graduate[]"   size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"><input type="text" name="edu_pass[]"  size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"><input type="text" name="perc[]"  size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
</tr>
<tr >
		<td style="border: 2px solid black; border-collapse: collapse; font-size:25px;"><center> XIIth</center>
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text"  name="board[]" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text"  name="board[]" size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text" name="graduate[]"  size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text" name="edu_pass[]" size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text" name="perc[]"  size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
</tr>
<tr>
		<td style="border: 2px solid black; border-collapse: collapse; font-size:25px;"><center> Graduate</center>
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text"  name="board[]"  size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text" name="board[]" size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;" > <input type="text" name="graduate[]" size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text" name="edu_pass[]" size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
		<td style="border: 2px solid black; border-collapse: collapse;"> <input type="text" name="perc[]" size="10" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" >
			  
		</td>
</tr>


	</table>
	
		<center><u><h1>18. DECLARATION BY THE CANDIDATE</h1></u></center>
	<P style="font-size:20px;">
<input type="checkbox" name="checkbox[]" value="Bike" >I &nbsp;<input type="text" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px ;
    margin: 5px;" placeholder=""> &nbsp;(S/o) / (D/o)&nbsp;<input type="text" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px ;
    margin: 5px;" placeholder=""> &nbsp; solemnly
		declared that all the information stated herein, is true to the best of my knowledge and belief. I assure that I shall by all the rules 
		and regulations by the AIHEEE (All India Higher Education Entrance Examination).</p>
<P style="font-size:20px;">If the details finished by me is found to be incorrect / forged and the documents submitted are false in nature, I would responsible for the same and AIHEEE / college is free to reject the application form any time.</p><br>




<center>
	<table Width="100%">
<tr> 
<td width="30%" style="font-size:30px;">
19. Choice Of Course :</td>
 <td width="30%">
 <select class="soflow-color" name="home_id" >
  
  <option style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px ; font-size:12px;
    margin: 5px;" value=""<?php if($home_id=='') { echo 'selected'; } ?> > Select Course </option>
                            
							<?php 
									$q="select * from homepage";
									$sql=mysql_query($q);
									$nhum=mysql_num_rows($sql);
									
									    
								
									while($ar=mysql_fetch_array($sql))
									 
									 { 
									 	$home_id=$ar['home_id'];
										
										$exam_content=$ar['exam_content'];
								    ?>
								<option style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px ; font-size:12px;
    margin: 5px;" value="" ><?php echo $exam_content;?></option>
								
								  <?php }?>
</select></td>

</tr>
<tr>
<td width="30%" style="font-size:30px;">20.Choice Of Institutions :</td>
 <td><table width="20%">
 	<tr>
<br>
 <input type="text" name="institute[]" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px ;
    margin: 5px;" placeholder="">
	 <input type="text" name="institute[]" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" placeholder="">
	 <input type="text" name="institute[]" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px;
    margin: 5px;" placeholder=""></tr>
 </table>
</td>

</tr>
<tr>
<td width="30%" style="font-size:30px;">21.Coordinator Id:</td>
 <td>

	 <table width="20%">
	 <tr>
	 <br>
	 <input type="text" name="declar" size="50" style="background-color: #FFFEFC; border:2px solid #9C9A9A; padding: 10px ;
	    margin: 5px;" placeholder="Coordinate Id" required>
		 dfgdfgdgdgdg
	 </table>
</td>

</tr>
</table>
	<br><br>

	
<input type="submit" name="submit" class="button" value="Submit">

	<table style="width: 100%; height:10%; background-color:#009500;">
		<tr><td>&nbsp;</td></tr>
	</table>

</form>
<script  src="javascript/jquery.js"></script>
<script  src="javascript/jquery.min.js"></script>
<!--<script src="javascript/jquery-ui-1.9.1.custom.js"></script>-->
<script>
    
$('document').ready(function(){

	$('select[name=state]').change(function(){

		var state_id = $(this).val();

    console.log('changed ! '+state_id);
		$.ajax({

			url : "ajax.php",
			type : 'POST',
			data: {"state":'state',state_id:state_id},
			beforeSend : function(){

			} ,
			success: function(response) {

				console.log(response);
			} 

		});

	});

});
    
</script>
<script language="javascript" type="text/javascript">
function uploadvalidfile(){

  	var filephoto = $("#file-upload1").val();
	var ext = filephoto.split(".");
    ext = ext[ext.length-1].toLowerCase();      
    var arrayExtensions = ["jpg" , "jpeg", "png", "gif", "JPG", "JPEG", "PNG", "GIF"];

    if (arrayExtensions.lastIndexOf(ext) == -1) {
	    
		alert('Please upload file with extension .jpg, .jpeg, .png, .gif.');
		$("#file-upload1").val("");
		return false;
    }
}

function uploadvaliddocfile(){

  	var filephoto = $("#file-upload4").val();
	var ext = filephoto.split(".");
    ext = ext[ext.length-1].toLowerCase();      
    var arrayExtensions = ["doc" , "DOC", "docx", "DOCX"];

    if (arrayExtensions.lastIndexOf(ext) == -1) {
	    
		alert('Please upload file with extension .doc,.DOC,.docx,.DOCX.');
		$("#file-upload4").val("");
		return false;
    }
}
//jQuery('#state').hide();
jQuery('#city').hide();
jQuery(document).ready(function()
{
	
	/*get states code*/
	/*jQuery("#country").change(function() 
	{
			var countryid=jQuery(this).val();
			//alert(countryid);	
			jQuery('#city').hide();	
			jQuery('#state').show();		
			jQuery.post("actions.php",{ selected_option:countryid,txtAction:'getstates',rand:Math.random() }, function(data){
			//alert(data);
				if(data!='')
				{
					jQuery('#state').empty();
					jQuery('#city').empty();				
					jQuery.each(jQuery.parseJSON(data), function() {	
					jQuery("<option value='"+this['id']+"'>"+this['name']+"</option>").appendTo(jQuery("#state"));
					});	
				}
				else
				{
					jQuery('#state').empty();
					jQuery("<option value=''>Select state</option>").appendTo(jQuery("#state"));
				}
			});
				return false; 
	}); */
	
	/*get cities code*/
	jQuery("#state").change(function() 
	{
			var stateid=jQuery(this).val();
			//alert(stateid);	
			jQuery('#city').show();			
			jQuery.post("actions.php",{ selected_option:stateid,txtAction:'getcity',rand:Math.random() }, function(data){
			//alert(data);
				if(data!='')
				{
					jQuery('#city').empty();
									
					jQuery.each(jQuery.parseJSON(data), function() {	
					jQuery("<option value='"+this['id']+"'>"+this['name']+"</option>").appendTo(jQuery("#city"));
					});	
				}
				else
				{
					jQuery('#city').empty();
					jQuery("<option value=''>Select city</option>").appendTo(jQuery("#city"));
				}
			});
				return false; 
	}); 

});
</script>


</body>
</html>