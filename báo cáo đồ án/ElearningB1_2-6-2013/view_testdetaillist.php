<?php include('includes/application_top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-learning dành cho các khóa học tiếng Anh</title>
<script type="text/javascript" src="javascript/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="javascript/jquery-1.8.3.js"></script>
<script type="text/javascript" src="javascript/jquery.form.js"></script>
<script type="text/javascript">

</script>

<script type="text/javascript" src="javascript/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="javascript/jquery-ui-1.10.0.custom.js"></script>
<script type="text/javascript" src="javascript/calendar.js"></script>
<link rel="stylesheet" type="text/css" href="javascript/jquery-ui-1.10.0.custom.min.css"/>
<link rel="stylesheet" type="text/css" href="templates/elearning/css/styles.css"/>
<script type="text/javascript" src="./ckeditor/ckeditor.js"></script> 
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
	$(function() {
		$("#datetimepicker").datepicker({
		changeYear: true
		});
	});
</script>
<script type="text/javascript">
      //var hook = true;
      //window.onbeforeunload = function() {
        //if (hook) {
          //return "Bạn có muốn thoát ra khi đang làm bài test không? Nhấn OK để thoát cửa sổ này. Nhấn Cancel để tiếp tục làm.."
		
        //}
      //}
      //function unhook() {
        	//hook=false;
			
      //}
	  //var x=window.confirm("Bạn có chắc chắn muốn làm bài test này chứ ?. Nếu có, bạn có 125 phút để hoàn thành bài test này.");
	  //if(!x)
	  //{
	//	  window.location="TimeOut.php";
	  //}
	  //else
	  //{
		  
	  //}
</script>
</head>

<body onload="time()">
<div id="wrapper" class="clearfix">
<div id="startpage">
	<?php include('includes/startpage.php'); ?>
</div>
<div id="header" class="clearfix">
  	<?php include('includes/header.php');?>
</div>
	<div id="contan">
		<div id="colleft">
			<?php include('includes/colleft.php'); ?>
		</div>
		  
		<div id="content">
			<?php include('includes/testdetaillist.php'); ?>
		</div>
		  
		  
		<div id="colright">
			<?php include('includes/colright.php'); ?>
		</div>
	</div>
  
<div id="footer">
  	<?php include('includes/footer.php');?>
</div>
  
</div>
<script language="javascript" type="text/javascript">
	<?php
	
	?>
	var i=7500;
	function time()
	{
		if(i>=0)
		{
			//document.getElementById("show").innerHTML="<b>Thời gian trung bình của mỗi bài test áp lực còn lại là: "+i+" giây</b>";
			//i--;
			//setTimeout("time()",1000);
		}
		else
		{
			//window.location='TimeOut.php';
		}
	}
</script>
<script type="text/javascript">
	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
