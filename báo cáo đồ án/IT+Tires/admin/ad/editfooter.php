<?php
	$sql="SELECT * FROM footer ORDER BY id ASC limit 0,1";
	$query=mysql_query($sql,$link);
	$count=mysql_num_rows($query);
	$row=mysql_fetch_array($query);
?>

<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thay đổi footer</h2>
</div>

<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
        <tr>
        	<td>Thông tin footer (*) :</td>
            <td>
            	<textarea name="info" id="info" style="width: 400px; height: 100px; border: 1px solid #ccc;" class="ckeditor"><?php echo $row['info']; ?></textarea> 
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnUpdate" id="btnUpdate" value="Thay đổi" />
                <input type="button" name="btnCancel" id="btnCancel" value="Quay lại" onclick="window.location='ad.php'" />
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
		$strSQL4 = "UPDATE footer SET info='".$_POST['info']."'";
		
		$result4 = mysql_query($strSQL4, $link);
		if($result4)
		{	
			header('Location: ad.php');
		}
		else
		{
			echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
		}
	}
	else
	{
		$strSQL5 = "INSERT INTO footer(info) VALUES('".$_POST['info']."')";
		
		$result5 = mysql_query($strSQL5, $link);
		if($result5)
		{	
			header('Location: ad.php');
		}
		else
		{
			echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
		}	
	}
}
?>
