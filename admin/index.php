<?php include('configs/configs.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị Website (CMS)</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/calendar.css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-datepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	$("#calendar").datepicker({
		inline: true,
		firstDay: 1,
		showOtherMonths: true,
		dayNamesMin: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']
	});    
});
</script>
</head>

<body>
<div class="banner">
	<?php include('includes/banner.php'); ?>
</div>
<div class="header">
	<?php include('includes/header.php'); ?>
</div>
<div class="content">
	<?php include('includes/content.php'); ?>
</div>
<div class="footer">
	<?php include('includes/footer.php'); ?>
</div>
<div class="endpage">
	<?php include('includes/endpage.php'); ?>
</div>
<div id="calendar"></div>
</body>
</html>