<?php
if(isset($_GET['comid']))
{
	$strSQL5 = "SELECT * FROM comments WHERE id='".$_GET['comid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: comments.php');
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
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tài khoản: </div></td>
    <td align="left">
	<?php 
	$sql2 = "SELECT * FROM users WHERE id='".$row5['userid']."'";
	$re2 = mysql_query($sql2, $link);
	$ro2 = mysql_fetch_array($re2);
	echo $ro2['username'];
	?></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tiêu đề góp ý: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="title" id="title" style="width: 600px; border: 1px solid #790000;" value = "<?php echo $row5['title']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Khóa học: <font color="#FF0000">*</font></div></td>
    <td align="left">
    <select name="Category" style="width: 300px; border: 1px solid #790000; color: #790000">
        <option value="0">&hArr;Root&hArr;</option>
        <?php
    $strSQL2 = "SELECT * FROM categories WHERE ParentID = 0";
	$result2 = mysql_query($strSQL2, $link);
	  while($row2 = mysql_fetch_array($result2))
	  {
		  if($row5['lesson_name'] == $row2['id'])
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
				  if($row5['lesson_name'] == $row3['id'])
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
						  if($row5['lesson_name'] == $row4['id'])
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
    <td align="left"><div style="font-weight: bold; color: #790000">Loại dữ liệu: <font color="#FF0000">*</font></div></td>
    <td align="left">
    <input type="radio" name="datatype" value="Giáo trình" <?php if($row5['type_data']=='Giáo trình') echo "checked"; ?>/>Giáo trình
    <input type="radio" name="datatype" value="Audio" <?php if($row5['type_data']=='Audio') echo "checked"; ?>/>Audio
    <input type="radio" name="datatype" value="Video" <?php if($row5['type_data']=='Video') echo "checked"; ?>/>Video bài giảng
    <input type="radio" name="datatype" value="Trắc nghiệm" <?php if($row5['type_data']=='Trắc nghiệm') echo "checked"; ?>/>Câu hỏi trắc nghiệm
    </td>
    
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nội dung góp ý: <font color="#FF0000">*</font></div></td>
    <td align="left"><textarea name="content" id="content" style="width: 600px; height: 200px; border: 1px solid #790000; color: #790000"><?php echo $row5['content']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Email: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="email" id="email" style="width: 400px;border: 1px solid #790000; color: #790000"" value="<?php echo $row5['email']; ?>"/></td>
    </tr>
   	<tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">File:</div></td>
    <td align="left"><input name="file" id="file" type="file"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đường dẫn cũ:</div></td>
    <td><?php echo $row5['file']; ?></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Trả lời góp ý: <font color="#FF0000">*</font></div></td>
    <td align="left"><textarea name="reply" id="reply" style="width: 600px; height: 200px; border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['reply']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Người trả lời: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="respondent" id="respondent" style="width: 400px;border: 1px solid #790000; color: #790000"" value="<?php echo $row5['respondent']; ?>"/></td>
    </tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Ngày trả lời:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="response_time" id="response_time" value="<?php echo $row5['response_time']; ?>"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
	</tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Trạng thái:</div></td>
    <td align = "left">
    <select name="state" style="font-family: 'Times New Roman', Times, serif;">

    <option value="1" <?php if($row5['state']=='1') echo "selected"; ?>>Đã trả lời</option>
    <option value="0" <?php if($row5['state']=='0') echo "selected"; ?>>Chờ trả lời</option>
    </select>
    </td>
	</tr>
    
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Loại báo lỗi: <font color="#FF0000">*</font></div></td>
    <td align = "left">
    <select name="typeID" style="font-family: 'Times New Roman', Times, serif;">

    <option value="1" <?php if($row5['typeID']=='1') echo "selected"; ?>>Báo lỗi tài khoản</option>
    <option value="2" <?php if($row5['typeID']=='2') echo "selected"; ?>>Báo lỗi bài giảng, audio</option>
    </select>
    </td>
	</tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Hoàn tất" style="font-family:'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick="window.location='comments.php'" />
    </td>
    </tr>
    </table>
</form>


<?php
$date = date("YmdHis", time());		//Ymd	: Year month date
	if(isset($_POST['submit']))
	{
		if(!isset($_SESSION['log']))
		{
		header('Location: login.php');
		}
		else
		{
			$save_path="uploaded/comment/"; 
    		$file = $_FILES['file'];
			$type = $_FILES['file']['type'];
			
			if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg' || $type == 'application/msword' || $type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $type == 'application/vnd.ms-excel')
			{
				move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			}
			else
			{
				echo 'Bạn không được phép upload loại file này';
				//move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			}
			if($file['size']>0)
			{
				$sql = "UPDATE comments SET title='".$_POST['title']."',lesson_name='".$_POST['Category']."', type_data='".$_POST['datatype']."', content='".$_POST['content']."',email='".$_POST['email']."',file='".$save_path.$file['name']."',reply='".$_POST['reply']."',resid='".$_SESSION['log']."',respondent='".$_POST['respondent']."',response_time='".$_POST['response_time']."',typeID='".$_POST['typeID']."',state='".$_POST['state']."' WHERE id='".$row5['id']."'";
			}
			else
			{
				$sql = "UPDATE comments SET title='".$_POST['title']."',lesson_name='".$_POST['Category']."', type_data='".$_POST['datatype']."', content='".$_POST['content']."',email='".$_POST['email']."',reply='".$_POST['reply']."',resid='".$_SESSION['log']."',respondent='".$_POST['respondent']."',response_time='".$_POST['response_time']."',typeID='".$_POST['typeID']."',state='".$_POST['state']."' WHERE id='".$row5['id']."'";
			}
				$result = mysql_query($sql, $link);
				if($result)
				{
					header('Location: comments.php');
				}
				else
				{
					echo 'Lỗi thao tác, xin vui lòng thử lại sau';
				}
			
		}
		
	}

?>




</div>