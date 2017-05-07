<?php
    include_once('dbconnect.php');
	
	unset($_SESSION['c_id']);
	unset($_SESSION['s_id']);
	unset($_SESSION['mobileNumber']);
	
	session_unset(); 
	
	session_destroy(); 
	header("location:login.php"); 
	exit();
?>