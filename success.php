<?php
date_default_timezone_set('Asia/Calcutta');
ini_set("display_errors", 1);
error_reporting(E_ALL);

include_once("PhpIncludes/connection_info.php");
include_once("PhpIncludes/database_connection.php");
$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);

$s_id=$_SESSION['s_id'];


 


$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="H2y2OzafAe";

$var1=mysql_query("SELECT * FROM `coordinate` WHERE s_id='$s_id'");
  $rows1 = mysql_fetch_array($var1);
  $c_id         = $rows1['c_id'];

$var3=mysql_query("UPDATE  `form_download` SET `payment`='1' WHERE c_id='$c_id'  order by id desc limit 1");
  $rows3 = mysql_fetch_array($var3);
 
If (isset($_POST["additionalCharges"]))

{
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
              
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
           
    }         
?>        
                 