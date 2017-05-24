<?php require_once('includes/config.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php

$output = array();





// if (isset($_POST['type'])&& $_POST['type']=='state') {
		
// 	$country_id = (int) escape_string($_POST['id']);

// 	$query = "SELECT id, name FROM states WHERE country_id = {$country_id} ORDER BY name ASC";

// 	$result = mysql_query($query);

// 	confirm($result);

// 	$output = '';
// 	if (mysql_num_rows($result)>0) {
		
// 		while ($state  = mysql_fetch_assoc($result)) { 

// 		$output .="<option value='".$state['id']."'>".$state['name']."</option>";

		
// 		}

// 	} else {

// 		$output .= "<option>No States found</option>";
// 	}


// 	echo $output;


// }


if (isset($_POST['type'])&& $_POST['type']=='city') {
		
	$state_id = (int) escape_string($_POST['id']);

	$query = "SELECT id, name FROM cities WHERE state_id = {$state_id} ORDER BY name ASC";

	$result = mysql_query($query);

	confirm($result);

	$output = '';
	if (mysql_num_rows($result)>0) {
		
		while ($state  = mysql_fetch_assoc($result)) { 

		$output .="<option value='".$city['id']."'>".$city['name']."</option>";

		
		}

	} else {

		$output .= "<option>No cities found</option>";
	}


	echo $output;


}