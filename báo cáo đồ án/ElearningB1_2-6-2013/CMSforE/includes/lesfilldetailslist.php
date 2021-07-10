<div class="lesdetails">

<ul>
<?php
if(isset($_GET['lesdetail']))
{
echo '<b><font color="#000099">Bài tập</font></b><br/>';
$sql = "SELECT * FROM lessons_fill WHERE id = '".$_GET['lesdetail']."'";
$result = mysql_query($sql, $link);
$i = 1;
$row = mysql_fetch_array($result);
}

	echo '<li>';
	echo $row['title'].'<br/><br/>';
	echo'
	Trình duyệt của bạn nếu chưa hỗ trợ hiển thị file âm thanh.Để nghe, vui lòng <a href="'.$row['audio'].'">download</a> file mp3 vào máy tính của bạn.
		';
	echo '<audio controls width="300px" height="60px">
	<source src="'.$row['audio'].'">
	<embed height="60px" width="300px" src="'.$row['audio'].'">
	
	</audio>';
	echo '<br/><br/>';
	echo $row['question'];
	echo '<br/><br/>';
	if($row['blank3']=='')
	{
		$row['blank3'] = 'null';
	}
	if($row['blank4']=='')
	{
		$row['blank4'] = 'null';
	}
	if($row['blank5']=='')
	{
		$row['blank5'] = 'null';
	}
	echo '1) '.$row['blank1'].'<br/>'.'2) '.$row['blank2'].'<br/>'.'3) '.$row['blank3'].'<br/>'.'4) '.$row['blank4'].'<br/>'.'5) '.$row['blank5'];
	echo '</li>';

?>
</ul>
</div>