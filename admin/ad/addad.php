<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới quảng cáo</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tiêu đề quảng cáo (*) :</td>
        <td><input type="text" name="title" id="title" style="width: 600px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Link liên kết (*) :</td>
        <td><input type="text" name="link" id="link" style="width: 600px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>File Hình ảnh (*) :</td>
        <td><input type="file" name="file" id="file"/></td>
    </tr>
    <tr>
    	<td>Độ rộng Banner (*) :</td>
        <td><input type="text" name="width" id="width" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Độ cao Banner (*) :</td>
        <td><input type="text" name="height" id="height" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Vị trí (*) :</td>
        <td>
        <select name="position" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">Chọn vị trí đăng quảng cáo</option>
        <option value="1">Header Banner</option>
        <option value="2">SlideShow Banner</option>
        <option value="3">ColLeft Banner</option>
        <option value="4">Content Banner</option>
        <option value="5">ColRight Banner</option>
        <option value="6">Footer Banner</option>
        <option value="7">Vertical Left Banner</option>
        <option value="8">Vertical Right Banner</option>
        </select>
        </td>
    </tr>

        <tr>
    	<td>Thứ tự phân cấp (*) :</td>
        <td>
        <select name="ordinal" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="0">&hArr; Root &hArr;</option>
        <?php
		$strSQL="SELECT * FROM ad WHERE ordinal=0";
		$result=mysql_query($strSQL,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
			$strSQL2="SELECT * FROM ad WHERE ordinal='".$row['id']."' AND state=1";
			$result2=mysql_query($strSQL2,$link);
			while($row2=mysql_fetch_array($result2))
			{
				echo '<option value="'.$row2['id'].'">&raquo;'.$row2['title'].'</option>';
				
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
			echo '<option value="'.$p.'">'.$p.'</option>';
		}
		?>
        </select>
        </td>
        </tr>
        
    	<tr>
        <td>Ngày tạo :</td>
        <td>
        <input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;"/>
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
	$save_path="uploaded/ad/";
	$file=$_FILES['file'];
	$type=$_FILES['file']['type'];
	if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
	{
		move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
	}
	else
	echo 'Bạn không được phép upload loại file này';
	if($file['size']>0)
	{
		$sql="INSERT INTO ad(title,link,file,width,height,position,ordinal,priority,date,state) 
		VALUES ('".$_POST['title']."','".$_POST['link']."','".$save_path.$file['name']."','".$_POST['width']."','".$_POST['height']."','".$_POST['position']."','".$_POST['ordinal']."','".$_POST['priority']."','".$_POST['date']."','".$_POST['state']."')";		
	}
	else
	{
		$sql="INSERT INTO ad(title,link,width,height,position,ordinal,priority,date,state) 
		VALUES ('".$_POST['title']."','".$_POST['link']."','".$_POST['width']."','".$_POST['height']."','".$_POST['position']."','".$_POST['ordinal']."','".$_POST['priority']."','".$_POST['date']."','".$_POST['state']."')";
	}	
		$re=mysql_query($sql,$link);
		if($re)
		{
		header('Location: ad.php');
		}
		else
		{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}	
}
?>
