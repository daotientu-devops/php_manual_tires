<?php
if(isset($_GET['writeartid']))
{
	$stSQL = "SELECT * FROM lessons_writearticle WHERE id='".$_GET['writeartid']."'";
	$result = mysql_query($stSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: lessons_writearticle.php');
}
?>

<div class="conright" style="text-align:center;">
    <form action="#" method="post">
    	<table border="0" cellspacing="2" cellpadding="2" style="margin: 0 auto;">
    	<tr>
        <td align="center"><img src="images/icon/messagebox_warning.png" /></td>
        <td>
        <font color="#FF9900">WARNINGS: </font><font color="#FF0000">Bạn có muốn xóa tiêu đề bài viết tên: </font>'<?php echo $row['title']; ?>' <font color="#FF0000">không ?</font>
        </td>
        </tr>
        
        <tr>
        <td></td>
        <td align="center"><input type="submit" name="submit" value="Xác nhận" style="font-family:'Times New Roman', Times, serif"/>
        <input type="button" name="cancel" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="lessons_writearticle.php"'/>
        </td>
        </tr>
    	</table>
    </form>

</div>
<?php
if(isset($_POST['submit']))
{
	$strSQL2 = "DELETE FROM lessons_writearticle WHERE id = '".$row['id']."'";
	$result2 = mysql_query($strSQL2,$link);
	if($result2)
	{
		header ('Location: lessons_writearticle.php');
	}
	else
	{
		echo 'Không thể thực hiện thao tác này';
	}
}
?>