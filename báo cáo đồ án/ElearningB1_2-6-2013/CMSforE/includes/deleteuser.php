<?php
if(isset($_GET['uid']))
{
	$stSQL = "SELECT * FROM users WHERE id='".$_GET['uid']."'";
	$result = mysql_query($stSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: administrators.php');
}
?>

<div class="conright" style="text-align:center;">
    <form action="#" method="post">
    	<table border="0" cellspacing="2" cellpadding="2" style="margin: 0 auto;">
    	<tr>
        <td align="center"><img src="images/icon/messagebox_warning.png" /></td>
        <td>
        <font color="#FF9900">WARNINGS: </font><font color="#FF0000">Bạn có muốn xóa tài khoản tên: </font>'<?php echo $row['username']; ?>' <font color="#FF0000">không ?</font>
        </td>
        </tr>
        
        <tr>
        <td></td>
        <td align="center"><input type="submit" name="submit" value="Xác nhận" style="font-family:'Times New Roman', Times, serif"/>
        <input type="button" name="cancel" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="administrators.php"'/>
        </td>
        </tr>
    	</table>
    </form>

</div>
<?php
if(isset($_POST['submit']))
{
	$strSQL2 = "DELETE FROM users WHERE id = '".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	if($result2)
	{
		header ('Location: administrators.php');
	}
	else
	{
		echo 'Không thể thực hiện thao tác này';
	}
}
?>