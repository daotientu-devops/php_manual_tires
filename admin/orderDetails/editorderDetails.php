<?php
if(isset($_GET['orderdetailsid']))
{
	$strSQL = "SELECT * FROM orderdetails WHERE id ='".$_GET['orderdetailsid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: orderDetails.php');
}
?>

<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa hóa đơn chi tiết</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Mã hóa đơn (*) :</td>
        <td><input type="text" name="orderID" id="orderID" style="width: 60px; border: 1px solid #ccc;" value="<?php echo $row['orderID']; ?>"/></td>
    </tr>
    <tr>
    	<td>Mã sản phẩm (*) :</td>
        <td><input type="text" name="proID" id="proID" style="width: 60px; border: 1px solid #ccc;" value="<?php echo $row['proID']; ?>"/></td>
    </tr>
    <tr>
    	<td>Giá bán (*) :</td>
        <td><input type="text" name="price" id="price" style="width: 160px; border: 1px solid #ccc;" value="<?php echo $row['price']; ?>"/> VND</td>
    </tr>
    <tr>
    	<td>Số lượng (*) :</td>
        <td><input type="text" name="amount" id="amount" style="width: 60px; border: 1px solid #ccc;" value="<?php echo $row['amount']; ?>"/> chiếc</td>
    </tr>
    <tr>
    	<td>Tổng giá (*) :</td>
        <td><input type="text" name="total_price" id="total_price" style="width: 160px; border: 1px solid #ccc;" value="<?php echo $row['totalPrice']; ?>"/> VND</td>
    </tr>
    <tr>
        <td></td>
        <td>
        <input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='orderdetails.php'" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if (isset($_POST['btnUpdate']))
{
	$strSQL4 = "UPDATE orderdetails SET orderID='".$_POST['orderID']."',proID='".$_POST['proID']."',price='".$_POST['price']."',amount='".$_POST['amount']."',totalPrice='".$_POST['total_price']."' WHERE id ='".$row['id']."'";
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: orderDetails.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>