<?php
//ob_start();
//session_start();
//include_once("login_check_hd.php"); 
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");

$categoryid = (isset($_REQUEST['categoryid']) and $_REQUEST['categoryid'] != '' ) ?  $_REQUEST['categoryid'] :  header("Location: web_category_view.php?q=err");
//exit();

$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);

$heading = (mysql_escape_string($_POST['heading']) != '')?mysql_escape_string($_POST['heading']):'';
$numbering = trim($_REQUEST['numbering']);
if($numbering=='')
{
	$numbering = 0;
}


$imgName = '';
$is_imgName = 0;
if(isset($_FILES['imgName']) && $_FILES['imgName']['name'] !='')
{
	$mTmpDir = $_FILES['imgName']['tmp_name'];
	$imgName=time()."_".$_FILES['imgName']['name'];
	$is_imgName = 1;
	
	//$imgPath2 = "../productImage/thumb/$imgName";
//	if(!copy($_FILES['imgName']['tmp_name'],$imgPath2))
//	{
//		die("enable to copy image");
//	}
	$imgPath3 = "../productImage/small/$imgName";
	if(!copy($_FILES['imgName']['tmp_name'],$imgPath3))
	{
		die("enable to copy image");
	}

}


if($is_imgName==''  and $destFile =='') //changing Product image (if Product image change)
{
	$categoryQuery = "update category set heading ='$heading', numbering = '$numbering', modifydate = '".date("Y-m-d")."' where categoryid='$categoryid'";	
}
elseif($is_imgName!=''  and $destFile =='') 
{
	$categoryQuery = "update category set heading ='$heading', numbering = '$numbering',imgName='$imgName', modifydate = '".date("Y-m-d")."' where categoryid='$categoryid'";
}
$categoryQueryResult = $connectionObject->executeQuery($categoryQuery);
if(!$categoryQueryResult)
{
	echo mysql_error()." Error: failed to insert service category";
	exit();
}
//uploading Product image1
if($is_imgName == 1)
{
		// main Image upload

		$imgPath = "../productImage/large/$imgName";
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
		$newwidth = 288;
		$newheight = 278;
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

	
	
	//*****************//
	//uploading small image of thumbnail image
	if($is_imgName == 1)
	{
				
		if(!move_uploaded_file($mTmpDir,$imgPath3))
		{
			$error="Failed to upload small image";
			// header("Location: ");
		}
		
		$filename3 = $imgPath3;

		// Content type
		//header('Content-type: image/jpeg');

		// Get new sizes // aspect ration "width divided by height"
		list($width3, $height3,$mime3) = getimagesize($filename3);
	    $newwidth = 550;
		$newheight = 415;
		//echo image_type_to_mime_type(IMAGETYPE_BMP)."  ".IMAGETYPE_BMP;
		//exit();
		// Load
		$thumb3 = imagecreatetruecolor($newwidth3, $newheight3);
		switch($mime3)
		{
			case 1: $source3 = imagecreatefromgif($filename3);
					break;
			case 2: $source3 = imagecreatefromjpeg($filename3);
					break;
			case 3: $source3 = imagecreatefrompng($filename3);
					break;

			default : break;
		}
		// Resize
		imagecopyresampled($thumb3, $source3, 0, 0, 0, 0, $newwidth3, $newheight3, $width3, $height3);

		// Output
		switch($mime3)
		{
			case 1: imagegif($thumb3,$filename3,100);
					break;
			case 2: imagejpeg($thumb3,$filename3,100);
					break;
			case 3: imagepng($thumb3,$filename3,100);
					break;

			default : break;
		}

	}
header("Location: web_category_view.php?q=edt");

?>