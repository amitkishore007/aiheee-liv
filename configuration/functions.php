<?php
include_once("global.php");
$baseurl=$Global['baseurl'];

function getSiteTitle(){
	$sqlQry=mysql_query("select `site_name` from `generalsettings` where `id`='1'");
	$fetchQry=mysql_fetch_row($sqlQry);
	echo $fetchQry[0];
}
function getSitePaging(){
	$sqlQry=mysql_query("select `pagging` from `generalsettings` where `id`='1'");
	$fetchQry=mysql_fetch_row($sqlQry);
	return $fetchQry[0];
}
function getAdminEmail(){
	$sqlQry=mysql_query("select `email` from `admin` where `id`='1'");
	$fetchQry=mysql_fetch_row($sqlQry);
	return $fetchQry[0];
}
function getAdminPhoneNumber(){
	$sqlQry=mysql_query("select `contact` from `admin` where `id`='1'");
	$fetchQry=mysql_fetch_row($sqlQry);
	return $fetchQry[0];
}


function getDateFormat($date){
	$expdate=explode("-",$date);
	$newdate=$expdate[2]."-".$expdate[1]."-".$expdate[0];
	return $newdate; 

}
function changeDate($date){
$expDate=explode("-",$date);
$newDate=$expDate[2]."-".$expDate[1]."-".$expDate[0];
return $newDate;

}



function checkCredentials($email,$password){
	$resQry=mysql_query("select * from `user` where `email` = '$email' , `password` = '$password' where `status` ='1'");
	$numRes=mysql_num_rows($resQry);
	if($numRes>0){
		$fetchRes=mysql_fetch_row($resQry);
		return $fetchRes[0];
	}else{
		return '0';
	}


}




function gettopadverStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}

function getaboutStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}

function getadverStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getadver1Status($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}

function getbreakingStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}


function getgalleryStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}


function getnationStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}

function getleadStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getsportStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getinternationalStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getcricketStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function gethealthStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getenterStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getbussinessStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getspecialStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getcitiesStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getcitiesDetailStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getrecipesStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getjokesStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getapkiStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getarchivestoryStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getblogStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmaincategoryStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function geteventCategoryDetailStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function geteventmaincategoryStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmaincityStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getcityStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmainmovieStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmovieStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmainfoodStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getfoodStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getvenueStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmainvenueStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmainmoreStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmoreStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function geteventsStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmaineventsStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function gettheatreStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmaintheatreStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmainreviewStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getreviewStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getcentreaddStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getshowStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getmainshowStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getvideoStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function geteventsreviewStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getsuggestStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getcitiesCategoryNameById($cid){
	$selQry=mysql_fetch_row(mysql_query("select `name` from `cities_category` where `id`='$cid'"));
	return $selQry[0];
}
function getCategoryNameById($cid){
	$selQry=mysql_fetch_row(mysql_query("select `name` from `gallery_category` where `id`='$cid'"));
	return $selQry[0];
}
function getMainCategoryName($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `maincategory` where `id`='$id'"));
	return $resultSet[1];
}
function getCategoryNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `maincategory` where `id`='$id'"));
	return $resultSet[1];
}
function geteventCategoryNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `eventmaincategory` where `id`='$id'"));
	return $resultSet[1];
}
function getcityNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `maincity` where `id`='$id'"));
	return $resultSet[1];
}
function getmovieNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainmovie` where `id`='$id'"));
	return $resultSet[1];
}
function getfoodNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainfood` where `id`='$id'"));
	return $resultSet[1];
}
function getvenueNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainvenue` where `id`='$id'"));
	return $resultSet[1];
}
function getmoreNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainmore` where `id`='$id'"));
	return $resultSet[1];
}
function geteventsNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainevents` where `id`='$id'"));
	return $resultSet[1];
}
function getpropertyNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainproperty` where `id`='$id'"));
	return $resultSet[1];
}
function getreviewNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainreview` where `id`='$id'"));
	return $resultSet[1];
}
function getshowCategoryNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainshow` where `id`='$id'"));
	return $resultSet[1];
}
function getsuggestNamesById($id){
	$resultSet=mysql_fetch_row(mysql_query("select * from `mainsuggest` where `id`='$id'"));
	return $resultSet[1];
}
function getCategoryStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
}
function getCategoryDetailStatus($value){
	if($value==1){
		return "Active";
	}
	if($value==0){
		return "Deactive";
	}
} 


?>