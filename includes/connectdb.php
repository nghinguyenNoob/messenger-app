<?php
	$host_name = 'ec2-3-212-45-192.compute-1.amazonaws.com';
	$port = 5432;
	$user = 'slfysshsejauhs';
	$password ='e021842871a1a9f9bfeafc2fec9308343a385fcc98d8a552b983a91426544721';
	$db_name = 'd1fnpfia6rs6vf';

	// $connect_db = mysqli_connect($host_name, $user, $password, $db_name);

	$conn_string = "host=".$host_name. " port=".$port. " dbname=".$db_name. " user=".$user. " password=".$password;

	$connect_db = pg_connect($conn_string);


	if (!$connect_db) {
		echo "Database connect failed";
	}
?>