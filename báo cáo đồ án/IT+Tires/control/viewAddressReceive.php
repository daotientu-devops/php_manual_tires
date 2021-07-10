<?php
	if(isset($_GET['rid']))
	{
		$strSQL="SELECT * FROM contact WHERE id='".$_GET['rid']."' AND state=2";
		$query=mysql_query($strSQL,$link);
		$row=mysql_fetch_array($query);
	}
?>
		<table border="0" cellpadding="2" cellspacing="2">
            <tr>
            <td align="right">Họ và Tên <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"  style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            <td align="right">Điện thoại <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="tel" id="tel" value="<?php echo $row['tel']; ?>"  style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            <td align="right">Địa chỉ <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="address" id="address" value="<?php echo $row['address']; ?>"  style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
       	</table>
