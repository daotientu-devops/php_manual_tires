<?php
session_start();
$link = mysql_connect("localhost","root","")
or die ("Error: Could not connect to MySQL Database.");
mysql_select_db("php1012e_db",$link);
mysql_query("SET NAMES 'utf8'", $link);
if(!isset($_SESSION['logged']))
{
	header('Location: login.php');
}
?>