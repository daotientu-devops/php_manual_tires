<?php include('configs/configs.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị Website (CMS)</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="js/jquery-1.8.3.js.js"></script>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<link rel="stylesheet" type="text/css" href="datetimepicker/main.css"/>
					<script type="text/javascript" language="javascript" src="datetimepicker/prototype-1.js"></script>
			<script type="text/javascript" language="javascript" src="datetimepicker/prototype-base-extensions.js"></script>
			<script type="text/javascript" language="javascript" src="datetimepicker/prototype-date-extensions.js"></script>
			<script type="text/javascript" language="javascript" src="datetimepicker/behaviour.js"></script>
							<script type="text/javascript" language="javascript" src="datetimepicker/datepicker.js"></script>
										<link rel="stylesheet" href="datetimepicker/datepicker.css">
							<script type="text/javascript" language="javascript" src="datetimepicker/behaviors.js"></script>
</head>

<body>
<div class="banner">
	<?php include('includes/banner.php'); ?>
</div>
<div class="header">
	<?php include('includes/header.php'); ?>
</div>
<div class="content">
	<?php include('orderDetails/orderDetailslist.php'); ?>
</div>
<div class="footer">
	<?php include('includes/footer.php'); ?>
</div>
</body>
</html>