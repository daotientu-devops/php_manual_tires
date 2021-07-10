<div class="heading">
<div class="title">
Danh mục sản phẩm</div>
</div>
<div class="content">
<ul>
<!--<li><div class="level1icon"></div><a href="#">Lốp ô tô du lịch</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô bridgestone</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô michelin</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô goodyear</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô dunlop</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô chengshin</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô tunggai</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô kumho</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô hankkook</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô firelli</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô falken</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe ô tô sivertone</a></li>
<li class="sep"></li>
<li><div class="level1icon"></div><a href="#">Lốp xe tải</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe tải goodyear</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe tải michelin</a></li>
<li class="sep"></li>
<li><div class="level2icon"></div><a href="#">Lốp xe tải casumina</a></li>
<li class="sep"></li>
<li><div class="level1icon"></div><a href="#">Lốp xe nâng</a></li>
<li class="sep"></li>
<li><div class="level1icon"></div><a href="#">Lốp xe công trình</a></li>
<li class="sep"></li>
-->
<?php
$strSQL1="SELECT * FROM categories WHERE ParentID=0";
$result1=mysql_query($strSQL1,$link);
while($row1=mysql_fetch_array($result1))
{
	echo '<li style="color: #000; font-weight: bold;"><div class="level1icon"></div>'.$row1['name'].'</li>
<li class="sep"></li>';

	$strSQL2="SELECT * FROM categories WHERE ParentID='".$row1['id']."'";
	$result2=mysql_query($strSQL2,$link);
	while($row2=mysql_fetch_array($result2))
	{
		if(isset($_GET['c2id']) && $row2['id']==$_GET['c2id'])
		{
			echo '<li><div class="level2icon"></div><a style="color: #0000ef; font-weight: bold;" href="products.php?c2id='.$row2['id'].'">'.$row2['name'].'</a></li>
<li class="sep"></li>';
			$strSQL3="SELECT * FROM categories WHERE ParentID='".$row2['id']."'";
			$result3=mysql_query($strSQL3,$link);
			while($row3=mysql_fetch_array($result3))
			{		
				if(isset($_GET['c3id']) && $row3['id']==$_GET['c3id'])
				{
					//$_SESSION['c3id']=$_GET['c3id'];
					echo '<li><div class="level3icon"></div><a style="color: #0000ef; font-weight: bold;" href="products.php?c3id='.$row3['id'].'">'.$row3['name'].'</a></li>
<li class="sep"></li>';
				}
				else
				{
					echo '<li><div class="level3icon"></div><a href="products.php?c3id='.$row3['id'].'">'.$row3['name'].'</a></li>
<li class="sep"></li>';
				}
			}		
			
		}		
		else
		{
			echo '<li><div class="level2icon"></div><a href="products.php?c2id='.$row2['id'].'">'.$row2['name'].'</a></li>
<li class="sep"></li>';
		if(isset($_GET['c3id']))
		{
			$strSQL3="SELECT * FROM categories WHERE ParentID='".$row2['id']."'";
			$result3=mysql_query($strSQL3,$link);
			while($row3=mysql_fetch_array($result3))
			{		
				if(isset($_GET['c3id']) && $row3['id']==$_GET['c3id'])
				{
					//$_SESSION['c3id']=$_GET['c3id'];
					echo '<li><div class="level3icon"></div><a style="color: #0000ef; font-weight: bold;" href="products.php?c3id='.$row3['id'].'">'.$row3['name'].'</a></li>
<li class="sep"></li>';
				}
				else
				{
					echo '<li><div class="level3icon"></div><a href="products.php?c3id='.$row3['id'].'">'.$row3['name'].'</a></li>
<li class="sep"></li>';
				}
			}
		}
		
		}
		
	}
}
?>
</ul>
</div>

<div class="header_partner">
<div class="title">
Đối tác công ty
</div>
</div>
<div class="content_partner">
	<?php
	$strSQL="SELECT * FROM ad WHERE position=3 AND priority=1 AND state=1";
	$query=mysql_query($strSQL,$link);
	while($row=mysql_fetch_array($query))
	{
		echo '<a href="'.$row['link'].'"><img src="admin/'.$row['file'].'" alt="'.$row['title'].'" border="0" width="190px" /></a>';
	}
	?>
