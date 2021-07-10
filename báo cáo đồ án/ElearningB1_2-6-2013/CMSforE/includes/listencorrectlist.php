<div class="heading">
<div class="title">
Nghe một đoạn hội thoại để chọn Đúng / Sai <i>(theo chuẩn đề thi: 5 câu)</i></div>
</div>
<div class="conleft">

    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="height: 20px; padding: 4px 0px; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #000; text-align: left; padding: 0px 4px;">
        Part 4: Questions 20-25(24)<br />

        </div></td>
        </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="lessons_listencorrect.php?action=new" style="color:#FFF;">Insert a new lesson (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="lessons_listencorrect.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
       </tr>
   	</table>
    <form action="#" method="get">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Tìm theo tên tiêu đề:</div> </td>
        <td><input type="text" name="keyword" id="keyword" placeholder="Tìm kiếm theo từ khoá" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="submit" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>     
        </tr>
        </table>
    </form>
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
       	  <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tên tiêu đề</div></td>          
          <td style="width: 299px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đoạn hội thoại (Audio)</div></td>
          <td style="width: 299px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Mẫu câu</div></td>
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đ.A 1</div></td>
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đ.A 2</div></td>
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đ.A 3</div></td>
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đ.A 4</div></td>
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đ.A 5</div></td>
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đ.A 6</div></td>
          <td style="width: 96px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
         </tr>
    	<?php	//còn thiếu tìm kiếm và phân trang
		$p=20;//Số bản ghi trên một trang
		//kiểm tra biến n trên trình duyệt
		if(isset($_GET['n']))
		{
			$n=$_GET['n'];
		}
		else
		{
			$n=1;
		}
		$s=($n-1)*$p;//lấy số thứ tự bản ghi đầu tiên của trang
		
		if(isset($_SESSION['log']))
		{
			$strSQL="SELECT * FROM users WHERE id='".$_SESSION['log']."'";
			$query=mysql_query($strSQL,$link);
			while($row=mysql_fetch_array($query))
			{
				if($row['RoleID']=='Teacher')
				{
					$sql1 = "SELECT * FROM lessons_listencor WHERE userid='".$row['id']."'";
				}
				elseif($row['RoleID']=='Admin')
				{
					$sql1 = "SELECT * FROM lessons_listencor WHERE state=0 OR state=1";
				}
			}
		}
		else
		{
			header('Location: login.php');
		}
		//tạo câu truy vấn select all
			
		if(isset($_GET['keyword']))
		{
			$sql1.=" AND title like '%".$_GET['keyword']."%'";
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
					echo '<a href="lessons_listencorrect.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="lessons_listencorrect.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="lessons_listencorrect.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="lessons_listencorrect.php?n='.$i.'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}	
	}
	
		$sql1.=" ORDER BY id ASC limit $s,$p";
		$result1=mysql_query($sql1,$link);
		$count1=0;
		view_page();
		while($row1 = mysql_fetch_array($result1))
			{
			echo '<tr>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 40px;">'.$row1['title'].'</textarea></div></td>';
			echo '<td style="width: 299px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 293px; height: 40px;">'.$row1['audio'].'</textarea></div></td>';
			echo '<td style="width: 299px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 293px; height: 40px;">'.$row1['sentences'].'</textarea></div></td>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row1['cor1'].'</textarea></div></td>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row1['cor2'].'</textarea></div></td>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row1['cor3'].'</textarea></div></td>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row1['cor4'].'</textarea></div></td>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row1['cor5'].'</textarea></div></td>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row1['cor6'].'</textarea></div></td>';
			echo '<td align="right" style="width: 96px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_listencorrect.php?action=edit&listencorid='.$row1['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_listencorrect.php?action=delete&listencorid='.$row1['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
<?php
//////////////////////////
if(isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('includes/addlistencor.php');
		break;
		case 'edit':
		include('includes/editlistencor.php');
		break;
		case 'delete':
		include('includes/deletelistencor.php');
		break;
		default:
		header('Location: lessons_listencorrect.php');
	}
}
?>