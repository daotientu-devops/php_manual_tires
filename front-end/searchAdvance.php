<?php include('configs/configs.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include('includes/head.php'); ?>
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
    <?php include('control/sAdvanceList.php'); ?>
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