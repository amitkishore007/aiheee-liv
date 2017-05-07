<?php
    include_once('dbconnect.php');
	
	unset($_SESSION['a_id']);
	unset($_SESSION['admin_id']);
	unset($_SESSION['otp']);				
	unset($_SESSION['mobileNumber']);
	
	session_unset(); 
	
	session_destroy(); 
	header("location:login.php"); 
	exit();
?>