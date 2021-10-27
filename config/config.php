<?php
	session_start();

	// Define database
	define('dbhost', 'tesla.c64fy3xyua99.ap-south-1.rds.amazonaws.com');
	define('dbuser', 'sasi');
	define('dbpass', 'jamesbond007');
	define('dbname', 'tesla');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
