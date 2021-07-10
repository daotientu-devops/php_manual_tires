<?php
if(isset($_GET['readdesid']))
{
	$strSQL5 = "SELECT * FROM lessons_readdes WHERE id='".$_GET['readdesid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: lessons_readdes.php');
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
    <td align="left"><input type="text" name="title" id="title" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['title']; ?>" /> </td>
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
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num1" id="num1" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['num1']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 1: </div></td>
    <td align="left"><input type="file" name="pic1" id="pic1" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['pic1']; ?>" /> </td>
    <td></td>
    <td></td>
    <td><img width="30px" height="40px" border="1px" src="<?php echo $row5['pic1']; ?>" /></td>
    <td></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 1: </div></td>
    <td align="left"><textarea name="des1" id="des1" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['des1']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num2" id="num2" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['num2']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 2: </div></td>
    <td align="left"><input type="file" name="pic2" id="pic2" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['pic2']; ?>" /> </td>
    <td></td>
    <td></td>
    <td><img width="30px" height="40px" border="1px" src="<?php echo $row5['pic2'] ?>"  /></td>
    <td></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 2: </div></td>
    <td align="left"><textarea name="des2" id="des2" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['des2']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num3" id="num3" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['num3']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 3: </div></td>
    <td align="left"><input type="file" name="pic3" id="pic3" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['pic3']; ?>" /> </td>
    <td></td>
    <td></td>
    <td><img width="30px" height="40px" border="1px" src="<?php echo $row5['pic3'] ?>"  /></td>
    <td></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 3: </div></td>
    <td align="left"><textarea name="des3" id="des3" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['des3']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num4" id="num4" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['num4']; ?>"/> </td>
    </tr>
     <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 4: </div></td>
    <td align="left"><input type="file" name="pic4" id="pic4" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['pic4']; ?>" /> </td>
    <td></td>
    <td></td>
    <td><img width="30px" height="40px" border="1px" src="<?php echo $row5['pic4'] ?>"  /></td>
    <td></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 4: </div></td>
    <td align="left"><textarea name="des4" id="des4" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['des4']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num5" id="num5" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['num5']; ?>"/> </td>
    </tr>
     <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 5: </div></td>
    <td align="left"><input type="file" name="pic5" id="pic5" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['pic5']; ?>" /> </td>
    <td></td>
    <td></td>
    <td><img width="30px" height="40px" border="1px" src="<?php echo $row5['pic5'] ?>"  /></td>
    <td></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 5: </div></td>
    <td align="left"><textarea name="des5" id="des5" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['des5']; ?></textarea></td>
    </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đoạn mô tả tương ứng: </div></td>
    <td align="left"><textarea name="description" id="description" class="ckeditor" style="width: 900px; height: 500px;border: 1px solid #790000; color: #790000"><?php echo $row5['description']; ?></textarea></td>
    </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 1: </div></td>
    <td align="left"><input type="text" name="res1" id="res1" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['res1']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 2: </div></td>
    <td align="left"><input type="text" name="res2" id="res2" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['res2']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 3: </div></td>
    <td align="left"><input type="text" name="res3" id="res3" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['res3']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 4: </div></td>
    <td align="left"><input type="text" name="res4" id="res4" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['res4']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 5: </div></td>
    <td align="left"><input type="text" name="res5" id="res5" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['res5']; ?>"/></td>
    </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Ngày tạo:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="date" id="date" value="<?php echo $row5['date']; ?>"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
	</tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nguồn tham khảo: </div></td>
    <td align="left"><input type="text" name="reference" id="reference" style="width: 600px; border: 1px solid #790000;" value="<?php echo $row5['reference']; ?>"/></td>
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
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="lessons_readdes.php"'/>
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
		$save_path="uploaded/lessons_readdes/";
		$pic1 = $_FILES['pic1'];
		$type1 = $_FILES['pic1']['type'];
		
		$pic2 = $_FILES['pic2'];
		$type2 = $_FILES['pic2']['type'];
		
		$pic3 = $_FILES['pic3'];
		$type3 = $_FILES['pic3']['type'];
		
		$pic4 = $_FILES['pic4'];
		$type4 = $_FILES['pic4']['type'];
		
		$pic5 = $_FILES['pic5'];
		$type5 = $_FILES['pic5']['type'];
		
		if(($type1 == 'image/png' || $type1 == 'image/gif' || $type1 == 'image/jpg' || $type1 == 'image/jpeg')
		|| ($type2 == 'image/png' || $type2 == 'image/gif' || $type2 == 'image/jpg' || $type2 == 'image/jpeg')
		|| ($type3 == 'image/png' || $type3 == 'image/gif' || $type3 == 'image/jpg' || $type3 == 'image/jpeg')
		|| ($type4 == 'image/png' || $type4 == 'image/gif' || $type4 == 'image/jpg' || $type4 == 'image/jpeg')
		|| ($type5 == 'image/png' || $type5 == 'image/gif' || $type5 == 'image/jpg' || $type5 == 'image/jpeg')
		)
		{
			move_uploaded_file($pic1['tmp_name'], $save_path.$pic1['name']);
			move_uploaded_file($pic2['tmp_name'], $save_path.$pic2['name']);
			move_uploaded_file($pic3['tmp_name'], $save_path.$pic3['name']);
			move_uploaded_file($pic4['tmp_name'], $save_path.$pic4['name']);
			move_uploaded_file($pic5['tmp_name'], $save_path.$pic5['name']);
		}
		else
		{
		echo 'Bạn không được phép upload loại file này';
		}
		if($pic1['size']>0)
		{
			$sql = "UPDATE lessons_readdes SET title = '".$_POST['title']."',num1 = '".$_POST['num1']."',pic1 = '".$save_path.$pic1['name']."',des1 = '".$_POST['des1']."',num2 = '".$_POST['num2']."',des2 = '".$_POST['des2']."',num3 = '".$_POST['num3']."',des3 = '".$_POST['des3']."',num4 = '".$_POST['num4']."',des4 = '".$_POST['des4']."',num5 = '".$_POST['num5']."',des5 = '".$_POST['des5']."',description = '".$_POST['description']."',res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
		elseif($pic2['size']>0)
		{
			$sql = "UPDATE lessons_readdes SET title = '".$_POST['title']."',num1 = '".$_POST['num1']."',des1 = '".$_POST['des1']."',num2 = '".$_POST['num2']."',pic2 = '".$save_path.$pic2['name']."',des2 = '".$_POST['des2']."',num3 = '".$_POST['num3']."',des3 = '".$_POST['des3']."',num4 = '".$_POST['num4']."',des4 = '".$_POST['des4']."',num5 = '".$_POST['num5']."',des5 = '".$_POST['des5']."',description = '".$_POST['description']."',res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
		elseif($pic3['size']>0)
		{
			$sql = "UPDATE lessons_readdes SET title = '".$_POST['title']."',num1 = '".$_POST['num1']."',des1 = '".$_POST['des1']."',num2 = '".$_POST['num2']."',des2 = '".$_POST['des2']."',num3 = '".$_POST['num3']."',pic3 = '".$save_path.$pic3['name']."',des3 = '".$_POST['des3']."',num4 = '".$_POST['num4']."',des4 = '".$_POST['des4']."',num5 = '".$_POST['num5']."',des5 = '".$_POST['des5']."',description = '".$_POST['description']."',res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
		elseif($pic4['size']>0)
		{
			$sql = "UPDATE lessons_readdes SET title = '".$_POST['title']."',num1 = '".$_POST['num1']."',des1 = '".$_POST['des1']."',num2 = '".$_POST['num2']."',des2 = '".$_POST['des2']."',num3 = '".$_POST['num3']."',des3 = '".$_POST['des3']."',num4 = '".$_POST['num4']."',pic4 = '".$save_path.$pic4['name']."',des4 = '".$_POST['des4']."',num5 = '".$_POST['num5']."',des5 = '".$_POST['des5']."',description = '".$_POST['description']."',res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
		elseif($pic5['size']>0)
		{
			$sql = "UPDATE lessons_readdes SET title = '".$_POST['title']."',num1 = '".$_POST['num1']."',des1 = '".$_POST['des1']."',num2 = '".$_POST['num2']."',des2 = '".$_POST['des2']."',num3 = '".$_POST['num3']."',des3 = '".$_POST['des3']."',num4 = '".$_POST['num4']."',des4 = '".$_POST['des4']."',num5 = '".$_POST['num5']."',pic5 = '".$save_path.$pic5['name']."',des5 = '".$_POST['des5']."',description = '".$_POST['description']."',res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
		elseif($pic1['size']>0 || $pic2['size']>0 || $pic3['size']>0 || $pic4['size']>0 || $pic5['size']>0)
		{
			$sql = "UPDATE lessons_readdes SET title = '".$_POST['title']."',num1 = '".$_POST['num1']."',pic1 = '".$save_path.$pic1['name']."',des1 = '".$_POST['des1']."',num2 = '".$_POST['num2']."',pic2 = '".$save_path.$pic2['name']."',des2 = '".$_POST['des2']."',num3 = '".$_POST['num3']."',pic3 = '".$save_path.$pic3['name']."',des3 = '".$_POST['des3']."',num4 = '".$_POST['num4']."',pic4 = '".$save_path.$pic4['name']."',des4 = '".$_POST['des4']."',num5 = '".$_POST['num5']."',pic5 = '".$save_path.$pic5['name']."',des5 = '".$_POST['des5']."',description = '".$_POST['description']."',res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
		elseif($pic1['size']<=0 || $pic2['size']<=0 || $pic3['size']<=0 || $pic4['size']<=0 || $pic5['size']<=0)
		{
			$sql = "UPDATE lessons_readdes SET title = '".$_POST['title']."',num1 = '".$_POST['num1']."',des1 = '".$_POST['des1']."',num2 = '".$_POST['num2']."',des2 = '".$_POST['des2']."',num3 = '".$_POST['num3']."',des3 = '".$_POST['des3']."',num4 = '".$_POST['num4']."',des4 = '".$_POST['des4']."',num5 = '".$_POST['num5']."',des5 = '".$_POST['des5']."',description = '".$_POST['description']."',res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_readdes.php'); 
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
		}
}
?>