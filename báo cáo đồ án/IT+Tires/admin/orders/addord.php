<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới hóa đơn</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Ngày đặt hàng (*) :</td>
        <td><input type="text" name="orderDate" id="orderDate" style="width: 200px; border: 1px solid #ccc;" class="datetimepicker"/></td>
    </tr>
    <tr>
    	<td>Ngày giao hàng (*) :</td>
        <td><input type="text" name="deliveryDate" id="deliveryDate" style="width: 200px; border: 1px solid #ccc;" class="datetimepicker"/></td>
    </tr>
    <tr>
    	<td>Người giao hàng (*) :</td>
        <td><input type="text" name="shipper" id="shipper" style="width: 220px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Ngày thanh toán :</td>
        <td><input type="text" name="paymentDate" id="paymentDate" style="width: 200px; border: 1px solid #ccc;" class="datetimepicker"/></td>
    </tr>
    <tr>
    	<td>Hình thức thanh toán (*) :</td>
        <td>
        <select name="paymentForm" style="font-size: 12px; width: 300px; font-family: Arial, Helvetica, sans-serif;">
        	<option value=""></option>
            <option value="1">Thanh toán trực tuyến an toàn qua Ngân Lượng.vn</option>
            <option value="2">Thanh toán trực tiếp</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td>Họ tên người nhận (*) :</td>
        <td>
        <input type="text" name="recipient" id="recipient" style="width: 220px; border: 1px solid #ccc;"/> 
        </td>
    </tr>
    <tr>
    	<td>Địa chỉ (*) :</td>
        <td>
        <textarea name="address" id="address" style="width: 400px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Điện thoại (*) :</td>
        <td>
        <input type="text" name="tel" id="tel" style="width: 220px; border: 1px solid #ccc;"/> 
        </td>
    </tr>
    <!--Bổ sung phần Tỉnh/Thành phố-->
    <tr>
    	<td>Tỉnh/Thành phố (*) :</td>
    	<td>
        <select name="country" id="country" style="width: 220px; border: 1px solid #ccc;">
    	<option value=""></option>
    	<option value="Hà Nội">Hà Nội</option>
		<option value="Hồ Chí Minh">Hồ Chí Minh</option>
		<option value="Đà Nẵng">Đà Nẵng</option>
		<option value="Cần Thơ">Cần Thơ</option>
		<option value="An Giang">An Giang</option>
		<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
		<option value="Bắc Giang">Bắc Giang</option>
		<option value="Bắc Kạn">Bắc Kạn</option>
		<option value="Bạc Liêu">Bạc Liêu</option>
		<option value="Bắc Ninh">Bắc Ninh</option>
		<option value="Bến Tre">Bến Tre</option>
		<option value="Bình Định">Bình Định</option>
		<option value="Bình Dương">Bình Dương</option>
		<option value="Bình Phước">Bình Phước</option>
		<option value="Bình Thuận">Bình Thuận</option>
		<option value="Cà Mau">Cà Mau</option>
		<option value="Cao Bằng">Cao Bằng</option>
		<option value="Đăk Lăk">Đăk Lăk</option>
		<option value="Đăk Nông">Đăk Nông</option>
		<option value="Điện Biên">Điện Biên</option>
		<option value="Đồng Nai">Đồng Nai</option>
		<option value="Đồng Tháp">Đồng Tháp</option>
		<option value="Gia Lai">Gia Lai</option>
		<option value="Hà Giang">Hà Giang</option>
		<option value="Hà Nam">Hà Nam</option>
		<option value="Hà Tĩnh">Hà Tĩnh</option>
		<option value="Hải Dương">Hải Dương</option>
		<option value="Hải Phòng">Hải Phòng</option>
		<option value="Hậu Giang">Hậu Giang</option>
		<option value="Hòa Bình">Hòa Bình</option>
		<option value="Huế">Huế</option>
		<option value="Hưng Yên">Hưng Yên</option>
		<option value="Khánh Hòa">Khánh Hòa</option>
		<option value="Kiên Giang">Kiên Giang</option>
		<option value="Kon Tum">Kon Tum</option>
		<option value="Lai Châu">Lai Châu</option>
		<option value="Lâm Đồng">Lâm Đồng</option>
		<option value="Lạng Sơn">Lạng Sơn</option>
		<option value="Lào Cai">Lào Cai</option>
		<option value="Long An">Long An</option>
		<option value="Nam Định">Nam Định</option>
		<option value="Nghệ An">Nghệ An</option>
		<option value="Ninh Bình">Ninh Bình</option>
		<option value="Ninh Thuận">Ninh Thuận</option>
		<option value="Phú Thọ">Phú Thọ</option>
		<option value="Phú Yên">Phú Yên</option>
		<option value="Quảng Bình">Quảng Bình</option>
		<option value="Quảng Nam">Quảng Nam</option>
		<option value="Quảng Ngãi">Quảng Ngãi</option>
		<option value="Quảng Ninh">Quảng Ninh</option>
		<option value="Quảng Trị">Quảng Trị</option>
		<option value="Sóc Trăng">Sóc Trăng</option>
		<option value="Sơn La">Sơn La</option>
		<option value="Tây Ninh">Tây Ninh</option>
		<option value="Thái Bình">Thái Bình</option>
		<option value="Thái Nguyên">Thái Nguyên</option>
		<option value="Thanh Hóa">Thanh Hóa</option>
		<option value="Tiền Giang">Tiền Giang</option>
		<option value="Trà Vinh">Trà Vinh</option>
		<option value="Tuyên Quang">Tuyên Quang</option>
		<option value="Vĩnh Long">Vĩnh Long</option>
		<option value="Vĩnh Phúc">Vĩnh Phúc</option>
		<option value="Yên Bái">Yên Bái</option>  
    	</select>
        </td>
    </tr>
    <tr>
    	<td>Email (*) :</td>
        <td>
        <input type="text" name="email" id="email" style="width: 400px; border: 1px solid #ccc;"/> 
        </td>
    </tr>
    <tr>
    	<td>Tổng tiền (*) :</td>
        <td>
        <input type="text" name="total_bill" id="total_bill" style="width: 220px; border: 1px solid #ccc;"/> 
        </td>
    </tr>
    <tr>
    	<td>Ghi chú :</td>
        <td>
        <textarea name="note" id="note" style="width: 400px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Trạng thái (*) :</td>
        <td>
        <select name="status" style="font-size: 12px; width: 200px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">.............................</option>
        <option value="1">Đã thanh toán và chuyển hàng</option>
        <option value="0">Chưa thanh toán</option>
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
		$sql="INSERT INTO orders(orderDate,deliveryDate,shipper,paymentDate,paymentForm,recipient,address,tel,country,email,totalBill,note,status) 
		VALUES ('".$_POST['orderDate']."','".$_POST['deliveryDate']."','".$_POST['shipper']."','".$_POST['paymentDate']."','".$_POST['paymentForm']."','".$_POST['recipient']."','".$_POST['address']."','".$_POST['tel']."','".$_POST['country']."','".$_POST['email']."','".$_POST['total_bill']."','".$_POST['note']."','".$_POST['status']."')";
		
		$re=mysql_query($sql,$link);
		if($re)
		{
		header('Location: orders.php');
		}
		else
		{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}
}
?>