<?php
	$host_name = 'localhost';
	$user = 'root';
	$password ='';
	$db_name = 'message_data';

	$connect_db = mysqli_connect($host_name, $user, $password, $db_name);

	if (!$connect_db) {
		echo "Database connect failed";
	}
?>