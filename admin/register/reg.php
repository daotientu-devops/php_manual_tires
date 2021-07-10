<div class="login" style="height:468px;">
    <div class="title" style="width:560px;margin:10px;padding:0 10px;background:#faebd7;border-radius:4px;border:1px solid #ccc;"> <font style="color:#8b4513;">Đăng ký tài khoản</font></div>
    <div class="ContentLog">
    	<form action="#" method="post">
        <fieldset style="width:560px;margin:0 auto;border-radius:4px;border:1px solid #ccc;padding:10px;">
            <legend><font style="color:#8b4513;font-weight:bold;text-decoration:underline;">Tài khoản mới</font></legend>
            <table width="100%" border="1" cellpadding="4" cellspacing="4" class="csstable">
                <tr>
                    <td>Tài khoản :</td>
                    <td>
                    	<input type="text" name="username" class="styleTextBox" style="width:215px;"/>
                    </td>
                </tr>
                <tr>
                	<td>Mật khẩu :</td>
                	<td>
                		<input type="password" name="password" class="styleTextBox" style="width:215px;"/>
                	</td>
                </tr>
                <tr>
                	<td>Xác nhận mật khẩu :</td>
                	<td>
                		<input type="password" name="verify_password" class="styleTextBox" style="width:215px;"/>
                	</td>
                </tr>
            </table>
        </fieldset>
        <fieldset style="width:560px;margin:0 auto;border-radius:4px;border:1px solid #ccc;padding:10px;margin-top:8px;">
            <legend><font style="color:#8b4513;font-weight:bold;text-decoration:underline;">Contact Information</font></legend>
            <table width="100%" border="1" cellpadding="4" cellspacing="4" class="csstable">
                <tr>
                    <td width="177px">Họ và tên :</td>
                    <td><input type="text" name="name" class="styleTextBox" style="width:215px;"/></td>
                </tr>
                <tr>
                	<td>Địa chỉ email :</td>
                	<td><input type="text" name="email" class="styleTextBox" style="width:215px;"/></td>
                </tr>
                <tr>
                	<td>Quyền :</td>
                	<td>
                		<select name="role" class="styleSelectBox" style="width:120px;">
                			<option value="">-- Lựa chọn --</option>
                			<option value="1">Admin</option>
                			<option value="2">Support</option>
                			
                		</select>
                	</td>
                </tr>
                <tr>
                	<td></td>
                	<td>
                		<input type="submit" name="btnRegister" value="Đăng ký" class="styleButtonSubmit"/>
                		<input type="button" name="btnBack" value="Quay lại" onclick="window.location='login.php'"/>
                	</td>
                </tr>
        	</table>
        </fieldset>
        </form>
    </div>
</div>
<?php
	if(isset($_POST['btnRegister'])){
		$qr=mysql_query("INSERT INTO users(username,password,name,email,Role) VALUES('".$_POST['username']."','".md5($_POST['password'])."','".$_POST['name']."','".$_POST['email']."','".$_POST['role']."')");
		if($qr){
			header('Location: login.php');
		}else{
			echo '<h1>Đăng ký tài khoản thất bại..!</h1>';
		}
	}
?>