<div class="heading">
<div class="title">
Góp ý mới</div>
</div>

<div class="addcomleft">
<form action="#" method="post" enctype="multipart/form-data" name="addcomleft" id="addcomleft">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Tiêu đề góp ý: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="title" id="title" style="width: 300px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Khóa học: <font color="#FF0000">*</font></div></td>
    <td align="left">
    <select name="Category" style="width: 300px; border: 1px solid #790000; color: #790000">
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
                echo '<option value="'.$row2['id'].'">'.'--&gt;'.$row2['name'].'</option>';
            }
        }
        ?>
    </select>
    </td>
    </tr>
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Loại dữ liệu: <font color="#FF0000">*</font></div></td>
    <td align="left">
    <input type="radio" name="datatype" value="Giáo trình"/>Giáo trình
    <input type="radio" name="datatype" value="Audio"/>Audio
    <input type="radio" name="datatype" value="Video"/>Video bài giảng
    <input type="radio" name="datatype" value="Trắc nghiệm"/>Câu hỏi trắc nghiệm
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nội dung góp ý: <font color="#FF0000">*</font></div></td>
    <td align="left"><textarea name="content" id="content" style="width: 400px; height: 100px;border: 1px solid #790000; color: #790000"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Email: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="email" id="email" style="width: 300px;border: 1px solid #790000; color: #790000""/></td>
    </tr>
   	<tr>
   	<td align = "right"><div style="font-weight: bold; color: #790000">Mã xác nhận: <font color="#FF0000">*</font></div></td>
    <td><input type="text" name="txtCaptcha" style="width: 200px;border: 1px solid #790000; color: #790000" /></td>
	<td><img src="includes/captcha/captcha.php" /></td>
    </tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Gửi đi" />
    <input type="reset" name="reset" value="Hủy bỏ" />
    </td>
    </tr>
    </table>
</form>

</div>
<?php
$date = date("YmdHis", time());		//Ymd	: Year month date
	if(isset($_POST['submit']))
	{
		if($_POST['txtCaptcha'] == '')
		{
			echo 'Vui lòng nhập mã bảo vệ';
		}
		else
		{
			if($_POST['txtCaptcha']!=$_SESSION['security_code'])
			{
				echo "<font color='#FF0000'>Mã ghi nhận không hợp lệ</font>";
			}
			else
			{
				$sql = "INSERT INTO comments(title, lesson_name, type_data, content, email, date)
				values ('".$_POST['title']."','".$_POST['Category']."','".$_POST['datatype']."','".$_POST['content']."','".$_POST['email']."','".$date."')
				";
				$result = mysql_query($sql, $link);
				if($result)
				{
					header('Location: index.php');
				}
				else
				{
					echo 'Lỗi thao tác, xin vui lòng thử lại sau';
				}
			}
		}
	}

?>