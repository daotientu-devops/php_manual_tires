<?php
	
?>

<div class="heading">Danh mục quản lý các khóa học</div>
<div class="content">
<ul>
<li class="subicon"></li>
<li style="color: #141d70"><b>Luyện kĩ năng nghe</b></li>
<li class="sep"></li>

<li class="subicon"></li>
<li style="color: #141d70"><b>Luyện kĩ năng nói</b></li>
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'speakintro'";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="sep"></li>';
		if(isset($_GET['speakintid']) && $row['id'] == $_GET['speakintid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_speakintcatlist.php?speakintid='.$row['id'].'">0'.$sort.'. '.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_speakintcatlist.php?speakintid='.$row['id'].'">0'.$sort.'. '.$row['name'].'</a></li>';
		}
	}
?>
<li class="sep"></li>
<li class="subicon"></li>
<li style="color: #141d70"><b>Luyện kĩ năng đọc</b></li>
<!--<li class="sep"></li>
<li><a href="#">01. Luyện đọc biển quảng cáo, báo hiệu</a></li>
<li class="sep"></li>
<li><a href="#">02. Luyện đọc một đoạn mô tả ngắn</a></li>
<li class="sep"></li>
<li><a href="#">03. Luyện đọc kiểm tra đáp án</a></li>
<li class="sep"></li>
<li><a href="#">04. Luyện đọc trả lời câu hỏi</a></li>
<li class="sep"></li>
<li><a href="#">05. Luyện đọc điền từ vào chỗ trống</a></li>-->
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'readad'";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="sep"></li>';
		if(isset($_GET['readadid']) && $row['id'] == $_GET['readadid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readadcatlist.php?readadid='.$row['id'].'">0'.$sort.'. '.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readadcatlist.php?readadid='.$row['id'].'">0'.$sort.'. '.$row['name'].'</a></li>';
		}
	}
?>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'readtest'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=1;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		echo '<li class="sep"></li>';
		if(isset($_GET['readtestid']) && $row1['id'] == $_GET['readtestid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readtestcatlist.php?readtestid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readtestcatlist.php?readtestid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'readdes'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=2;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		
		if(isset($_GET['readdesid']) && $row1['id'] == $_GET['readdesid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readdescatlist.php?readdesid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readdescatlist.php?readdesid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'readcor'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=3;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		
		if(isset($_GET['readcorid']) && $row1['id'] == $_GET['readcorid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readcorcatlist.php?readcorid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readcorcatlist.php?readcorid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'readanswer'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=4;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		
		if(isset($_GET['readansid']) && $row1['id'] == $_GET['readansid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readanscatlist.php?readansid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readanscatlist.php?readansid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'readchoose'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=5;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		
		if(isset($_GET['readchoid']) && $row1['id'] == $_GET['readchoid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readchocatlist.php?readchoid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readchocatlist.php?readchoid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
<li class="subicon"></li>
<li style="color: #141d70"><b>Luyện kĩ năng viết</b></li>
<li class="sep"></li>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'writearticle'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=0;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		
		if(isset($_GET['writeartid']) && $row1['id'] == $_GET['writeartid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_writeartcatlist.php?writeartid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_writeartcatlist.php?writeartid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'writeanswer'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=1;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		
		if(isset($_GET['writeansid']) && $row1['id'] == $_GET['writeansid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_writeanscatlist.php?writeansid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_writeanscatlist.php?writeansid='.$row1['id'].'">0'.$sort.'. '.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>

</ul>

</div>