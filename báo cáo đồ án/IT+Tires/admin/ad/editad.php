<?php
if(isset($_GET['adid']))
{
	$strSQL = "SELECT * FROM ad WHERE id = '".$_GET['adid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: ad.php');
}
?>

<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa quảng cáo</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tiêu đề quảng cáo (*) :</td>
        <td><input type="text" name="title" id="title" style="width: 600px; border: 1px solid #ccc;" value="<?php echo $row['title']; ?>" /></td>
    </tr>
    <tr>
    	<td>Link liên kết (*) :</td>
        <td><input type="text" name="link" id="link" style="width: 600px; border: 1px solid #ccc;" value="<?php echo $row['link']; ?>" /></td>
    </tr>
    <tr>
    	<td>File Hình ảnh (*) :</td>
        <td>
       		<input type="file" name="file" id="file"/>
        </td>
    </tr>
    <tr>
    	<td></td>
        <td>
         	<img src="<?php echo $row['file']; ?>" alt="<?php echo $row['title']; ?>" border="1" style="border: 1px solid #ccc;"/>
        </td>
    </tr>
    <tr>
    	<td>Độ rộng Banner (*) :</td>
        <td><input type="text" name="width" id="width" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['width']; ?>" /></td>
    </tr>
    <tr>
    	<td>Độ cao Banner (*) :</td>
        <td><input type="text" name="height" id="height" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['height']; ?>" /></td>
    </tr>
    <tr>
    	<td>Vị trí (*) :</td>
        <td>
        <select name="position" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">Chọn vị trí đăng quảng cáo</option>
        <option value="1" <?php if($row['position']==1) echo 'selected'; ?>>Header Banner</option>
        <option value="2" <?php if($row['position']==2) echo 'selected'; ?>>SlideShow Banner</option>
        <option value="3" <?php if($row['position']==3) echo 'selected'; ?>>ColLeft Banner</option>
        <option value="4" <?php if($row['position']==4) echo 'selected'; ?>>Content Banner</option>
        <option value="5" <?php if($row['position']==5) echo 'selected'; ?>>ColRight Banner</option>
        <option value="6" <?php if($row['position']==6) echo 'selected'; ?>>Footer Banner</option>
        <option value="7" <?php if($row['position']==7) echo 'selected'; ?>>Vertical Left Banner</option>
        <option value="8" <?php if($row['position']==8) echo 'selected'; ?>>Vertical Right Banner</option>
        </select>
        </td>
    </tr>

        <tr>
    	<td>Thứ tự phân cấp (*) :</td>
        <td>
        <select name="ordinal" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="0">&hArr; Root &hArr;</option>
        <?php
		$strSQL2="SELECT * FROM ad WHERE ordinal=0";
		$result2=mysql_query($strSQL2,$link);
		while($row2=mysql_fetch_array($result2))
		{
			if($row2['id']==$row['ordinal'])
			{
				echo '<option selected="selected" value="'.$row2['id'].'">'.$row2['title'].'</option>';
			}
			else
			{
				echo '<option value="'.$row2['id'].'">'.$row2['title'].'</option>';
			}
			$strSQL3="SELECT * FROM ad WHERE ordinal='".$row2['id']."'";
			$result3=mysql_query($strSQL3,$link);
			while($row3=mysql_fetch_array($result3))
			{
				echo '<option value="'.$row3['id'].'">&raquo;'.$row3['title'].'</option>';
			}
		}
		?>
        </select>
        </td>
        </tr>

		<tr>
    	<td>Thứ tự ưu tiên (*) :</td>
        <td>
        <select name="priority" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">Chọn số thứ tự ưu tiên</option>
        <?php
		for($p=1;$p<=10;$p++)
		{
			if($row['priority']==$p)
			{
				echo '<option value="'.$p.'" selected="selected">'.$p.'</option>';
			}
			else
			{
				echo '<option value="'.$p.'" >'.$p.'</option>';
			}
		}
		?>
        </select>
        </td>
        </tr>
        
    	<tr>
        <td>Ngày tạo :</td>
        <td>
        <input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['date']; ?>" />
        </td>
        </tr>
        <tr>
        <td>Trạng thái :</td>
        <td>
        <label>
        <input name="state" id="state" type="radio" value="1" checked />Hoạt động
        </label>
        <label>
        <input name="state" id="state" type="radio" value="0" />Khóa
        </label>
        </td>
        </tr>
    	<tr>
        <td></td>
        <td>
        <input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='ad.php'" />
        </td>
        </tr>
    </table>
</form>
</div>
<?php
if (isset($_POST['btnUpdate']))
{
	$save_path="uploaded/ad/";
	$file=$_FILES['file'];
	$type=$_FILES['file']['type'];
	if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
	{
		move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
	}
	else
	{
	echo 'Bạn không được phép upload loại file này';
	}
	if($file['size']>0)
	{
		$strSQL4 = "UPDATE ad SET title='".$_POST['title']."',link='".$_POST['link']."',file='".$save_path.$file['name']."',width='".$_POST['width']."',height='".$_POST['height']."',position='".$_POST['position']."',ordinal='".$_POST['ordinal']."',priority='".$_POST['priority']."',date='".$_POST['date']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";	
	}
	else
	{
		$strSQL4 = "UPDATE ad SET title='".$_POST['title']."',link='".$_POST['link']."',width='".$_POST['width']."',height='".$_POST['height']."',position='".$_POST['position']."',ordinal='".$_POST['ordinal']."',priority='".$_POST['priority']."',date='".$_POST['date']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	}
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: ad.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>
