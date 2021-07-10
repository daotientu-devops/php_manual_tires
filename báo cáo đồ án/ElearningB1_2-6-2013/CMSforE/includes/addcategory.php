<div class="conleft" style="border-bottom: 1px solid #70201f;">
<form action="#" method="post">
<table border="0" cellpadding="2" cellspacing="2">
    <tr>
    <td align = "right"><div style="font-weight:bold; text-align:center;">Tên chuyên mục:</div></td>
    <td align = "left"><textarea name="catName" type="text" class="ckeditor" style="width: 400px;height: 100px; background: #e2e2e2"></textarea></td>
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
    <select name="ParentID" style="font-family: 'Times New Roman', Times, serif">
    <option value="0">&hArr;Root&hArr;</option>
    <?php
    	$strSQL="SELECT * FROM news_category WHERE ParentID=0";
		$result=mysql_query($strSQL,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<option value="'.$row['id'].'">'.$row['catName'].'</option>';
			$strSQL2="SELECT * FROM news_category WHERE ParentID='".$row['id']."'";
			$result2=mysql_query($strSQL2,$link);
			while($row2=mysql_fetch_array($result2))
			{
				echo '<option value="'.$row2['id'].'">----&gt;'.$row2['catName'].'</option>';
			}
		}
    ?>
    </select>
    </td>
    </tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Xác nhận" style="font-family: 'Times New Roman', Times, serif;"/>
    <input type="reset" name="cancel" value="Hủy bỏ" style="font-family: 'Times New Roman', Times, serif;"/>
    </td>
    </tr>
</table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$sql = "INSERT INTO news_category(catName, state, ParentID) VALUES ('".$_POST['catName']."','".$_POST['state']."','".$_POST['ParentID']."')";
	$result = mysql_query($sql, $link);
	if($result)
	{
		header('Location: category_manager.php');
	}
	else
	{
		echo 'Thao tác đã bị lỗi.Vui lòng thử lại sau';
	}
}

?>