<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới giao diện</h2>
</div>

<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tiêu đề giao diện (*) :</td>
        <td><input type="text" name="styleName" id="styleName" style="width: 400px; border: 1px solid #ccc; background: #d5eeff;"/></td>
    </tr>
    <tr>
    	<td>Tên giao diện (*) :</td>
        <td><input type="text" name="templateName" id="templateName" style="width: 400px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Hình ảnh hiển thị (*) :</td>
        <td><input type="file" name="image" id="image"/></td>
    </tr>
    <tr>
    	<td>Mô tả (*) :</td>
        <td><textarea name="description" id="description" style="width: 400px; height: 40px; border: 1px solid #ccc;" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    	<td>Vị trí thể hiện (*) :</td>
        <td>
        	<select name="location" style="background: #d6fffe; font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">
            	<option value=""></option>
                <option value="1">Site</option>
                <option value="2">Administrator</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Đường dẫn tệp tin (*) :</td>
        <td><input type="file" name="href" id="href" /></td>
    </tr>
    <tr>
    	<td>Ngày tạo (*) :</td>
        <td><input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Tác giả (*) :</td>
        <td><input type="text" name="author" id="author" style="width: 220px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
        <td>Trạng thái :</td>
        <td>
            <!--<label>
            <input name="state" id="state" type="radio" value="1"/> Kích hoạt
            </label>-->
            <label>
            <input name="state" id="state" type="radio" value="0" checked /> Chờ kích hoạt
            </label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="btnAdd" id="btnAdd" value="Thêm" />
            <input type="reset" name="btnReset" id="btnReset" value="Làm lại" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnAdd']))
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
			$sql="INSERT INTO template_styles(styleName,templateName,description,location,href,date,author,state) 
		VALUES ('".$_POST['styleName']."','".$_POST['templateName']."','".$_POST['description']."','".$_POST['location']."','".$save_path.$file['name']."','".$_POST['date']."','".$_POST['author']."','".$_POST['state']."')";
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
			$sql="INSERT INTO template_styles(styleName,templateName,description,image,location,date,author,state) 
		VALUES ('".$_POST['styleName']."','".$_POST['templateName']."','".$_POST['description']."','".$save_path1.$file1['name']."','".$_POST['location']."','".$_POST['date']."','".$_POST['author']."','".$_POST['state']."')";
		}
		else
		{
			echo 'Bạn không được phép upload loại file này';
		}
	}
		$re=mysql_query($sql,$link);
		if($re)
		{
		header('Location: templateStyles.php');
		}
		else
		{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}
}
?>