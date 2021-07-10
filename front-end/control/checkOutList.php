<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Đặt hàng và thanh toán
</div>
</div>

<div class="content_partition1" style="margin-left: -2px">
<div class="content_part1">
	<div style="width: 560px; border: 1px solid #ccc; padding: 5px 5px; color: #a80002; font-weight: bold;">Thông tin tài khoản</div>
    <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Bạn là khách hàng mới</div>
    <div style="width: 548px; margin-top: 5px; padding: 0px 6px;">Đăng ký với chúng tôi để thanh toán nhanh hơn, để theo dõi tình trạng đặt hàng của bạn và nhiều hơn nữa. Bạn cũng có thể thanh toán mà không cần đăng ký tài khoản.			</div>
    <div style="width: 560px; margin-top: 20px; text-align: center;">
    	<form action="#" method="post">
    		<input type="button" value="Đăng ký tài khoản mới"  onclick="window.location='register.php'"/>
    		<input type="button" value="Đặt hàng không cần tài khoản"  onclick="window.location='checkOutGuest.php'"/>
    	</form>
    </div>
    <div style="margin-top: 10px; border-top: 1px solid #ccc;"></div>
    <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Bạn đã có tài khoản trên hệ thống</div>
    <div style="width: 548px; margin-top: 5px; padding: 0px 6px;">Để tiếp tục, vui lòng nhập tên tài khoản và mật khẩu của bạn.</div>
    <div style="width: 560px; margin-top: 20px; text-align: left;">
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
            <td><input type="submit" name="submit" value="Tiếp tục"/>
            </td>
            </tr>
    	</table>
    </form>
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
				header('Location: checkOutId.php');
				
			}
		}
	}
}
elseif(isset($_COOKIE['remember']))
{
	header('Location: index.php');
}
?>
</div>
</div>

</div>