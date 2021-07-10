<?php
session_start();
$link = mysql_connect("localhost","root","")
or die ("Error: Could not connect to MySQL Database.");
mysql_select_db("test_moodle",$link);
ob_start();
?>