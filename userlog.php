<?php
	include('includes/general.php');

	if (!$user) {
		header("Location: index.php");
	}

	$query_get_user = pg_query($connect_db, "SELECT * FROM users ORDER BY id_user ASC");

	while($row = pg_fetch_assoc($query_get_user)) {
	    echo '
	    	<div class="navbar-row">
				<image src="image/avatar-beer.jpg">
				<h2>' .$row['username']. '</h2>
			</div>
	    ';
	}
?>