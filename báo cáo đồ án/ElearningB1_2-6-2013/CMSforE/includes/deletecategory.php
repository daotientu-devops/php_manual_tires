<div class="conleft" style="border-bottom: 1px solid #70201f;">
<?php
if(isset($_GET['catid']))
{
$strSQL = "SELECT * FROM news_category WHERE id='".$_GET['catid']."'";
$result = mysql_query($strSQL, $link);
$row = mysql_fetch_array($result);
}
else
{
	header('Location: category_manager.php');
}
?>
<form action="#" method = "post">
	<table border="0" cellspacing="3" cellpadding="3" style="width: 100%; text-align: center;">
    <tr>
    <td align="right"><img src="images/icon/messagebox_warning.png" /></td>
    <td align="center">
    <font color="#e55300">WARNINGS: </font><font color="#FF0000">Bạn có muốn xóa danh mục tên: </font>'<?php echo $row['catName']; ?>' <font color="#FF0000">không ?</font>
    </td>
    </tr> 
    <tr>
    <td></td>
  	<td align="center">
    <input type="submit" name="submit" value="Xác nhận" style="font-family: 'Times New Roman', Times, serif;"/>
    <input type="button" name="cancel" value="Hủy bỏ" onclick='window.location="category_manager.php"' style="font-family: 'Times New Roman', Times, serif;"/>
    </td>
    </tr>
    </table>
</form>
<?php
if(isset($_POST['submit']))
{
	$strSQL2 = "DELETE FROM news_category WHERE id = '".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	if($result2)
	{
		header ('Location: category_manager.php');
	}
	else
	{
		echo 'Không thể thực hiện thao tác này';
	}
}
?>
</div>