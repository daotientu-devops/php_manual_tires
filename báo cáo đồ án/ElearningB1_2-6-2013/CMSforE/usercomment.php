<?php include('includes/application_top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>
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
//code sử dụng jquery để check form
	$(document).ready(function(e) {
        //Tham chiếu đến đối tượng HTML mang id là form_register
		$.validator.addMethod("user", function(value, element)
		{
			return value.match(/^\w+$/);
		},"tên không chứa các kí tự đặc biệt");
		$.validator.addMethod("datevn", function(value, element)
		{
			return value.match(/^\d{1,2}[\/-]\d{1,2}[\/-]\d{4}$/);
		},"điền ngày tháng hợp lệ ở Việt Nam (ngày/tháng/năm)");
		$("#addcomleft").validate
		({
			rules: 
			{
				title: { required: true, minlength: 5},
				
				email: { required: true, email: true},
				content: { required: true, minlength: 10}
				
			},
			messages:
			{
				title: { required: "phiền bạn phải tiêu đề góp ý", minlength:"Tiêu đề phải chứa ít nhất 5 kí tự"},
				
				email:	{ required: "phiền bạn nhập địa chỉ email", email: "Email phải hợp lệ"},
				content: { required: "Bạn phải nhập nội dung góp ý", minlength: "Nội dung phải chứa ít nhất 10 kí tự"},
				
			},
			errorClass: "error",
			errorElement: "error"
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
 	<div id="colleft">
    	<?php include('includes/colleft.php'); ?>
  	</div>
  	<div id="content">
    	<?php include('includes/addnewcomment.php'); ?>
  	</div>
    <div id="colright">
    	<?php include('includes/colright.php'); ?>
  	</div>
    
  	<div id="footer">
    	<?php include('includes/footer.php'); ?>
 	</div>
</div>
</body>
</html>
