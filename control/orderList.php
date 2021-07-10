<?php
	if($_SESSION['idGuest'])
	{
		$sql="SELECT * FROM users WHERE id='".$_SESSION['idGuest']."' ORDER BY id DESC limit 0,1";
		$query=mysql_query($sql,$link);
		$row=mysql_fetch_array($query);
	}
	else
	{
		header('Location: checkOut.php');	
	}
	if($_SESSION['idOrderGuest'])
	{
		$sql1="SELECT * FROM orders WHERE id='".$_SESSION['idOrderGuest']."' ORDER BY id DESC limit 0,1";
		$query1=mysql_query($sql1,$link);
		$row1=mysql_fetch_array($query1);
	}
	else
	{
		header('Location: checkOut.php');	
	}
?>
<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Đơn hàng thanh toán
</div>
</div>

<div class="content_partition1" style="margin-left: -2px">
<div class="content_part1">
	<div style="width: 560px; border: 1px solid #ccc; padding: 5px 5px; color: #a80002; font-weight: bold;">Thông tin thanh toán và địa chỉ nhận hàng</div>
    <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Thông tin thanh toán:</div>
    <div style="margin-top: 5px; border-top: 1px dotted #ccc;"></div>
    <div style="width: 548px; margin-top: 10px; padding: 0px 3px; text-align: left;">
    <table border="0" cellpadding="2" cellspacing="2">
   		<tr>
        	<td>
            <?php echo '<b>'.$row['name'].'</b>';?>
            </td>
       	</tr>
        <tr>
        	<td>
            <?php echo $row['address'];?>
            </td>
       	</tr>
        <tr>
        	<td>
            <?php echo $row['tel'];?>
            </td>
       	</tr>
    </table>
    </div>
    <div style="margin-top: 5px; border-top: 1px solid #ccc;"></div>
    <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Địa chỉ nhận hàng:</div>
    <div style="margin-top: 5px; border-top: 1px dotted #ccc;"></div>
    <div style="width: 548px; margin-top: 10px; padding: 0px 3px; text-align: left;">
    <table border="0" cellpadding="2" cellspacing="2">
   		<tr>
        	<td>
            <?php echo '<b>'.$row1['recipient'].'</b>';?>
            </td>
       	</tr>
        <tr>
        	<td>
            <?php echo $row1['address'];?>
            </td>
       	</tr>
        <tr>
        	<td>
            <?php echo $row1['tel'];?>
            </td>
       	</tr>
    </table>
    </div>
    <div style="margin-top: 5px; border-top: 1px solid #ccc;"></div>
    <div style="margin-top: 10px; text-align: left;">
    	<b>Thời gian đặt hàng: </b><?php echo $row1['orderDate']; ?>
    </div>
    <div style="margin-top: 5px; text-align: left;">
    	<b>Hình thức thanh toán: </b>
		<?php 
			if($row1['paymentForm']==1)
			{
				echo 'Thanh toán tại cửa hàng';
			}
			elseif($row1['paymentForm']==2)
			{
				echo 'Thanh toán khi nhận được hàng';
			}
			elseif($row1['paymentForm']==3)
			{
				echo 'Thanh toán trực tuyến an toàn qua NgânLượng.vn';
			}
		?>
    </div>
    <div style="width: 560px; margin-top: 5px; border: 1px solid #ccc; padding: 5px 5px;">
    <?php
		if($row1['paymentForm']==1)
		{
			echo 'Bạn vui lòng đến cửa hàng để thanh toán và nhận hàng.';
		}
		elseif($row1['paymentForm']==2)
		{
			echo 'Bạn sẽ thanh toán khi nhận được hàng chuyển đến địa chỉ mua hàng của bạn.';
		}
	?>
    </div>
    <div style="margin-top: 10px; text-align: left; font-weight: bold">Hình thức vận chuyển:</div>
    <div style="width: 560px; margin-top: 5px; border: 1px solid #ccc; padding: 5px 5px;">
    <?php
		if($row1['paymentShip']==1)
		{
			echo 'Miễn phí trong phạm vi 10 Km';
		}
		else
		{
			echo '';
		}
	?>
    </div>
    <div style="width: 572px; margin-top: 10px; text-align: left;">
    	<table width="572px" border="1" cellpadding="2" cellspacing="2" class="csstable1">
			<tr>
            	<th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng</th>
            </tr>
            <?php
				$i=0;
				$totalBill=0;
				$_SESSION['totalBill']=$totalBill;
			if(isset($_SESSION['purchase']))
			{
				foreach($_SESSION['purchase'] as $item)
				{
					$i++;
					$result=mysql_query("SELECT * FROM products WHERE id=".$item[0]);
					if($result)
					{
						$row2=mysql_fetch_array($result);
						$_SESSION['priceGuest']=$row2['price'];
						$totalPrice=$row2['price']*$item[1];
						$_SESSION['totalPriceGuest']=$totalPrice;
						$totalBill+=$totalPrice;
					}
			?>
			<tr>
				<td>
					<?php
						echo $i;
						$_SESSION['numberPro']=$i;
					?>
				</td>
				<td>
					<?php
						echo $item[0];
					?>
				</td>
				<td>
					<?php
						echo '<a href="productDetail.php?pid='.$row2['id'].'"><b>'.$row2['name'].'</b></a>';
					?>
				</td>
				<td>
					<?php
						echo number_format($row2['price']).' <u>VND</u>';
					?>
				</td>
				<td>
					<?php echo $item[1]; ?>
				</td>
				<td>
					<?php
						echo '<b>'.number_format($totalPrice).' <u>VND</u></b>';
					?>
				</td>
			</tr>
			<?php
				}
			}$_SESSION['totalBill']=$totalBill;
			?>
            <tr>
                <td colspan="6" align="right">
                    <?php
                        echo '<b>Tổng tiền:</b>';
                        echo '<font style="color: #a80002; font-weight: bold;"> '.number_format($totalBill).' <u>VND</u></font> (Chưa tính phí vận chuyển)';
                    ?>
                </td>
            </tr>
       	</table>
    </div>
    <div style="width: 566px; margin-top: 5px; text-align: center;">
        <a href="printOrder.php" target="_blank"><input type="submit" name="btnPrint" id="btnPrint" value="In hóa đơn" /></a>
        <?php
			if(isset($_SESSION['id']) || isset($_COOKIE['id']))
			{
				echo '<a href="personal.php?perid='.$_SESSION['id'].'"><input type="button" name="btnBack" id="btnBack" value="Quay trở lại trang cá nhân"/></a>';
			}
		?>
        <?php
			if($row1['paymentForm']==3)
			{
				echo '<a href="payPal.php" target="_blank"><input type="button" name="btnClick" id="btnClick" value="Thanh toán trực tuyến"/></a>';	
			}
		?>
    </div>
</div>
</div>

</div>