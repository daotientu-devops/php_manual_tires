<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Thông tin tài khoản</div>
</div>

<div class="defaultContent">
<?php
	$strSQL = "SELECT * FROM users WHERE id='".$_GET['infoId']."'";
	$query = mysql_query($strSQL,$link);
	$row=mysql_fetch_array($query);
?>
<form action="#" method="post" enctype="multipart/form-data" id="form_contact">
<?php
if(isset($_POST['submitR1']))
{
	$strSQL1="UPDATE users SET name='".$_POST['name']."',birthday='".$_POST['birthday']."',place_of_work='".$_POST['place_of_work']."',tel='".$_POST['tel']."',email='".$_POST['email']."',date=NOW() WHERE id ='".$row['id']."'";
	$query1=mysql_query($strSQL1,$link);
	if($query1)
	{
		echo 'Cập nhật thông tin thành công !<br/>
		Bấm vào <a href="personal.php?perid='.$_SESSION['perid'].'">đây</a> để quay lại trang cá nhân của bạn.
		';
		//header('Location: personal.php?perid='.$_SESSION['perid'].'');
	}
	else
	{
		echo '<h3>Sửa địa chỉ thất bại. Vui lòng thử lại sau</h3>';
	}
}
?>
<table border="0" cellpadding="2" cellspacing="2">
	<tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
	<tr>
    <td align="right"><font style="color: #F00">(*)</font> Họ và Tên: </td>
    <td><input type="text" name="name" id="name" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['name']; ?>"/></td>
    </tr>
	<tr>
    <td align="right"> Ngày sinh: </td>
    <td><input type="text" name="birthday" id="birthday" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['birthday']; ?>"/></td>
    </tr>
    <tr>
    <td align="right">Công ty: </td>
    <td><input type="text" name="place_of_work" id="place_of_work" style="width: 460px; border: 1px solid #ccc;" value="<?php echo $row['place_of_work']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><font style="color: #F00">(*)</font> Điện thoại: </td>
    <td><input type="text" name="tel" id="tel" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['tel']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><font style="color: #F00">(*)</font> Email: </td>
    <td><input type="text" name="email" id="email" style="width: 460px; background: #ebebe4; border: 1px solid #ccc;" value="<?php echo $row['email']; ?>"/></td>
    </tr>
    <tr>
        <td></td>
        <td>
        <input type="submit" name="submitR1" id="submitR1" value="Cập nhật" />
        <input type="button" name="back" id="back" value="Quay lại" onclick='
        <?php
        echo 'window.location="personal.php?perid='.$_SESSION['perid'].'"';
		?>
		'/>
        </td>
    </tr>
</table>
</form>
</div>

<div class="header">
<div class="defaultTitle">Thay đổi mật khẩu</div>
</div>
<div class="defaultContent">
<form action="#" method="post" enctype="multipart/form-data" id="form_contact">
<?php
if(isset($_POST['submitR2']))
{
	$strSQL2="UPDATE users SET password='".md5($_POST['password'])."' WHERE id ='".$row['id']."'";
	$query2=mysql_query($strSQL2,$link);
	if($query2)
	{
		echo 'Cập nhật thông tin thành công !<br/>
		Bấm vào <a href="personal.php?perid='.$_SESSION['perid'].'">đây</a> để quay lại trang cá nhân của bạn.
		';
		//header('Location: personal.php?perid='.$_SESSION['perid'].'');
	}
	else
	{
		echo '<h3>Sửa địa chỉ thất bại. Vui lòng thử lại sau</h3>';
	}
}
?>
<table border="0" cellpadding="2" cellspacing="2">
	<tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
	<tr>
    <td align="right"> Mật khẩu: </td>
    <td><input type="password" name="password" id="password" style="width: 300px; background: #faffbd; border: 1px solid #ccc;" value="<?php echo $row['password']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"> Nhập lại mật khẩu: </td>
    <td><input type="password" name="repassword" id="repassword" style="width: 300px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
        <td></td>
        <td>
        <input type="submit" name="submitR2" id="submitR2" value="Đổi mật khẩu" />
        </td>
    </tr>
</table>
</form>
</div>

</div>