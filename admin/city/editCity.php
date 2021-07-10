<?php
	if(isset($_GET['cityid'])){
		$strSQL="SELECT * FROM city WHERE id='".$_GET['cityid']."'";
		$result=mysql_query($strSQL,$link);
		$row=mysql_fetch_array($result);
	}else{
		header('Location:city.php');
	}
?>
<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa tỉnh/thành phố</h2>
</div>
<div style="clear:both;">
	<form action="#" method="post" enctype="multipart/form-data">
    	<table width="100%" border="1" cellpadding="2" cellspacing="2" class="csstable">
        	<tr>
            	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
            </tr>
            <tr>
            	<td>Mã tỉnh (dạng số) :</td>
                <td>
                	<input type="text" name="city_id" id="city_id" style="width:100px;border:1px solid #ccc;" value="<?php echo $row['city_id']; ?>"/>
                </td>
            </tr>
            <tr>
            	<td>Mã tỉnh (dạng chữ) (*) :</td>
                <td>
                	<input type="text" name="city_code" id="city_code" style="width:100px;border:1px solid #ccc;" value="<?php echo $row['city_code']; ?>" />
                </td>
            </tr>
            <tr>
            	<td>Tên tỉnh/thành phố (*) :</td>
                <td>
                	<input type="text" name="city_title" id="city_title" style="width:300px;border:1px solid #ccc;" value="<?php echo $row['city_title']; ?>" />
                </td>
            </tr>
            <tr>
            	<td></td>
                <td>
                	<input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
        			<input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='city.php'" />
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
if(isset($_POST['btnUpdate'])){
	$sql="UPDATE city SET city_id='".$_POST['city_id']."',city_code='".$_POST['city_code']."',city_title='".$_POST['city_title']."' WHERE id='".$row['id']."'";
	$qr=mysql_query($sql,$link);
	if($qr){
		header('Location: city.php');
	}else{
		echo '<h3>Thao tác bị lỗi. Xin vui lòng thử lại sau..!</h3>';	
	}
}
?>