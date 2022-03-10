<?php
	
	include('includes/general.php');

	if (!$user) {
		header("Location: index.php");
	}

	// Khai báo biến gán với dữ liệu nhận được
	$body_msg = @mysqli_real_escape_string($connect_db, $_POST['body_msg']);

	$body_msg = htmlentities($body_msg);

	$body_msg = trim($body_msg);

	if ($body_msg != '') {
		$query_send_msg = @mysqli_query($connect_db, "INSERT INTO messages VALUE('', '$body_msg', '$user', '$date_current')");
	}

?>