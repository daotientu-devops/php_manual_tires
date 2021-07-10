<div class="heading">
<div class="title">
Viết lại câu giữ nguyên ý</div>
</div>
<div class="conleft">
	<form action="#" method="post">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="height: 20px; padding: 4px 0px; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #000; text-align: left; padding: 0px 4px;">
        <font style="background:#000; color: #FFF; padding: 2px;">Writing</font><br />
        Type 1: Questions 1-5<br />
        -	For each question, complete the second sentences so that it means the same as the first, using no more than three words.<br/>
        -	Write only the missing words on your answer sheet.<br />
        </div></td>
        </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="lessons_writeblank.php?action=new" style="color:#FFF;">Insert a new lesson (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="lessons_writeblank.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
        </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Nhập tên tiêu đề:</div> </td>
        <td><input type="text" name="keyword" id="keyword" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="button" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>
        </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
       	  <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tiêu đề</div></td>
          <td style="width: 499px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Câu nguyên mẫu</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Chỗ trống 1</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Chỗ trống 2</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Chỗ trống 3</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Chỗ trống 4</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Chỗ trống 5</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
			$sql = "SELECT * FROM lessons_writeblank";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['title'].'</textarea></div></td>';
			echo '<td style="width: 499px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 449px; height: 40px;">'.$row['question'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 99px; height: 40px;">'.$row['blank1'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 99px; height: 40px;">'.$row['blank2'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 99px; height: 40px;">'.$row['blank3'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 99px; height: 40px;">'.$row['blank4'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 99px; height: 40px;">'.$row['blank5'].'</textarea></div></td>';
			echo '<td align="right" style="width: 49px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_writeblank.php?action=edit&writeblaid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_writeblank.php?action=delete&writeblaid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
			echo '</tr>';
			}
		?>
        </table>
    </form>
</div>
<?php
//////////////////////////
if(isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('includes/addwritebla.php');
		break;
		case 'edit':
		include('includes/editwritebla.php');
		break;
		case 'delete':
		include('includes/deletewritebla.php');
		break;
		default:
		header('Location: lessons_writeblank.php');
	}
}
?>