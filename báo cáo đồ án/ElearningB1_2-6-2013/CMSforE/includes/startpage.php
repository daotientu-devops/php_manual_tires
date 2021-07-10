
<div class="left">Hệ thống quản trị nội dung dành cho Website học tiếng Anh (CMS for E-Learning)</div>
<div class="right">
<ul>
<li>
<?php
if(isset($_SESSION['log']))
{
	echo '<a href= "personal.php?perid='.$_SESSION['log'].'">Hồ sơ cá nhân của bạn, '.$_SESSION['logged'].'</a>';
}
?>
</li>
<!--<li><a href="news.php">Tin tức</a></li>
<li><a href="support.php">Hỗ trợ</a></li>-->
</ul>
</div>