<?php
if(isset($_GET['catid']))
{
	$strSQL = "SELECT * FROM news_category WHERE id = '".$_GET['catid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: category_manager.php');
}
?>
<div class="conleft" style="border-bottom: 1px solid #70201f;">
<form action="#" method="post">
<table border="0" cellpadding="2" cellspacing="2">
    <tr>
    <td align = "right"><div style="font-weight:bold; text-align:center;">Tên chuyên mục:</div></td>
    <td align = "left"><textarea name="catName" type="text" class="ckeditor" style="width: 400px;height: 100px; background: #e2e2e2"><?php echo $row['catName']; ?></textarea></td>
    </tr>
	<tr>
    <td align = "right"><div style="font-weight:bold; text-align:center;">Trạng thái:</div></td>
    <td align = "left">
    <select name="state" style="font-family: 'Times New Roman', Times, serif;">
    <option value="1">Hiện</option>
    <option value="0">Ẩn</option>
    </select>
    </td>
    </tr>
    <tr>
    <td align = "right"><div style="font-weight:bold; text-align:center;">Cấp menu:</div></td>
    <td align="left">
    <select name="ParentID" style="font-size:13px; font-family: 'Times New Roman', Times, serif;">
	<option value="0">&hArr;Root&hArr;</option>
    <?php
	$strSQL2 = "SELECT * FROM news_category WHERE ParentID = 0";
	$result2 = mysql_query($strSQL2, $link);
	while($row2 = mysql_fetch_array($result2))
	{
		if($row2['id']==$row['ParentID'])
		{
			echo '<option selected="selected" value="'.$row2['id'].'">'.$row2['catName'].'</option>';
		}
		else
		{
			echo '<option value="'.$row2['id'].'">'.$row2['catName'].'</option>';
		}
		$strSQL3 = "SELECT * FROM news_category WHERE ParentID ='".$row2['id']."'";
		$result3 = mysql_query($strSQL3, $link);
		while($row3 = mysql_fetch_array($result3))
		{
			echo '<option value="'.$row3['id'].'">---&gt;'.$row3['catName'].'</option>';
		}
	}
	?>
</select>
    </td>
    </tr>
    <tr>
    <td></td>
    <td align="left">
    <input name="submit" type="submit" value="Xác nhận" style="font-family: 'Times New Roman', Times, serif;"/>
<input name="cancel" type="reset" value="Hủy bỏ" onclick="window.location='category_manager.php'" style="font-family: 'Times New Roman', Times, serif;"/>
    </td>
    </tr>
</table>

</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$strSQL4 = "UPDATE news_category SET catName = '".$_POST['catName']."',state = '".$_POST['state']."',ParentID = '".$_POST['ParentID']."' WHERE id = '".$row['id']."'";
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{
		header('Location: category_manager.php');
	}
	else
	{
		echo 'Có lỗi xảy ra';
	}
}
?>