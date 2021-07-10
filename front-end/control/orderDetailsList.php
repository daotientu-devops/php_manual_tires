<?php
	if(isset($_GET['orderid']))
	{
		$qr1=mysql_query("SELECT * FROM orders WHERE id='".$_GET['orderid']."'",$link);
		$ro1=mysql_fetch_array($qr1);
		$qr2=mysql_query("SELECT * FROM users WHERE id='".$ro1['cusID']."'",$link);
		$ro2=mysql_fetch_array($qr2);
		
	}
	else
	{
		header('Location: orderStatus.php');	
	}
?>
<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
<?php echo 'Đơn hàng #'.$_GET['orderid']; ?>
</div>
</div>

<div class="content_partition1">
	<div class="content_Left">
    	<p>
			<?php
                echo '<b>Trạng thái đơn hàng: </b>';
				if($ro1['status']==0)
				{
					echo 'Chờ xử lý';
				}
				elseif($ro1['status']==1)
				{
					echo 'Đã xử lý';
				}
				echo '<br/>';
				echo '<b>Ngày tạo hóa đơn: </b>';
				echo $ro1['orderDate'];
				echo '<br/>';
				echo '<b>Hình thức thanh toán: </b>';
				if($ro1['paymentForm']==1)
				{
					echo 'Thanh toán tại cửa hàng';
				}
				elseif($ro1['paymentForm']==2)
				{
					echo 'Thanh toán khi nhận được hàng';
				}
				elseif($ro1['paymentForm']==3)
				{
					echo 'Thanh toán trực tuyến an toàn qua NgânLượng.vn';
				}
				echo '<br/>';
				echo '<b>Tổng giá trị hóa đơn: '.number_format($ro1['totalBill']).' <u>đ</u></b>';
            ?>
        </p>
        <hr style="margin-top: 10px"/>
        <p>
        	<h4 style="color: #0d77be">Thông tin người thanh toán</h4>
            <?php
				echo '<b>'.$ro2['name'].'</b>';
				echo '<br/>';
				echo 'Địa chỉ: '.$ro2['address'];
				echo '<br/>';
				echo 'Điện thoại: '.$ro2['tel'];
				echo '<br/>';
				echo 'Email: '.$ro2['email'];
			?>
        </p>
        <hr style="margin-top: 10px"/>
        <p>
        	<h4 style="color: #0d77be">Thông tin người nhận</h4>
            <?php
				echo '<b>'.$ro1['recipient'].'</b>';
				echo '<br/>';
				echo 'Địa chỉ: '.$ro1['address'];
				echo '<br/>';
				echo 'Điện thoại: '.$ro1['tel'];
			?>
        </p>
        <hr style="margin-top: 10px"/>
        <?php
				echo '<h4 style="color: #0d77be">Đơn hàng #'.$ro1['id'].' bao gồm các sản phẩm<//h4>';
		?>
        <table width="568px" border="1" cellpadding="2" cellspacing="2" class="csstable1" style="margin-top: 15px">
        	<tr>
        		<th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng</th>
        	</tr>
            <?php
				$qr3=mysql_query("SELECT * FROM orderdetails WHERE orderID='".$_GET['orderid']."'",$link);
				while($ro3=mysql_fetch_array($qr3))
				{
					$qr4=mysql_query("SELECT * FROM products WHERE id='".$ro3['proID']."'",$link);
					$i=0;
					while($ro4=mysql_fetch_array($qr4))
					{
						$i++;
						echo '<tr style="color: #333; font-weight: normal">';
						echo '<td align="center">'.$i.'</td>';
						echo '<td align="center">'.$ro3['proID'].'</td>';
						echo '<td>'.$ro4['name'].'</td>';
						echo '<td align="right">'.number_format($ro3['price']).' <u>đ</u></td>';
						echo '<td align="right">'.$ro3['amount'].'</td>';
						echo '<td align="right">'.number_format($ro3['totalPrice']).' <u>đ</u></td>';
						echo '</tr>';
					}
				}
			?>
            <tr>
            <tr>
                <td colspan="6" align="right" style="color: #333">
                    <?php
                        echo '<b>Tổng tiền:</b>';
                        echo '<font style="color: #a80002; font-weight: bold;"> '.number_format($ro1['totalBill']).' <u>VND</u></font> (Chưa tính phí vận chuyển)';
                    ?>
                </td>
            </tr>
            </tr>
        </table>
        <div style="width: 568px; margin-top: 15px; text-align: right">
        <form action="#" method="post">
        	<input type="submit" name="btnDelOrder" value="Hủy đơn hàng" onclick="return confirm('Chắc chắn hủy thông tin về đơn hàng này?');"/>
            <input type="button" name="btnBack" value="Quay lại" onClick="window.location='orderStatus.php'"/>
        </form>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
	if("yes")
	{
		<?php
		if(isset($_POST['btnDelOrder']))
		{
			$qr5=mysql_query("DELETE FROM orders WHERE id='".$_GET['orderid']."'",$link);
			$qr6=mysql_query("DELETE FROM orderdetails WHERE orderID='".$_GET['orderid']."'",$link);
			if($qr5&&$qr6)
			{
				header('Location: orderStatus.php');	
			}
			else
			{
				echo '<h2>Đã xảy ra lỗi trong việc hủy đơn hàng. Vui lòng thử lại sau ít phút nữa</h2>';	
			}
		}
		?>
	}
</script>
