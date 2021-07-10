<div class="heading">
<div class="title">
Đăng kí thành viên</div>
</div>

<div class="userleft">
	<form action="#" method="post" enctype="multipart/form-data" id="form_register">
    
    <tr>
    <td align="left"><div style="font-size: 16px; font-weight: bold; color: #666">Thông tin tài khoản</div></td>
    <td align="left"></td>
    </tr>
	<br/>
    <tr>
    <td align="left"><div>Các thông tin có dấu <font color="#FF0000">*</font> là bắt buộc phải điền</div></td>
    <td align="left"></td>
    </tr>
    <table border="0" cellpadding="2" cellspacing="2">
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Tên đăng nhập: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="username" id="username" style="width: 200px; border: 1px solid #790000;" /></td>
    </tr>
   	<tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Mật khẩu: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="password" name="password" id="password" style="width: 200px; border: 1px solid #790000;" /></td>
    </tr>
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Xác nhận lại mật khẩu: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="password" name="repassword" id="repassword" style="width: 200px; border: 1px solid #790000;" /></td>
    </tr>
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Địa chỉ gmail: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="email" id="email" style="width: 300px; border: 1px solid #790000;" /></td>
    </tr>
    
    </table>
    <br/>
    <tr>
    <td align="left"><div style="font-size: 16px; font-weight: bold; color: #666">Thông tin cá nhân</div></td>
    <td align="left"></td>
    </tr>
	<br/>
    <table border="0" cellpadding="2" cellspacing="2">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Họ và Tên: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="name" id="name" style="width: 200px; border: 1px solid #790000;" /></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Ngày sinh:</div></td>
	<td align="left">
	<select name="date" style="border: 1px solid #790000; color: #790000">
	<option value="">Ngày</option>
	<?php
	for($d = 1;$d < 32;$d++)
	{
		echo '<option value="'.$d.'">'.$d.'</option>';
	}
	?>
	</select>
	<select name="month" style="border: 1px solid #790000; color: #790000">
	<option value="">Tháng</option>
	<?php
	for($m = 1;$m < 13;$m++)
	{
		echo '<option value="'.$m.'">'.$m.'</option>';
	}
	?>
	</select>
	</select>
	<select name="year" style="border: 1px solid #790000; color: #790000">
	<option value="">Năm</option>
	<?php
	$current_year = date('Y');	//Lấy năm hiện tại trên máy
	$year_later = $current_year - 100;
	for($y = $current_year;$y>=$year_later;$y--)
	{
		echo '<option value="'.$y.'">'.$y.'</option>';
	}
	?>
	</select>
	</td>
	</tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Giới tính:</div></td>
    <td align="left">
    <input type="radio" name="sex" value="Nam"/>Nam
    <input type="radio" name="sex" value="Nữ"/>Nữ
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Địa chỉ: <font color="#FF0000">*</font></div></td>
    <td align="left"><textarea name="address" id="address" style="width: 400px; height: 40px;border: 1px solid #790000; color: #790000"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Quốc gia/Thành phố:</div></td>
    <td align="left"><input type="text" name="country" style="width: 400px;border: 1px solid #790000; color: #790000""/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nơi công tác:</div></td>
    <td align="left"><textarea name="place_of_work" style="width: 400px; height: 40px;border: 1px solid #790000; color: #790000"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Điện thoại liên hệ: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="tel" id="tel" style="width: 200px;border: 1px solid #790000; color: #790000"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình đại diện:</div></td>
    <td align="left"><input name="userfile" id="userfile" type="file" style="width: 200px; color: #790000"/></td>
    </tr>
    </table>
    <br/>
    <tr>
    <td align="left"><div style="font-size: 16px; font-weight: bold; color: #666">Mã xác nhận (<font color="#FF0000">*</font>)</div></td>
    <td align="left"></td>
    </tr>
	<br/>
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Vui lòng điền 8 kí tự bên dưới vào ô để hoàn thành</div></td>
    <td align="left"></td>
    </tr>
    <table border="0" cellpadding="2" cellspacing="2">
    <tr>
   	<td align = "left">
    <input type="text" name="txtCaptcha" style="width: 200px;border: 1px solid #790000; color: #790000" /></td>
	<td><img src="includes/captcha/captcha.php" /></td>
    </tr>
    <tr>

    <td align="left">
    <input type="submit" name="submit" value="Hoàn thành" />
    <input type="reset" name="reset" value="Hủy bỏ" />
    </td>
    </tr>
    </table>
    </form>

</div>
<?php
	if(isset($_POST['submit']))
	{
		$save_path="uploaded/avatar/"; 
    	$file = $_FILES['userfile']; 
		$type = $_FILES['userfile']['type'];
		if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
		{
		move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
		
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
				$sql = "INSERT INTO users(username, password, name, date, month, year, sex, address, country, place_of_work, tel,avatar, email, RoleID)
				values ('".$_POST['username']."','".md5($_POST['password'])."','".$_POST['name']."','".$_POST['date']."','".$_POST['month']."','".$_POST['year']."','".$_POST['sex']."','".$_POST['address']."','".$_POST['country']."','".$_POST['place_of_work']."','".$_POST['tel']."','".$save_path.$file['name']."','".$_POST['email']."','students')
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
		else
		echo 'Bạn không được phép upload loại file này';
	}
	
?>