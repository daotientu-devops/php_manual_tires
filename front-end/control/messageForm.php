<?php
	if(isset($_GET['mesid']))
	{
		$qr1=mysql_query("SELECT * FROM orders WHERE id='".$_GET['mesid']."'",$link);
		$ro1=mysql_fetch_array($qr1);
	}
	else
	{
		header('Location: orderStatus.php');	
	}
?>
<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Tin nhắn
</div>
</div>

<div class="content_partition1">
	<div class="content_c">
		<b>Gửi tin nhắn</b>
        <form action="" method="post">
        	<table border="0" cellpadding="2" cellspacing="2" style="margin-top: 5px">
        		<tr>
                	<td align="right">Đơn hàng <font style="color: #F00">(*)</font> : </td>
                    <td>
                    	<input type="text" name="order" id="order" value="<?php echo 'Đơn hàng #'.$ro1['id'].' - đặt ngày '.$ro1['orderDate']; ?>" style="width: 340px; padding: 1px 5px; border: 1px solid #ccc;" disabled="disabled"/>
                    </td>
                </tr>
                <tr>
                	<td align="right">Tiêu đề <font style="color: #F00">(*)</font> : </td>
                    <td>
                    	<input type="text" name="title" id="title" style="width: 340px; padding: 1px 5px; border: 1px solid #ccc;"/>
                    </td>
                </tr>
                <tr>
                	<td align="right" valign="top">Nội dung <font style="color: #F00">(*)</font> : </td>
                    <td>
                    	<textarea name="content" id="content" style="width: 340px; height: 80px; padding: 1px 5px; border: 1px solid #ccc;"></textarea>
                    </td>
                </tr>
                <tr>
                	<td></td>
                    <td>
                    	<input type="submit" name="btnSubmit" id="btnSubmit" value="Gửi tin nhắn" />
                        <input type="button" name="btnBack" id="btnBack" value="Quay lại" onClick="window.location='orderStatus.php'"/>
                    </td>
                </tr>
        	</table>
        </form>
	</div>
</div>
</div>
<?php
	if(isset($_POST['btnSubmit']))
	{
		$qr2=mysql_query("UPDATE orders SET title='".$_POST['title']."',content='".$_POST['content']."' WHERE id='".$_GET['mesid']."'",$link);
		if($qr2)
		{
			header('Location: orderStatus.php');
		}
		else
		{
			echo '<h2>Tin nhắn bị lỗi nên không thể chuyển tiếp được. Vui lòng thử lại sau</h2>';	
		}
	}
?>