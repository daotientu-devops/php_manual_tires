<?php
if(isset($_GET['tempid']))
{
	$strSQL = "SELECT * FROM template_styles WHERE id ='".$_GET['tempid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: templateStyles.php');
}
?>

<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa giao diện</h2>
</div>

<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tiêu đề giao diện (*) :</td>
        <td><input type="text" name="styleName" id="styleName" style="width: 400px; border: 1px solid #ccc; background: #d5eeff;" value="<?php echo $row['styleName']; ?>"/></td>
    </tr>
    <tr>
    	<td>Tên giao diện (*) :</td>
        <td><input type="text" name="templateName" id="templateName" style="width: 400px; border: 1px solid #ccc;" value="<?php echo $row['templateName']; ?>"/></td>
    </tr>
    <tr>
    	<td>Hình ảnh hiển thị (*) :</td>
        <td><input type="file" name="image" id="image"/></td>
    </tr>
    <tr>
    	<td></td>
        <td><img src="<?php echo $row['image']; ?>" alt="" border="1" width="200px" style="border: 1px solid #ccc;"/><input type="hidden" name="imageTemp" id="imageTemp" value="<?php echo $row['image']; ?>" /></td>
    </tr>
    <tr>
    	<td>Mô tả (*) :</td>
        <td><textarea name="description" id="description" style="width: 400px; height: 40px; border: 1px solid #ccc;" class="ckeditor"><?php echo $row['description']; ?></textarea></td>
    </tr>
    <tr>
    	<td>Vị trí thể hiện (*) :</td>
        <td>
        	<select name="location" style="background: #d6fffe; font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">
            	<option value=""></option>
                <option value="1" <?php if($row['location']==1) echo 'selected';?>>Site</option>
                <option value="2" <?php if($row['location']==2) echo 'selected';?>>Administrator</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Đường dẫn tệp tin (*) :</td>
        <td><input type="file" name="href" id="href" />
        File có sẵn: <input type="text" name="href" id="href" style="width: 330px;" value="<?php echo $row['href']; ?>" disabled="disabled"/>
        <input type="hidden" name="hrefTemp" id="hrefTemp" value="<?php echo $row['href']; ?>"/>
        </td>
    </tr>
    <tr>
    	<td>Ngày tạo (*) :</td>
        <td><input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['date']; ?>"/></td>
    </tr>
    <tr>
    	<td>Tác giả (*) :</td>
        <td><input type="text" name="author" id="author" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['author']; ?>"/></td>
    </tr>
    <tr>
        <td>Trạng thái :</td>
        <td>
            <label>
            <input name="state" id="state" type="radio" value="1" <?php if($row['state']==1) echo 'checked';?>/> Kích hoạt
            </label>
            <label>
            <input name="state" id="state" type="radio" value="0" <?php if($row['state']==0) echo 'checked';?>/> Hủy bỏ
            </label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
            <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='templateStyles.php'" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnUpdate']))
{
	$save_path="uploaded/css/";
	$file=$_FILES['href'];
	$type=$_FILES['href']['type'];
	
	$save_path1="uploaded/templates/";
	$file1=$_FILES['image'];
	$type1=$_FILES['image']['type'];
	
	if($file['size']>0)
	{
		if($type == 'text/css')
		{
			move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			
			$strSQL4 = "UPDATE template_styles SET styleName='".$_POST['styleName']."',templateName='".$_POST['templateName']."',description='".$_POST['description']."',location='".$_POST['location']."',href='".$save_path.$file['name']."',date='".$_POST['date']."',author='".$_POST['author']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
		}
		else
		{
			echo 'Bạn không được phép upload loại file này';
		}
	}
	elseif($file1['size']>0)
	{
		if($type1 == 'image/png' || $type1 == 'image/gif' || $type1 == 'image/jpg' || $type1 == 'image/jpeg')
		{
			move_uploaded_file($file1['tmp_name'], $save_path1.$file1['name']);
			
			$strSQL4 = "UPDATE template_styles SET styleName='".$_POST['styleName']."',templateName='".$_POST['templateName']."',description='".$_POST['description']."',image='".$save_path1.$file1['name']."',location='".$_POST['location']."',date='".$_POST['date']."',author='".$_POST['author']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
		}
		else
		{
			echo 'Bạn không được phép upload loại file này';
		}
	}
	else
	{
		$strSQL4 = "UPDATE template_styles SET styleName='".$_POST['styleName']."',templateName='".$_POST['templateName']."',description='".$_POST['description']."',location='".$_POST['location']."',date='".$_POST['date']."',author='".$_POST['author']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	}
	$result4 = mysql_query($strSQL4, $link);
	if(isset($_POST['state']) && ($_POST['state']==1))
	{
		$strSQL5 = "UPDATE template_styles SET state=0 WHERE id!='".$row['id']."'";
		
	}
	else
	{
		$strSQL5 = "UPDATE template_styles SET state=0 WHERE id='".$row['id']."'";
	}
	$result5 = mysql_query($strSQL5, $link);
	if($result4 && $result5)
	{	
		header('Location: templateStyles.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>