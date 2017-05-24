<?php 

session_start();


$upload_errors = array(
		UPLOAD_ERR_OK 			=> "No errors",
		UPLOAD_ERR_INI_SIZE		=> "file larger then max ini filesize",
		UPLOAD_ERR_FORM_SIZE	=> "file larger then max specified filesize",
		UPLOAD_ERR_PARTIAL		=> "upload due to partial upload",
		UPLOAD_ERR_NO_FILE		=> "no file selected",
		UPLOAD_ERR_NO_TMP_DIR	=> "no temp directory found",
		UPLOAD_ERR_CANT_WRITE	=> "cannot write to the disk",
		UPLOAD_ERR_EXTENSION	=> "upload failed due to extension"

		);

function confirm($result){
	if(!$result){
		die("database query failed");
	}
}

function redirect_to($url){
	echo '<script>window.location="'.$url.'";</script>';
	exit;
}

function escape_string($string){
	global $db;
	$escaped_string = mysql_real_escape_string($string);
	$new_string = htmlentities(strip_tags(trim($escaped_string)));
	return $new_string;
}



function random_salt($length){
	$random_string = md5(uniqid(mt_rand(),true));

	$base64_string = base64_encode($random_string);

	$modified_string = str_replace("+", ".", $base64_string);

	$salt = substr($modified_string, 0,$length);
	return $salt;

}

function encrypt_password($password){
	return md5($password);
}

function  check_password($password,$exiting_hash){
	if($password===$exiting_hash){
		return true;
	}else{
		return false;
	}
}



function login($email,$password){
	global $db;

	 $user = find_user_by_email($email);

	if($user){

		if(check_password($password,$user["password"])){
			 return $user;
		}else{
			return false;
		}
	}else{
		return false;
	}

}

function find_by_field($table,$field,$value){
	global $db;
	$table = escape_string($table);
	$field = escape_string($field);
	$value = escape_string($value);
	$query = "SELECT * FROM {$table} where {$field} = {$value}";
	$result = mysql_query($query);
	confirm($result);
	if($user = mysql_fetch_assoc($result)){
		return $user;
	}else{
		return false;
	}
}

function make_dir_empty($path){

	$files = glob($path.'/*'); // get all file names
	foreach($files as $file){ // iterate files
	  if(is_file($file))
	    unlink($file); // delete file
	}
}

function is_valid_email( $address ) {
   $rx = "^[a-z0-9\\_\\.\\-]+\\@[a-z0-9\\-]+\\.[a-z0-9\\_\\.\\-]+\\.?[a-z]{1,4}$";
   return (preg_match("~".$rx."~i", $address));
}

// ajax image upload
function createDir($path){		
	if (!file_exists($path)) {
		$old_mask = umask(0);
		mkdir($path, 0777, TRUE);
		umask($old_mask);
	}
}


function createThumb($path1, $path2, $file_type, $new_w, $new_h, $squareSize = ''){
	/* read the source image */
	$source_image = FALSE;
	
	if (preg_match("/jpg|JPG|jpeg|JPEG/", $file_type)) {
		$source_image = imagecreatefromjpeg($path1);
	}
	elseif (preg_match("/png|PNG/", $file_type)) {
		
		if (!$source_image = @imagecreatefrompng($path1)) {
			$source_image = imagecreatefromjpeg($path1);
		}
	}
	elseif (preg_match("/gif|GIF/", $file_type)) {
		$source_image = imagecreatefromgif($path1);
	}		
	if ($source_image == FALSE) {
		$source_image = imagecreatefromjpeg($path1);
	}

	$orig_w = imageSX($source_image);
	$orig_h = imageSY($source_image);
	
	if ($orig_w < $new_w && $orig_h < $new_h) {
		$desired_width = $orig_w;
		$desired_height = $orig_h;
	} else {
		$scale = min($new_w / $orig_w, $new_h / $orig_h);
		$desired_width = ceil($scale * $orig_w);
		$desired_height = ceil($scale * $orig_h);
	}
			
	if ($squareSize != '') {
		$desired_width = $desired_height = $squareSize;
	}

	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	// for PNG background white----------->
	$kek = imagecolorallocate($virtual_image, 255, 255, 255);
	imagefill($virtual_image, 0, 0, $kek);
	
	if ($squareSize == '') {
		/* copy source image at a resized size */
		imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $orig_w, $orig_h);
	} else {
		$wm = $orig_w / $squareSize;
		$hm = $orig_h / $squareSize;
		$h_height = $squareSize / 2;
		$w_height = $squareSize / 2;
		
		if ($orig_w > $orig_h) {
			$adjusted_width = $orig_w / $hm;
			$half_width = $adjusted_width / 2;
			$int_width = $half_width - $w_height;
			imagecopyresampled($virtual_image, $source_image, -$int_width, 0, 0, 0, $adjusted_width, $squareSize, $orig_w, $orig_h);
		}

		elseif (($orig_w <= $orig_h)) {
			$adjusted_height = $orig_h / $wm;
			$half_height = $adjusted_height / 2;
			imagecopyresampled($virtual_image, $source_image, 0,0, 0, 0, $squareSize, $adjusted_height, $orig_w, $orig_h);
		} else {
			imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $squareSize, $squareSize, $orig_w, $orig_h);
		}
	}
	
	if (@imagejpeg($virtual_image, $path2, 90)) {
		imagedestroy($virtual_image);
		imagedestroy($source_image);
		return TRUE;
	} else {
		return FALSE;
	}
}	
// end 


function pop_out_name($email){
	return strstr($email,"@",true);

}

function timeAgo($time_ago)
{
    $time_ago = (int) strtotime($time_ago);
    $cur_time   = (int) time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}



function all_exams() {
	global $db;

	$query = "SELECT * FROM homepage ORDER BY created_at DESC";

	$result = mysql_query($query);

	confirm($result);

	if (mysql_num_rows($result)>0) {
		return $result;
	}

}

function all_countries() {
	global $db;

	$query = "SELECT id, name FROM countries ORDER BY name ASC";

	$result = mysql_query($query);

	confirm($result);

	if (mysql_num_rows($result)>0) {
		return $result;
	}
}

// type = 'danger' or type='success'
function session_message($type){

		$output ='';
	if (isset($_SESSION[$type])) {
		$output .= '<p class="text-center cordinator-error error alert alert-'.$type.'">';
		$output .= $_SESSION[$type];
		$output .= "</p>";
	}

	$_SESSION[$type] = null;

	return $output;
}

function find_by_id($table, $field, $id) {
	global $db;

	$query = "SELECT {$field} FROM {$table} WHERE  {$field} = '{$id}' ";

	$result   = mysql_query($query);

	confirm($result);

	if ($user  = mysql_fetch_assoc($result)) {
		return $user;

	} else {
	
		return false;
	}
}

