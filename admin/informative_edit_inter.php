<?php
ob_start();
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");
$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);

$imgName = '';
$is_imgName = 0;
if(isset($_FILES['imgName']) && $_FILES['imgName']['name'] !='')
{
	$mTmpDir = $_FILES['imgName']['tmp_name'];
	$imgName=time()."_".$_FILES['imgName']['name'];
	$is_imgName = 1;

}
$Add_title = $_REQUEST['Add_title'];
$Key_word = (mysql_escape_string($_REQUEST['Key_word']) != '')?mysql_escape_string($_REQUEST['Key_word']):'';
$Description = (mysql_escape_string($_REQUEST['Description']) != '')?mysql_escape_string($_REQUEST['Description']):'';
$informativeid = (isset($_REQUEST['informativeid']) and $_REQUEST['informativeid'] != '' ) ?  $_REQUEST['informativeid'] :  header("Location: informative_view.php?q=err");
$heading = (mysql_escape_string($_REQUEST['heading']) != '')?mysql_escape_string($_REQUEST['heading']):'';
$numbering = trim($_REQUEST['numbering']);
if($numbering=='')
{
	$numbering = 0;
}

if(isset($_REQUEST['priority']))
{
	$priority = 1;
}else{
	$priority = 0;
}

if(isset($_REQUEST['status']))
{
	$status = active;
}else{
	$status = inactive;
}
//$status=$_REQUEST['status'];
$imgName = '';
$is_imgName = 0;
if(isset($_FILES['imgName']) && $_FILES['imgName']['name'] !='')
{
	$mTmpDir = $_FILES['imgName']['tmp_name'];
	$imgName=time()."_".$_FILES['imgName']['name'];
	$is_imgName = 1;

}
 $detail = (mysql_escape_string($_POST['newsContent']) != '') ? mysql_escape_string($_POST['newsContent']):'';




if ($is_imgName!='0') 
{
$adminQuery = "update informative set heading = '$heading',Key_word = '$Key_word',Description = '$Description', numbering = '$numbering', priority = '$priority', status = '$status', detail ='$detail',imgName='$imgName',Add_title='$Add_title' where informativeid='$informativeid'";
}
else
{
$adminQuery = "update informative set heading = '$heading',Key_word = '$Key_word',Description = '$Description', numbering = '$numbering', priority = '$priority', status = '$status', detail ='$detail',Add_title='$Add_title' where informativeid='$informativeid'";
}
//echo $adminQuery;
//exit();
$adminQueryResult = $connectionObject->executeQuery($adminQuery);

if(!$adminQueryResult)
	{
		echo mysql_error();
		exit();
	}
			 
			 
if($is_imgName == 1)
{
// main Image upload

$imgPath = "../docs/informative/$imgName";
	if(!move_uploaded_file($mTmpDir,$imgPath))
		{
			$error="Failed to upload image";
			// header("Location: ");
		}
		
$filename = $imgPath;


// Content type
//header('Content-type: image/jpeg');

// Get new sizes // aspect ration "width divided by height"
list($width, $height,$mime) = getimagesize($filename);
$newwidth = 570 ;
$newheight = 420;
//echo image_type_to_mime_type(IMAGETYPE_BMP)."  ".IMAGETYPE_BMP;
//exit();
// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
switch($mime)
{
case 1: $source = imagecreatefromgif($filename);
		break;
case 2: $source = imagecreatefromjpeg($filename);
		break;
case 3: $source = imagecreatefrompng($filename);
		break;

default : break;
}
// Resize
imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
switch($mime)
{
case 1: imagegif($thumb,$filename,100);
		break;
case 2: imagejpeg($thumb,$filename,100);
		break;
case 3: imagepng($thumb,$filename,100);
		break;

default : break;
}

}

header("Location:  informative_view.php?q=edt");

?>