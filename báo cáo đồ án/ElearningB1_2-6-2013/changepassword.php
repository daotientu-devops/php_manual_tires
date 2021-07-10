<?php include('includes/application_top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<!--file validate.js -->
<script type="text/javascript" src="javascript/validate.js"></script>
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
<script type="text/javascript">
    $(function ()
            {
                $('#clock').epiclock();
			});
</script>

<script type="text/javascript">
//check form for validate
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
		$("#form_changePass").validate
		({
			rules: 
			{
				username: { required: true, rangelength: [5, 30], user: true},
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
    	<?php include('includes/header2.php'); ?>
  	</div>
		<div id="contan">
			<div id="colleft">
				<?php include('includes/colleft.php'); ?>
			</div>
			<div id="content">
				<?php include('includes/changepass.php'); ?>
			</div>
			<div id="colright">
				<?php include('includes/colright2.php'); ?>
			</div>
		</div>
    
  	<div id="footer">
    	<?php include('includes/footer.php'); ?>
 	</div>
</div>
</body>
</html>
