<div class = "conright">
<ul>
<?php
if(isset($_GET['ansid']))
{
	$strSQL5 = "SELECT * FROM comments WHERE id='".$_GET['ansid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
	if($row5['state']==1)
	{
		$string = 'Đã trả lời';
	}
	elseif($row5['state']==0)
	{
		$string = 'Chờ trả lời';
	}
}
else
{
	header('Location: reply_comment.php');
}
?>
<?php
	$sql="SELECT * FROM users WHERE id='".$row5['userid']."'";
	$re=mysql_query($sql,$link);
	$ro=mysql_fetch_array($re);
	
	echo '<font color="#70201f"><b>'.$ro['name'].' &raquo; Mã chủ đề: '.$row5['id'].' - Người trả lời: '.$row5['respondent'].' | Trạng thái: '.$string.'</b></font>';
	echo '<br/><br/>';
	echo '<img src="CMSforE/'.$ro['avatar'].'" alt="" border="1" width="80px" style="border: 1px solid #ccc;"/>';
	echo '<br/>';
	echo '<font color="#70201f"><b>'.$ro['username'].'</b></font>';
	echo '<br/>';
	echo '<b>'.$ro['name'].'</b>';
	echo '<br/><br/>';
	echo '<font color="#70201f"><b>Chủ đề yêu cầu: '.$row5['title'].'</b></font>';
	echo '<br/>';
	echo $row5['content'];
	echo '<br/><br/>';
	
	echo '<div style="text-align: right;"><font color="#70201f"><b>Hỏi lúc: '.$row5['date'].'</b></font></div>';
?>

</ul>
</div>

<div class="content_answer">
<ul>
<?php
if($row5['state']==0)
{
	echo '';
}
elseif($row5['state']==1)
{
	$sql1="SELECT * FROM users WHERE id='".$row5['resid']."'";
	$re1=mysql_query($sql1,$link);
	$ro1=mysql_fetch_array($re1);
	
	echo '<img src="CMSforE/'.$ro1['avatar'].'" alt="" border="1" width="80px" style="border: 1px solid #ccc;"/>';
	echo '<br/>';
	echo '<font color="#70201f"><b>'.$ro1['username'].'</b></font>';
	echo '<br/>';
	echo '<b>'.$ro1['name'].'</b>';
	echo '<br/><br/>';

	echo '<font color="#70201f"><b>Trả lời: </b></font>';
	echo '<br/>';
	echo $row5['reply'];
	echo '<br/><br/>';
	
	echo '<div style="text-align: right;"><font color="#70201f"><b>Trả lời lúc: '.$row5['response_time'].'</b></font></div>';
}
?>
</ul>
</div>











