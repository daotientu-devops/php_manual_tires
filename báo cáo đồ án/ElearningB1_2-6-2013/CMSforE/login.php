<?php 
session_start();
$link = mysql_connect("localhost","root","")
or die ("Could not connect to MySQL Database");
mysql_select_db("test_moodle",$link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="javascript/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="javascript/jquery-ui-1.10.0.custom.js"></script>
<script type="text/javascript" src="javascript/calendar.js"></script>


<script type="text/javascript" src="epiclock/javascript/jquery.dateformat.js"></script>
        <script type="text/javascript" src="epiclock/javascript/jquery.epiclock.js"></script>
        <script type="text/javascript" src="epiclock/renderers/retro/epiclock.retro.js"></script>
        <script type="text/javascript" src="epiclock/renderers/retro-countdown/epiclock.retro-countdown.js"></script>

<link rel="stylesheet" type="text/css" href="javascript/jquery-ui-1.10.0.custom.min.css"/>

 <link media="screen" rel="stylesheet" type="text/css" href="epiclock/stylesheet/jquery.epiclock.css"/>
        <link media="screen" rel="stylesheet" type="text/css" href="epiclock/renderers/retro/epiclock.retro.css"/>
        <link media="screen" rel="stylesheet" type="text/css" href="epiclock/renderers/retro-countdown/epiclock.retro-countdown.css"/>

<script type="text/javascript">
	$(function() {
		$("#datetimepicker").datepicker({
		changeYear: true
		});
	});
</script>
</head>
<body>
<div id="wrapper" class="clearfix">
	<div id="startpage">
		<?php include('includes/startpage.php'); ?>
	</div>
  	<div id="header">
    	<?php include('includes/header2.php'); ?>
  	</div>
 	
  	<div id="content_large">
    	<?php include('includes/userlogin.php'); ?>
  	</div>
    
  	<div id="footer">
    	<?php include('includes/footer.php'); ?>
 	</div>
</div>
</body>
</html>
