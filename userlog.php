<?php
	include('includes/general.php');

	if (!$user) {
		header("Location: index.php");
	}

	$group_for = $user;

	$query_get_group = pg_query($connect_db, "SELECT * FROM groups ORDER BY id_group ASC");

	while($row = pg_fetch_assoc($query_get_group)) {
	    echo '
	    	<div class="navbar-row ' .$row['id_group']. '" onClick="changeGroupChat(this)">
				<image src="image/avatar-beer.jpg">
				<h2>' .$row['group_name']. '</h2>
			</div>';
	}
?>