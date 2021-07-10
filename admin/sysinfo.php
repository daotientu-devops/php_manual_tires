<?php include('configs/configs.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị Website (CMS)</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="banner">
	<?php include('includes/banner.php'); ?>
</div>
<div class="header">
	<?php include('includes/header.php'); ?>
</div>
<div class="content">
	<?php include('includes/info.php'); ?>
</div>
<div class="footer">
	<?php include('includes/footer.php'); ?>
</div>
<script type="text/javascript">
	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>