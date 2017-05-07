<?php
date_default_timezone_set('Asia/Calcutta');
error_reporting(E_ALL);

include_once("dbconnect.php");

include_once("check_session.php");

$s_id=$_SESSION['s_id'];

$var=mysql_query("SELECT * FROM `coordinate` WHERE s_id='$s_id'");
  $rows = mysql_fetch_array($var);
  $c_id         = $rows['c_id'];
  $firstname  = $rows['c_name'];
  $email        = $rows['c_email'];
  $mobileNumber = $rows['c_phone'];
  $pincode      = $rows['c_zipcode'];

                        
    $totalprice = 1;
              

// Merchant key here as provided by Payu
$MERCHANT_KEY = "pYyzE4PA";

// Merchant Salt as provided by Payu
$SALT = "H2y2OzafAe";

// End point - change to https://secure.payu.in for LIVE mode
//https://test.payu.in


$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>

  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
         
 


    <!--Page Title-->
  </head>
  <body onload="submitPayuForm()">

    <br/>
    <?php if($formError) { ?>
	
      <br/>
      <br/>
    <?php }
          

            


 ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
       
        <tr>

          
          <td><input  type="hidden"  name="amount" value="<?php echo $totalprice; ?>" /></td>
         
          <td><input  type="hidden"  name="firstname" id="firstname" value="<?php echo $firstname; ?>" /></td>
        </tr>
        <tr>
         
          <td><input  type="hidden"  name="email" id="email" value="<?php echo $email; ?>" /></td>
          <td><input   type="hidden" name="phone" value="<?php echo $mobileNumber; ?>" /></td>
        </tr>
        <tr>
         
          <td colspan="3"><input   type="hidden" name="productinfo" value="My Product" size="64" />
		  
		 </td>
        </tr>
        <tr>
         
          <td colspan="3"><input   type="hidden" name="surl" value="http://aiheee.com/cordinator_dashboard/success.php" size="64" /></td>
        </tr>
        <tr>
         
          <td colspan="3"><input  type="hidden" name="furl" value="http://aiheee.com/cordinator_dashboard/failure.php" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3">
		  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		  <input type="hidden" name="zipcode" value="<?php echo $pincode; ?>" size="64" />
		  
		  </td>
        </tr>

        
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Payment" class="theme-btn btn-style-two"/></td>
          <?php } ?>
        </tr>
      </table>
    </form>	

                   