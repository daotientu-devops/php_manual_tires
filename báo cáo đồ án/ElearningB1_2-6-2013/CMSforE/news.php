<?php include('includes/application_top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<link rel="stylesheet" type="text/css" href="datetimepicker/main.css"/>
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>
<script type="text/javascript" src="javascript/jquery.ui.datepicker.js"></script>



<link rel="stylesheet" href="datetimepicker/main.css">
<script type="text/javascript" language="javascript" src="datetimepicker/prototype-1.js"></script>
<script type="text/javascript" language="javascript" src="datetimepicker/prototype-base-extensions.js"></script>
<script type="text/javascript" language="javascript" src="datetimepicker/prototype-date-extensions.js"></script>
<script type="text/javascript" language="javascript" src="datetimepicker/behaviour.js"></script>
<script type="text/javascript" language="javascript" src="datetimepicker/datepicker.js"></script>
<link rel="stylesheet" href="datetimepicker/datepicker.css">
<script type="text/javascript" language="javascript" src="datetimepicker/behaviors.js"></script>
                            

<script type="text/javascript" src="javascript/jquery-ui-1.10.0.custom.js"></script>
<script type="text/javascript" src="javascript/calendar.js"></script>

<link rel="stylesheet" type="text/css" href="javascript/jquery-ui-1.10.0.custom.min.css"/>
<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
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
    	<?php include('includes/header.php'); ?>
  	</div>
 	
  	<div id="content_large">
    	<?php include('includes/article_manager.php'); ?>
  	</div>
    
    
  	<div id="footer">
    	<?php include('includes/footer.php'); ?>
 	</div>
</div>
</body>
</html>
