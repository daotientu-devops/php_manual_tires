<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới hóa đơn chi tiết</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Mã hóa đơn (*) :</td>
        <td><input type="text" name="orderID" id="orderID" style="width: 60px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Mã sản phẩm (*) :</td>
        <td><input type="text" name="proID" id="proID" style="width: 60px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Giá bán (*) :</td>
        <td><input type="text" name="price" id="price" style="width: 160px; border: 1px solid #ccc;"/> VND</td>
    </tr>
    <tr>
    	<td>Số lượng (*) :</td>
        <td><input type="text" name="amount" id="amount" style="width: 60px; border: 1px solid #ccc;"/> chiếc</td>
    </tr>
    <tr>
    	<td>Tổng giá (*) :</td>
        <td><input type="text" name="total_price" id="total_price" style="width: 160px; border: 1px solid #ccc;"/> VND</td>
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
		$sql="INSERT INTO orderdetails(orderID,proID,price,amount,totalPrice) 
		VALUES ('".$_POST['orderID']."','".$_POST['proID']."','".$_POST['price']."','".$_POST['amount']."','".$_POST['total_price']."')";
		
		$re=mysql_query($sql,$link);
		if($re)
		{
		header('Location: orderDetails.php');
		}
		else
		{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}
}
?>