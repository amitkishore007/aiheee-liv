<?php
include_once 'dbconnect.php';

//include_once 'check_session.php';

// $_SESSION['otp'] = '1234';
// $_SESSION['mobileNumber'] = '9876543210';
// $_SESSION['admin_id'] = '1';


if (isset($_POST['send_otp']))
{
            $admin_id=$_POST['admin_id'];
            $query = mysql_query("select * from my_admin where admin_id = '$admin_id '");
            $rows = mysql_fetch_array($query);
            $mobile_number= $rows['admin_mobile'];
            $admin_id = $rows['a_id'];

                if($mobile_number)
                {

                    $string = '0123456789';
                    $string_shuffled = str_shuffle($string);
                    $otp = substr($string_shuffled, 1, 4);
                    $_SESSION['otp']=$otp;
          					$_SESSION['mobileNumber']=$mobile_number;
          					$_SESSION['admin_id']=$admin_id;
                    $message_content = "Please enter this One Time Password : " . $otp . ".";

                    $url = 'http://msgs.clickblickdigital.com/http-api.php?username=aiheee&password=pass12&senderid=AIHEEE&route=7&number='.$mobile_number.'&message='.urlencode($message_content).'';

                    $ch = curl_init($url);

                    curl_setopt($ch, CURLOPT_POST, 1);

                    curl_setopt($ch, CURLOPT_POSTFIELDS, $url);

                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                    $response = curl_exec($ch);

                    curl_close($ch);

                }
                else 
                {
                 ?>
                        <script>alert('Please enter correct user name  !');</script>
                        <?php
                }

                    
}


if (isset($_POST['login']))
   {
      $otp            = $_SESSION['otp'];
      $mobileNumber   = $_SESSION['mobileNumber'];
      $admin_id       = $_SESSION['admin_id'];
      $otp1           = $_POST['txtotp'];

      if ($otp == $otp1) 
      {
	  
      $_SESSION['admin_id'] = $admin_id;
      header("Location: index.php");
      } 
      else 
      {
      ?>
      <script>alert('Please enter Correct Otp!');</script>
       <?php
      }
 }
?>




<html class="no-js" lang="">

<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>AIHEEE | Admin</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

<!-- CSS Files -->
<link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="signup-page">
<div class="wrapper">
  <div class="header header-filter" style=" background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
          <div class="card card-signup">
              <div class="header header-primary text-center">
                <h4>Admin Login</h4>
                
              </div>
            
              <div class="content">
            <form class="form" method="POST" action="">

                <div class="form-group">
                  <input type="text" name="admin_id" class="form-control underline-input" placeholder="Your Id">
                </div>
			 <button class="btn btn-primary" name="send_otp"> Send OTP<div class="ripple-container"></div></button>
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 			   
                  <button class="btn btn-primary" name="send_otp"> Resend OTP<div class="ripple-container"></div></button>
           </form>
            <form class="form" method="POST" action="">

                <div class="form-group">
                   <input type="text" name="txtotp" class="form-control underline-input" placeholder="Your OTP Number">
                </div>
              
              </div>
              <div class="footer text-center">
              	<button class="btn btn-primary btn-raised" name="login"> Submit<div class="ripple-container"></div></button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
</body>

<!--  Vendor JavaScripts --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<!--  Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!-- Mirrored from thememakker.com/oakleaf-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 18:09:02 GMT -->
</html>
