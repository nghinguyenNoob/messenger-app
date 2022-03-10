function Join() {
	$username = $('#username').val();
	$password = $('#password').val();

	$.ajax({
		url: 'join.php',
		type: 'POST',
		data: {
			username: $username,
			password: $password
		},
		success: function (result) {
			$('#formJoin .btn-submit').html('Bắt đầu');
			$('#formJoin .alert').html(result);
		},
		error: function (error) {
			alert('error');
		}
	});
}

$('#formJoin .btn-submit').click(function () {
	$(this).html('Đang tải...');
	Join();
});