<?php
if(isset($_GET['newid']))
{
	$strSQL = "SELECT * FROM news WHERE id = '".$_GET['newid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: news.php');
}
?>
<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Xóa bài viết</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td align="center"><b><font color="#FF0004">Bạn có chắc chắn muốn xóa bài viết tên: </font> '<?php echo $row['title']; ?>'<font color="#FF0004"> không ?</font></b></td>
    </tr>
    <tr>
    <td align="center">
    <input type="submit" name="btnDelete" id="btnDelete" value="Xác nhận" />
    <input type="button" name="btnCancel" id="btnCancel" value="Hủy bỏ" onclick='window.location="news.php"'/>
    </td>
    </tr>
    </table>
</form>
</div>

<?php
if(isset($_POST['btnDelete']))
{
	$strSQL2 = "DELETE FROM news WHERE id='".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	if($result2)
	{
		header ('Location: news.php');
	}
	else
	{
		echo 'Có lỗi. Không thể thực hiện thao tác này';
	}
}
?>