</div>

<div class="header_webLink">
<div class="title">
Website liên kết</div>
</div>
<div class="content_webLink">
	<?php
	$strSQL="SELECT * FROM ad WHERE position=3 AND priority=2 AND state=1";
	$query=mysql_query($strSQL,$link);
	while($row=mysql_fetch_array($query))
	{
		echo '<a href="'.$row['link'].'"><img src="admin/'.$row['file'].'" alt="'.$row['title'].'" border="0" width="190px" /></a>';
	}
	?>
</div>

<div class="header_visitor">
<div class="title">
Lượt truy cập</div>
</div>
<div class="content_visitor">
	<ul>
    <?php
	/*
	$time_now = time();    // lưu thời gian hiện tại
	$time_out = 60*15; // khoảng thời gian chờ để tính một kết nối mới (tính bằng giây)
	$ip_address = $_SERVER['REMOTE_ADDR'];    // lưu lại IP của kết nối
	
	// kiểm tra xem thời gian hiện tại so với lần truy cập cuối có lớn hơn khoảng thời gian chờ không
		//- nếu không thì thôi
		//- nếu có thì thêm vào như là một kết nối mới
	if(!mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE UNIX_TIMESTAMP('last_visit') + $time_out > $time_now AND ip_address = '".$ip_address."'")))
	{
	mysql_query("INSERT INTO useronline(ip_address, last_visit) VALUES('$ip_address', NOW())");
	$online = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE UNIX_TIMESTAMP('last_visit') + $time_out < $time_now" ));
	// đếm số người ghé thăm trong ngày (từ 0h ngày hôm đó đến thời điểm hiện tại)
	$day = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE DAYOFYEAR(last_visit) = " . (date('z') + 1) . " AND YEAR(last_visit) = " . date('Y')));
	
	// đếm số người ghé thăm trong tuần (từ 0h ngày thứ 2 đến thời điểm hiện tại)
	$week = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE WEEKOFYEAR(last_visit) = " . date('W') . " AND YEAR(last_visit) = " . date('Y')));

	// đếm số người ghé thăm trong tháng
	$month = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE MONTH(last_visit) = " . date('n') . " AND YEAR(last_visit) = " . date('Y')));

	// đếm số người ghé thăm trong năm
	$year = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE YEAR(last_visit) = " . date('Y')));
	
	// đếm tổng số người đã ghé thăm
	$visit = mysql_num_rows(mysql_query("SELECT ip_address FROM useronline"));

	}
	
	echo '<li>Đang trực tuyến: <b>'.$online.'</b></li>';
	echo '<li>Hôm nay: <b>'.$day.'</b></li>';
	echo '<li>Tuần này: <b>'.$week.'</b></li>';
	echo '<li>Tháng này: <b>'.$month.'</b></li>';
	echo '<li>Năm nay: <b>'.$month.'</b></li>';
	echo '<li>Tất cả: <b>'.$visit.'</b></li>';
	*/
	/*
	$time_now = time();	
	$time_out = 60 * 15;//thời gian tính bằng giây
	$ip_address = $_SERVER['REMOTE_ADDR'];//lưu lại địa chỉ ip kết nối
	//kiểm tra xem thời gian hiện tại so với lần truy cập cuối có lớn hơn khoảng thời gian chờ hay không
	//nếu không thì thôi
	//nếu có thì thêm vào như là một lần đếm
	if(!mysql_num_rows(mysql_query("SELECT ip_address FROM useronline WHERE UNIX_TIMESTAMP('last_visit') + $time_out > $time_now AND ip_address = '".$ip_address."'")))
	{
	mysql_query("INSERT INTO useronline(ip_address, last_visit) VALUES('$ip_address', NOW())");
	$online = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE UNIX_TIMESTAMP('last_visit') + $time_out < $time_now" ));
	}
	//đếm số người ghé thăm trong ngày (từ 0h ngày hôm đó đến thời điểm hiện tại)
	$day = mysql_num_rows(mysql_query("SELECT * FROM useronline WHERE last_visit = '".date('Y-m-d H:i:s')."'"));
	//đếm số người ghé thăm trong tuần (từ 0h ngày thứ 2 đến thời điểm hiện tại)
	$week = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE WEEKOFYEAR('last_visit') = " . date('W') . " AND YEAR('last_visit') = " .date('Y')));
	//đếm số người ghé thăm trong tháng
	$month = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE MONTH('last_visit') = " . date('n') . " AND YEAR('last_visit') = " .date('Y')));
	//đếm số người ghé thăm trong năm
	$year = mysql_num_rows(mysql_query("SELECT DISTINCT ip_address FROM useronline WHERE YEAR('last_visit') = " .date('Y')));
	//đếm tổng số người đang truy cập
	$visit = mysql_num_rows(mysql_query("SELECT ip_address FROM useronline"));
	echo '<li>Hiện đang truy cập: '.$online.'</li>';
	echo '<li>Hôm nay truy cập: '.$day.'</li>';
	echo '<li>Tuần này truy cập: '.$week.'</li>';
	echo '<li>Tháng này truy cập: '.$month.'</li>';
	echo '<li>Năm nay: '.$year.'</li>';
	echo '<li>Tổng số lượt truy cập: '.$visit.'</li>';
	*/

