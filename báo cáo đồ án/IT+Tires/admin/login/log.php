<div class="login">
<div class="title">
CMS! Administration Login
</div>
<div class="ContentLog">
<div class="DivLeft">
<div class="image">
</div>
<div class="LinkToHome"><a href="../index.php">Trở về trang chủ</a></div>
</div>

<div class="LoginToSystem">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="300px" border="0" cellspacing="2" cellpadding="2" style="margin-left: 29px; margin-right: 29px; margin-top: 30px;">
    <tr style="height: 35px;">
    <td>UserName</td>
    <td><input type="text" name="username" id="username" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr style="height: 35px;">
    <td>Password</td>
    <td><input type="password" name="password" id="password" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr style="height: 55px;">
    <td></td>
    <td><input type="submit" name="btnLogin" id="btnLogin" value="Đăng nhập" />
    </td>
    </tr>
    </table>
</form>
</div>
</div>
</div>
<?php
if(isset($_GET['action']))
{
	if($_GET['action']=='logout')
	{
		unset($_SESSION['logged']);
		unset($_SESSION['log']);
		header ('Location: login.php');
	}
}
?>
<?php
if(isset($_POST['btnLogin']))
{
	$strSQL = "SELECT * FROM users WHERE username ='".$_POST['username']."'";
	$result = mysql_query($strSQL, $link);
	$num = mysql_num_rows($result);
	$username = $_POST['username'];
	if($num > 0)
	{
		$row = mysql_fetch_array($result);
		if(md5($_POST['password'])==$row['password'])
		{
			$_SESSION['logged']=$row['username'];
			$_SESSION['log']=$row['id'];
			//Tạo cookie với tên là login và giá trị đc gửi đi từ ô username, có thời gian sống là 1 giờ tính từ thời điểm thiết lập
			setcookie('login',$_POST['username'],time()+3600);	//cẩn thận với dòng này
			header('Location: index.php');
		}
		else
		{
			echo 'Mật khẩu bị lỗi';
		}
	}
	else
	{
		echo 'Người dùng không tồn tại';
	}
}
?>