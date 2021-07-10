<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới tài khoản</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tên tài khoản (*) :</td>
        <td><input type="text" name="username" id="username" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Mật khẩu (*) :</td>
        <td><input type="password" name="password" id="password" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Họ và Tên (*) :</td>
        <td><input type="text" name="name" id="name" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Ngày sinh (*) :</td>
        <td><input type="text" name="birthday" id="birthday" class="datepicker" style="width: 180px; border: 1px solid #ccc;"/></td>
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
        <td><textarea name="address" id="address" style="width: 400px; height: 100px; border: 1px solid #ccc;"></textarea></td>
    </tr>
    <tr>
    	<td>Tỉnh / Thành phố (*) :</td>
        <td><input type="text" name="country" id="country" style="width: 400px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Nơi làm việc (*) :</td>
        <td><textarea name="place_of_work" id="place_of_work" style="width: 400px; height: 100px; border: 1px solid #ccc;"></textarea></td>
    </tr>
    <tr>
    	<td>Điện thoại (*) :</td>
        <td><input type="text" name="tel" id="tel" style="width: 200px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Hình đại diện :</td>
        <td><input type="file" name="avatar" id="avatar"/></td>
    </tr>
    <tr>
    	<td>Email (*) :</td>
        <td><input type="text" name="email" id="email" style="width: 400px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Yahoo (*) :</td>
        <td><input type="text" name="yahoo" id="yahoo" style="width: 400px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Skype (*) :</td>
        <td><input type="text" name="skype" id="skype" style="width: 400px; border: 1px solid #ccc;"/></td>
    </tr>
    	<tr>
        <td>Ngày tạo :</td>
        <td>
        <input type="text" name="date" id="date" class="datetimepicker" style="width: 180px; border: 1px solid #ccc;"/>
        </td>
        </tr>
        <tr>
        <td>Trạng thái :</td>
        <td>
        <label>
        <input name="state" id="state" type="radio" value="1" checked />Hoạt động
        </label>
        <label>
        <input name="state" id="state" type="radio" value="0" />Khóa
        </label>
        </td>
        </tr>
        <tr>
        <td>Quyền (*):</td>
        <td>
        <select name="Role" style="font-size: 12px; width: 200px; font-family: Arial, Helvetica, sans-serif;">

        <option value="1">Admin</option>
        <option value="2">Support</option>
        <option value="3">User</option>
        </select>
        </td>
        </tr>
        <tr>
        <td></td>
        <td>
        <input type="submit" name="btnAdd" id="btnAdd" value="Thêm" />
        <input type="reset" name="btnReset" id="btnReset" value="Làm lại" />
        </td>
        </tr>
    
    </table>
</form>
</div>
<?php
if(isset($_POST['btnAdd']))
{
	$save_path="uploaded/avatar/";
	$file=$_FILES['avatar'];
	$type=$_FILES['avatar']['type'];

	if($file['size']>0)
	{
		if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
		{
			move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			$sql="INSERT INTO users(username,password,name,birthday,sex,address,country,place_of_work,tel,avatar,email,yahoo,skype,date,state,Role) 
		VALUES ('".$_POST['username']."','".md5($_POST['password'])."','".$_POST['name']."','".$_POST['birthday']."','".$_POST['sex']."','".$_POST['address']."','".$_POST['country']."','".$_POST['place_of_work']."','".$_POST['tel']."','".$save_path.$file['name']."','".$_POST['email']."','".$_POST['yahoo']."','".$_POST['skype']."','".$_POST['date']."','".$_POST['state']."','".$_POST['Role']."')";
		}
		else
		{
			echo 'Bạn không được phép upload loại file này';
		}		
	}
	else
	{
		$sql="INSERT INTO users(username,password,name,birthday,sex,address,country,place_of_work,tel,email,yahoo,skype,date,state,Role) 
		VALUES ('".$_POST['username']."','".md5($_POST['password'])."','".$_POST['name']."','".$_POST['birthday']."','".$_POST['sex']."','".$_POST['address']."','".$_POST['country']."','".$_POST['place_of_work']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['yahoo']."','".$_POST['skype']."','".$_POST['date']."','".$_POST['state']."','".$_POST['Role']."')";
	}
		$re=mysql_query($sql,$link);
		if($re)
		{
		header('Location: users.php');
		}
		else
		{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}	
}
?>