<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới thông số</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tên thông số (*) :</td>
        <td><input type="text" name="title" id="title" style="width: 600px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Loại nút (*) :</td>
        <td>
        	<select name="typeNode" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
            <option value="">Chọn loại nút</option>
            	<option value="1">Nút đơn cấp</option>
                <option value="2">Nút đa cấp</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Nút đa cấp (*) :</td>
        <td>
        <select name="ParentID" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="0">&hArr; Root &hArr;</option>
        <?php
		$strSQL="SELECT * FROM parameter WHERE ParentID=0";
		$result=mysql_query($strSQL,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
			$strSQL2="SELECT * FROM parameter WHERE ParentID='".$row['id']."'";
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
    	<td>Nút điều khiển (*) :</td>
        <td>
        <select name="control" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">Chọn số thứ tự của nút</option>
        <?php
		for($c=1;$c<=100;$c++)
		{
			echo '<option value="'.$c.'">'.$c.'</option>';
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
	$sql="INSERT INTO parameter(title,typeNode,ParentID,control,date,state) 
	VALUES ('".$_POST['title']."','".$_POST['typeNode']."','".$_POST['ParentID']."','".$_POST['control']."','".$_POST['date']."','".$_POST['state']."')";
	$re=mysql_query($sql,$link);
	if($re)
	{
		header('Location: parameter.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
	}
}

?>









