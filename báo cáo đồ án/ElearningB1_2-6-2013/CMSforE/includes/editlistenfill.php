<?php
if(isset($_GET['listenfillid']))
{
	$strSQL5 = "SELECT * FROM lessons_listenfill WHERE id='".$_GET['listenfillid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: lessons_listenfill.php');
}
?>
<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">User ID: </div></td>
    <td align="left"><?php echo $row5['userid']; ?></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tiêu đề: </div></td>
    <td align="left"><textarea name="title" id="title" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['title']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục:</div></td>
    <td align="left">
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000; font-family:'Times New Roman', Times, serif">
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
    <?php
	$qr=mysql_query("SELECT * FROM categories WHERE id=".$row5['catid']);
	$ro=mysql_fetch_array($qr);
	?>
    
    </td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Audio:</div></td>
    <td align="left"><input name="audio" id="audio" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    <input type="text" style="width: 400px; border: 1px solid #790000; color: #790000;" value="<?php echo $row5['audio']; ?>"/>
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nội dung bài điền từ: </div></td>
    <td align="left"><textarea name="text" id="text" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['text']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bài dịch: </div></td>
    <td align="left"><textarea name="translate" id="translate" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['translate']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 1: </div></td>
    <td align="left"><input type="text" name="blank1" id="blank1" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank1']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 2: </div></td>
    <td align="left"><input type="text" name="blank2" id="blank2" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank2']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 3: </div></td>
    <td align="left"><input type="text" name="blank3" id="blank3" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank3']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 4: </div></td>
    <td align="left"><input type="text" name="blank4" id="blank4" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank4']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 5: </div></td>
    <td align="left"><input type="text" name="blank5" id="blank5" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank5']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 6: </div></td>
    <td align="left"><input type="text" name="blank6" id="blank6" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank6']; ?>"/> </td>
    </tr> <!--Chỗ này bị thiếu thẻ này-->
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 7: </div></td>
    <td align="left"><input type="text" name="blank7" id="blank7" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank7']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 8: </div></td>
    <td align="left"><input type="text" name="blank8" id="blank8" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank8']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 9: </div></td>
    <td align="left"><input type="text" name="blank9" id="blank9" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank9']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 10: </div></td>
    <td align="left"><input type="text" name="blank10" id="blank10" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['blank10']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Các đáp án khác: </div></td>
    <td align="left"><textarea name="note" id="note" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['note']; ?></textarea></td>
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
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="lessons_listenfill.php"'/>
    </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$save_path="uploaded/lessons_listenfill/"; 
    $file = $_FILES['audio'];
	move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
	////////////////
	if(!isset($_SESSION['logged']))
	{
	header('Location: login.php');
	}
	else
	{
	if($file['size']>0)
	{
		$sql = "UPDATE lessons_listenfill SET title = '".$_POST['title']."',audio = '".$save_path.$file['name']."',text = '".$_POST['text']."',translate = '".$_POST['translate']."',blank1 = '".$_POST['blank1']."',blank2 = '".$_POST['blank2']."',blank3 = '".$_POST['blank3']."',blank4 = '".$_POST['blank4']."',blank5 = '".$_POST['blank5']."',blank6 = '".$_POST['blank6']."',blank7 = '".$_POST['blank7']."',blank8 = '".$_POST['blank8']."',blank9 = '".$_POST['blank9']."',blank10 = '".$_POST['blank10']."',note = '".$_POST['note']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
	}
	else
	{
		$sql = "UPDATE lessons_listenfill SET title = '".$_POST['title']."',text = '".$_POST['text']."',translate = '".$_POST['translate']."',blank1 = '".$_POST['blank1']."',blank2 = '".$_POST['blank2']."',blank3 = '".$_POST['blank3']."',blank4 = '".$_POST['blank4']."',blank5 = '".$_POST['blank5']."',blank6 = '".$_POST['blank6']."',blank7 = '".$_POST['blank7']."',blank8 = '".$_POST['blank8']."',blank9 = '".$_POST['blank9']."',blank10 = '".$_POST['blank10']."',note = '".$_POST['note']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
	}
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_listenfill.php');
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
	}
}
?>