<?php
ob_start();
session_start();
$link = mysql_connect("localhost","root","daotientu2801")
or die ("Error: Could not connect to MySQL Database.");
mysql_select_db("php1012e_db",$link);
mysql_query("SET NAMES 'utf8'", $link);
if(!isset($_SESSION['id']))
{
	header('Location: login.php');
}
?>