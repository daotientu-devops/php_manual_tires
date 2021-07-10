<?php
if(isset($_GET['uid']))
{
	$strSQL5 = "SELECT * FROM users WHERE id='".$_GET['uid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: administrators.php');
}
?>
<div class="conleft" style="border-bottom: 1px solid #70201f;">
<form action="#" method="post" enctype="multipart/form-data" id="form_user">
<table border="0" cellpadding="2" cellspacing="2">

	<tr>
    <td align="right"><div style="font-weight: bold; color: #790000">ID:</div></td>
    <td align="left"><?php echo $row5['id']; ?></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên đăng nhập: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="username" id="username" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['username']; ?>"/></td>
    </tr>
    
	<!--<tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Mật khẩu: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="password" name="password" id="password" style="width: 200px; border: 1px solid #790000;" value="<?php //echo $row5['password']; ?>"/></td>
    </tr>-->
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Họ và Tên: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="name" id="name" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row5['name']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Ngày sinh:</div></td>
	<td align="left">
	<select name="date" style="border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif">
	<option value="">Ngày</option>
	<?php
	for($d = 1;$d < 32;$d++)
	{
		echo '<option value="'.$d.'">'.$d.'</option>';
	}
	?>
	</select>
	<select name="month" style="border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif">
	<option value="">Tháng</option>
	<?php
	for($m = 1;$m < 13;$m++)
	{
		echo '<option value="'.$m.'">'.$m.'</option>';
	}
	?>
	</select>
	</select>
	<select name="year" style="border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif">
	<option value="">Năm</option>
	<?php
	$current_year = date('Y');	//Lấy năm hiện tại trên máy
	$year_later = $current_year - 100;
	for($y = $current_year;$y>=$year_later;$y--)
	{
		echo '<option value="'.$y.'">'.$y.'</option>';
	}
	?>
	</select>
	</td>
	</tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Giới tính:</div></td>
    <td align="left">
    <input type="radio" name="sex" value="Nam" <?php if($row5['sex']=='Nam') echo 'checked';?>/>Nam
    <input type="radio" name="sex" value="Nữ" <?php if($row5['sex']=='Nữ') echo 'checked';?>/>Nữ
    </td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Địa chỉ: <font color="#FF0000">*</font></div></td>
    <td align="left"><textarea name="address" id="address" style="width: 400px; height: 40px;border: 1px solid #790000; color: #790000"><?php echo $row5['address']; ?></textarea></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Quốc gia/Thành phố:</div></td>
    <td align="left"><input type="text" name="country" style="width: 400px;border: 1px solid #790000; color: #790000"" value="<?php echo $row5['country']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nơi công tác:</div></td>
    <td align="left"><textarea name="place_of_work" style="width: 400px; height: 40px;border: 1px solid #790000; color: #790000"><?php echo $row5['place_of_work']; ?></textarea></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Điện thoại liên hệ: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="tel" id="tel" style="width: 200px;border: 1px solid #790000; color: #790000" value="<?php echo $row5['tel']; ?>"/></td>
    </tr>
    
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình đại diện:</div></td>
    <td align="left"><input name="userfile" id="userfile" type="file" style="width: 200px; color: #790000; border: 1px solid #790000;" />
    </td>
    </tr>
    <tr>
   	<td align="right"></td>
    <td align="left"><input type="text" style="width: 400px; border: 1px solid #790000;" value="<?php echo $row5['avatar']; ?>"/>
    </td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Địa chỉ gmail: <font color="#FF0000">*</font></div></td>
    <td align="left"><input type="text" name="email" id="email" style="width: 300px; border: 1px solid #790000;" value="<?php echo $row5['email']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Phân quyền: <font color="#FF0000">*</font></div></td>
    <td align="left">
    <select name="role" style="border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif">
	<option value="Admin" <?php if($row5['RoleID']=='Admin') echo 'selected';?>>Admin</option>
    <option value="Teacher" <?php if($row5['RoleID']=='Teacher') echo 'selected';?>>Teacher</option>
    <option value="Student" <?php if($row5['RoleID']=='Student') echo 'selected';?>>Student</option>
	</select>
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight:bold; text-align:center; color: #790000;">Trạng thái:</div></td>
    <td align="left">
    <select name="state" style="font-size:13px; font-family: 'Times New Roman', Times, serif; color: #790000;">
        <option value="1" <?php if($row5['state']==1) echo 'selected';?>>Hiện</option>
        <option value="0" <?php if($row5['state']==0) echo 'selected';?>>Ẩn</option>
    </select>
    </td>
    </tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Xác nhận" style="font-family:'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="administrators.php"'/>
    </td> 
    </tr>
    
</table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$save_path="uploaded/avatar/"; 
    $file = $_FILES['userfile'];    
    move_uploaded_file($file['tmp_name'], $save_path.$file['name']);	
	$stSQL2 = "";
	if($file['size'] > 0)
	{
		$stSQL2 = "UPDATE users SET username='".$_POST['username']."', name='".$_POST['name']."', date='".$_POST['date']."', month='".$_POST['month']."',year='".$_POST['year']."', sex='".$_POST['sex']."', address='".$_POST['address']."', country='".$_POST['country']."', place_of_work='".$_POST['place_of_work']."', tel='".$_POST['tel']."', email='".$_POST['email']."', avatar='".$save_path.$file['name']."', RoleID='".$_POST['role']."', state='".$_POST['state']."' WHERE id='".$row5['id']."'";
	}
	else
	{
		$stSQL2 = "UPDATE users SET username='".$_POST['username']."', name='".$_POST['name']."', date='".$_POST['date']."', month='".$_POST['month']."',year='".$_POST['year']."', sex='".$_POST['sex']."', address='".$_POST['address']."', country='".$_POST['country']."', place_of_work='".$_POST['place_of_work']."', tel='".$_POST['tel']."', email='".$_POST['email']."', RoleID='".$_POST['role']."', state='".$_POST['state']."' WHERE id='".$row5['id']."'";
	}
	$result2 = mysql_query($stSQL2, $link);
	if($result2)
	{
		header('Location: administrators.php');
	}
	else
	{
		echo 'Có lỗi xảy ra';
	}
}
?>

