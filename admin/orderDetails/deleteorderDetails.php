<?php
if(isset($_GET['orderdetailsid']))
{
	$strSQL = "SELECT * FROM orderdetails WHERE id = '".$_GET['orderdetailsid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: orderDetails.php');
}
?>
<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Xóa hóa đơn</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td align="center"><b><font color="#FF0004">Bạn có chắc chắn muốn xóa sản phẩm có mã hóa đơn : </font> '<?php echo $row['orderID']; ?>'<font color="#FF0004"> này không ?</font></b></td>
    </tr>
    <tr>
    <td align="center">
    <input type="submit" name="btnDelete" id="btnDelete" value="Xác nhận" />
    <input type="button" name="btnCancel" id="btnCancel" value="Hủy bỏ" onclick='window.location="orderDetails.php"'/>
    </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnDelete']))
{
	$strSQL2 = "DELETE FROM orderdetails WHERE id='".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	if($result2)
	{
		header ('Location: orderDetails.php');
	}
	else
	{
		echo 'Có lỗi. Không thể thực hiện thao tác này';
	}
}
?>