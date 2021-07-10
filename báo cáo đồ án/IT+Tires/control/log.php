<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Đăng nhập hệ thống</div>
</div>
<div class="defaultContent">
<form action="#" method="post" enctype="multipart/form-data" id="form_register">
<table border="0" cellpadding="2" cellspacing="2">
	<tr>
    <td align="right">Tài khoản: </td>
    <td><input type="text" name="username" id="username" style="width: 220px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    <td align="right">Mật khẩu: </td>
    <td><input type="password" name="password" id="password" style="width: 220px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    <td align="right"></td>
    <td><input type="checkbox" name="remember" />Nhớ mật khẩu</td>
    </tr>
    <tr>
    <td align="right"></td>
    <td><input type="submit" name="submit" value="Đăng nhập"/>
    	<input type="reset" name="reset" value="Hủy bỏ"/>
    </td>
    </tr>
</table>
</form>
</div>
</div>
<?php
//session_start();
$_SESSION['db_is_logged_in']=false;
$remember=false;
if(isset($_POST['submit']))
{
	if(($_POST['username']==NULL)&&(md5($_POST['password'])==NULL))
	{
		echo '<h3>Bạn chưa nhập vào tên tài khoản và mật khẩu. Vui lòng đăng nhập lại</h3>';
		header('Location: login.php');
	}
	elseif($_POST['username']==NULL)
	{
		echo '<h3>Bạn chưa nhập tên tài khoản</h3>';
		header('Location: login.php');
	}
	elseif(md5($_POST['password'])==NULL)
	{
		echo '<h3>Bạn chưa nhập mật khẩu</h3>';
		header('Location: login.php');
	}
	else
	{
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$strSQL="SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
		$query=mysql_query($strSQL,$link);
		if(mysql_num_rows($query)==0)
		{
			echo '<h3>Tài khoản hoặc mật khẩu không tồn tại. Xin vui lòng thử lại</h3>';
		}
		else
		{
			while($row=mysql_fetch_array($query))
			{
				$_SESSION['db_is_logged_in']=true;
				$_SESSION['id']=$row['id'];
				$_SESSION['username']=$row['username'];
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
				if($_SESSION['purchase'])
				{
					header('Location: checkOutId.php');
				}
				else
				{
					header('Location: index.php');	
				}
			}
		}
	}
}
elseif(isset($_COOKIE['remember']))
{
	header('Location: index.php');
}
?>