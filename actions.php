<?php
include_once("PhpIncludes/connection_info.php");
include_once("PhpIncludes/database_connection.php");
$connectionObject = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);


$strReturn="";
$action=$_REQUEST["txtAction"];
$selectedOption=$_REQUEST["selected_option"];
//print_r($_REQUEST);
if(trim(strtolower($action))=="getstates")
{	
	
	 $strReturn="";
	 $strReturn='{"id" : "","name" : "Select state"},';
	
	 $ct="select * from states  where country_id='".trim($selectedOption)."'";
	 
     $num=mysql_num_rows($ct);
     if($num>0)
     {
         $sr=0;
     
         while($cn=mysql_fetch_array($ct))
         
        
         {
             $sr++;
    
             $strReturn.='{"id" : "'.$cn['id'].'@@'.$cn['name'].'","name" : "'.$cn['name'].'"},';
    	 }
	
	 }
			$strReturn=trim($strReturn,",");
		
			echo $strReturn;
		    exit();
}
else if(trim(strtolower($action))=="getcity")
{	
	
	$strReturn="";
	$strReturn='{"id" : "","name" : "Select city"},';
	
	$ct="select * from cities  where state_id='".trim($selectedOption)."'";
	 $num=mysql_num_rows($ct);
     if($num>0)
     {
         $sr=0;
     
         while($cn=mysql_fetch_array($ct))
         
        
         {
             $sr++;
		
		$strReturn.='{"id" : "'.$cn['id'].'@@'.$cn['name'].'","name" : "'.$cn['name'].'"},';
         }
	
	 }
			$strReturn=trim($strReturn,",");
			$strReturn='['.$strReturn.']';
			echo $strReturn;
		exit();	
}
?>