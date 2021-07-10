<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Thông tin liên hệ</div>
</div>
<div class="defaultContent">
<?php
	$sql="SELECT * FROM contactinfo ORDER BY id ASC limit 0,1";
	$query=mysql_query($sql,$link);
	while($row=mysql_fetch_array($query))
	{
		echo $row['content'];
	}
?>
<!--<b>Học viện IT Plus - Viện CNTT - Trường Đại Học Quốc Gia Hà Nội</b><br /><br />
<table border="0" cellpadding="2" cellspacing="2">
<tr>
	<td>Địa chỉ</td><td>: Tầng 5, Nhà E3, ĐHQG HN, 144 Xuân Thủy, Cầu Giấy, Hà Nội</td>
</tr>
<tr>
	<td>Điện thoại</td><td>: 04 3754 6732 0912356004</td>
</tr>
<tr>
	<td>Hotline</td><td>: 968 207 643</td>
</tr>
<tr>
	<td>Email</td><td>: itplus@itplus.edu.vn</td>
</tr>
<tr>
	<td>Website</td><td>:<a href="http://www.itplus.edu.vn/"> www.itplus.edu.vn</a></td>
</tr>
</table>-->
</div>

<div class="header">
<div class="defaultTitle">Thông tin phản hồi</div>
</div>
<div class="defaultContent">
Xin vui lòng điền các yêu cầu vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!<br />
<form action="#" method="post" enctype="multipart/form-data" id="form_contact">
<table border="0" cellpadding="2" cellspacing="2">
	<tr>
    <td align="right"><font style="color: #F00">(*)</font> Họ và Tên </td>
    <td><input type="text" name="name" id="name" style="width: 220px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    <td align="right"><font style="color: #F00">(*)</font> Địa chỉ </td>
    <td><textarea name="address" id="address" style="width: 440px; height: 80px; border: 1px solid #ccc;"></textarea></td>
    </tr>
    <tr>
    <td align="right"><font style="color: #F00">(*)</font> Hòm thư </td>
    <td><input type="text" name="email" id="email" style="width: 440px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    <td align="right"><font style="color: #F00">(*)</font> Số điện thoại </td>
    <td><input type="text" name="tel" id="tel" style="width: 220px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    <td align="right"><font style="color: #F00">(*)</font> Tiêu đề </td>
    <td><input type="text" name="title" id="title" style="width: 440px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    <td align="right"><font style="color: #F00">(*)</font> Nội dung </td>
    <td><textarea name="content" id="content" style="width: 440px; height: 100px; border: 1px solid #ccc;"></textarea></td>
    </tr>
    <tr>
    	<td align="right"><font color="#FF0000">(*)</font> Mã xác nhận </td>
    	<td align="left"><img src="plugins/captcha/captcha.php" /></td>
    </tr>
    <tr>
    	<td align="right"><font color="#FF0000">(*)</font> Ký tự hiển thị </td>
   		<td align="left">
    <input type="text" name="txtCaptcha" style="width: 220px; border: 1px solid #ccc;" />
    	</td>
    </tr>
    <tr>
        <td align="right"></td>
        <td align="left">
        <input type="submit" name="submit" value="Gửi" />
        <input type="reset" name="reset" value="Nhập lại" />
        </td>
    </tr>
</table>
</form>
</div>
</div>
<?php
if(isset($_POST['submit']))
{
	if($_POST['txtCaptcha'] == '')
		{
			echo '<h3>Mã xác nhận không được phép để trống. Vui lòng điền đủ mã xác nhận</h3>';
		}
		else
		{
			if($_POST['txtCaptcha']!=$_SESSION['security_code'])
			{
				echo "<font color='#FF0000'>Mã ghi nhận không hợp lệ</font>";
			}
			else
			{
				$strSQL="INSERT INTO contact (name, address, tel, email, title, content, date, state) VALUES ('".$_POST['name']."', '".$_POST['address']."', '".$_POST['tel']."', '".$_POST['email']."', '".$_POST['title']."', '".$_POST['content']."', NOW(), 0)";
				$query=mysql_query($strSQL,$link);
				if($query)
				{
					header('Location: index.php');
				}
				else
				{
					echo '<h3>Gửi thông tin thất bại. Vui lòng thử lại sau</h3>';
				}
			}
		}
}
?>