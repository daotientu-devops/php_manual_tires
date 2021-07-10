<?php
	$sql="SELECT * FROM configs ORDER BY id ASC limit 0,1";
	$query=mysql_query($sql,$link);
	$count=mysql_num_rows($query);
	$row=mysql_fetch_array($query);
?>

<div style="clear: both; text-align: left; margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Cấu hình chung</h2>
</div>

<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
        <tr>
            <td colspan="2"><font style="color: #146295; font-weight: bold;">Cài đặt site</font></td>
        </tr>
    	<tr>
    		<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    	</tr>
    	<tr>
            <td>Title (*) :</td>
            <td><textarea name="siteName" id="siteName" style="background: #d5eeff; width: 400px; height: 20px; border: 1px solid #ccc;"><?php echo $row['siteName']; ?></textarea></td>
    	</tr>
    	<tr>
            <td>Trạng thái website :</td>
            <td>
            	<label><input type="radio" name="siteOffline" id="siteOffline" value="1" <?php if($row['siteOffline']==1) echo 'checked'; ?>/> Bật</label>
                <label><input type="radio" name="siteOffline" id="siteOffline" value="0" <?php if($row['siteOffline']==0) echo 'checked'; ?>/> Tắt</label>
            </td>
        </tr>
        <tr>
            <td>Tin nhắn bảo trì (*) :</td>
            <td><textarea name="offlineMessage" id="offlineMessage" style="width: 600px; height: 60px; border: 1px solid #ccc;"><?php echo $row['offlineMessage']; ?></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh bảo trì (*) :</td>
            <td><input type="file" name="offlineImage" id="offlineImage" /></td>
        </tr>
        <tr>
        	<td></td>
            <td><img src="<?php echo $row['offlineImage']; ?>" alt="" border="1" width="200px" style="border: 1px solid #ccc;"/></td>
        </tr>
        <tr>
            <td colspan="2"><font style="color: #146295; font-weight: bold;">Cài đặt siêu dữ liệu</font></td>
        </tr>
        <tr>
            <td>Keywords (*) :</td>
            <td><textarea name="siteKeywords" id="siteKeywords" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['siteKeywords']; ?></textarea></td>
        </tr>
        <tr>
            <td>Description (*) :</td>
            <td><textarea name="siteDescription" id="siteDescription" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['siteDescription']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnUpdate" id="btnUpdate" value="Thay đổi" />
                <input type="button" name="btnCancel" id="btnCancel" value="Quay lại" onclick="window.location='index.php'" />
            </td>
    	</tr>
    </table>
</form>
</div>

<?php
if(isset($_POST['btnUpdate']))
{
	$save_path="uploaded/offline/";
	$file=$_FILES['offlineImage'];
	$type=$_FILES['offlineImage']['type'];
	
	if($count>0)
	{
		if($file['size']>0)
		{
			if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
			{
				move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
				$strSQL4 = "UPDATE configs SET siteName='".$_POST['siteName']."',siteOffline='".$_POST['siteOffline']."',offlineMessage='".$_POST['offlineMessage']."',offlineImage='".$save_path.$file['name']."',siteDescription='".$_POST['siteDescription']."',siteKeywords='".$_POST['siteKeywords']."'";
			}
			else
			{
				echo 'Bạn không được phép upload loại file này';
			}
		}
		else
		{
			$strSQL4 = "UPDATE configs SET siteName='".$_POST['siteName']."',siteOffline='".$_POST['siteOffline']."',offlineMessage='".$_POST['offlineMessage']."',siteDescription='".$_POST['siteDescription']."',siteKeywords='".$_POST['siteKeywords']."'";
		}
		$result4 = mysql_query($strSQL4, $link);
		if($result4)
		{	
			header('Location: index.php');
		}
		else
		{
			echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
		}	
	}
	else
	{	
		if($file['size']>0)
		{
			if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
			{
				move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
				$strSQL5 = "INSERT INTO configs(siteName,siteOffline,offlineMessage,offlineImage,siteDescription,siteKeywords) VALUES('".$_POST['siteName']."','".$_POST['siteOffline']."','".$_POST['offlineMessage']."','".$save_path.$file['name']."','".$_POST['siteDescription']."','".$_POST['siteKeywords']."')";
			}
			else
			{
				echo 'Bạn không được phép upload loại file này';
			}
		}
		else
		{
			$strSQL5 = "INSERT INTO configs(siteName,siteOffline,offlineMessage,siteDescription,siteKeywords) VALUES('".$_POST['siteName']."','".$_POST['siteOffline']."','".$_POST['offlineMessage']."','".$_POST['siteDescription']."','".$_POST['siteKeywords']."')";
		}
		$result5 = mysql_query($strSQL5, $link);
		if($result5)
		{	
			header('Location: index.php');
		}
		else
		{
			echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
		}	
	}
}
?>
