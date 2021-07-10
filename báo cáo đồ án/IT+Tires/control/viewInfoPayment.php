<?php
	if(isset($_GET['vid']))
	{
		$strSQL="SELECT * FROM contact WHERE id='".$_GET['vid']."' AND state=2";
		$query=mysql_query($strSQL,$link);
		$row=mysql_fetch_array($query);
	}
?>
		<table border="0" cellpadding="2" cellspacing="2">
            <tr>
            <td align="right">Họ và Tên: </td>
            <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
            <td align="right">Điện thoại: </td>
            <td><?php echo $row['tel']; ?></td>
            </tr>
            <tr>
            <td align="right">Địa chỉ: </td>
            <td><?php echo $row['address']; ?></td>
            </tr>
       	</table>

