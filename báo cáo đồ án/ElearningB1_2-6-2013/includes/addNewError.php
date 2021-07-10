<div class="heading">
<div class="title">
Vấn đề về tài khoản</div>
</div>

<div class="addcomleft">
<form action="#" method="post" enctype="multipart/form-data" name="addcomleft" id="addcomleft">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Tài khoản gặp lỗi: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="title" id="title" style="width: 400px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nội dung báo lỗi: <font color="#FF0000">*</font></div></td>
    <td align="left"><textarea name="content" id="content" style="width: 400px; height: 130px;border: 1px solid #790000; color: #790000"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Email: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="email" id="email" style="width: 400px;border: 1px solid #790000; color: #790000""/></td>
    </tr>
    <tr>
   	<td align = "right"><div style="font-weight: bold; color: #790000">Mã xác nhận: <font color="#FF0000">*</font></div></td>
    <td><input type="text" name="txtCaptcha" style="width: 200px;border: 1px solid #790000; color: #790000" /></td>
    </tr>
    <tr>
    <td></td>
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
					$sql = "INSERT INTO comments(title, content, email, date, userid, typeID)
				values ('".$_POST['title']."','".$_POST['content']."','".$_POST['email']."','".$date."','".$_SESSION['logUser']."',1)
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