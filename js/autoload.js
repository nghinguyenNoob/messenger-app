// Setting realtime
$.ajaxSetup({
	cache: false
});

setInterval(function() {$('.main-chat').load('msglog.php');}, 1000);