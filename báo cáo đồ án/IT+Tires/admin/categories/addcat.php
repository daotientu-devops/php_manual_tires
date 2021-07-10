<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới danh mục</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tên danh mục (*) :</td>
        <td><input type="text" name="name" id="name" style="width: 600px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Nút đa cấp (*) :</td>
        <td>
        <select name="ParentID" style="font-size: 12px; width: 600px; font-family: Arial, Helvetica, sans-serif;">
        <option value="0">&hArr;Root&hArr;</option>
        <?php
        $strSQL = "SELECT * FROM categories WHERE ParentID = 0";
        $result = mysql_query($strSQL, $link);
        while($row = mysql_fetch_array($result))
        {
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            $strSQL2 = "SELECT * FROM categories WHERE ParentID = '".$row['id']."'";
            $result2 = mysql_query($strSQL2, $link);
            while($row2 = mysql_fetch_array($result2))
            {
                echo '<option value="'.$row2['id'].'">&raquo;'.$row2['name'].'</option>';
				$strSQL3 = "SELECT * FROM categories WHERE ParentID = '".$row2['id']."'";
				$result3 = mysql_query($strSQL3, $link);
				while($row3 = mysql_fetch_array($result3))
				{
					echo '<option value="'.$row3['id'].'">&bull; '.$row3['name'].'</option>';
					
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
        <textarea name="title" id="title" style="width: 600px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Keywords (*) :</td>
        <td>
        <textarea name="keyword" id="keyword" style="width: 600px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Description (*) :</td>
        <td>
        <textarea name="description" id="description" style="width: 600px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Logo đại diện :</td>
        <td><input type="file" name="logo" id="logo"/></td>
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
	$save_path="uploaded/logo/";
	$file=$_FILES['logo'];
	$type=$_FILES['logo']['type'];
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
		$sql="INSERT INTO categories(name,ParentID,title,keyword,description,logo,position,sort,date,state) 
		VALUES ('".$_POST['name']."','".$_POST['ParentID']."','".$_POST['title']."','".$_POST['keyword']."','".$_POST['description']."','".$save_path.$file['name']."','".$_POST['position']."','".$_POST['sort']."','".$_POST['date']."','".$_POST['state']."')";
	}
	else
	{
		$sql="INSERT INTO categories (name,ParentID,title,keyword,description,position,sort,date,state) 
		VALUES ('".$_POST['name']."','".$_POST['ParentID']."','".$_POST['title']."','".$_POST['keyword']."','".$_POST['description']."','".$_POST['position']."','".$_POST['sort']."','".$_POST['date']."','".$_POST['state']."')";
	}
		$re=mysql_query($sql,$link);
		if($re)
		{
		header('Location: categories.php');
		}
		else
		{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}
}
?>