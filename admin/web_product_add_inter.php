<?php
ob_start();
//session_start();
//include_once("login_check_hd.php");
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");

$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);


$categoryid = (mysql_escape_string($_REQUEST['categoryid']) != '')?mysql_escape_string($_REQUEST['categoryid']):'';
$subcategoryid = (mysql_escape_string($_REQUEST['subcategoryid']) != '')?mysql_escape_string($_REQUEST['subcategoryid']):'';
if($subcategoryid=='')
{
	$subcategoryid=0;
}

$subsubcategoryid = (mysql_escape_string($_REQUEST['subsubcategoryid']) != '')?mysql_escape_string($_REQUEST['subsubcategoryid']):'';
if($subsubcategoryid=='')
{
	$subsubcategoryid=0;
}
$Name = (mysql_escape_string($_REQUEST['Name']) != '')?mysql_escape_string($_REQUEST['Name']):'';
$Email= (mysql_escape_string($_REQUEST['Email']) != '') ? mysql_escape_string($_REQUEST['Email']):'';
//$newsContent2 = (mysql_escape_string($_REQUEST['newsContent2']) != '') ? mysql_escape_string($_REQUEST['newsContent2']):'';
//$newsContent3 = (mysql_escape_string($_REQUEST['newsContent3']) != '') ? mysql_escape_string($_REQUEST['newsContent3']):'';
$Phone = $_REQUEST['Phone'];
/*$Key_word = $_REQUEST['Key_word'];
$Description = $_REQUEST['Description'];*/

$Password = (mysql_escape_string($_REQUEST['Password']) != '')?mysql_escape_string($_REQUEST['Password']):'';

$Address = (mysql_escape_string($_REQUEST['newsContent']) != '') ? mysql_escape_string($_REQUEST['newsContent']):'';
/*$product_id = $_REQUEST['product_id'];
*/

$numbering = trim($_REQUEST['numbering']);
if($numbering=='')
{
	$numbering = 0;
}


/*
if(isset($_REQUEST['priority']))
{
	$priority = 1;
}else
{
	$priority = 0;
}


*/






$productQuery = "insert into agent set Name = '$Name', Email = '$Email', Phone='$Phone',Password='$Password',Address='$Address', numbering='$numbering', createdate = '".date("Y-m-d")."' ";
//echo $serviceQuery."<br>";
//exit();	
$productQueryResult = $connectionObject->executeQuery($productQuery);
if(!$productQueryResult)
{
echo mysql_error()." Error: consult your administrator";
exit();
}

/////uploading file///////


	//****************end*********	
header("Location: web_product_view.php?q=add");
?>