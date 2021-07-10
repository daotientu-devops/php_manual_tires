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
<div style="padding: 10px">
<font style="font-size: 18px">Công ty TNHH lốp xe Tiến Hoàng</font>
<div style="width: 100%; margin-top: 10px;"></div>
<table width="100%" border="0" cellpadding="2" cellspacing="2">
	<tr>
    	<td><b>Địa chỉ</b></td>
        <td>Tầng 5, Nhà E3, ĐHQG HN, 144 Xuân Thủy, Cầu Giấy, Hà Nội</td>
    </tr>
    <tr>
    	<td><b>Điện thoại</b></td>
        <td>04 3754 6732 | 0912356004</td>
    </tr>
    <tr>
    	<td><b>Fax</b></td>
        <td>968 207 643</td>
    </tr>
    <tr>
    	<td><b>Email</b></td>
        <td><a href="mailto:itplus@itplus.edu.vn">itplus@itplus.edu.vn</a></td>
    </tr>
    <tr>
    	<td><b>Website</b></td>
        <td><a href="http://www.itplus.edu.vn">www.itplus.edu.vn</a></td>
    </tr>

    <tr>
    	<td colspan="2" style="background: #000; color: #FFF; padding: 5px; font-weight: bold; font-size: 16px;">Hóa đơn đặt hàng số #<?php echo $_SESSION['idOrderGuest']; ?></td>
    </tr>
    <tr>
    	<td colspan="2"><b>Thông tin thanh toán</b></td>
    </tr>
    <tr>
    	<td colspan="2"><b><?php echo $row['name']; ?></b></td>
    </tr>
    <tr>
    	<td colspan="2"><?php echo $row['place_of_work']; ?></td>
    </tr>
    <tr>
    	<td colspan="2"><?php echo $row['address']; ?></td>
    </tr>
    <tr>
    	<td colspan="2"><?php echo $row['country']; ?></td>
    </tr>
    <tr>
    	<td>Điện thoại:</td>
    	<td><?php echo $row['tel']; ?></td>
    </tr>
    <tr>
    	<td>Email:</td>
    	<td><?php echo '<a href="mailto:'.$row['email'].'">'.$row['email'].'</a>'; ?></td>
    </tr>
    <tr>
    	<td colspan="2"><hr /></td>
    </tr>
    <tr>
    	<td colspan="2"><b>Thông tin vận chuyển</b></td>
    </tr>
    <tr>
    	<td colspan="2"><b><?php echo $row1['recipient']; ?></b></td>
    </tr>
    <tr>
    	<td colspan="2"><?php echo $row1['address']; ?></td>
    </tr>
    <tr>
    	<td colspan="2"><?php echo $row1['country']; ?></td>
    </tr>
    <tr>
    	<td>Điện thoại:</td>
    	<td><?php echo $row1['tel']; ?></td>
    </tr>
    <tr>
    	<td colspan="2"><hr /></td>
    </tr>
    <tr>
    	<td colspan="2"><b>Hình thức thanh toán:</b></td>  
    </tr>
    <tr>
    	<td colspan="2">
        <?php
		if($row1['paymentForm']==1)
		{
			echo 'Bạn vui lòng đến cửa hàng để thanh toán và nhận hàng.';
		}
		elseif($row1['paymentForm']==2)
		{
			echo 'Bạn sẽ thanh toán khi nhận được hàng chuyển đến địa chỉ mua hàng của bạn.';
		}
		elseif($row1['paymentForm']==3)
		{
			echo 'Thanh toán trực tuyến an toàn qua NgânLượng.vn.';
		}
		?>
        </td>
    </tr>
    <tr>
    	<td colspan="2"><hr /></td>
    </tr>
    <tr>
    	<td colspan="2"><b>Hình thức vận chuyển:</b></td>  
    </tr>
    <tr>
    	<td colspan="2">
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
        </td>
    </tr>
    <tr>
    	<td colspan="2"><hr /></td>
    </tr>
    <tr>
    	<td colspan="2"><b>Thời gian đặt hàng:</b></td>  
    </tr>
    <tr>
    	<td colspan="2">
        <?php
			echo $row1['orderDate'];
		?>
        </td>
    </tr>
    <tr>
    	<td colspan="2" style="background: #000; color: #FFF; padding: 5px; font-weight: bold; font-size: 16px;">Thông tin đơn hàng:</td>
    </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="2" class="csstable1">
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
			}
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
	<div style="width: 100%; margin-top: 5px; text-align: center;">
        <a href="javascript:print();"><input type="submit" name="btnPrint" id="btnPrint" value="Print" /></a>
    </div>
</div>