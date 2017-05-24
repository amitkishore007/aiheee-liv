<?php require_once('../includes/config.php'); ?>
<?php require_once('../includes/functions.php'); ?>
<?php 


if (isset($_POST['delete'])) {
	
	$cid = mysql_real_escape_string($_POST['cid']);

	$query = "SELECT * FROM coordinate WHERE s_id={$cid}";

	$result = mysql_query($query);

	confirm($result);

	if (mysql_num_rows($result)) {
		
		$qry = "DELETE FROM coordinate WHERE s_id = {$cid} LIMIT 1";
		
		$rslt = mysql_query($qry);
		
		confirm($rslt);
		
		if (mysql_affected_rows($db)==1) {
		
			echo 'success';
		
		} else {
		
			echo 'error';
		
		}

	}
}