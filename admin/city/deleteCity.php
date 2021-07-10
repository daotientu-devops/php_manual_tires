<?php
if(isset($_GET['cityid'])){
	$strSQL="SELECT * FROM city WHERE id='".$_GET['cityid']."'";
	$result=mysql_query($strSQL,$link);
	$row=mysql_fetch_array($result);
}else{
	header('Location: city.php');
}
?>
<div style="clear:both;margin-left:2px;margin-top:10px;margin-bottom:10px;">
	<form action="#" method="post" enctype="multipart/form-data">
		<table width="100%" border="1" cellpadding="2" cellspacing="2" class="csstable">
			<tr>
				<td align="center">
					<b><font color="#ff0004">Bạn có chắc chắn muốn xóa tên tỉnh/thành phố: </font> '<?php echo $row['city_title']; ?>'<font color="#ff0004"> không ?</font></b>
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="submit" name="btnDelete" id="btnDelete" value="Xác nhận"/>
					<input type="button" name="btnCancel" id="btnCancel" value="Hủy bỏ" onclick='window.location="city.php"'/>
				</td>
			</tr>
		</table>
	</form>
</div>
<?php
if(isset($_POST['btnDelete'])){
	$sql="DELETE FROM city WHERE id='".$row['id']."'";
	$qr=mysql_query($sql,$link);
	if($qr){
		header('Location: city.php');
	}else{
		echo '<h3>Thao tác bị lỗi. Xin vui lòng thử lại..!</h3>';
	}
}
?>











