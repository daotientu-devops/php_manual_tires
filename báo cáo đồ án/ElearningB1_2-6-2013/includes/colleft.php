<?php
	
?>

<div class="heading">Danh mục quản lý các bài học</div>
<div class="content">
<ul>
<li class="subicon"></li>
<li style="color: #141d70"><b>Luyện kĩ năng nghe</b></li>
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'listenchoose'";
	$result = mysql_query($strSQL, $link);
	$sort=2;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['listenchoid']) && $row['id'] == $_GET['listenchoid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_listenchocatlist.php?listenchoid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_listenchocatlist.php?listenchoid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
	}
?>
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'listencor'";
	$result = mysql_query($strSQL, $link);
	$sort=2;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['listencorid']) && $row['id'] == $_GET['listencorid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_listencorcatlist.php?listencorid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_listencorcatlist.php?listencorid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
	}
?>
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'listendialog'";
	$result = mysql_query($strSQL, $link);
	$sort=2;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['listendiaid']) && $row['id'] == $_GET['listendiaid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_listendiacatlist.php?listendiaid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_listendiacatlist.php?listendiaid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
	}
?>
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'listenfill'";
	$result = mysql_query($strSQL, $link);
	$sort=3;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['listenfillid']) && $row['id'] == $_GET['listenfillid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_listenfillcatlist.php?listenfillid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_listenfillcatlist.php?listenfillid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
	}
?>
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
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['speakintid']) && $row['id'] == $_GET['speakintid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_speakintcatlist.php?speakintid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_speakintcatlist.php?speakintid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
	}
?>
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'speaktopic'";
	$result = mysql_query($strSQL, $link);
	$sort=1;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['speaktopid']) && $row['id'] == $_GET['speaktopid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_speaktopcatlist.php?speaktopid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_speaktopcatlist.php?speaktopid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
	}
?>
<?php
	$strSQL = "SELECT * FROM categories WHERE control = 'speaksentence'";
	$result = mysql_query($strSQL, $link);
	$sort=2;
	while($row = mysql_fetch_array($result))
	{
		$sort++;
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['speaksenid']) && $row['id'] == $_GET['speaksenid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_speaksencatlist.php?speaksenid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_speaksencatlist.php?speaksenid='.$row['id'].'">'.$row['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['readadid']) && $row['id'] == $_GET['readadid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readadcatlist.php?readadid='.$row['id'].'">'.$row['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readadcatlist.php?readadid='.$row['id'].'">'.$row['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		echo '<li class="sep"></li>';
		if(isset($_GET['readtestid']) && $row1['id'] == $_GET['readtestid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readtestcatlist.php?readtestid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readtestcatlist.php?readtestid='.$row1['id'].'">'.$row1['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		if(isset($_GET['readdesid']) && $row1['id'] == $_GET['readdesid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readdescatlist.php?readdesid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readdescatlist.php?readdesid='.$row1['id'].'">'.$row1['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		if(isset($_GET['readcorid']) && $row1['id'] == $_GET['readcorid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readcorcatlist.php?readcorid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readcorcatlist.php?readcorid='.$row1['id'].'">'.$row1['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		if(isset($_GET['readansid']) && $row1['id'] == $_GET['readansid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readanscatlist.php?readansid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readanscatlist.php?readansid='.$row1['id'].'">'.$row1['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		if(isset($_GET['readchoid']) && $row1['id'] == $_GET['readchoid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_readchocatlist.php?readchoid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_readchocatlist.php?readchoid='.$row1['id'].'">'.$row1['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		if(isset($_GET['writeartid']) && $row1['id'] == $_GET['writeartid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_writeartcatlist.php?writeartid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_writeartcatlist.php?writeartid='.$row1['id'].'">'.$row1['name'].'</a></li>';
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
		echo '<li class="menuItemicon"></li>';
		if(isset($_GET['writeansid']) && $row1['id'] == $_GET['writeansid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_writeanscatlist.php?writeansid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_writeanscatlist.php?writeansid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
<?php
	$strSQL1 = "SELECT * FROM categories WHERE control = 'writeblank'";
	$result1 = mysql_query($strSQL1, $link);
	$sort=1;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		echo '<li class="menuItemicon"></li>';
		if(isset($_GET['writeblaid']) && $row1['id'] == $_GET['writeblaid'])
		{
			echo '<li><a style="font-weight: bold;" href="view_writeblacatlist.php?writeblaid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
		else
		{
			echo '<li><a href="view_writeblacatlist.php?writeblaid='.$row1['id'].'">'.$row1['name'].'</a></li>';
		}
	}
	echo '<li class="sep"></li>';
?>
</ul>
</div>

<div class="statistic">
<div class="title">Thống kê</div>
	<div class="content">
    <ul>
    <?php
	$tg=time();
	$tgout=900;
	$tgnew=$tg-$tgout;
	if(isset($_SESSION['logUser']))
	{
		$sql="INSERT INTO useronline(userid,ip_address,last_visit) VALUES ('".$_SESSION['logUser']."','".$_SERVER['REMOTE_ADDR']."','$tg')";
	}
	else
	{
		$sql="INSERT INTO useronline(ip_address,last_visit) VALUES ('".$_SERVER['REMOTE_ADDR']."','$tg')";
	}
	$query=mysql_query($sql,$link);
	$sql2="DELETE FROM useronline WHERE last_visit < ".$tgnew;
	$query2=mysql_query($sql2,$link);
	$sql3="SELECT COUNT(DISTINCT ip_address) FROM useronline";
	$query3=mysql_query($sql3,$link);
	
		$numberonline=mysql_num_rows($query3);
		
	$sql4="SELECT * FROM users";
	$query4=mysql_query($sql4,$link);
	$totalNumber=mysql_num_rows($query4);
	
	$sql5="SELECT * FROM users WHERE RoleID='Admin'";
	$query5=mysql_query($sql5,$link);
	$admin=mysql_num_rows($query5);
	
	$sql6="SELECT * FROM users WHERE RoleID='Student'";
	$query6=mysql_query($sql6,$link);
	$student=mysql_num_rows($query6);
	
	$sql7="SELECT * FROM users ORDER BY id DESC LIMIT 0,1";
	$query7=mysql_query($sql7,$link);
	$newMember=mysql_fetch_array($query7);
	
	echo '<li><b>Tổng số thành viên:</b><font style="color: #225486;"> '.$totalNumber.' người</font></li>';
    echo '<li><b>Quản trị viên:</b><font style="color: #225486;"> '.$admin .' người</font></li>';
    echo '<li><b>Học viên:</b><font style="color: #225486;"> '.$student.' người</font></li>';
    echo '<li><b>Thành viên mới nhất:</b><font style="color: #225486;"> '.$newMember['username'].'</font></li>';
    echo '<li><b>Đang trực tuyến:</b><font style="color: #225486;"> '.$numberonline.' người</font></li>';
	?>
    </ul>
    </div>
</div>
