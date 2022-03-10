<?php
	include('connectdb.php');

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date_current = '';
	$date_current = date('Y-m-d H:i:sa');

	session_start();
	if (@$_SESSION['username']) {
		$user = $_SESSION['username'];
	} else {
		$user = '';
	}
?>