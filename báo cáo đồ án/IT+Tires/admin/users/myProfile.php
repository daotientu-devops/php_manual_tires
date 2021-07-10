<?php
if(isset($_SESSION['log']))
{
	$strSQL = "SELECT * FROM users WHERE id ='".$_SESSION['log']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: users.php');
}
?>
<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px; margin-top: 10px;"><!--Nhớ bổ sung margin-top: 10px;-->
<h3>Hồ sơ cá nhân của bạn, <font style="color: #0004FF; text-decoration: underline;"><?php echo $_SESSION['logged']; ?></font></h3>
</div>

<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2"><font style="color: #146295; font-weight: bold;">Hồ sơ chi tiết</font><b> &raquo; Thay đổi mật khẩu</b></td>
    </tr>
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>ID :</td>
        <td><?php echo $row['id']; ?></td>
    </tr>
    <tr>
    	<td>Họ và Tên (*) :</td>
        <td><input type="text" name="name" id="name" style="background: #d5eeff; width: 200px; border: 1px solid #ccc;"value="<?php echo $row['name']; ?>"/></td>
    </tr>
    <tr>
    	<td>Tên tài khoản (*) :</td>
        <td><input type="text" name="username" id="username" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['username']; ?>" /></td>
    </tr>
    <tr>
    	<td>Mật khẩu (*) :</td>
        <td><input type="password" name="password" id="password" style="width: 200px; border: 1px solid #ccc;" value="" /></td>
    </tr>
    <tr>
    	<td>Xác nhận lại mật khẩu (*) :</td>
        <td><input type="password" name="repassword" id="repassword" style="width: 200px; border: 1px solid #ccc;" value="" /></td>
    </tr>
    <tr>
    	<td>Email (*) :</td>
        <td><input type="text" name="email" id="email" style="background: #d5eeff; width: 200px; border: 1px solid #ccc;" value="<?php echo $row['email']; ?>"/></td>
    </tr>
    <tr>
        <td>Ngày tạo tài khoản:</td>
        <td>
        	<?php echo $row['date']; ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="btnUpdate" id="btnUpdate" value="Thay đổi" />
            <input type="button" name="btnCancel" id="btnCancel" value="Quay lại" onclick="window.location='index.php'" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnUpdate']))
{
	$strSQL4 = "UPDATE users SET username='".$_POST['username']."',name='".$_POST['name']."',password='".md5($_POST['password'])."',email='".$_POST['email']."' WHERE id ='".$_SESSION['log']."'";

	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: index.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}	
}