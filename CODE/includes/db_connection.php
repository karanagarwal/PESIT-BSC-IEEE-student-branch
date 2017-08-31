<?php 
	define("DB_SERVER", "");
	define("DB_USER", "");
	define("DB_PASS", "");
	define("DB_NAME", "u703255292_ieee");
	//1. Create a databses connection

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	
	//Test if connection occured.
	if (mysqli_connect_errno()) {
		die('Database Connection Failed: '.
		mysqli_connect_error().' ('.mysqli_connect_errno().')');
	}
?>