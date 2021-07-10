<?php
if(isset($_GET['Id']))
{
	$strSQL = "SELECT * FROM contact WHERE id = '".$_GET['Id']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: address_book.php?addressId='.$_SESSION['customerId'].'');
}
?>
<div class="defaultContentf">
<form action="#" method="post" enctype="multipart/form-data" id="form_contact">
<table width="582px" border="0" cellpadding="2" cellspacing="2">
	<tr>
    <td align="center">Bạn chắc chắn xóa thông tin địa chỉ:<b> <?php echo $row['address']; ?> </b>này không ?</td>
    </tr>
	<tr>
    <td align="center">
    <input type="submit" name="submit" id="submit" value="Xác nhận" />
    <input type="button" name="cancel" id="cancel" value="Hủy bỏ" onclick='
        <?php
        echo 'window.location="address_book.php?addressId='.$_SESSION['customerId'].'"';
		?>
		'/>
    </td>
    </tr>
</table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$strSQL1="DELETE FROM contact WHERE id='".$row['id']."'";
	$query1=mysql_query($strSQL1,$link);
	if($query1)
	{
		header('Location: address_book.php?addressId='.$_SESSION['customerId'].'');
	}
	else
	{
		echo '<h3>Xóa thất bại. Xin vui lòng thử lại sau</h3>';
	}
}
?>