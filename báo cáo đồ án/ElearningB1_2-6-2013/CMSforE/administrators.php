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
   $("#form_user").validate({
		rules:{
		username:{required:true, minlength:5},
		password:{required:true, minlength:5},
		name:{required:true, minlength:2},
		address:{required:true, minlength:15},
		tel:{required:true, number:true, minlength:10},
		email:{required:true, email:true, minlength:10}
		},
		messages:{
		username:{required:"Tên đăng nhập không được để trống", minlength:"Tên đăng nhập không được phép ít hơn 5 ký tự"},
		password:{required:"Mật khẩu không được phép để trống", minlength:"Mật khẩu không được phép ít hơn 5 ký tự"},
		name:{required:"Tên người dùng không được phép để trống", minlength:"Họ & Tên không được phép ít hơn 2 ký tự"},
		address:{required:"Địa chỉ người dùng không được phép để trống", minlength:"Địa chỉ không được phép ít hơn 15 ký tự"},
		tel:{required:"Số điện thoại không được phép để trống", number:"Chỉ được phép nhập số", minlength:"Số điện thoại không được phép ít hơn 10 ký tự"},
		email:{required:"Địa chỉ email không được phép để trống", email:"Email nhập phải đúng định dạng", minlength:"Email không được phép ít hơn 10 ký tự"}
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
 	
  	<div id="content_large">
    	<?php include('includes/userlist.php'); ?>
  	</div>
  
  	<div id="footer">
    	<?php include('includes/footer.php'); ?>
 	</div>
</div>
</body>
</html>
