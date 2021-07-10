<?php //Module: Cập nhật thông tin giới thiệu
	$qr=mysql_query("SELECT * FROM intro ORDER BY id ASC limit 0,1");
	$count=mysql_num_rows($qr);
	$fc=mysql_fetch_array($qr);	
?>
<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px; margin-top: 10px;">
<h2>Thay đổi thông tin giới thiệu</h2>
</div>
<div style="clear:both;">
	<form action="#" method="post">
		<table width="100%" border="1" cellpadding="2" cellspacing="2" class="csstable">
			<tr>
				<td>Nội dung giới thiệu (*) :</td>
				<td>
					<textarea name="content" id="content" style="width: 400px; height: 100px; border: 1px solid #ccc;" class="ckeditor"><?php echo $fc['content']; ?></textarea>
				</td>
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
if(isset($_POST['btnUpdate'])){
	//kiểm tra nếu có dữ liệu trong csdl thì update, nếu rỗng thì insert
	if($count>0){
		$sql1=mysql_query("UPDATE intro SET content='".$_POST['content']."'");
	}else{
		$sql1=mysql_query("INSERT INTO intro(content) VALUES('".$_POST['content']."')");
	}
	if($sql1)
	{	
		header('Location: index.php');
	}
	else
	{
		echo '<h2>Thao tác bị lỗi. Vui lòng thử lại sau..!</h2>';
	}
}
?>
