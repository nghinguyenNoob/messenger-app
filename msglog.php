<?php
	include('includes/general.php');

	if (!$user) {
		header("Location: index.php");
	}

	$query_get_msg = pg_query($connect_db, "SELECT * FROM messages ORDER BY id_msg ASC");

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
?>