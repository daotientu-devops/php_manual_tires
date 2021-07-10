<?php
if(isset($_GET['conid']))
{
	$strSQL = "SELECT * FROM contact WHERE id = '".$_GET['conid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: contact.php');
}
?>

<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Xóa thông tin liên hệ</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td align="center"><b><font color="#FF0004">Bạn có chắc chắn muốn xóa danh mục tên: </font> '<?php echo $row['name']; ?>'<font color="#FF0004"> không ?</font></b></td>
    </tr>
    <tr>
    <td align="center">
    <input type="submit" name="btnDelete" id="btnDelete" value="Xác nhận" />
    <input type="button" name="btnCancel" id="btnCancel" value="Hủy bỏ" onclick='window.location="contact.php"'/>
    </td>
    </tr>
    </table>
</form>
</div>

<?php
if(isset($_POST['btnDelete']))
{
	$strSQL2 = "DELETE FROM contact WHERE id='".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	if($result2)
	{
		header ('Location: contact.php');
	}
	else
	{
		echo 'Có lỗi. Không thể thực hiện thao tác này';
	}
}
?>