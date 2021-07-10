<?php include('includes/application_top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>
<!--file validate.js -->
<script type="text/javascript" src="javascript/validate.js"></script>
<script type="text/javascript" src="javascript/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="javascript/jquery-ui-1.10.0.custom.js"></script>
<script type="text/javascript" src="javascript/calendar.js"></script>
<link rel="stylesheet" type="text/css" href="javascript/jquery-ui-1.10.0.custom.min.css"/>
<script type="text/javascript">
	$(function() {
		$("#datetimepicker").datepicker({
		changeYear: true
		});
	});
</script>
<script type="text/javascript">
//code sử dụng jquery
$(document).ready(function(e) {
   $("#form_changePass").validate({
		rules:{
		password:{required:true, minlength:5},
		rePassword:{required:true, equalTo:"#password"}
		},
		messages:{
		password:{required:"Mật khẩu không được phép để trống", minlength:"Mật khẩu không được phép ít hơn 5 ký tự"},
		rePassword:{required:"Mật khẩu không được phép để trống", equalTo:"Phiền bạn nhập lại đúng mật khẩu một lần nữa"}
		}
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
    
 	<!--<div id="colleft">
    	<?php //include('includes/colleft.php'); ?>
  	</div>-->
  	<div id="content">
    	<?php include('includes/perlist.php'); ?>
  	</div>
    <!--<div id="colright">
    	<?php //include('includes/colright.php'); ?>
  	</div>-->
    
  	<div id="footer">
    	<?php include('includes/footer.php'); ?>
 	</div>
</div>
</body>
</html>
