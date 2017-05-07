<?php
   
   	if($_SESSION['s_id']=="" || $_SESSION['s_id']==0 || !is_numeric($_SESSION['s_id']))
	{
		header('Location:login.php');
		exit();
		
	}

?>