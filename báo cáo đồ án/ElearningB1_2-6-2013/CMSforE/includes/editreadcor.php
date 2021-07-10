<?php
if(isset($_GET['readcorid']))
{
	$strSQL5 = "SELECT * FROM lessons_readcor WHERE id='".$_GET['readcorid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: lessons_readcor.php');
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
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif">
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
    <td align="right"><div style="font-weight: bold; color: #790000">Đoạn văn: </div></td>
    <td align="left"><textarea name="paragraph" id="paragraph" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['paragraph']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Mẫu câu: </div></td>
    <td align="left"><textarea name="sentences" id="sentences" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['sentences']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 1: </div></td>
    <td align="left"><input type="text" name="cor1" id="cor1" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor1']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 2: </div></td>
    <td align="left"><input type="text" name="cor2" id="cor2" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor2']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 3: </div></td>
    <td align="left"><input type="text" name="cor3" id="cor3" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor3']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 4: </div></td>
    <td align="left"><input type="text" name="cor4" id="cor4" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor4']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 5: </div></td>
    <td align="left"><input type="text" name="cor5" id="cor5" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor5']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 6: </div></td>
    <td align="left"><input type="text" name="cor6" id="cor6" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor6']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 7: </div></td>
    <td align="left"><input type="text" name="cor7" id="cor7" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor7']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 8: </div></td>
    <td align="left"><input type="text" name="cor8" id="cor8" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor8']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 9: </div></td>
    <td align="left"><input type="text" name="cor9" id="cor9" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor9']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án câu 10: </div></td>
    <td align="left"><input type="text" name="cor10" id="cor10" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['cor10']; ?>"/> </td>
    </tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Ngày tạo:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="date" id="date" value="<?php echo $row5['date']; ?>"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
	</tr>
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
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="lessons_readcor.php"'/>
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
	$sql = "UPDATE lessons_readcor SET title = '".$_POST['title']."',paragraph = '".$_POST['paragraph']."',sentences = '".$_POST['sentences']."',cor1 = '".$_POST['cor1']."',cor2 = '".$_POST['cor2']."',cor3 = '".$_POST['cor3']."',cor4 = '".$_POST['cor4']."',cor5 = '".$_POST['cor5']."',cor6 = '".$_POST['cor6']."',cor7 = '".$_POST['cor7']."',cor8 = '".$_POST['cor8']."',cor9 = '".$_POST['cor9']."',cor10 = '".$_POST['cor10']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_readcor.php');
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
	}
}
?>