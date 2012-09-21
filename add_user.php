<?php

	require_once('config.php');
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	$firstname = clean($_POST['firstname']);
	$lastname = clean($_POST['lastname']);
	$address = clean($_POST['address']);
	$contact_no = clean($_POST['contact_no']);
	

		$qry = "INSERT INTO user_detail(first_name, last_name, address, contact_no) VALUES('$firstname','$lastname','$address','$contact_no')";
	$result = @mysql_query($qry);
	
           
	//Check the query was successful or not
	if($result) {
		$id = mysql_insert_id();
		$data['id']= $id;
		$data['msg']='ok';
		echo json_encode($data);
	}else {
		die("Query failed");
		exit();
	}

	
?>