/*
$tg=time();

$tgout=3;

$tgnew=$tg - $tgout;

$sql1="insert into useronline(ip_address,last_visit) values('".$_SERVER['REMOTE_ADDR']."','".$tg."')";

$query1=mysql_query($sql1,$link);

$sql2="delete from useronline where last_visit < $tgnew";

$query2=mysql_query($sql2,$link);

$sql3="SELECT COUNT(DISTINCT ip_address) FROM useronline";

$query3=mysql_query($sql3,$link);

$user = mysql_num_rows($query3);

echo "user online :$user";
*/
	$ip_address=$_SERVER['REMOTE_ADDR'];
	if(!isset($_SESSION['session_user']) || $_SESSION['session_user']=='' || $_SESSION['session_user']==NULL)
	{
		$_SESSION['session_user']=md5(time().rand().$ip_address);
		$sql1="INSERT INTO useronline(session_user,ip_address,last_visit) VALUES ('".$_SESSION['session_user']."','".$ip_address."',NOW())";
		$query1=mysql_query($sql1,$link);
	}
	else
	{
		$sql2="SELECT * FROM useronline WHERE session_user='".$_SESSION['session_user']."' AND ip_address='".$ip_address."' AND TIME_TO_SEC(TIMEDIFF(NOW(),last_visit)<=900)";
		$query2=mysql_query($sql2,$link);
		$num2=mysql_num_rows($query2);
		if($num2>0)
		{
			$sql3="UPDATE useronline SET last_visit=NOW() WHERE session_user='".$_SESSION['session_user']."' AND ip_address='".$ip_address."'";
			$query3=mysql_query($sql3,$link);
			
		}
		else
		{
			$_SESSION['session_user']=md5(time().rand().$ip_address);
			$sql4="INSERT INTO useronline(session_user,ip_address,last_visit) VALUES ('".$_SESSION['session_user']."','".$ip_address."',NOW())";
			$query4=mysql_query($sql4,$link);
		}
	}
	$sql5="SELECT * FROM useronline WHERE TIME_TO_SEC(TIMEDIFF(NOW(),last_visit)<=900)";
	$query5=mysql_query($sql5,$link);
	$num5=mysql_num_rows($query5);
	
	$sql6="SELECT * FROM useronline";
	$query6=mysql_query($sql6,$link);
	$num6=mysql_num_rows($query6);
	
	echo '<li>Hiện đang truy cập: <b>'.$num5.'</b></li>';
	echo '<li>Tổng số lượt truy cập: <b>'.$num6.'</b></li>';
	?>

	</ul>
</div>









