<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Đóng góp ý kiến</div>
</div>
<div class="defaultContent">
<ul>
<?php
if(isset($_POST['btnSend']))
{
	if($_POST['txtCaptcha']=='')
	{
		echo '<h3>Mã xác nhận không được phép để trống. Vui lòng điền đủ mã xác nhận</h3>';	
	}
	else
	{
		if($_POST['txtCaptcha']!=$_SESSION['security_code'])
		{
			echo "<font color='#FF0000'><h3>Mã ghi nhận không hợp lệ</h3></font>";
		}
		else
		{
			$strSQL="INSERT INTO comment (name, tel, email, title, content, type) VALUES ('".$_POST['txtName']."','".$_POST['txtTel']."','".$_POST['txtEmail']."','".$_POST['txtTitle']."','".$_POST['txtContent']."',3)";
			$query=mysql_query($strSQL,$link);
			if($query)
			{
				echo '<h3>Cám ơn bạn đã đóng góp ý kiến cho Tiến Hoàng</h3>';
			}
			else
			{
				echo "<font color='#FF0000'><h3>Thao tác dữ liệu không thành công. Vui lòng thử lại sau ít phút nữa.</h3></font>";
			}
		}
	}
}
?>
Nhằm hỗ trợ khách hàng mua sắm và sử dụng sản phẩm công nghệ một cách hiệu quả và an toàn, Tiến Hoàng luôn luôn lắng nghe các đóng góp ý kiến của khách hàng. Để gửi ý kiến của bạn vui lòng điền đầy đủ các thông tin yêu form dưới đây, rồi click vào gửi.
<form action="#" method="post">
	<table border="1" cellpadding="2" cellspacing="2" class="csstable" width="100%">
	<tr>
    	<td>Họ tên bạn</td>
        <td>
        <input type="text" name="txtName" id="txtName" style="width: 260px; border: 1px solid #ccc;"/>
        </td>
    </tr>
	<tr>
    	<td>Điện thoại</td>
        <td>
        <input type="text" name="txtTel" id="txtTel" style="width: 260px; border: 1px solid #ccc;"/>
        </td>
    </tr>
    <tr>
    	<td>Địa chỉ Email</td>
        <td>
        <input type="text" name="txtEmail" id="txtEmail" style="width: 260px; border: 1px solid #ccc;"/>
        </td>
    </tr>
    <tr>
    	<td>Tiêu đề</td>
        <td>
        <input type="text" name="txtTitle" id="txtTitle" style="width: 260px; border: 1px solid #ccc;"/>
        </td>
    </tr>
    <tr>
    	<td>Nội dung</td>
        <td>
        <textarea name="txtContent" id="txtContent" style="width: 440px; height: 150px; border: 1px solid #ccc;"></textarea>
        </td>
    </tr>
    <tr>
    	<td rowspan="2">Nhập mã xác nhận</td>
    	<td><img src="plugins/captcha/captcha.php" /></td>
 	</tr>
  	<tr>
    	<td><input type="text" name="txtCaptcha" style="width: 100px; border: 1px solid #ccc;" /></td>
  	</tr>
    <tr>
    	<td></td>
        <td>
        <input type="submit" name="btnSend" id="btnSend" value="Gửi nội dung"/>
        </td>
    </tr>
	</table>
</form>
</ul>
</div>
</div>
