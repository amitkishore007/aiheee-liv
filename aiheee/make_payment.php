<?php
date_default_timezone_set('Asia/Calcutta');
ini_set("display_errors", 1);
error_reporting(E_ALL);

include_once("dbconnect.php");


session_start();

/*
if (isset($_SESSION['c_id'])) {
    $c_id= $_SESSION['c_id'];
}

if (isset($_SESSION["c_id"]) == false) {
    echo '<script>location = "logout.php";</script>';
    die;
} else {
     if (isset($_SESSION["c_id"]) && $_SESSION["c_id"] == "") {
        echo '<script>location = "logout.php";</script>';
        die;
    }
}


 */
// Merchant key here as provided by Payu
$MERCHANT_KEY = "zHHvbiav";

// Merchant Salt as provided by Payu
$SALT = "wu23w4CDpa";


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
         
  

    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php }
          

            //  $sql="SELECT * FROM add_cart WHERE phone ='$mobileNumber' order by id desc limit 1";
					//$query = $db->getsingleRow($sql);
                        
                      $totalprice = '1000';//$query ['totalprice'];
                       $name='minakshi';// $query ['name'];
                      $email= 'mina@gmail.com';// $query ['email'];
                        $pincode='136356';//$query ['pincode'];
$phone='845768476';
    









 ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
       
        <tr>

          
          <td><input  type="hidden"  name="amount" value="<?php echo $totalprice; ?>" /></td>
         
          <td><input  type="hidden"  name="firstname" id="firstname" value="<?php echo $name; ?>" /></td>
        </tr>
        <tr>
         
          <td><input  type="hidden"  name="email" id="email" value="<?php echo $email; ?>" /></td>
</tr>
<tr>
          <td><input  type="text"  name="phone" id="phone" value="<?php echo $email; ?>" /></td>
        </tr>
        <tr>
         
          <td colspan="3"><input   type="hidden" name="productinfo" value="My Product" size="64" />
		  
		 </td>
        </tr>
        <tr>
         
          <td colspan="3"><input   type="hidden" name="surl" value="http://ahieee.in/cordinator_dashboard/success.php" size="64" /></td>
        </tr>
        <tr>
         
          <td colspan="3"><input  type="hidden" name="furl" value="http://ahieee.in/cordinator_dashboard/failure.php" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3">
		  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		  <input type="hidden" name="zipcode" value="<?php echo $pincode; ?>" size="64" />
		  
		  </td>
        </tr>

        
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Confirm" class="theme-btn btn-style-two"/></td>
          <?php } ?>
        </tr>
      </table>
    </form>	

                    <!-- Start Footer Section -->
           