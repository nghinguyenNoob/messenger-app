<?php
	include('includes/general.php');

	if (!$user) {
		header("Location: index.php");
	}

	$query_get_msg = pg_query($connect_db, "SELECT * FROM messages ORDER BY id_msg ASC");

	while($row = pg_fetch_assoc($query_get_msg)) {
		$date_sent = $row['date_sent'];
	    // $day_sent = substr($date_sent, 8, 2); // Ngày gửi
	    // $month_sent = substr($date_sent, 5, 2); // Tháng gửi
	    // $year_sent = substr($date_sent, 0, 4); // Năm gửi
	    // $hour_sent = substr($date_sent, 11, 2); // Giờ gửi
	    // $min_sent = substr($date_sent, 14, 2); // Phút gửi

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