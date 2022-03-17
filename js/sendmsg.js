// Bắt sự kiện click vào thanh trò chuyện
$('#formSendMsg input[type="text"]').click(function () {
	// Kéo hết thanh cuộn xuống dưới
	window.scrollBy(0, $(document).height());
});

// Bắt sự kiện gõ phím Enter trong thanh trò chuyện
$('#formSendMsg input[type="text"]').keypress(function() {
	var  keyCode = (event.keyCode?event.keyCode:event.which);

	if (keyCode == '13') {
		sendMsg();
	}
});

// Gửi tin nhắn
function sendMsg() {
	// Khai báo biến chứa nội dung tin nhắn
	var body_msg = $('#formSendMsg input[name="body_message"]').val();

	$.ajax({
		url: 'sendmsg.php',
		type: 'POST',
		data: {
			body_msg: body_msg
		},
		success: function(result) {
			$('#formSendMsg input[type="text"]').val('');
			$('.main-chat').load('msglog.php');
		},

	})
}

// Change group chat
function changeGroupChat(e) {
	var group_id = e.className;
	group_id = group_id.split(" ")[1];
	$('.main-chat').load('msglog.php', {
				group_id: group_id});
	// Kéo hết thanh cuộn xuống dưới
	// window.scrollBy(0, $('.main-chat').height());
};