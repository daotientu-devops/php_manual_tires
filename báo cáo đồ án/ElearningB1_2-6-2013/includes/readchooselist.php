<div class="heading">
<div class="title">
Chọn từ đúng để điền vào chỗ trống</div>
</div>
<div class="conleft">
	<form action="#" method="post">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="height: 20px; padding: 4px 0px; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #000; text-align: left; padding: 0px 4px;">
        Type 5: Questions 26-35<br />
        -	Read the text below and choose the correct word for each space.<br/>
        -	For each question, mark the letter next to the correct word - A,B,C or D - on your answer sheet.<br/>
        </div></td>
        </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="lessons_readchoose.php?action=new" style="color:#FFF;">Insert a new lesson (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="lessons_readchoose.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
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
       	  <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tiêu đề</div></td>
          <td style="width: 300px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nội dung còn trống</div></td>
          <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nội dung lựa chọn</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C1</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C2</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C3</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C4</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C5</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C6</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C7</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C8</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C9</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">C10</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
			$sql = "SELECT * FROM lessons_readchoose";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['title'].'</textarea></div></td>';
			echo '<td style="width: 298px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 268px; height: 40px;">'.$row['text'].'</textarea></div></td>';
			echo '<td style="width: 198px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 194px; height: 40px;">'.$row['content_choose'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose1'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose2'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose3'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose4'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose5'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose6'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose7'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose8'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose9'].'</textarea></div></td>';
			echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['choose10'].'</textarea></div></td>';
			echo '<td align="right" style="width: 48px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_readchoose.php?action=edit&readchoid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_readchoose.php?action=delete&readchoid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		include('includes/addreadcho.php');
		break;
		case 'edit':
		include('includes/editreadcho.php');
		break;
		case 'delete':
		include('includes/deletereadcho.php');
		break;
		default:
		header('Location: lessons_readchoose.php');
	}
}
?>