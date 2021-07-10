<div class="heading">
<div class="title">
Danh sách điểm số bài test của học viên</i></div>
</div>
<div class="conleft">
<form action="#" method="get">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Tìm theo ID người dùng:</div> </td>
        <td><input type="text" name="keyword" id="keyword" placeholder="Tìm kiếm theo từ khoá" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="submit" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>     
        </tr>
        </table>
</form>
<table border="0" cellpadding="2" cellspacing="0">
    <tr>
    	<td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">User ID</div></td>
        <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Category ID</div></td>
    	<td style="width: 199px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Ngày test</div></td>
        <td style="width: 199px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm bài đọc</div></td>
        <td style="width: 199px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm bài viết</div></td>
        <td style="width: 199px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm bài nghe</div></td>
        <td style="width: 96px; height: 20px; padding: 4px 0px; background: #70201f;"><div style="font-weight: bold; color: #FFF; text-align: center">Tổng điểm</div></td>
    </tr>
    <?php
		$p=40;
		if(isset($_GET['n']))
		{
			$n=$_GET['n'];
		}
		else
		{
			$n=1;
		}
		$s=($n-1)*$p;
		$sql1="SELECT * FROM score";
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
						echo '<a href="score.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
					}
					else
					{
						echo '<a href="score.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
					}
				}
				else
				{
					if(isset($_GET['n']) && $i==$_GET['n'])
					{
						echo '<a href="score.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
					}
					else
					{
						echo '<a href="score.php?n='.$i.'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
					}
				}
			}	
		}
		$sql1.=" ORDER BY id ASC limit $s,$p";
		$result1=mysql_query($sql1,$link);
		view_page();
		while($row1 = mysql_fetch_array($result1))
		{
			echo '<tr>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 40px;">'.$row1['userid'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 40px;">'.$row1['catid'].'</textarea></div></td>';
			echo '<td style="width: 199px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 193px; height: 40px;">'.$row1['test_date'].'</textarea></div></td>';
			echo '<td style="width: 199px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 193px; height: 40px;">'.$row1['reading_score'].'</textarea></div></td>';
			echo '<td style="width: 199px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 193px; height: 40px;">'.$row1['writing_score'].'</textarea></div></td>';
			echo '<td style="width: 199px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 193px; height: 40px;">'.$row1['listening_score'].'</textarea></div></td>';
			echo '<td style="width: 96px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 90px; height: 40px;">'.$row1['total_score'].'</textarea></div></td>';
			echo '</tr>';
		}
  	?>
    <?php
		echo '<tr>';
		echo '<td><div style="margin-top: 5px;">';
		view_page();
		echo '</div></td>';
		echo '</tr>';
	?>
</table>
</div>