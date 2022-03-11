<?php
	
	include('includes/general.php');

	if ($user) {
		header("Location: index.php");
	}

	$username = @pg_escape_string($connect_db, $_POST['username']);
	$password = @pg_escape_string($connect_db, $_POST['password']);

	$show_alert = '<script>$("#formJoin .alert").show(); </script>';
	$hide_alert = '<script>$("#formJoin .alert").hide(); </script>';
	$success_alert = '<script>$("formJoin .alert").attr("class", "alert-success"); </script>';
	$query_check_exist_user = pg_query($connect_db, "SELECT * FROM users WHERE username = '$username'");

	if ($username == '' || $password == '') {
		echo $show_alert . 'Vui lòng điền đầy đủ thông tin bên trên.';
	} else {

		if (pg_num_rows($query_check_exist_user)) {
			$password = md5($password);
			$query_check_login = pg_query($connect_db, "SELECT * FROM users WHERE username ='$username' AND password ='$password'");

			if (pg_num_rows($query_check_login)) {
				echo $show_alert . $success_alert . 'Đăng nhập thành công.';
				$_SESSION['username'] = $username;
				echo '<script>window.location.reload();</script>';
			} else {
				echo $show_alert . 'Tên đăng nhập hoặc Mật khẩu không chính xác';
			}
		} else {
			if (strlen($username) < 4 || strlen($username) > 15) {
				echo $show_alert . 'Tên đăng nhập trong khoảng 4-15 ký tự';
			} else if (preg_match('/\W/', $username)) {
				echo $show_alert . 'Tên đăng nhập không chứa ký tự trắng hoặc ký tự đặc biệt';
			} else if(strlen($password) < 6) {
				echo $show_alert . 'Mật khẩu của bạn quá ngắn, hãy thử lại với mật khẩu khác an toàn hơn';
			} else {
				$password = md5($password);
				$query_create_user = pg_query($connect_db, "INSERT INTO users VALUES(DEFAULT,'$username', '$password', '$date_current')");
				echo $show_alert . 'Đăng ký tài khoản thành công';
				$_SESSION['username'] = $username;
				echo '<script>window.location.reload();</script>';
			}
		}

	}
?>