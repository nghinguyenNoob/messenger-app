<?php
	include('includes/general.php');

	if (!$user) {
		header("Location: index.php");
	}

	$group_id = 1;

	if (@$_POST['group_id']) {
		$group_id = $_POST['group_id'];
		$_SESSION['group_id'] = $_POST['group_id'];
	} else {
		$group_id= $_SESSION['group_id'];
	}

	$query_get_msg = pg_query($connect_db, "SELECT * FROM messages WHERE group_id = '$group_id' ORDER BY id_msg ASC");

	while($row = pg_fetch_assoc($query_get_msg)) {
		$date_sent = $row['date_sent'];
	    if($row['user_from'] == $user) {
	    	echo '
				<div class="msg-user">
					<p>'. $row['body'] . '</p>
					<div class="info-msg-user">
						Bạn - ' . $date_sent . '
					</div>
				</div>';
	    } else {
	    	echo '
	    	<div class="msg">
				<p>'. $row['body'] . '</p>
				<div class="info-msg">
					' . $row['user_from'] . ' - ' . $date_sent . '
				</div>
			</div>';
	    }
	}
	echo "<script>
			var mainDiv = document.querySelector('.main-chat');
			$('#main-chat').scrollTop(mainDiv.scrollHeight);
		</script>";
?>