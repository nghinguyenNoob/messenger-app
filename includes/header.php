<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Messenger</title>
	<link rel="icon" href="image/comment.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!--  <div class="main-header">
        <h1><i class="fa fa-commenting"></i> Messenger</h1>
    </div> --><!-- div.main-header -->

    <?php
    	if ($user) {
    		echo
    			'<div>
    			</div>
    			<div class="clearfix"></div>';
    	} else {
    		echo '<div class="main-navbar"><h1><i class="fa fa-commenting"></i>Messenger</h1>';
    	}
    ?>

</body>
</html>