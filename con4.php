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
		$qry="SELECT * FROM user_detail";
	$r=mysql_query($qry);
	
	
	if($r) 
	{
		
		
			$member = mysql_fetch_assoc($r);
		
		
			
		
		
	}
?>