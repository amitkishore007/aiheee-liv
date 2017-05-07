<?php
ob_start();
session_start();
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");

$loginname = $_POST['loginname'];
$password = $_POST['password'];

$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);
$adminQuery = "select * from admin where username = '$loginname' and password = '$password'";
//echo $adminQuery;
$adminQueryResult = $connectionObject->executeQuery($adminQuery);

if(!$adminQueryResult)
	{
		echo mysql_error();
		exit();
	}

if(mysql_num_rows($adminQueryResult) == 0)
{     
  header("Location: .?invalid");
  exit();
}

$loginRow = mysql_fetch_assoc($adminQueryResult);

   $_SESSION['username'] = $loginRow['username'];
   $_SESSION['password'] = $loginRow['password'];  

	header("Location: home.php");
?>