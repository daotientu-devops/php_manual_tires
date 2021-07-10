<?php include('includes/application_top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>
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
	$(document).ready(function(e)
	{
		//Hàm chứa Ajax để hiển thị nội dung chat trong khung mang class là chat
		function view()
		{
			$(".chat").load('includes/view.php');
			var layout = document.getElementById("layout");
			layout.scrollTop = layout.scrollHeight;
			setTimeout(view, 10);
		}
		//gọi hàm hiển thị nội dung
		view();
		//hàm chứa ajax để gửi nội dung chat lên server
		function send()
		{
			//cập nhật dữ liệu trên forum txtchat vào 1 file data.txt
			$.get('handling.php?chat=' + $("#txtchat").val(),function(data){
				view();
				$("#txtchat").val('');
				var layout = document.getElementById("layout");
				layout.scrollTop = layout.scrollHeight;
			});
		}
		//Hàm send() được gọi khi sự kiện nhấn nút send xảy ra
		//Tham chiếu lến nút send
		$("#btnsend").click(function(e)
		{
			//thực hiện sự kiện trong thân hàm
			send();	
		});
		//Bắt sự kiện nhấn nút Enter
		window.onkeyup = function(e)
		{
			var keyup = e.keyCode;
			if(keyup == 13)
			{
				send();
			}
		}
		///////////////////////
		$("#bg").change(function(e)
		{
			if($(this).val()!="")
			{
				$(".cframe").css("background-color","#" + $(this).val());
			}
		});
		$("#word").change(function(e)
		{
			if($(this).val()!="")
			{
				$(".chat").css("color","#" + $(this).val());
			}
		});
		$("#font_weight").change(function(e)
		{
			if($(this).val()!="")
			{
				$(".chat").css("font-weight", $(this).val());
			}
		});
		$("#font_style").change(function(e)
		{
			if($(this).val()!="")
			{
				$(".chat").css("font-style", $(this).val());
			}
		});
		$("#font_normal").change(function(e)
		{
			if($(this).val()!="")
			{
				$(".chat").css("font-weight",$(this).val()).css("font-style",$(this).val());
			}
		});
		$("#font_family").change(function(e)
		{
			if($(this).val()!="")
			{
				$(".chat").css("font-family",$(this).val());
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
 	<div id="colleft">
    	<?php include('includes/colleft.php'); ?>
  	</div>
  	<div id="content">
    	<?php include('includes/chatroom.php'); ?>
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
