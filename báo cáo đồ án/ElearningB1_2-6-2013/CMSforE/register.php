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
		$("#form_register").validate
		({
			rules: 
			{
				username: { required: true, rangelength: [5, 10], user: true},
				password: { required: true, minlength: 5},		
				repassword: { required: true, equalTo: "#password"},
				email: { required: true, email: true},
				name: { required: true, rangelength: [4, 30]},
				tel: {required: true, number: true, minlength: 10},
				address: {required: true, minlength: 11}
			},
			messages:
			{
				username: { required: "phiền bạn phải điền tên đăng nhập", rangelength:"Tên phải chứa từ 5 đến 10 kí tự"},
				password: { required: "phiền bạn phải điền mật khẩu", minlength:"Mật khẩu phải chứa ít nhất 5 kí tự"},
				repassword: { required: "phiền bạn phải điền lại mật khẩu", equalTo: "Mật khẩu nhập lại phải trùng khớp với mật khẩu ban đầu"},
				email:	{ required: "phiền bạn nhập địa chỉ email", email: "Email phải hợp lệ"},
				name: { required: "Bạn phải nhập đầy đủ họ tên", rangelength: "tên phải chứa ít nhất 4 kí tự"},
				tel: { required: "Bạn hãy nhập chính xác số điện thoại để chúng tôi tiện liên hệ", number: "Bạn chỉ được nhập số",minlength: "Số điện thoại phải ít nhất có 10 chữ số"},
				address: { required: "Bạn hãy nhập địa chỉ để chúng tôi có thể đến tận nơi giao thẻ", minlength: "Địa chỉ phải rõ ràng và chứa ít nhất 11 kí tự"}
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
    	<?php include('includes/reglist.php'); ?>
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
