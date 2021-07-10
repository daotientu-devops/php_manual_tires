<div class="uright">
<?php
$strSQL = "SELECT * FROM categories WHERE id='".$_GET['cid']."'";
$result = mysql_query($strSQL, $link);
$row = mysql_fetch_array($result);
?>

<form action="#" method = "post">
	<table border="0" cellspacing="3" cellpadding="3" style="width: 638px;">
    <tr>


    <td align="center"><img src="images/icon/messagebox_warning.png" />
 
    <font color="#e55300">WARNINGS: </font><font color="#FF0000">Bạn có muốn xóa danh mục tên: </font>'<?php echo $row['name']; ?>' <font color="#FF0000">không ?</font>
    </td>
    </tr>
   
    <tr>


    <td align="center">
    <input type="submit" name="submit" value="Xác nhận" style="font-family: 'Times New Roman', Times, serif;"/>
    <input type="button" name="cancel" value="Hủy bỏ" onclick='window.location="categories.php"' style="font-family: 'Times New Roman', Times, serif;"/>
    </td>
    </tr>
    </table>
</form>
<?php
if(isset($_POST['submit']))
{
	$strSQL2 = "DELETE FROM categories WHERE id = '".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	if($result2)
	{
		header ('Location: categories.php');
	}
	else
	{
		echo 'Không thể thực hiện thao tác này';
	}
}
?>
</div>