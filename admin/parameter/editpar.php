<?php
if(isset($_GET['parid']))
{
	$strSQL = "SELECT * FROM parameter WHERE id = '".$_GET['parid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: parameter.php');
}
?>

<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa thông số</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tên thông số (*) :</td>
        <td><input type="text" name="title" id="title" style="width: 600px; border: 1px solid #ccc;" value="<?php echo $row['title']; ?>"/></td>
    </tr>
    <tr>
    	<td>Loại nút (*) :</td>
        <td>
        	<select name="typeNode" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
            <option value="">Chọn loại nút</option>
            	<option value="1" <?php if($row['typeNode']==1) echo 'selected'; ?>>Nút đơn cấp</option>
                <option value="2" <?php if($row['typeNode']==2) echo 'selected'; ?>>Nút đa cấp</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Nút đa cấp (*) :</td>
        <td>
        <select name="ParentID" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="0">&hArr; Root &hArr;</option>
        <?php
		$strSQL2="SELECT * FROM parameter WHERE ParentID=0";
		$result2=mysql_query($strSQL2,$link);
		while($row2=mysql_fetch_array($result2))
		{
			if($row2['id']==$row['ParentID'])
			{
				echo '<option selected="selected" value="'.$row2['id'].'">'.$row2['title'].'</option>';
			}
			else
			{
				echo '<option value="'.$row2['id'].'">'.$row2['title'].'</option>';
			}
			$strSQL3="SELECT * FROM parameter WHERE ParentID='".$row2['id']."'";
			$result3=mysql_query($strSQL3,$link);
			while($row3=mysql_fetch_array($result3))
			{
				echo '<option value="'.$row3['id'].'">&raquo;'.$row3['title'].'</option>';
			}
		}
		?>
        </select>
        </td>
        <tr>
    	<td>Nút điều khiển (*) :</td>
        <td>
        <select name="control" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">Chọn số thứ tự của nút</option>
        <?php
		for($c=1;$c<=100;$c++)
		{
			if($row['control']==$c)
			{
				echo '<option value="'.$c.'" selected="selected">'.$c.'</option>';
			}
			else
			{
				echo '<option value="'.$c.'">'.$c.'</option>';
			}
		}
		?>
        </select>
        </td>
        </tr>
        <tr>
        <td>Ngày tạo :</td>
        <td>
        <input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['date']; ?>"/>
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
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='parameter.php'" />
        </td>
        </tr>
    </tr>
    </table>
</form>
</div>
<?php
if (isset($_POST['btnUpdate']))
{
	$strSQL4 = "UPDATE parameter SET title='".$_POST['title']."',typeNode='".$_POST['typeNode']."',ParentID='".$_POST['ParentID']."',control='".$_POST['control']."',date='".$_POST['date']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: parameter.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>