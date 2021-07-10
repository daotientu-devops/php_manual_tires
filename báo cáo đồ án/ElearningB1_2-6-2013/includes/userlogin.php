<div class="heading" style="width: 798px; margin-left: 147px;">
<div class="title">
&raquo; Phiền bạn đăng nhập để vào hệ thống</div>
<div class="icon_login"></div>
</div>
<div class="conleft" style="width: 798px; margin-left: 147px; padding: 5px; background: #790000;">
<form action="#" method="post">
    <table border="0" cellpadding="3" cellspacing="3" style="background: #790000;">
        <tr>
        <td align="center" style="width: 100px; border: 1px solid #CCC; color:#FFF; font-weight: bold">Tên đăng nhập:</td>
    <td align="left"><input style="width: 300px; border: 1px solid #CCC" name="username" type="text" /></td>
        </tr>
      
        <tr>
		<td align="center" style="width: 100px; border: 1px solid #CCC; color:#FFF; font-weight: bold">Mật khẩu:</td>
    	<td align="left"><input style="width: 300px; border: 1px solid #CCC" name="password" type="password" /></td>
		</tr>
        <tr>
        <td align="center" style="width: 100px; border: 1px solid #CCC; color:#FFF; font-weight: bold">
        <!--<input type="checkbox" name="remember" />Ghi nhớ?-->
        </td>
        <td align="left">
        <input name="submit" type="submit" value="Đồng ý" style="font-family: 'Times New Roman', Times, serif"/>
        <input name="reset" type="reset" value="Hủy bỏ" style="font-family: 'Times New Roman', Times, serif"/>
        </td>
		</tr>
    </table>    
</form>
</div>
<?php
if(isset($_GET['action']))
{
	if($_GET['action']=='logout')
	{
		unset($_SESSION['loggedUser']);
		unset($_SESSION['logUser']);
		header ('Location: login.php');
	}
}
?>
<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['remember']) AND $_POST['remember']=="on")
	{
		$_SESSION['remember']=$_POST['remember'];
		//$_SESSION['username']=$_POST['username'];
		//$_SESSION['password']=$_POST['password'];
	}
	$strSQL = "SELECT * FROM users WHERE username ='".$_POST['username']."'";
	$result = mysql_query($strSQL, $link);
	$num = mysql_num_rows($result);
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($num > 0)
	{
		$row = mysql_fetch_array($result);
		if(md5($_POST['password'])==$row['password'])
		{
			$_SESSION['loggedUser']=$row['username'];
			$_SESSION['logUser']=$row['id'];
			$_SESSION['state']=$row['state'];
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