<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới tỉnh/thành phố</h2>
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
                	<input type="text" name="city_id" id="city_id" style="width:100px;border:1px solid #ccc;" />
                </td>
            </tr>
            <tr>
            	<td>Mã tỉnh (dạng chữ) (*) :</td>
                <td>
                	<input type="text" name="city_code" id="city_code" style="width:100px;border:1px solid #ccc;" />
                </td>
            </tr>
            <tr>
            	<td>Tên tỉnh/thành phố (*) :</td>
                <td>
                	<input type="text" name="city_title" id="city_title" style="width:300px;border:1px solid #ccc;" />
                </td>
            </tr>
            <tr>
            	<td></td>
                <td>
                	<input type="submit" name="btnAdd" id="btnAdd" value="Thêm"/>
                    <input type="reset" name="btnReset" id="btnReset" value="Làm lại"/>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
if(isset($_POST['btnAdd'])){
	$sql="INSERT INTO city(city_id,city_code,city_title) VALUES('".$_POST['city_id']."','".$_POST['city_code']."','".$_POST['city_title']."')";
	$result=mysql_query($sql,$link);	
	if($result){
		header('Location:city.php');
	}else{
		echo '<h3>Thao tác bị lỗi. Xin vui lòng thử lại..!</h3>';
	}
}
?>