<?php
if(isset($_GET['writeblaid']))
{
	$stSQL = "SELECT * FROM lessons_writeblank WHERE id='".$_GET['writeblaid']."'";
	$result = mysql_query($stSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: lessons_writeblank.php');
}
?>

<div class="conright" style="text-align:center;">
    <form action="#" method="post">
    	<table border="0" cellspacing="2" cellpadding="2" style="margin: 0 auto;">
    	<tr>
        <td align="center"><img src="images/icon/messagebox_warning.png" /></td>
        <td>
        <font color="#FF9900">WARNINGS: </font><font color="#FF0000">Bạn có muốn xóa câu hỏi tên: </font>'<?php echo $row['title']; ?>' <font color="#FF0000"> cùng với đáp án không ?</font>
        </td>
        </tr>
        
        <tr>
        <td></td>
        <td align="center"><input type="submit" name="submit" value="Xác nhận" style="font-family:'Times New Roman', Times, serif"/>
        <input type="button" name="cancel" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="lessons_writeblank.php"'/>
        </td>
        </tr>
    	</table>
    </form>

</div>
<?php
if(isset($_POST['submit']))
{
	$strSQL2 = "DELETE FROM lessons_writeblank WHERE id = '".$row['id']."'";
	$strSQL3 = "DELETE FROM key_writeblank WHERE writeblaid = '".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	$result3 = mysql_query($strSQL3,$link);
	if($result2 && $result3)
	{
		header ('Location: lessons_writeblank.php');
	}
	else
	{
		echo 'Không thể thực hiện thao tác này';
	}
}
?>