<?php
session_start();

error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );

if(!mysql_connect("localhost","aiheee_shashank","Support@123"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("aiheee_aiheee"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>