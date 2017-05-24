
<?php require_once('includes/config.php'); ?>
<?php require_once('includes/functions.php'); ?>

<?php 
  

  if (!isset($_POST["status"])) {

    redirect_to('form.php');

  }

  $status      =  $_POST["status"];
  $firstname   =  $_POST["firstname"];
  $amount      =  $_POST["amount"];
  $txnid       =  $_POST["txnid"];
  $posted_hash =  $_POST["hash"];
  $key         =  $_POST["key"];
  $productinfo =  $_POST["productinfo"];
  $email       =  $_POST["email"];
  $salt        = "H2y2OzafAe";

  if (isset($_POST["additionalCharges"])) {
    $additionalCharges =$_POST["additionalCharges"];
    $retHashSeq        = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
          
  } else {
    $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  }

?>

<!doctype html>
<html>
<head><title>All India Higher Education Entrance Examination | AIHEEE ( CET - 2017 ) | Application Form </title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"></link>
    <link rel="stylesheet" type="text/css" href="myassets/component.css" />


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
          
          <h2 class="text-center main-title">Successful payemnt</h2>
         <?php  $hash = hash("sha512", $retHashSeq);

                if ($hash != $posted_hash) {
                  echo "<h3 class='text-center'>Invalid Transaction. Please try again</h3>";

                } else {
                  echo "<h3 class='text-center'>Thank You. Your order status is ". $status .".</h3>";
                  echo "<h4 class='text-center'>Your Transaction ID for this transaction is ".$txnid.".</h4>";
                  echo "<h4 class='text-center'>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
                } 
          ?>

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