<?php

function data_setting_value($dbc, $id){
	
	$q = "SELECT * FROM settings WHERE id = '$id'"; //here id is string, so use single quotes
  	$r = mysqli_query($dbc, $q);
  	
  	$debug = mysqli_fetch_assoc($r);
    return $debug['value'];
	
}

function data_page($dbc,$id){
    $q = "SELECT * FROM pages WHERE id = $id"; 
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_assoc($r);
	
	$data['body_nohtml'] = strip_tags($data['body']);
	if($data['body'] == $data['body_nohtml']) {
		
		$data['body_formatted'] = '<p>'.$data['body'].'</p>';
		
	} else {
		
		$data['body_formatted'] = $data['body'];
	}
	
	
	
	if (!$r) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
    }
	return $data;
}

function data_user($dbc,$id){
	
  $q = "SELECT * FROM users WHERE email = '$id'";
  $r = mysqli_query($dbc, $q);
  $data = mysqli_fetch_assoc($r);
  
  $data['fullname'] = $data['first'].', '.$data['last'];
  $data['fullname_reverse'] = $data['last'].', '.$data['first'];
  return $data;
	
	
}
?>