
<?php require_once('includes/config.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 

if (!isset($_SESSION['stu_id'])) {

  $_SESSION['error'] = 'There was an error, please try later';

  redirect_to('form.php');

}



  $s_id=$_SESSION['stu_id'];

  $c_id         = 12345;
  $firstname    = $_SESSION['name'];
  $email        = $_SESSION['email'];
  $mobileNumber = $_SESSION['phone'];
  $pincode      = $_SESSION['pincode'];                      
  $totalprice   = 1;

              

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



// if (!empty($action)) {
//   header("Location: ".$action);
//   exit;
// }
?>

<!doctype html>
<html>
<head><title>All India Higher Education Entrance Examination | AIHEEE ( CET - 2017 ) | Application Form </title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"></link>
    <link rel="stylesheet" type="text/css" href="myassets/component.css" />

<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.getElementById('payment');
  
      payuForm.submit();
    }
  </script>
  </head>

<body style="background-color: #FFFEFC;" onload="submitPayuForm()">
    <img src="images/logo.png" alt="AIHEEE">

<div class="overlay loader-overlay">
  <div class="loader">
    <img src="images/loader.gif" alt="">
  </div>
</div>



<div class="main" id='main'>
    <div class="panel dialog-panel">
      <div class="panel-heading">
        <h4 class="text-center">ALL INDIA HIGHER EDUCATION ENTRANCE EXAMINATION</h5>
          <h4 class="text-center"> AIHEEE ( CET - 2017 ) </h5>
      </div>
      
      <div class="panel-body">
        <div class="row"><!-- row start -->
       
          <div class="col-md-12">
          <?php if ($formError) : ?>


          <?php endif; ?>
          <h2 class="text-center main-title">Make Payment</h2>
          <form action="<?php echo $action; ?>" class="form-horizontal" role="form" method='post' name="payuForm" id='payment'>

            <input  type="hidden"  name="key" value="<?php echo $MERCHANT_KEY ?>" />
            <input  type="hidden"  name="hash" value="<?php echo $hash ?>"/>
            <input  type="hidden"  name="txnid" value="<?php echo $txnid ?>" />
            <input  type="hidden"  name="amount" value="<?php echo $totalprice; ?>" />
            <input  type="hidden"  name="firstname" id="firstname" value="<?php echo $firstname; ?>" />
            <input  type="hidden"  name="email" id="email" value="<?php echo $email; ?>" />
            <input  type="hidden"  name="phone" value="<?php echo $mobileNumber; ?>" />
            <input  type="hidden"  name="productinfo" value="My Product" size="64" />
            <input  type="hidden"  name="surl" value="http://aiheee.com/cordinator_dashboard/success.php" size="64" />
            <input  type="hidden"  name="furl" value="http://aiheee.com/cordinator_dashboard/failure.php" size="64" />
            <input  type="hidden"  name="service_provider" value="payu_paisa" size="64" />
            <input type="hidden" name="zipcode" value="<?php echo $pincode; ?>" size="64" />
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-1" for="name">Name</label>
              <div class="col-md-8">
                <div class="col-md-8">
                  <div class="form-group internal ">
                    <input class="form-control " type='text'  placeholder = 'Student name' id="name" value="<?php echo $firstname; ?>" readonly />
                    <span class='error' id='name-error'></span>
                  </div>
                </div>

              </div>
            </div>
          
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-1" for="email">Contact</label>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-11">
                    <input class="form-control" id="email"  placeholder="E-mail" type="text" value="<?php echo $email; ?>" readonly />
                    <span class='error' id='email-error'></span>
                  </div>
                </div>
              
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-1" for="email">Contact</label>
              <div class="col-md-6">
                
                <div class="form-group internal">
                  <div class="col-md-11">
                    <input class="form-control" id="num" placeholder="Phone: (xxx) - xxx xxxx" value='<?php echo $mobileNumber; ?>' type="text" readonly/>
                  <span class='error' id='num-error'></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="text-center col-md-offset-4 col-md-3">

              <p class='pay-amount'>Price :  Rs. <?php echo $totalprice; ?></p>
              <div class="clearfix"></div>
            <br/>
                <?php if(!$hash) { ?>
                <input class="btn-lg btn-success form-submit" name='submit' value="Payment" type="submit">
              <?php } ?>
              </div>
              
            </div>
        </form>

      </div><!-- col-10 end-->

    </div><!-- row end -->


      </div>

    </div>
  </div>
  











  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="myassets/dobPicker.min.js" ></script>
  <script src="myassets/jquery.custom-file-input.js"></script>
  <script src="myassets/jquery.form.js"></script>
  <script src="myassets/script.js"></script>

</body>
</html>