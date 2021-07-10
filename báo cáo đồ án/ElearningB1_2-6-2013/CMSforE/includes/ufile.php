<div class="heading">
<div class="title">
Quản lí file người dùng</div>
</div>
<div class="conleft">
	<form action="#" method="get">
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Nhập ID người dùng:</div> </td>
        <td><input type="text" name="keyword" id="keyword" placeholder="Tìm kiếm theo từ khoá" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>" style="width: 800px; background: #f3f3f3;" placeholder="Tìm kiếm theo từ khoá"/></td>
        <td><input type="submit" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>
       </tr>
    </table>
    </form>
    <table border="0" cellspacing="0" cellpadding="0">
	<tr>
    	<td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ID</div></td>   
       	<td style="width: 65px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">User ID</div></td> 
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Speak Intro ID</div></td>
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Speak Intro File</div></td>
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Speak Topic ID</div></td>
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Speak Topic File</div></td>
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Write Answer ID</div></td>
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Write Answer File</div></td>
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Write Article ID</div></td>
        <td style="width: 109px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Write Article File</div></td>
        <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
    </tr>
    <?php
	//Xây dựng hàm phân trang view_page()
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
	
	//tạo câu truy vấn select all
	$sql1="SELECT * FROM userfile";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE userid like '%".$_GET['keyword']."%'";
	}
	$result=mysql_query($sql1,$link);
	$n_record=mysql_num_rows($result);
	
	//Hàm view_page()
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
					echo '<a href="userfile.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="userfile.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="userfile.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="userfile.php?n='.$i.'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}
	}
	?>
    <?php	//còn thiếu tìm kiếm và phân trang
	$sql1.=" ORDER BY id ASC limit $s,$p";
	$result1=mysql_query($sql1,$link);
	$count1=0;
	
		view_page();
			
		while($row1 = mysql_fetch_array($result1))
			{
			echo '<tr>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row1['id'].'</textarea></div></td>';
			echo '<td style="width: 65px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 59px; height: 40px;">'.$row1['userid'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['speakintid'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['speakintfile'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['speaktopid'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['speaktopfile'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['writeansid'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['writeansfile'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['writeartid'].'</textarea></div></td>';
			echo '<td style="width: 109px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 103px; height: 40px;">'.$row1['writeartfile'].'</textarea></div></td>';
			echo '<td align="right" style="width: 49px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; ">
			<a href="userfile.php?action=edit&ufileid='.$row1['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
			<a href="userfile.php?action=delete&ufileid='.$row1['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		case 'edit':
		include('includes/edituserfile.php');
		break;
		case 'delete':
		include('includes/deleteuserfile.php');
		break;
		default:
		header('Location: userfile.php');
	}
}
?>

    