<?php 
	
	include('includes/general.php');

	include('includes/header.php');

	if ($user) {
		echo '
			<div class="screen-chat">
				<div class="navbar-chat">
					<div class="navbar-profile">
						<image src="image/avatar-beer.jpg">
						<h2>' .$user. '</h2>
					</div>
					<div class="navbar-search">
						<div class="search-outchat">
							<input type="text" placeholder="Người, nhóm, tin nhắn">
						</div>
						<div class="search-keyboard">
							<i class="fa fa-tty"></i>
						</div>
					</div>
					<div class="navbar-action">
					</div>
					<div class="navbar-end">
						<a href="logout.php" class="sign-out">Log out</a>
					</div>
				</div>
    				

				<div class="contain-chat">
					<div class="header-chat">
						<image src="image/avatar-man.png">
						<h2>Box chat</h2>
						<i class="fa fa-search"></i>
						<i class="fa fa-gift"></i>
						<i class="fa fa-user-plus"></i>
					</div>
					<div class="main-chat">
					</div>
					<div class="box-chat">
						<form method="POST" id="formSendMsg" onsubmit="return false;">
							<input type="text" name="body_message" placeholder="Nhập nội dung tin nhắn...">
						</form>
					</div>
				</div>
			</div>
			';
	} else {
		echo '<div class="box-join">
				<p>Tạo tài khoản để tham gia cùng chúng tôi</p>
				<form method="POST" id="formJoin" onsubmit="return false;">
					<input type="text" placeholder="Tên đăng nhập" class="data-input" id="username">
					<input type="password" placeholder="Mật khẩu" class="data-input" id="password">
					<button class="btn-submit">Bắt đầu</button>
					<div class="alert danger"></div>
				</form>
			</div>';
	}

	include('includes/footer.php');
?>