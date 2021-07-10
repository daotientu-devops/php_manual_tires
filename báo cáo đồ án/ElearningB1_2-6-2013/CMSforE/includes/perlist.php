<?php
if(isset($_GET['perid']))
{
$sql = "SELECT * FROM users WHERE id='".$_GET['perid']."'";
$result = mysql_query($sql,$link);
$row = mysql_fetch_array($result);
}
else
{
	header('Location: index.php');
}
?>
<div class="heading" style="border: 1px solid #790000;">

<div class="title">
<font color="#790000">&raquo; Hồ sơ cá nhân của bạn được lưu trữ trong này &raquo; <?php echo $row['name']; ?> &raquo; Cập nhật hồ sơ cá nhân</font>
</div>
<div class="icon_profile">
</div>
</div>
<div class="content">
<div class="uleft">
<div style="margin-top: 10px; text-align: center; font-size: 18px; font-weight: bold;"><?php echo $row['name']; ?></div>
<form action="#" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="3" cellpadding="3">
	<tr>
    <td></td>
	<td></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000; ">Mã quản trị viên:</div></td>
    <td align="left"><div style="font-weight: bold; color: #790000; "><?php echo $row['id']; ?></div></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Họ và tên:</div></td>
    <td align="left"><input type="text" name="name" id="name" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row['name']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Ngày sinh:</div></td>
    <td align="left">
    <div style="font-weight: bold; color: #790000">Ngày
    <input type="text" name="date" id="date" style="width: 30px; border: 1px solid #790000; text-align: center;" value="<?php echo $row['date']; ?>"/>
    Tháng
    <input type="text" name="month" id="month" style="width: 30px; border: 1px solid #790000; text-align: center;" value="<?php echo $row['month']; ?>"/>
    Năm
    <input type="text" name="year" id="year" style="width: 50px; border: 1px solid #790000; text-align: center;" value="<?php echo $row['year']; ?>"/>
    </div>
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Giới tính:</div></td>
    <td align="left"><input type="text" name="sex" id="sex" style="width: 50px; border: 1px solid #790000;" value="<?php echo $row['sex']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Địa chỉ Email:</div></td>
    <td align="left"><input type="text" name="email" id="email" style="width: 400px; border: 1px solid #790000;" value="<?php echo $row['email']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Địa chỉ hiện tại:</div></td>
    <td align="left"><textarea name="address" id="address" style="width: 400px; height: 40px;border: 1px solid #790000;"><?php echo $row['address']; ?></textarea></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Thành phố / Tỉnh:</div></td>
    <td align="left"><input type="text" name="country" id="country" style="width: 300px; border: 1px solid #790000;" value="<?php echo $row['country']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nơi công tác:</div></td>
    <td align="left"><textarea name="place_of_work" id="place_of_work" style="width: 400px; height: 40px;border: 1px solid #790000; color: #790000"><?php echo $row['place_of_work']; ?></textarea></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số điện thoại:</div></td>
    <td align="left"><input type="text" name="tel" id="tel" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row['tel']; ?>"/></td>
    </tr>
    
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Ảnh đại diện:</div></td>
    <td align="left"><input name="userfile" id="userfile" type="file" style="border: 1px solid #790000; width: 200px; color: #790000"/></td>
    </tr>
    
    <tr>
    <td align="right"></td>
    <td align="left">
    <input type="submit" name="sSubmit" value="Cập nhật hồ sơ" style="font-family: 'Times New Roman', Times, serif"/>
    </td>
    </tr>
</table>
</form>
<hr style="border-top: 1px solid #ccc;"/>
<form action="#" method="post" enctype="multipart/form-data" id="form_changePass">
<table border="0" cellspacing="3" cellpadding="3">
	<tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Mật khẩu:</div></td>
    <td align="left"><input type="password" name="password" id="password" style="width: 300px; border: 1px solid #790000; background: #F7F5AF;" value="<?php echo $row['password']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nhập lại mật khẩu:</div></td>
    <td align="left"><input type="password" name="rePassword" id="rePassword" style="width: 300px; border: 1px solid #790000; background: #f3f3f3;"/></td>
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">
    <input type="submit" name="submitChangePass" value="Đổi mật khẩu" style="font-family: 'Times New Roman', Times, serif"/>
    </td>
    </tr>
</table>
</form>
<?php
	if(isset($_POST['submitChangePass']))
	{
		$strSQL="UPDATE users SET password='".md5($_POST['password'])."' WHERE id='".$row['id']."'";
		$query=mysql_query($strSQL,$link);
		if($query)
		{
			header('Location: index.php');
		}
		else
		{
			echo '<h3>Đổi mật khẩu thất bại. Vui lòng thử lại sau</h3>';
		}
	}
?>
<?php
	if(isset($_POST['sSubmit']))
	{
		$save_path="uploaded/avatar/"; 
    	$file = $_FILES['userfile']; 
		$type = $_FILES['userfile']['type'];
		if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
		{
		move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
		}
		else
		echo 'Bạn không được phép upload loại file này';
		if($file['size'] > 0)
		{
		$stSQL2 = "UPDATE users SET name='".$_POST['name']."', date='".$_POST['date']."', month='".$_POST['month']."',year='".$_POST['year']."', sex='".$_POST['sex']."', address='".$_POST['address']."', country='".$_POST['country']."', place_of_work='".$_POST['place_of_work']."', tel='".$_POST['tel']."', email='".$_POST['email']."', avatar='".$save_path.$file['name']."', RoleID='".$_POST['role']."' WHERE id='".$row['id']."'";
		}
		else
		{
		$stSQL2 = "UPDATE users SET name='".$_POST['name']."', date='".$_POST['date']."', month='".$_POST['month']."',year='".$_POST['year']."', sex='".$_POST['sex']."', address='".$_POST['address']."', country='".$_POST['country']."', place_of_work='".$_POST['place_of_work']."', tel='".$_POST['tel']."', email='".$_POST['email']."', RoleID='".$_POST['role']."' WHERE id='".$row['id']."'";
		}
		$result2 = mysql_query($stSQL2, $link);
		if($result2)
		{
		header('Location: index.php');
		}
		else
		{
		echo 'Có lỗi xảy ra';
		}
			
		
	}
	
?>
<!--<div style="font-size: 14px; text-align: center; text-transform: uppercase;"><b>Bảng điểm</b></div><br/>
<form>
<table border="0" cellspacing="0" cellpadding="2">
	<tr>
    <td style="width: 29px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">STT</div></td>      
    <td style="width: 99px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tên bài test</div></td>
    <td style="width: 99px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Mã bài test</div></td>
    <td style="width: 99px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Thời gian test</div></td>
    <td style="width: 79px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm phần nghe</div></td>
    <td style="width: 77px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm phần đọc</div></td>
    <td style="width: 79px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm phần viết</div></td>
    <td style="width: 70px; height: 40px; padding: 4px 0px; background: #70201f;"><div style="font-weight: bold; color: #FFF; text-align: center">Tổng điểm</div></td>
    </tr>

</table>
</form>-->
</div>
</div>