<?php
error_reporting(0);
	$Global['host']="localhost";
	$Global['username']="aiheee_shashank";
	$Global['password']="Support@123";
	$Global['database']="aiheee_aiheee";
	$Global['baseurl']='http/';
//include_once('global.php');
$connhandle=mysql_connect($Global['host'],$Global['username'],$Global['password'])or die('can\'t establish connection with mysql');
$dbSelect=mysql_select_db($Global['database'],$connhandle) or die('could not connect to the database');
?>
