<?php
	$sql="SELECT * FROM contactinfo ORDER BY id ASC limit 0,1";
	$query=mysql_query($sql,$link);
	$count=mysql_num_rows($query);
	$row=mysql_fetch_array($query);
?>

<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thay đổi thông tin liên hệ</h2>
</div>

<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
        <tr>
        	<td>Nội dung liên hệ (*) :</td>
            <td>
            	<textarea name="content" id="content" style="width: 400px; height: 100px; border: 1px solid #ccc;" class="ckeditor"><?php echo $row['content']; ?></textarea> 
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnUpdate" id="btnUpdate" value="Thay đổi" />
                <input type="button" name="btnCancel" id="btnCancel" value="Quay lại" onclick="window.location='contact.php'" />
            </td>
    	</tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnUpdate']))
{
	if($count>0)
	{
		$strSQL4 = "UPDATE contactinfo SET content='".$_POST['content']."'";
		
		$result4 = mysql_query($strSQL4, $link);
		if($result4)
		{	
			header('Location: contact.php');
		}
		else
		{
			echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
		}
	}
	else
	{
		$strSQL5 = "INSERT INTO contactinfo(content) VALUES('".$_POST['content']."')";
		
		$result5 = mysql_query($strSQL5, $link);
		if($result5)
		{	
			header('Location: contact.php');
		}
		else
		{
			echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
		}	
	}
}
?>
