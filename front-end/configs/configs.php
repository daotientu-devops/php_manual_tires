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
	header('Location: siteOffline.php');
}
require 'model/model.php';
ob_start();
?>