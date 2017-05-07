<?php
    
include_once("PhpIncludes/connection_info.php");
include_once("PhpIncludes/database_connection.php");
$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);



$name = $_POST['Name'];

$email = $_POST['Email'];

$password = $_POST['Password'];



$countryQuery = "insert into register (name , email , password) Values ('$name' , '$email' ,'$password')";
				



$countryQueryResult = $connectionObject->executeQuery($countryQuery);
if(!$countryQueryResult)
{ // if query failed to execute then print error msg
	$errorMsg = mysql_error()." : failed to update password";
	echo $errorMsg;
	//header("location: {$_SERVER['PHP_SELF']}?error=$errorMsg");
	exit();
}
// redirect to same page


header("location: Register.php?q=add");

?>



