<?php 
	
	include('includes/general.php');

	include('includes/header.php');

	if ($user) {
		echo '
			<div class="screen-chat">
				<div class="navbar-chat">
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
					<p>Show navbar chat</p>
				</div>
				<div class="contain-chat">
					<div class="main-chat">
					</div>
					<div class="box-chat">
						<form method="POST" id="formSendMsg" onsubmit="return false;">
							<input type="text" placeholder="Nhập nội dung tin nhắn...">
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