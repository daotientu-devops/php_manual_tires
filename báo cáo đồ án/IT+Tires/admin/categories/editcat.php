<?php
if(isset($_GET['catid']))
{
	$strSQL = "SELECT * FROM categories WHERE id ='".$_GET['catid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: categories.php');
}
?>

<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa danh mục</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tên danh mục (*) :</td>
        <td><input type="text" name="name" id="name" style="width: 600px; border: 1px solid #ccc;" value="<?php echo $row['name']; ?>" /></td>
    </tr>
    <tr>
    	<td>Nút đa cấp (*) :</td>
        <td>
        <select name="ParentID" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="0">&hArr;Root&hArr;</option>
        <?php
        $strSQL2 = "SELECT * FROM categories WHERE ParentID = 0";
		$result2 = mysql_query($strSQL2, $link);
		while($row2 = mysql_fetch_array($result2))
		{
		if($row2['id']==$row['ParentID'])
		{
			echo '<option selected="selected" value="'.$row2['id'].'">'.$row2['name'].'</option>';
		}
		else
		{
			echo '<option value="'.$row2['id'].'">'.$row2['name'].'</option>';
		}
		$strSQL3 = "SELECT * FROM categories WHERE ParentID ='".$row2['id']."'";
		$result3 = mysql_query($strSQL3, $link);
		while($row3 = mysql_fetch_array($result3))
		{
			if($row3['id']==$row['ParentID'])
			{
				echo '<option selected="selected" value="'.$row3['id'].'">'.$row3['name'].'</option>';
			}
			else
			{
				echo '<option value="'.$row3['id'].'">---&gt;'.$row3['name'].'</option>';
			}
		}
		}
        ?>
    	</select>
        </td>
    </tr>
    <tr>
    	<td>Title (*) :</td>
        <td>
        <textarea name="title" id="title" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['title']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Keywords (*) :</td>
        <td>
        <textarea name="keyword" id="keyword" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['keyword']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Description (*) :</td>
        <td>
        <textarea name="description" id="description" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['description']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Logo đại diện :</td>
        <td><input type="file" name="logo" id="logo"/>
        <input type="text" style="width: 300px; border: 1px solid #ccc;" value="<?php echo $row['logo']; ?>" />
        </td>
    </tr>
    <tr>
    	<td>Vị trí (*) :</td>
        <td>
        <select name="position" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">Chọn vị trí hiện danh mục</option>
        <option value="1">Startpage</option>
        <option value="2">Header</option>
        <option value="3">ColLeft</option>
        <option value="4">Content</option>
        <option value="5">ColRight</option>
        <option value="6">Footer</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td>Thứ tự sắp xếp (*) :</td>
        <td>
        <select name="sort" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">Chọn số thứ tự để sắp xếp</option>
        <?php
		for($s=1;$s<=100;$s++)
		{
			echo '<option value="'.$s.'">'.$s.'</option>';
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
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='categories.php'" />
        </td>
        </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnUpdate']))
{
	$save_path="uploaded/logo/";
	$file=$_FILES['logo'];
	$type=$_FILES['logo']['type'];
	
	if($file['size']>0)
	{
		if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
		{
			move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			$strSQL4 = "UPDATE categories SET name='".$_POST['name']."',ParentID='".$_POST['ParentID']."',title='".$_POST['title']."',keyword='".$_POST['keyword']."',description='".$_POST['description']."',logo='".$save_path.$file['name']."',position='".$_POST['position']."',sort='".$_POST['sort']."',date='".$_POST['date']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
		}
		else
		{
			echo 'Bạn không được phép upload loại file này';
		}
	}
	else
	{
		$strSQL4 = "UPDATE categories SET name='".$_POST['name']."',ParentID='".$_POST['ParentID']."',title='".$_POST['title']."',keyword='".$_POST['keyword']."',description='".$_POST['description']."',position='".$_POST['position']."',sort='".$_POST['sort']."',date='".$_POST['date']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	}
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: categories.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>