<?php
ob_start();
//session_start();
//include_once("login_check_hd.php");
include_once("../PhpIncludes/connection_info.php");
include_once("../PhpIncludes/database_connection.php");

$productid = (isset($_REQUEST['productid']) and $_REQUEST['productid'] != '' ) ?  $_REQUEST['productid'] :  header("Location: web_product_view.php?q=err");

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

$heading = (mysql_escape_string($_POST['heading']) != '')?mysql_escape_string($_POST['heading']):'';
$newsContent = (mysql_escape_string($_POST['newsContent']) != '') ? mysql_escape_string($_POST['newsContent']):'';
//$newsContent2 = (mysql_escape_string($_POST['newsContent2']) != '') ? mysql_escape_string($_POST['newsContent2']):'';
//$newsContent3 = (mysql_escape_string($_POST['newsContent3']) != '') ? mysql_escape_string($_POST['newsContent3']):'';

$URL = (mysql_escape_string($_REQUEST['URL']) != '')?mysql_escape_string($_REQUEST['URL']):'';

$price = (mysql_escape_string($_REQUEST['price']) != '') ? mysql_escape_string($_REQUEST['price']):'';
$Add_title = $_REQUEST['Add_title'];
$Key_word = $_REQUEST['Key_word'];
$Description = $_REQUEST['Description'];
$product_id = $_REQUEST['product_id'];

if(isset($_REQUEST['priority']))
{
	$priority = 1;
}else{
	$priority = 0;
}

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
	
	$imgPath2 = "../productImage/thumb/$imgName";
	if(!copy($_FILES['imgName']['tmp_name'],$imgPath2))
	{
		die("enable to copy image");
	}
	$imgPath3 = "../productImage/small/$imgName";
	if(!copy($_FILES['imgName']['tmp_name'],$imgPath3))
	{
		die("enable to copy image");
	}

}

$fileName=$_FILES['fileUpload']['name'];
if($fileName!='')
{
	//File Size
	$filesize1=$_FILES["fileUpload"]["size"]/(1024*1024);
	if($filesize1 > 2)
	{
		error_message ("You can upload maximum of 2 MB file! ");
	}
	//File Type
	$fileType = $_FILES['fileUpload']['type'];
	// The name of the temporary copy of the file stored on the server
	$fileTemp = $_FILES['fileUpload']['tmp_name'];
	// The error code resulting from the file upload
	$fileError = $_FILES['fileUpload']['error'];
	$destFile = time().$fileName;
}


if($is_imgName==''  and $destFile =='') //changing Product image (if Product image change)
{
	$productQry = "update product set categoryid='$categoryid', subcategoryid = '$subcategoryid', subsubcategoryid = '$subsubcategoryid', heading ='$heading', price = '$price', priority = '$priority', numbering = '$numbering', detail = '$newsContent', URL='$URL',Add_title='$Add_title',Key_word='$Key_word',Description='$Description',product_id='$product_id', modifydate = '".date("Y-m-d")."' where productid='$productid'";	
}
elseif($is_imgName!=''  and $destFile =='') 
{
	$productQry = "update product set categoryid='$categoryid', subcategoryid = '$subcategoryid', subsubcategoryid = '$subsubcategoryid',heading ='$heading', price = '$price', priority = '$priority', numbering = '$numbering', detail = '$newsContent', imgName='$imgName', URL='$URL',Add_title='$Add_title',Key_word='$Key_word',Description='$Description',product_id='$product_id', modifydate = '".date("Y-m-d")."' where productid='$productid'";
}
elseif($is_imgName!=''  and $destFile !='') 
{
	$productQry = "update product set categoryid='$categoryid', subcategoryid = '$subcategoryid', subsubcategoryid = '$subsubcategoryid',heading ='$heading', price = '$price', priority = '$priority', numbering = '$numbering', detail = '$newsContent', imgName='$imgName', fileUpload='$destFile', URL='$URL',Add_title='$Add_title',Key_word='$Key_word',Description='$Description',product_id='$product_id', modifydate = '".date("Y-m-d")."' where productid='$productid'";
	//exit();
}else
{
   $productQry = "update product set categoryid='$categoryid', subcategoryid = '$subcategoryid', subsubcategoryid = '$subsubcategoryid',heading ='$heading', price = '$price', priority = '$priority', numbering = '$numbering', detail = '$newsContent', URL='$URL',Add_title='$Add_title',Key_word='$Key_word',Description='$Description',product_id='$product_id', modifydate = '".date("Y-m-d")."' where productid='$productid'";	
}

$productQryResult = $connectionObject->executeQuery($productQry);
//exit();
if(!$productQryResult)
{
	echo mysql_error()." Error: consult your administrator";
	exit();
}


/////uploading file///////

$destLoc = '../productImage/'.$destFile;
if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$destLoc)){
//$qur_update = "UPDATE mindstar_order SET destreport='$destFile', reportmessage='$messageweb' WHERE order_id='$orderid'";
//$res_update = mysql_query($qur_update) or die(mysql_error());
}else
{
	echo "failed to upload the file";
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
		$newwidth = 150;
		$newheight = 150;
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

//********** **************** start of image resizing second image ****************//
	//making thumbnail of subcategory image	
	if($is_imgName == 1)
	{
		
		//$imgPath2 = "../subcatImage/thumb/$imgName";
		if(!move_uploaded_file($mTmpDir,$imgPath2))
		{
			$error="Failed to upload thumbnail image";
			// header("Location: ");
		}
		
		$filename2 = $imgPath2;

		// Content type
		//header('Content-type: image/jpeg');

		// Get new sizes // aspect ration "width divided by height"
		list($width2, $height2,$mime2) = getimagesize($filename2);
		$newwidth2 = 150;
		$newheight2 = 150;
		//echo image_type_to_mime_type(IMAGETYPE_BMP)."  ".IMAGETYPE_BMP;
		//exit();
		// Load
		$thumb2 = imagecreatetruecolor($newwidth2, $newheight2);
		switch($mime2)
		{
			case 1: $source2 = imagecreatefromgif($filename2);
					break;
			case 2: $source2 = imagecreatefromjpeg($filename2);
					break;
			case 3: $source2 = imagecreatefrompng($filename2);
					break;

			default : break;
		}
		// Resize
		imagecopyresampled($thumb2, $source2, 0, 0, 0, 0, $newwidth2, $newheight2, $width2, $height2);

		// Output
		switch($mime2)
		{
			case 1: imagegif($thumb2,$filename2,100);
					break;
			case 2: imagejpeg($thumb2,$filename2,100);
					break;
			case 3: imagepng($thumb2,$filename2,100);
					break;

			default : break;
		}

	}
	//********* *********** end of second image resizing **************//	
	
	
	
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
		$newwidth3 = 150;
		$newheight3 = 150;
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
	//****************end*********	
	//*****************
header("Location: web_product_view.php?q=edt");
?>