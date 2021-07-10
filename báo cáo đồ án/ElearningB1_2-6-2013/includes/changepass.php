<div class="heading">
<div class="title">
Thay đổi mật khẩu &raquo;|</div>
<div class="icon_ChangePass">
</div>
</div>
<?php
	if(!isset($_SESSION['logUser']))
	{
		header('Location: login.php');
	}
	else
	{
		$strSQL="SELECT * FROM users WHERE id=".$_SESSION['logUser'];	
		$result=mysql_query($strSQL, $link);
		$row=mysql_fetch_array($result);
	}

?>
<div class="userleft">
	<form action="#" method="post" enctype="multipart/form-data" id="form_changePass">
    <table border="0" cellpadding="2" cellspacing="2">
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Tên đăng nhập:</div></td>
    <td align="left"><div style="font-weight: bold; color: #790000"><?php echo $row['username']; ?></div></td>
    </tr>
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Mật khẩu mới: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="password" name="password" id="password" style="width: 200px; border: 1px solid #790000;" /></td>
    </tr>
    <tr>
    <td align="left"><div style="font-weight: bold; color: #790000">Nhập lại mật khẩu mới: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="password" name="repassword" id="repassword" style="width: 200px; border: 1px solid #790000;" /></td>
    </tr>
    <tr>
	<td></td>
    <td align="left">
    <input type="submit" name="submit" value="Lưu thay đổi" style="font-family: 'Times New Roman', Times, serif" />
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family: 'Times New Roman', Times, serif"/>
    </td>
    </tr>
    </table>
    
    </form>
</div>
<?php
	if(isset($_POST['submit']))
	{
		$strSQL2="UPDATE users SET password='".md5($_POST['password'])."' WHERE id='".$_SESSION['logUser']."'";
		$result2=mysql_query($strSQL2,$link);
		if($result2)
		{
			header('Location: usercp.php');	
		}
		else
		{
			echo 'Thao tác lỗi. Xin vui lòng thử lại sau';
		}
	}
?>