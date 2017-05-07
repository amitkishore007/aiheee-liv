<?php  



define('SITE_MODE',0);//zero means development other num means production


if(SITE_MODE===0){

 defined("DBHOST") ? null : define("DBHOST", "localhost");

 defined("DBUSER") ? null : define("DBUSER", "root");

 defined("DBNAME") ? null : define("DBNAME", "aiheee");

 defined("DBPASS") ? null : define("DBPASS", "");

}else{

defined("DBHOST") ? null : define("DBHOST", "localhost");

defined("DBUSER") ? null : define("DBUSER", "aiheee_shashank");

defined("DBNAME") ? null : define("DBNAME", "aiheee_aiheee");

defined("DBPASS") ? null : define("DBPASS", "Support@123");


}
//$mysqlServer = 'localhost';
//$mysqlUser = 'aiheee_shashank';
//$mysqlPassword = 'Support@123';
//$databaseSelect='aiheee_aiheee';

$db = @mysql_connect(DBHOST,DBUSER,DBPASS) ;
	if(!$db){
	die("unable to connect to database");
}

mysql_select_db(DBNAME,$db);
?>
