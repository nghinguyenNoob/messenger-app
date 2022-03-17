<?php
	$host_name = 'ec2-54-226-18-238.compute-1.amazonaws.com';
	$port = 5432;
	$user = 'lxnbnddecrfcdf';
	$password ='1dba0c273ef4990155e8348b8e0df2feb99450693fddee69ef9133b309c057dc';
	$db_name = 'dblf7konfom4pg';

	// $connect_db = mysqli_connect($host_name, $user, $password, $db_name);

	$conn_string = "host=".$host_name. " port=".$port. " dbname=".$db_name. " user=".$user. " password=".$password;

	$connect_db = pg_connect($conn_string);


	if (!$connect_db) {
		echo "Database connect failed";
	}
?>