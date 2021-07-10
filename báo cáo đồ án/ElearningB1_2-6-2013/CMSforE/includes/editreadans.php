<?php
if(isset($_GET['readansid']))
{
	$strSQL5 = "SELECT * FROM lessons_readanswer WHERE id='".$_GET['readansid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: lessons_readanswer.php');
}
?>
<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data" name="addcomleft" id="addcomleft">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">User ID: </div></td>
    <td align="left"><?php echo $row5['userid']; ?></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tiêu đề: </div></td>
    <td align="left"><input type="text" name="title" id="title" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['title']; ?>"/> </td>
    </tr>
   <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục:</div></td>
    <td align="left">
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000">
    <option value="0">== Select ==</option>
    <?php
      $strSQL2 = "SELECT * FROM categories WHERE ParentID = 0";
	  $result2 = mysql_query($strSQL2, $link);
	  while($row2 = mysql_fetch_array($result2))
	  {
		  if($row5['catid'] == $row2['id'])
		  {
			  echo '<option selected="selected" value="'.$row2['id'].'">'.$row2['name'].'</option>';
		  }
		  else
		  {
			  echo '<option value="'.$row2['id'].'">'.$row2['name'].'</option>';
			  $strSQL3 = "SELECT * FROM categories WHERE ParentID='".$row2['id']."'";
			  $result3 = mysql_query($strSQL3, $link);
			  while($row3 = mysql_fetch_array($result3))
			  {
				  if($row5['catid'] == $row3['id'])
				  {
					  echo '<option selected="selected" value="'.$row3['id'].'">==='.$row3['name'].'</option>';
				  }
				  else
				  {
					  echo '<option value="'.$row3['id'].'">==='.$row3['name'].'</option>';
					  $strSQL4 = "SELECT * FROM categories WHERE ParentID='".$row3['id']."'";
					  $result4 = mysql_query($strSQL4, $link);
					  while($row4 = mysql_fetch_array($result4))
					  {
						  if($row5['catid'] == $row4['id'])
						  {
							  echo '<option selected="selected" value="'.$row4['id'].'">==='.$row4['name'].'</option>';
						  }
						  else
						  {
							  echo '<option value="'.$row4['id'].'">======'.$row4['name'].'</option>';
							  
						  }
					  }
				  }
			  }
		  }
	  }
	 ?>
    </select>
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Văn bản: </div></td>
    <td align="left"><textarea name="text" id="text" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['text']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Các câu hỏi: </div></td>
    <td align="left"><textarea name="content_question" id="content_question" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['content_question']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Trả lời 1: </div></td>
    <td align="left"><input type="text" name="answer1" id="answer1" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['answer1']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Trả lời 2: </div></td>
    <td align="left"><input type="text" name="answer2" id="answer2" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['answer2']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Trả lời 3: </div></td>
    <td align="left"><input type="text" name="answer3" id="answer3" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['answer3']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Trả lời 4: </div></td>
    <td align="left"><input type="text" name="answer4" id="answer4" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['answer4']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Trả lời 5: </div></td>
    <td align="left"><input type="text" name="answer5" id="answer5" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['answer5']; ?>"/> </td>
    </tr>
    <td align = "right"><div style="font-weight:bold; color: #790000">Ngày tạo:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="date" id="date" value="<?php echo $row5['date']; ?>"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nguồn tham khảo: </div></td>
    <td align="left"><input type="text" name="reference" id="reference" style="width: 600px; border: 1px solid #790000;" value="<?php echo $row5['reference']; ?>"/> </td>
    </tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Trạng thái:</div></td>
    <td align = "left">
    <select name="state" style="font-family: 'Times New Roman', Times, serif;">
    <option value="1" <?php if($row5['state']==1) echo 'selected';?>>Hiện</option>
    <option value="0" <?php if($row5['state']==0) echo 'selected';?>>Ẩn</option>
    </select>
    </td>
	</tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Xác nhận" style="font-family:'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="lessons_readanswer.php"'/>
    </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	////////////////
	if(!isset($_SESSION['logged']))
	{
	header('Location: login.php');
	}
	else
	{
	$sql = "UPDATE lessons_readanswer SET title = '".$_POST['title']."',text = '".$_POST['text']."',content_question = '".$_POST['content_question']."',answer1 = '".$_POST['answer1']."',answer2 = '".$_POST['answer2']."',answer3 = '".$_POST['answer3']."',answer4 = '".$_POST['answer4']."',answer5 = '".$_POST['answer5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_readanswer.php');
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
	}
}
?>