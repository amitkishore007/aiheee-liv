<?php require_once('includes/config.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php 

//print_r($_POST);



  $name               = 	escape_string($_POST['name']);
  $fname              = 	escape_string($_POST['fname']);
  $country            = 	escape_string($_POST['country']);
  $state              = 	escape_string($_POST['state']);
  $city               = 	escape_string($_POST['city']);
  $address            = 	escape_string($_POST['address']);
  $pincode            = 	escape_string($_POST['pincode']);
  $email              = 	escape_string($_POST['email']);
  $num                = 	escape_string($_POST['num']);
  $day                = 	escape_string($_POST['day']);
  $month              = 	escape_string($_POST['month']);
  $category           = 	escape_string($_POST['category']);
  $last_exam          = 	escape_string($_POST['last_exam']);
  $year_passing       = 	escape_string($_POST['year_passing']);
  $percent_mark       = 	escape_string($_POST['percent_mark']);
  $annual_income      = 	escape_string($_POST['annual_income']);
  $citizen            = 	escape_string($_POST['citizen']);
  $ten_school         = 	escape_string($_POST['ten_school']);
  $ten_board          = 	escape_string($_POST['ten_board']);
  $ten_subject        = 	escape_string($_POST['ten_subject']);
  $tent_year_passing  = 	escape_string($_POST['tent_year_passing']);
  $ten_marks          = 	escape_string($_POST['ten_marks']);
  $twelve_school      = 	escape_string($_POST['twelve_school']);
  $twelve_board       = 	escape_string($_POST['twelve_board']);
  $twelve_subject     = 	escape_string($_POST['twelve_subject']);
  $twelve_passing     = 	escape_string($_POST['twelve_passing']);
  $twelve_marks       = 	escape_string($_POST['twelve_marks']);
  $grad_school        = 	escape_string($_POST['grad_school']);
  $grad_board         = 	escape_string($_POST['grad_board']);
  $grad_subject       = 	escape_string($_POST['grad_subject']);
  $grad_passing       = 	escape_string($_POST['grad_passing']);
  $grad_marks         = 	escape_string($_POST['grad_marks']);
  $declare            = 	escape_string($_POST['declare']);
  $stu_dec_name       = 	escape_string($_POST['stu_dec_name']);
  $stu_dec_fname      = 	escape_string($_POST['stu_dec_fname']);
  $cource_choice      = 	escape_string($_POST['cource_choice']);
  $cordinator_id      = 	escape_string($_POST['cordinator_id']);
  $image              = 	escape_string($_POST['image']);


