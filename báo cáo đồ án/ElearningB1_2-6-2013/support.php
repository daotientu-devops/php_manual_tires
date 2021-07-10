<?php include('includes/application_top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>
	
<!--<script type="text/javascript" src="javascript/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="javascript/jquery.cycle.all.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
        $("#slide").cycle({
			fx: 'fade', //hiệu ứng
			speed: 1000, //tốc độ diễn ra hiệu ứng
			timeout: 3000, //3 giây: thời gian thay đổi giữa các hình 
			pager: '#slide_nav' //tạo phân trang cho <div id="slide_nav"></div>
		});
    });
</script>-->

<script type="text/javascript" src="javascript/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="javascript/jquery-ui-1.10.0.custom.js"></script>
<script type="text/javascript" src="javascript/calendar.js"></script>


<!--<script type="text/javascript" src="epiclock/javascript/jquery.dateformat.js"></script>
        <script type="text/javascript" src="epiclock/javascript/jquery.epiclock.js"></script>
        <script type="text/javascript" src="epiclock/renderers/retro/epiclock.retro.js"></script>
        <script type="text/javascript" src="epiclock/renderers/retro-countdown/epiclock.retro-countdown.js"></script>-->

<link rel="stylesheet" type="text/css" href="javascript/jquery-ui-1.10.0.custom.min.css"/>

 <!--<link media="screen" rel="stylesheet" type="text/css" href="epiclock/stylesheet/jquery.epiclock.css"/>
        <link media="screen" rel="stylesheet" type="text/css" href="epiclock/renderers/retro/epiclock.retro.css"/>
        <link media="screen" rel="stylesheet" type="text/css" href="epiclock/renderers/retro-countdown/epiclock.retro-countdown.css"/>-->
        
<script type="text/javascript">
	$(function() {
		$("#datetimepicker").datepicker({
		changeYear: true
		});
	});
</script>
<script type="text/javascript">
    $(function ()
            {
                $('#clock').epiclock();
			});
</script>


</head>
<body>
<div id="wrapper" class="clearfix">
	<div id="startpage">
		<?php include('includes/startpage.php'); ?>

	</div>
  	<div id="header">
    	<?php include('includes/header.php'); ?>
  	</div>
		<div id="contan">
			<div id="colleft">
				<?php include('includes/colleft.php'); ?>
			</div>
			<div id="content">
				<?php include('includes/supportlist.php'); ?>
			</div>
			<div id="colright">
				<?php include('includes/colright.php'); ?>
			</div>
		</div>
    
  	<div id="footer">
    	<?php include('includes/footer.php'); ?>
 	</div>
</div>
</body>
</html>
