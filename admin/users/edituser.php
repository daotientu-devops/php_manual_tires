<?php
if(isset($_GET['uid']))
{
	$strSQL = "SELECT * FROM users WHERE id ='".$_GET['uid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: users.php');
}
?>

<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa tài khoản</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tên tài khoản (*) :</td>
        <td><input type="text" name="username" id="username" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['username']; ?>" /></td>
    </tr>
    <!--<tr>
    	<td>Mật khẩu (*) :</td>
        <td><input type="password" name="password" id="password" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>-->
    <tr>
    	<td>Họ và Tên (*) :</td>
        <td><input type="text" name="name" id="name" style="width: 200px; border: 1px solid #ccc;"value="<?php echo $row['name']; ?>"/></td>
    </tr>
    <tr>
    	<td>Ngày sinh (*) :</td>
        <td><input type="text" name="birthday" id="birthday" class="datepicker" style="width: 180px; border: 1px solid #ccc;" value="<?php echo $row['birthday']; ?>"/></td>
    </tr>
    <tr>
        <td>Giới tính :</td>
        <td>
        <label>
        <input name="sex" id="sex" type="radio" value="1" checked />Nam
        </label>
        <label>
        <input name="sex" id="sex" type="radio" value="2" />Nữ
        </label>
        </td>
    </tr>
    <tr>
    	<td>Địa chỉ (*) :</td>
        <td><textarea name="address" id="address" style="width: 400px; height: 100px; border: 1px solid #ccc;"><?php echo $row['address']; ?></textarea></td>
    </tr>
    <tr>
    	<td>Tỉnh / Thành phố (*) :</td>
        <td><input type="text" name="country" id="country" style="width: 400px; border: 1px solid #ccc;" value="<?php echo $row['country']; ?>"/></td>
    </tr>
    <tr>
    	<td>Nơi làm việc (*) :</td>
        <td><textarea name="place_of_work" id="place_of_work" style="width: 400px; height: 100px; border: 1px solid #ccc;"><?php echo $row['place_of_work']; ?></textarea></td>
    </tr>
    <tr>
    	<td>Điện thoại (*) :</td>
        <td><input type="text" name="tel" id="tel" style="width: 200px; border: 1px solid #ccc;"  value="<?php echo $row['tel']; ?>"/></td>
    </tr>
    <tr>
    	<td>Hình đại diện :</td>
        <td><input type="file" name="avatar" id="avatar"/>
        </td>
    </tr>
    <tr>
    	<td></td>
        <td><img src="<?php echo $row['avatar']; ?>" alt="" border="1" width="100px" /></td>
    </tr>
    <tr>
    	<td>Email (*) :</td>
        <td><input type="text" name="email" id="email" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['email']; ?>"/></td>
    </tr>
    <tr>
    	<td>Yahoo (*) :</td>
        <td><input type="text" name="yahoo" id="yahoo" style="width: 400px; border: 1px solid #ccc;" value="<?php echo $row['yahoo']; ?>"/></td>
    </tr>
    <tr>
    	<td>Skype (*) :</td>
        <td><input type="text" name="skype" id="skype" style="width: 400px; border: 1px solid #ccc;" value="<?php echo $row['skype']; ?>"/></td>
    </tr>
    	<tr>
        <td>Ngày tạo :</td>
        <td>
        <input type="text" name="date" id="date" class="datetimepicker" style="width: 180px; border: 1px solid #ccc;"  value="<?php echo $row['date']; ?>"/>
        </td>
        </tr>
        <tr>
        <td>Trạng thái :</td>
        <td>
        <label>
        <input name="state" id="state" type="radio" value="1" <?php if($row['state']==1) echo 'checked'; ?>/>Hoạt động
        </label>
        <label>
        <input name="state" id="state" type="radio" value="0" <?php if($row['state']==0) echo 'checked'; ?>/>Khóa
        </label>
        </td>
        </tr>
        <tr>
        <td>Quyền (*):</td>
        <td>
        <select name="Role" style="font-size: 12px; width: 200px; font-family: Arial, Helvetica, sans-serif;">
        <option value="1" <?php if($row['Role']==1) echo 'selected'; ?>>Admin</option>
        <option value="2" <?php if($row['Role']==2) echo 'selected'; ?>>Support</option>
        <option value="3" <?php if($row['Role']==3) echo 'selected'; ?>>User</option>
        </select>
        </td>
        </tr>
    	<tr>
        <td></td>
        <td>
        <input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='users.php'" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if (isset($_POST['btnUpdate']))
{
	$save_path="uploaded/avatar/";
	$file=$_FILES['avatar'];
	$type=$_FILES['avatar']['type'];
	if($file['size']>0)
	{
		if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
		{
			move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			$strSQL4 = "UPDATE users SET username='".$_POST['username']."',name='".$_POST['name']."',birthday='".$_POST['birthday']."',sex='".$_POST['sex']."',address='".$_POST['address']."',country='".$_POST['country']."',place_of_work='".$_POST['place_of_work']."',tel='".$_POST['tel']."',avatar='".$save_path.$file['name']."',email='".$_POST['email']."',yahoo='".$_POST['yahoo']."',skype='".$_POST['skype']."',date='".$_POST['date']."',state='".$_POST['state']."',Role='".$_POST['Role']."' WHERE id ='".$row['id']."'";
		}
		else
		{
			echo 'Bạn không được phép upload loại file này';
		}
	}
	else
	{
		$strSQL4 = "UPDATE users SET username='".$_POST['username']."',name='".$_POST['name']."',birthday='".$_POST['birthday']."',sex='".$_POST['sex']."',address='".$_POST['address']."',country='".$_POST['country']."',place_of_work='".$_POST['place_of_work']."',tel='".$_POST['tel']."',email='".$_POST['email']."',yahoo='".$_POST['yahoo']."',skype='".$_POST['skype']."',date='".$_POST['date']."',state='".$_POST['state']."',Role='".$_POST['Role']."' WHERE id ='".$row['id']."'";
	}
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: users.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>