<?php
	
	include('includes/general.php');

	if (!$user) {
		header("Location: index.php");
	}

	// Khai báo biến gán với dữ liệu nhận được
	$body_msg = @pg_escape_string($connect_db, $_POST['body_msg']);
	$group_id = @pg_escape_string($connect_db, $_SESSION['group_id']);

	$body_msg = htmlentities($body_msg);

	$body_msg = trim($body_msg);

	if ($body_msg != '') {
		$query_send_msg = pg_query($connect_db, "INSERT INTO messages VALUES(DEFAULT, '$body_msg', '$user', '$date_current', '$group_id')");
	}

?>