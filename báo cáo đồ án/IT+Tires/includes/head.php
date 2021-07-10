<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$qr1=mysql_query("SELECT * FROM configs ORDER BY id ASC limit 0,1",$link);
	while($ro1=mysql_fetch_array($qr1))
	{
		echo '<title>'.$ro1['siteName'].'</title>';
		echo '<meta name="keywords" content="'.$ro1['siteKeywords'].'"/>';
		echo '<meta name="description" content="'.$ro1['siteDescription'].'"/>';
	}
	$qr=mysql_query("SELECT * FROM template_styles WHERE location=1 AND state=1 ORDER BY id ASC limit 0,1",$link);
	while($ro=mysql_fetch_array($qr))
	{
		echo '<link rel="stylesheet" type="text/css" href="admin/'.$ro['href'].'"/>';	
	}
?>
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