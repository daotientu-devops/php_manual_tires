<div class="login">
  <div class="title"> CMS! Administration Login </div>
  <div class="ContentLog">
    <div class="DivLeft">
      <div class="image"> </div>
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
            <td>
            	<input type="checkbox" name="remember" /> Nhớ mật khẩu
            	<input type="submit" name="btnLogin" id="btnLogin" value="Đăng nhập" style="margin-left:40px;"/></td>
          </tr>
          <tr>
          	<td></td>
          	<td><a href="register.php">Đăng ký tài khoản</a></td>
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
		unset($_SESSION['id']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		setcookie('remember',$_SESSION['remember'],time()-60*60*24);
		setcookie('id',$_SESSION['id'],time()-60*60*24);
		setcookie('username',$_SESSION['username'],time()-60*60*24);
		setcookie('password',$_SESSION['password'],time()-60*60*24);
		header ('Location: login.php');
	}
}
?>
<?php
if(isset($_POST['btnLogin']))
{
	$strSQL = "SELECT * FROM users WHERE username ='".$_POST['username']."' AND Role!=3 AND state=1";
	$result = mysql_query($strSQL, $link);
	$num = mysql_num_rows($result);
	$username = $_POST['username'];
	if($num > 0)
	{
		$row = mysql_fetch_array($result);
		if(md5($_POST['password'])==$row['password'])
		{
			$_SESSION['username']=$row['username'];
			//
			$_SESSION['id']=$row['id'];
			$_SESSION['password']=$row['password'];
				
			if(isset($_POST['remember']))
			{
				$_SESSION['remember']=true;
				setcookie('remember',$_SESSION['remember'],time()+60*60*24);
				$_COOKIE['remember'];
				setcookie('id',$_SESSION['id'],time()+60*60*24);
				$_COOKIE['id'];
				setcookie('username',$_SESSION['username'],time()+60*60*24);
				$_COOKIE['username'];
				setcookie('password',$_SESSION['password'],time()+60*60*24);
				$_COOKIE['password'];
			}
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
}elseif(isset($_COOKIE['remember'])){
	header('Location: index.php');
}
?>
