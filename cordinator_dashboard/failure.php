<?php
date_default_timezone_set('Asia/Calcutta');
ini_set("display_errors", 1);
error_reporting(E_ALL);

include_once("dbconnect.php");

include_once("check_session.php");

$s_id=$_SESSION['s_id'];

if (isset($_SESSION['mobileNumber'])) {
    $mobileNumber = $_SESSION['mobileNumber'];
}

if (isset($_SESSION["mobileNumber"]) == false) {
    echo '<script>location = "logout.php";</script>';
    die;
} else {
     if (isset($_SESSION["mobileNumber"]) && $_SESSION["mobileNumber"] == "") {
        echo '<script>location = "logout.php";</script>';
        die;
    }
}


$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="H2y2OzafAe";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {

         echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4> You may try making the payment by clicking the link below.</h4>";
        echo" <a href='http://aiheee.com/cordinator_dashboard/form.php'>Home Page for payment</a>";
          
		 } 
?>
