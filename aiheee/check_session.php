<?php
   
   	if($_SESSION['admin_id']=="" || $_SESSION['admin_id']==0 || !is_numeric($_SESSION['admin_id']))
	{
		header('Location:login.php');
		exit();
		
	}

?>