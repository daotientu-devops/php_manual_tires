<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$link = mysql_connect("localhost","root","")
or die ("Error: Could not connect to MySQL Database.");
mysql_select_db("php1012e_db",$link);
mysql_query("SET NAMES 'utf8'", $link);

$sql="SELECT * FROM configs";
$query=mysql_query($sql,$link);
$row=mysql_fetch_array($query);
if($row['siteOffline']==0)
{
	echo '<div style="clear: both; width: 100%; font-weight: bold; text-align: center; margin-top: 10px;">'.$row['offlineMessage'].'</div>';	
	echo '<div style="clear: both; width: 100%; text-align: center; margin-top: 10px;"><img src="admin/'.$row['offlineImage'].'" alt="" border="0"/></div>';
}
else
{
	header('Location: index.php');	
}
?>