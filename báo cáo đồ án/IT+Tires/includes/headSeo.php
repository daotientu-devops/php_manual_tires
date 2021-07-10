<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(isset($_GET['c2id']))
{
	$qr1=mysql_query("SELECT * FROM categories WHERE id='".$_GET['c2id']."' ORDER BY id ASC limit 0,1",$link);
	while($ro1=mysql_fetch_array($qr1))
	{
		echo '<title>'.$ro1['title'].'</title>';
		echo '<meta name="keywords" content="'.$ro1['keyword'].'"/>';
		echo '<meta name="description" content="'.$ro1['description'].'"/>';
	}
}
if(isset($_GET['c3id']))
{
	$qr2=mysql_query("SELECT * FROM categories WHERE id='".$_GET['c3id']."' ORDER BY id ASC limit 0,1",$link);
	while($ro2=mysql_fetch_array($qr2))
	{
		echo '<title>'.$ro2['title'].'</title>';
		echo '<meta name="keywords" content="'.$ro2['keyword'].'"/>';
		echo '<meta name="description" content="'.$ro2['description'].'"/>';
	}
}
if(isset($_GET['pid']))
{
	$qr3=mysql_query("SELECT * FROM products WHERE id='".$_GET['pid']."' ORDER BY id ASC limit 0,1",$link);
	while($ro3=mysql_fetch_array($qr3))
	{
		echo '<title>'.$ro3['title'].'</title>';
		echo '<meta name="keywords" content="'.$ro3['keyword'].'"/>';
		echo '<meta name="description" content="'.$ro3['description'].'"/>';
	}
}
if(isset($_GET['nid']))
{
	$qr4=mysql_query("SELECT * FROM news WHERE id='".$_GET['nid']."' ORDER BY id ASC limit 0,1",$link);
	while($ro4=mysql_fetch_array($qr4))
	{
		echo '<title>'.$ro4['title'].'</title>';
		echo '<meta name="keywords" content="'.$ro4['keyword'].'"/>';
		echo '<meta name="description" content="'.$ro4['description'].'"/>';
	}
}
	$qr=mysql_query("SELECT * FROM template_styles WHERE location=1 AND state=1 ORDER BY id ASC limit 0,1",$link);
	while($ro=mysql_fetch_array($qr))
	{
		echo '<link rel="stylesheet" type="text/css" href="admin/'.$ro['href'].'"/>';	
	}
?>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
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