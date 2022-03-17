// Setting realtime
$.ajaxSetup({
	cache: false
});

// Set time load page 1s
// setInterval(loadMessage, 1000);
// function loadMessage() {
// 	$('.main-chat').load('msglog.php');
// }

setTimeout(loadUser, 1000);
function loadUser() {
	$('.navbar-action').load('userlog.php');
}