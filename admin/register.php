<?php 
session_start();
$link = mysql_connect("localhost","root","")
or die ("Error: Could not connect to MySQL Database.");
mysql_select_db("php1012e_db",$link);
mysql_query("SET NAMES 'utf8'", $link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị Website (CMS)</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="banner">
	<?php include('includes/banner.php'); ?>
</div>

<div class="content">
	<?php include('register/reg.php'); ?>
</div>
<div class="footer">
	<?php include('includes/footer.php'); ?>
</div>
</body>
</html>