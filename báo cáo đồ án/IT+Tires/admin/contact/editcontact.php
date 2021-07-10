<?php
if(isset($_GET['conid']))
{
	$strSQL = "SELECT * FROM contact WHERE id ='".$_GET['conid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: contact.php');
}
?>

<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa thông tin liên hệ</h2>
</div>

<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Tên khách hàng (*) :</td>
        <td><input type="text" name="name" id="name" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['name']; ?>"/></td>
    </tr>
    <tr>
    	<td>Công ty (*) :</td>
        <td>
        <textarea name="place_of_work" id="place_of_work" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['place_of_work']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Địa chỉ (*) :</td>
        <td>
        <textarea name="address" id="address" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['address']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Điện thoại (*) :</td>
        <td><input type="text" name="tel" id="tel" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['tel']; ?>"/></td>
    </tr>
    <tr>
    	<td>Số fax :</td>
        <td><input type="text" name="fax" id="fax" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['fax']; ?>"/></td>
    </tr>
    <tr>
    	<td>Tỉnh / Thành phố (*) :</td>
        <td>
    <select name="country" id="country" style="width: 220px; border: 1px solid #ccc;">
    <option value=""></option>
    	<option value="Hà Nội" <?php if($row['country']=='Hà Nội') echo 'selected'; ?>>Hà Nội</option>
		<option value="Hồ Chí Minh" <?php if($row['country']=='Hồ Chí Minh') echo 'selected'; ?>>Hồ Chí Minh</option>
		<option value="Đà Nẵng" <?php if($row['country']=='Đà Nẵng') echo 'selected'; ?>>Đà Nẵng</option>
		<option value="Cần Thơ" <?php if($row['country']=='Cần Thơ') echo 'selected'; ?>>Cần Thơ</option>
		<option value="An Giang" <?php if($row['country']=='An Giang') echo 'selected'; ?>>An Giang</option>
		<option value="Bà Rịa - Vũng Tàu" <?php if($row['country']=='Bà Rịa - Vũng Tàu') echo 'selected'; ?>>Bà Rịa - Vũng Tàu</option>
		<option value="Bắc Giang" <?php if($row['country']=='Bắc Giang') echo 'selected'; ?>>Bắc Giang</option>
		<option value="Bắc Kạn" <?php if($row['country']=='Bắc Kạn') echo 'selected'; ?>>Bắc Kạn</option>
		<option value="Bạc Liêu" <?php if($row['country']=='Bạc Liêu') echo 'selected'; ?>>Bạc Liêu</option>
		<option value="Bắc Ninh" <?php if($row['country']=='Bắc Ninh') echo 'selected'; ?>>Bắc Ninh</option>
		<option value="Bến Tre" <?php if($row['country']=='Bến Tre') echo 'selected'; ?>>Bến Tre</option>
		<option value="Bình Định" <?php if($row['country']=='Bình Định') echo 'selected'; ?>>Bình Định</option>
		<option value="Bình Dương" <?php if($row['country']=='Bình Dương') echo 'selected'; ?>>Bình Dương</option>
		<option value="Bình Phước" <?php if($row['country']=='Bình Phước') echo 'selected'; ?>>Bình Phước</option>
		<option value="Bình Thuận" <?php if($row['country']=='Bình Thuận') echo 'selected'; ?>>Bình Thuận</option>
		<option value="Cà Mau" <?php if($row['country']=='Cà Mau') echo 'selected'; ?>>Cà Mau</option>
		<option value="Cao Bằng" <?php if($row['country']=='Cao Bằng') echo 'selected'; ?>>Cao Bằng</option>
		<option value="Đăk Lăk" <?php if($row['country']=='Đăk Lăk') echo 'selected'; ?>>Đăk Lăk</option>
		<option value="Đăk Nông" <?php if($row['country']=='Đăk Nông') echo 'selected'; ?>>Đăk Nông</option>
		<option value="Điện Biên" <?php if($row['country']=='Điện Biên') echo 'selected'; ?>>Điện Biên</option>
		<option value="Đồng Nai" <?php if($row['country']=='Đồng Nai') echo 'selected'; ?>>Đồng Nai</option>
		<option value="Đồng Tháp" <?php if($row['country']=='Đồng Tháp') echo 'selected'; ?>>Đồng Tháp</option>
		<option value="Gia Lai" <?php if($row['country']=='Gia Lai') echo 'selected'; ?>>Gia Lai</option>
		<option value="Hà Giang" <?php if($row['country']=='Hà Giang') echo 'selected'; ?>>Hà Giang</option>
		<option value="Hà Nam" <?php if($row['country']=='Hà Nam') echo 'selected'; ?>>Hà Nam</option>
		<option value="Hà Tĩnh" <?php if($row['country']=='Hà Tĩnh') echo 'selected'; ?>>Hà Tĩnh</option>
		<option value="Hải Dương" <?php if($row['country']=='Hải Dương') echo 'selected'; ?>>Hải Dương</option>
		<option value="Hải Phòng" <?php if($row['country']=='Hải Phòng') echo 'selected'; ?>>Hải Phòng</option>
		<option value="Hậu Giang" <?php if($row['country']=='Hậu Giang') echo 'selected'; ?>>Hậu Giang</option>
		<option value="Hòa Bình" <?php if($row['country']=='Hòa Bình') echo 'selected'; ?>>Hòa Bình</option>
		<option value="Huế" <?php if($row['country']=='Huế') echo 'selected'; ?>>Huế</option>
		<option value="Hưng Yên" <?php if($row['country']=='Hưng Yên') echo 'selected'; ?>>Hưng Yên</option>
		<option value="Khánh Hòa" <?php if($row['country']=='Khánh Hòa') echo 'selected'; ?>>Khánh Hòa</option>
		<option value="Kiên Giang" <?php if($row['country']=='Kiên Giang') echo 'selected'; ?>>Kiên Giang</option>
		<option value="Kon Tum" <?php if($row['country']=='Kon Tum') echo 'selected'; ?>>Kon Tum</option>
		<option value="Lai Châu" <?php if($row['country']=='Lai Châu') echo 'selected'; ?>>Lai Châu</option>
		<option value="Lâm Đồng" <?php if($row['country']=='Lâm Đồng') echo 'selected'; ?>>Lâm Đồng</option>
		<option value="Lạng Sơn" <?php if($row['country']=='Lạng Sơn') echo 'selected'; ?>>Lạng Sơn</option>
		<option value="Lào Cai" <?php if($row['country']=='Lào Cai') echo 'selected'; ?>>Lào Cai</option>
		<option value="Long An" <?php if($row['country']=='Long An') echo 'selected'; ?>>Long An</option>
		<option value="Nam Định" <?php if($row['country']=='Nam Định') echo 'selected'; ?>>Nam Định</option>
		<option value="Nghệ An" <?php if($row['country']=='Nghệ An') echo 'selected'; ?>>Nghệ An</option>
		<option value="Ninh Bình" <?php if($row['country']=='Ninh Bình') echo 'selected'; ?>>Ninh Bình</option>
		<option value="Ninh Thuận" <?php if($row['country']=='Ninh Thuận') echo 'selected'; ?>>Ninh Thuận</option>
		<option value="Phú Thọ" <?php if($row['country']=='Phú Thọ') echo 'selected'; ?>>Phú Thọ</option>
		<option value="Phú Yên" <?php if($row['country']=='Phú Yên') echo 'selected'; ?>>Phú Yên</option>
		<option value="Quảng Bình" <?php if($row['country']=='Quảng Bình') echo 'selected'; ?>>Quảng Bình</option>
		<option value="Quảng Nam" <?php if($row['country']=='Quảng Nam') echo 'selected'; ?>>Quảng Nam</option>
		<option value="Quảng Ngãi" <?php if($row['country']=='Quảng Ngãi') echo 'selected'; ?>>Quảng Ngãi</option>
		<option value="Quảng Ninh" <?php if($row['country']=='Quảng Ninh') echo 'selected'; ?>>Quảng Ninh</option>
		<option value="Quảng Trị" <?php if($row['country']=='Quảng Trị') echo 'selected'; ?>>Quảng Trị</option>
		<option value="Sóc Trăng" <?php if($row['country']=='Sóc Trăng') echo 'selected'; ?>>Sóc Trăng</option>
		<option value="Sơn La" <?php if($row['country']=='Sơn La') echo 'selected'; ?>>Sơn La</option>
		<option value="Tây Ninh" <?php if($row['country']=='Tây Ninh') echo 'selected'; ?>>Tây Ninh</option>
		<option value="Thái Bình" <?php if($row['country']=='Thái Bình') echo 'selected'; ?>>Thái Bình</option>
		<option value="Thái Nguyên" <?php if($row['country']=='Thái Nguyên') echo 'selected'; ?>>Thái Nguyên</option>
		<option value="Thanh Hóa" <?php if($row['country']=='Thanh Hóa') echo 'selected'; ?>>Thanh Hóa</option>
		<option value="Tiền Giang" <?php if($row['country']=='Tiền Giang') echo 'selected'; ?>>Tiền Giang</option>
		<option value="Trà Vinh" <?php if($row['country']=='Trà Vinh') echo 'selected'; ?>>Trà Vinh</option>
		<option value="Tuyên Quang" <?php if($row['country']=='Tuyên Quang') echo 'selected'; ?>>Tuyên Quang</option>
		<option value="Vĩnh Long" <?php if($row['country']=='Vĩnh Long') echo 'selected'; ?>>Vĩnh Long</option>
		<option value="Vĩnh Phúc" <?php if($row['country']=='Vĩnh Phúc') echo 'selected'; ?>>Vĩnh Phúc</option>
		<option value="Yên Bái" <?php if($row['country']=='Yên Bái') echo 'selected'; ?>>Yên Bái</option>  
    </select>
        </td>
    </tr>
    <tr>
    	<td>Email (*) :</td>
        <td><input type="text" name="email" id="email" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['email']; ?>"/></td>
    </tr>
    <tr>
    	<td>Tiêu đề(*) :</td>
        <td>
        <textarea name="title" id="title" style="width: 600px; height: 60px; border: 1px solid #ccc;"><?php echo $row['title']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Nội dung (*) :</td>
        <td>
        <textarea name="content" id="content" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['content']; ?></textarea> 
        </td>
    </tr>
    <tr>
        <td>Ngày tạo :</td>
        <td>
        <input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['date']; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Trạng thái (*) :</td>
        <td>
        <select name="state" style="font-family: 'Times New Roman', Times, serif;">
    
        <option value="0" <?php if($row['state']=='0') echo 'selected';?>>Chờ trả lời</option>
        <option value="1" <?php if($row['state']=='1') echo 'selected';?>>Đã trả lời</option>
        </select>
        </td>
	</tr>
    <tr>
        <td></td>
        <td>
        <input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='contact.php'" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnUpdate']))
{
	$strSQL4 = "UPDATE contact SET name='".$_POST['name']."',address='".$_POST['address']."',tel='".$_POST['tel']."',fax='".$_POST['fax']."',email='".$_POST['email']."',title='".$_POST['title']."',content='".$_POST['content']."',date='".$_POST['date']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: contact.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
	
}
?>
