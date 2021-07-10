<div class="heading">
<div class="title">
&laquo; Các câu hỏi thường gặp
</div>
</div>

<div class="conleft" style="border-bottom: 1px solid #70201f;">
<form action="#" method="get">
<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Tìm theo tên chủ đề:</div> </td>
        <td><input type="text" name="keyword" id="keyword" style="width: 800px; background: #f3f3f3;" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>" placeholder="Tìm kiếm theo từ khoá"/></td>
        <td><input type="submit" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>
       </tr>
</table>
</form>
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
	<th scope="col">Chủ đề</th>
    <th scope="col">Loại dữ liệu</th>
    <th scope="col">Người đặt câu hỏi</th>
    <th scope="col">Thời gian</th>
    <th scope="col">Nội dung góp ý</th>
    <th scope="col">Người trả lời</th>
    <th scope="col">Trạng thái</th>
</tr>
<?php
	$p=20;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;	
	}
	$s=($n-1)*$p;
	$sql1="SELECT * FROM comments";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE title like '%".$_GET['keyword']."%'";
	}
	$result=mysql_query($sql1,$link);
	$n_record=mysql_num_rows($result);
	
	function view_page()
	{
		global $n_record;
		global $p;
		for($i=1;$i<=ceil($n_record/$p);$i++)
		{
			if(isset($_GET['keyword']))
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="reply_comment.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="reply_comment.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="reply_comment.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="reply_comment.php?n='.$i.'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}	
	}
	$sql1.=" ORDER BY id ASC limit $s,$p";
	$result1=mysql_query($sql1,$link);
	$count1=0;
	$time = time();
	while($row1=mysql_fetch_array($result1))
	{
		$count1++;
		echo '<tr>';
		echo '<td>'.$row1['id'].'</td>';
		echo '<td><a href="reply_comment.php?action=view&ansid='.$row1['id'].'">'.$row1['title'].'</a></td>';
		echo '<td>'.$row1['type_data'].'</td>';
		$sql2="SELECT * FROM users WHERE id='".$row1['userid']."'";
		$result2=mysql_query($sql2,$link);
		while($row2=mysql_fetch_array($result2))
		{
			echo '<td>'.$row2['username'].'</td>';
		}
		echo '<td>'.$row1['date'].'</td>';
		//$str = $time - $row1['date'];
		
		//$ts = strtotime($str);
		$latency = $time - $row1['date'];
		//$latency = gmdate("d/m/Y H:i A", $latency + 7*3600);
		
		echo '<td>'.$row1['content'].'</td>';
		echo '<td>'.$row1['respondent'].'</td>';
		echo '<td>';
			if($row1['state']==1)
			{
				echo '<b>Đã trả lời</b>';
			}
			elseif($row1['state']==0)
			{
				echo '<b>Chờ trả lời</b>';
			}
		echo '</td>';
		echo '</tr>';
	}
	view_page();
?>
</table>

</div>
<?php
if (isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'view':
		include('includes/view_answer.php');
		break;
		default:
		header('Location: reply_comment.php');
	}
}
?>
