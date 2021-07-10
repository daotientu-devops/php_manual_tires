<?php include('configs/configs.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="templates/tires/css/styles.css"/>
<title>LỐP Ô TÔ|LOP OTO</title>
<script src="javascript/slideAds.js" type="text/javascript"></script>
  <script type = "text/javascript">
  var menu = document.getElementById("loadlist");
  var child = menu.getElementsByTagName("li");
  var n = 10;
  for(var i = 0; i< child.length; i++)
  {
	  child[i].style.left = n + "px";
	  n = n +  120;
  }
  //Dịch chuyển sang trái
  function move()
  {
	  for ( var i = 0;i<child.length;i++)
	  {
		  var x = parseInt(child[i].style.left);
		  x = x - 5;
		  if (x== -120)
		  {
			  x = 120 * (child.length - 1);
			  child[i].style.left = x + "px";
		  }
	  }
	  window.setTimeout("move()", 100);
  }
  move();
  </script>
  
  </head>
<body>
<div id="slideads">
    <div class="slideAds1">
        <?php include('includes/slideAds1.php'); ?>
    </div>
    <div class="slideAds2">
        <?php include('includes/slideAds2.php'); ?>
    </div>
</div>
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
    <?php include('control/checkOutList.php'); ?>
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