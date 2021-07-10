<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Đặt hàng và thanh toán
</div>
</div>

<div class="content_partition1" style="margin-left: -2px">
<div class="content_part1">
	<div style="width: 560px; border: 1px solid #ccc; padding: 5px 5px; color: #a80002; font-weight: bold;">Thông tin thanh toán và giao nhận hàng</div>
   	<div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Thông tin thanh toán</div>
    <form action="#" method="post" enctype="multipart/form-data" id="form_ViewInfo"> <!--Đặt vị trí thể hiện form-->
    <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px; color: #00F;">
    	<input type="radio" name="userAddress" id="userAddress" value="1" checked="checked"/>Sử dụng địa chỉ có sẵn
    </div>
    <div style="width: 560px; height: 90px; border: 1px solid #ccc; margin-top: 5px; text-align: left; padding: 5px 5px; overflow: scroll;">
	<?php
	if(isset($_SESSION['id']))
	{
		$strSQL="SELECT * FROM contact WHERE userid='".$_SESSION['id']."' AND state=2 limit 0,5";
		$query=mysql_query($strSQL,$link);
		while($row=mysql_fetch_array($query))
		{
			echo '<a href="checkOutId.php?action=viewInfo&vid='.$row['id'].'">'.$row['name'].', '.$row['address'].'</a><br/>';
		}
	}
	elseif(isset($_COOKIE['id']))
	{
		$strSQL="SELECT * FROM contact WHERE userid='".$_COOKIE['id']."' AND state=2 limit 0,5";
		$query=mysql_query($strSQL,$link);
		while($row=mysql_fetch_array($query))
		{
			echo '<a href="checkOutId.php?action=viewInfo&vid='.$row['id'].'">'.$row['name'].', '.$row['address'].'</a><br/>';
		}
	}
	else
	{
		header('Location: checkOut.php');	
	}
	?>
    </div>
    <div style="width: 572px; margin-top: 10px;">
    	<?php
		if(isset($_GET['vid']))
		{
			$_SESSION['vid']=$_GET['vid'];
		
			$strSQL10="SELECT * FROM contact WHERE id='".$_SESSION['vid']."' AND state=2";
			$query10=mysql_query($strSQL10,$link);
			$row10=mysql_fetch_array($query10);
		
		?>
		<table border="0" cellpadding="2" cellspacing="2">
            <tr>
            <td align="right">Họ và Tên: </td>
            <td><input type="text" disabled="disabled" value="<?php echo $row10["name"]; ?>"  style="width: 330px;"/></td>
            </tr>
            <tr>
            <td align="right">Điện thoại: </td>
            <td><input type="text" disabled="disabled" value="<?php echo $row10["tel"]; ?>"  style="width: 330px;"/></td>
            </tr>
            <tr>
            <td align="right">Địa chỉ: </td>
            <td><input type="text" disabled="disabled" value="<?php echo $row10["address"]; ?>"  style="width: 330px;"/></td>
            </tr>
       	</table>
		<?php
        }
        ?>
    </div>
    <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px; color: #00F;">
    	<input type="radio" name="userAddress" id="userAddress" value="2"/>Sử dụng địa chỉ khác</div>
    <div style="width: 572px; margin-top: 10px;">
    
		<table border="0" cellpadding="2" cellspacing="2">
        	<tr>
            <td align="right">Email <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="email" id="email" style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            <td align="right">Họ và Tên <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="name" id="name" style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            <td align="right">Điện thoại <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="tel" id="tel" style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            <td align="right">Địa chỉ <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="address" id="address" style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>

    <tr>
    <td align="right"> Tỉnh / Thành phố <font style="color: #F00">(*)</font>: </td>
    <td>
    <select name="country" id="country" style="width: 220px; border: 1px solid #ccc;">
    <option value=""></option>
    	<option value="Hà Nội">Hà Nội</option>
		<option value="Hồ Chí Minh">Hồ Chí Minh</option>
		<option value="Đà Nẵng">Đà Nẵng</option>
		<option value="Cần Thơ">Cần Thơ</option>
		<option value="An Giang">An Giang</option>
		<option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
		<option value="Bắc Giang">Bắc Giang</option>
		<option value="Bắc Kạn">Bắc Kạn</option>
		<option value="Bạc Liêu">Bạc Liêu</option>
		<option value="Bắc Ninh">Bắc Ninh</option>
		<option value="Bến Tre">Bến Tre</option>
		<option value="Bình Định">Bình Định</option>
		<option value="Bình Dương">Bình Dương</option>
		<option value="Bình Phước">Bình Phước</option>
		<option value="Bình Thuận">Bình Thuận</option>
		<option value="Cà Mau">Cà Mau</option>
		<option value="Cao Bằng">Cao Bằng</option>
		<option value="Đăk Lăk">Đăk Lăk</option>
		<option value="Đăk Nông">Đăk Nông</option>
		<option value="Điện Biên">Điện Biên</option>
		<option value="Đồng Nai">Đồng Nai</option>
		<option value="Đồng Tháp">Đồng Tháp</option>
		<option value="Gia Lai">Gia Lai</option>
		<option value="Hà Giang">Hà Giang</option>
		<option value="Hà Nam">Hà Nam</option>
		<option value="Hà Tĩnh">Hà Tĩnh</option>
		<option value="Hải Dương">Hải Dương</option>
		<option value="Hải Phòng">Hải Phòng</option>
		<option value="Hậu Giang">Hậu Giang</option>
		<option value="Hòa Bình">Hòa Bình</option>
		<option value="Huế">Huế</option>
		<option value="Hưng Yên">Hưng Yên</option>
		<option value="Khánh Hòa">Khánh Hòa</option>
		<option value="Kiên Giang">Kiên Giang</option>
		<option value="Kon Tum">Kon Tum</option>
		<option value="Lai Châu">Lai Châu</option>
		<option value="Lâm Đồng">Lâm Đồng</option>
		<option value="Lạng Sơn">Lạng Sơn</option>
		<option value="Lào Cai">Lào Cai</option>
		<option value="Long An">Long An</option>
		<option value="Nam Định">Nam Định</option>
		<option value="Nghệ An">Nghệ An</option>
		<option value="Ninh Bình">Ninh Bình</option>
		<option value="Ninh Thuận">Ninh Thuận</option>
		<option value="Phú Thọ">Phú Thọ</option>
		<option value="Phú Yên">Phú Yên</option>
		<option value="Quảng Bình">Quảng Bình</option>
		<option value="Quảng Nam">Quảng Nam</option>
		<option value="Quảng Ngãi">Quảng Ngãi</option>
		<option value="Quảng Ninh">Quảng Ninh</option>
		<option value="Quảng Trị">Quảng Trị</option>
		<option value="Sóc Trăng">Sóc Trăng</option>
		<option value="Sơn La">Sơn La</option>
		<option value="Tây Ninh">Tây Ninh</option>
		<option value="Thái Bình">Thái Bình</option>
		<option value="Thái Nguyên">Thái Nguyên</option>
		<option value="Thanh Hóa">Thanh Hóa</option>
		<option value="Tiền Giang">Tiền Giang</option>
		<option value="Trà Vinh">Trà Vinh</option>
		<option value="Tuyên Quang">Tuyên Quang</option>
		<option value="Vĩnh Long">Vĩnh Long</option>
		<option value="Vĩnh Phúc">Vĩnh Phúc</option>
		<option value="Yên Bái">Yên Bái</option>  
    </select>
    </td>
    </tr>
    </table>
    </div>
    
    	<div style="margin-top: 5px; border-top: 1px solid #ccc;"></div>
        <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Địa chỉ nhận hàng</div>
        <div style="width: 560px; height: 90px; border: 1px solid #ccc; margin-top: 5px; text-align: left; padding: 5px 5px; overflow: scroll;">
		<?php
		if(isset($_SESSION['id']))
		{
            $strSQL1="SELECT * FROM contact WHERE userid='".$_SESSION['id']."' AND state=2 limit 0,5";
            $query1=mysql_query($strSQL1,$link);
            while($row1=mysql_fetch_array($query1))
            {
                echo '<a href="checkOutId.php?view=viewAddressRec&rid='.$row1['id'].'">'.$row1['name'].', '.$row1['address'].'</a><br/>';
            }
		}
		elseif(isset($_COOKIE['id']))
		{
			$strSQL1="SELECT * FROM contact WHERE userid='".$_COOKIE['id']."' AND state=2 limit 0,5";
			$query1=mysql_query($strSQL1,$link);
			while($row1=mysql_fetch_array($query1))
			{
				echo '<a href="checkOutId.php?view=viewAddressRec&rid='.$row1['id'].'">'.$row1['name'].', '.$row1['address'].'</a><br/>';
			}
		}
        ?>
        </div>
        <div style="width: 572px; margin-top: 10px;">
    	<?php
			if(isset($_GET['rid']))
			{
				$_SESSION['rid']=$_GET['rid'];
			
				$strSQL1="SELECT * FROM contact WHERE id='".$_SESSION['rid']."' AND state=2";
				$query1=mysql_query($strSQL1,$link);
				$row1=mysql_fetch_array($query1);
			}
		?>
        <table border="0" cellpadding="2" cellspacing="2">
            <tr>
            <td align="right">Họ và Tên <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="nameRec" id="nameRec" value="<?php echo $row1['name']; ?>"  style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            <td align="right">Điện thoại <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="telRec" id="telRec" value="<?php echo $row1['tel']; ?>"  style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            <td align="right">Địa chỉ <font style="color: #F00">(*)</font>: </td>
            <td><input type="text" name="addressRec" id="addressRec" value="<?php echo $row1['address']; ?>"  style="width: 330px; border: 1px solid #ccc;"/></td>
            </tr>
            <tr>
            	<td align="right">Tỉnh / Thành phố <font style="color: #F00">(*)</font>: </td>
            	<td>
            		<select name="countryRec" id="countryRec" style="width: 220px; border: 1px solid #ccc;">
                    <option value=""></option>
                        <option value="Hà Nội" <?php if($row1['country']=='Hà Nội') echo 'selected'; ?>>Hà Nội</option>
                        <option value="Hồ Chí Minh" <?php if($row1['country']=='Hồ Chí Minh') echo 'selected'; ?>>Hồ Chí Minh</option>
                        <option value="Đà Nẵng" <?php if($row1['country']=='Đà Nẵng') echo 'selected'; ?>>Đà Nẵng</option>
                        <option value="Cần Thơ" <?php if($row1['country']=='Cần Thơ') echo 'selected'; ?>>Cần Thơ</option>
                        <option value="An Giang" <?php if($row['country']=='An Giang') echo 'selected'; ?>>An Giang</option>
                        <option value="Bà Rịa - Vũng Tàu" <?php if($row1['country']=='Bà Rịa - Vũng Tàu') echo 'selected'; ?>>Bà Rịa - Vũng Tàu</option>
                        <option value="Bắc Giang" <?php if($row1['country']=='Bắc Giang') echo 'selected'; ?>>Bắc Giang</option>
                        <option value="Bắc Kạn" <?php if($row1['country']=='Bắc Kạn') echo 'selected'; ?>>Bắc Kạn</option>
                        <option value="Bạc Liêu" <?php if($row1['country']=='Bạc Liêu') echo 'selected'; ?>>Bạc Liêu</option>
                        <option value="Bắc Ninh" <?php if($row1['country']=='Bắc Ninh') echo 'selected'; ?>>Bắc Ninh</option>
                        <option value="Bến Tre" <?php if($row1['country']=='Bến Tre') echo 'selected'; ?>>Bến Tre</option>
                        <option value="Bình Định" <?php if($row1['country']=='Bình Định') echo 'selected'; ?>>Bình Định</option>
                        <option value="Bình Dương" <?php if($row1['country']=='Bình Dương') echo 'selected'; ?>>Bình Dương</option>
                        <option value="Bình Phước" <?php if($row1['country']=='Bình Phước') echo 'selected'; ?>>Bình Phước</option>
                        <option value="Bình Thuận" <?php if($row1['country']=='Bình Thuận') echo 'selected'; ?>>Bình Thuận</option>
                        <option value="Cà Mau" <?php if($row1['country']=='Cà Mau') echo 'selected'; ?>>Cà Mau</option>
                        <option value="Cao Bằng" <?php if($row1['country']=='Cao Bằng') echo 'selected'; ?>>Cao Bằng</option>
                        <option value="Đăk Lăk" <?php if($row1['country']=='Đăk Lăk') echo 'selected'; ?>>Đăk Lăk</option>
                        <option value="Đăk Nông" <?php if($row1['country']=='Đăk Nông') echo 'selected'; ?>>Đăk Nông</option>
                        <option value="Điện Biên" <?php if($row1['country']=='Điện Biên') echo 'selected'; ?>>Điện Biên</option>
                        <option value="Đồng Nai" <?php if($row1['country']=='Đồng Nai') echo 'selected'; ?>>Đồng Nai</option>
                        <option value="Đồng Tháp" <?php if($row1['country']=='Đồng Tháp') echo 'selected'; ?>>Đồng Tháp</option>
                        <option value="Gia Lai" <?php if($row1['country']=='Gia Lai') echo 'selected'; ?>>Gia Lai</option>
                        <option value="Hà Giang" <?php if($row1['country']=='Hà Giang') echo 'selected'; ?>>Hà Giang</option>
                        <option value="Hà Nam" <?php if($row1['country']=='Hà Nam') echo 'selected'; ?>>Hà Nam</option>
                        <option value="Hà Tĩnh" <?php if($row1['country']=='Hà Tĩnh') echo 'selected'; ?>>Hà Tĩnh</option>
                        <option value="Hải Dương" <?php if($row1['country']=='Hải Dương') echo 'selected'; ?>>Hải Dương</option>
                        <option value="Hải Phòng" <?php if($row1['country']=='Hải Phòng') echo 'selected'; ?>>Hải Phòng</option>
                        <option value="Hậu Giang" <?php if($row1['country']=='Hậu Giang') echo 'selected'; ?>>Hậu Giang</option>
                        <option value="Hòa Bình" <?php if($row1['country']=='Hòa Bình') echo 'selected'; ?>>Hòa Bình</option>
                        <option value="Huế" <?php if($row1['country']=='Huế') echo 'selected'; ?>>Huế</option>
                        <option value="Hưng Yên" <?php if($row1['country']=='Hưng Yên') echo 'selected'; ?>>Hưng Yên</option>
                        <option value="Khánh Hòa" <?php if($row1['country']=='Khánh Hòa') echo 'selected'; ?>>Khánh Hòa</option>
                        <option value="Kiên Giang" <?php if($row1['country']=='Kiên Giang') echo 'selected'; ?>>Kiên Giang</option>
                        <option value="Kon Tum" <?php if($row1['country']=='Kon Tum') echo 'selected'; ?>>Kon Tum</option>
                        <option value="Lai Châu" <?php if($row1['country']=='Lai Châu') echo 'selected'; ?>>Lai Châu</option>
                        <option value="Lâm Đồng" <?php if($row1['country']=='Lâm Đồng') echo 'selected'; ?>>Lâm Đồng</option>
                        <option value="Lạng Sơn" <?php if($row1['country']=='Lạng Sơn') echo 'selected'; ?>>Lạng Sơn</option>
                        <option value="Lào Cai" <?php if($row1['country']=='Lào Cai') echo 'selected'; ?>>Lào Cai</option>
                        <option value="Long An" <?php if($row1['country']=='Long An') echo 'selected'; ?>>Long An</option>
                        <option value="Nam Định" <?php if($row1['country']=='Nam Định') echo 'selected'; ?>>Nam Định</option>
                        <option value="Nghệ An" <?php if($row1['country']=='Nghệ An') echo 'selected'; ?>>Nghệ An</option>
                        <option value="Ninh Bình" <?php if($row1['country']=='Ninh Bình') echo 'selected'; ?>>Ninh Bình</option>
                        <option value="Ninh Thuận" <?php if($row1['country']=='Ninh Thuận') echo 'selected'; ?>>Ninh Thuận</option>
                        <option value="Phú Thọ" <?php if($row1['country']=='Phú Thọ') echo 'selected'; ?>>Phú Thọ</option>
                        <option value="Phú Yên" <?php if($row1['country']=='Phú Yên') echo 'selected'; ?>>Phú Yên</option>
                        <option value="Quảng Bình" <?php if($row1['country']=='Quảng Bình') echo 'selected'; ?>>Quảng Bình</option>
                        <option value="Quảng Nam" <?php if($row1['country']=='Quảng Nam') echo 'selected'; ?>>Quảng Nam</option>
                        <option value="Quảng Ngãi" <?php if($row1['country']=='Quảng Ngãi') echo 'selected'; ?>>Quảng Ngãi</option>
                        <option value="Quảng Ninh" <?php if($row1['country']=='Quảng Ninh') echo 'selected'; ?>>Quảng Ninh</option>
                        <option value="Quảng Trị" <?php if($row1['country']=='Quảng Trị') echo 'selected'; ?>>Quảng Trị</option>
                        <option value="Sóc Trăng" <?php if($row1['country']=='Sóc Trăng') echo 'selected'; ?>>Sóc Trăng</option>
                        <option value="Sơn La" <?php if($row1['country']=='Sơn La') echo 'selected'; ?>>Sơn La</option>
                        <option value="Tây Ninh" <?php if($row1['country']=='Tây Ninh') echo 'selected'; ?>>Tây Ninh</option>
                        <option value="Thái Bình" <?php if($row1['country']=='Thái Bình') echo 'selected'; ?>>Thái Bình</option>
                        <option value="Thái Nguyên" <?php if($row1['country']=='Thái Nguyên') echo 'selected'; ?>>Thái Nguyên</option>
                        <option value="Thanh Hóa" <?php if($row1['country']=='Thanh Hóa') echo 'selected'; ?>>Thanh Hóa</option>
                        <option value="Tiền Giang" <?php if($row1['country']=='Tiền Giang') echo 'selected'; ?>>Tiền Giang</option>
                        <option value="Trà Vinh" <?php if($row1['country']=='Trà Vinh') echo 'selected'; ?>>Trà Vinh</option>
                        <option value="Tuyên Quang" <?php if($row1['country']=='Tuyên Quang') echo 'selected'; ?>>Tuyên Quang</option>
                        <option value="Vĩnh Long" <?php if($row1['country']=='Vĩnh Long') echo 'selected'; ?>>Vĩnh Long</option>
                        <option value="Vĩnh Phúc" <?php if($row1['country']=='Vĩnh Phúc') echo 'selected'; ?>>Vĩnh Phúc</option>
                        <option value="Yên Bái" <?php if($row1['country']=='Yên Bái') echo 'selected'; ?>>Yên Bái</option>  
                    </select>
            	</td>
            </tr>
       	</table>
    	</div>
        <div style="margin-top: 5px; border-top: 1px solid #ccc;"></div>
        <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Hình thức thanh toán</div>
        <div style="width: 560px; margin-top: 10px; text-align: left;">
            <input type="radio" name="paymentForm" id="paymentForm" value="1" />Thanh toán tại các đại lý phân phối sản phẩm</div>
        <div style="width: 560px; margin-top: 5px; text-align: left;">
            <input type="radio" name="paymentForm" id="paymentForm" value="2" />Thanh toán khi nhận được hàng
        </div>  
        <div style="width: 560px; margin-top: 5px; text-align: left;">
            <input type="radio" name="paymentForm" id="paymentForm" value="3" />Thanh toán trực tuyến an toàn qua NgânLượng.vn
        </div>
        <div style="margin-top: 5px; border-top: 1px solid #ccc;"></div>
        <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Hình thức vận chuyển đơn hàng</div>
        <div style="width: 560px; margin-top: 10px; text-align: left;">
        <label>
    		<input type="radio" name="paymentShip" id="paymentShip" value="1" checked="checked" /> Miễn phí trong phạm vi 10 Km (Trong ngày)
        </label>
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
						$result2=mysql_query("SELECT * FROM products WHERE id=".$item[0]);
						if($result2)
						{
							$row2=mysql_fetch_array($result2);
							$totalPrice=$row2['price']*$item[1];
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
       	</div>
        <div style="width: 548px; margin-top: 10px; font-weight: bold; padding: 0px 6px;">Lời nhắn <font style="font-weight: normal">(Gửi thông điệp của bạn để chúng tôi có thể phục vụ bạn tốt hơn)</font></div>
        <div style="width: 560px; margin-top: 5px; text-align: left;">
            <textarea name="note" id="note" style="width: 566px; height: 60px;"></textarea>
        </div> 
        <div style="width: 566px; margin-top: 5px; text-align: left; text-align: right;">
            <input type="submit" name="btnOrder" id="btnOrder" value="Xác nhận và gửi đơn hàng" />
        </div>
    </form>
</div>
</div>

</div>
<?php
	if(isset($_POST['btnOrder']))
	{
		if(isset($_POST['userAddress']) && ($_POST['userAddress']==2))
		{
			$sql3="INSERT INTO users(name,address,country,tel,email,date,Role) VALUES('".$_POST['name']."','".$_POST['address']."','".$_POST['country']."','".$_POST['tel']."','".$_POST['email']."',NOW(),3)";
			$query3=mysql_query($sql3,$link);
			
			$sql4="SELECT * FROM users WHERE email='".$_POST['email']."' ORDER BY id DESC limit 0,1";
			$query4=mysql_query($sql4,$link);
			$row4=mysql_fetch_array($query4);
			$_SESSION['idGuest']=$row4['id'];
			$_SESSION['emailGuest']=$row4['email'];
		}
		else
		{
			$sql4="SELECT * FROM users WHERE id='".$_SESSION['id']."' ORDER BY id DESC limit 0,1";
			$query4=mysql_query($sql4,$link);
			$row4=mysql_fetch_array($query4);
			$_SESSION['idGuest']=$row4['id'];
			$_SESSION['emailGuest']=$row4['email'];	
		}
		$sql5="INSERT INTO orders(cusID,orderDate,paymentForm,paymentShip,recipient,address,tel,country,email,totalBill,note,status) VALUES('".$row4['id']."',NOW(),'".$_POST['paymentForm']."','".$_POST['paymentShip']."','".$_POST['nameRec']."','".$_POST['addressRec']."','".$_POST['telRec']."','".$_POST['countryRec']."','".$row4['email']."','".$totalBill."','".$_POST['note']."',0)";
		$query5=mysql_query($sql5,$link);
		$row5=mysql_fetch_array($query5);
		
		$sql6="SELECT * FROM orders WHERE cusID='".$row4['id']."' ORDER BY id DESC limit 0,1";
		$query6=mysql_query($sql6,$link);
		$row6=mysql_fetch_array($query6);
		$_SESSION['idOrderGuest']=$row6['id'];
		
		foreach($_SESSION['purchase'] as $item)
		{	
			$query8=mysql_query("SELECT * FROM products WHERE id='".$item[0]."'");
			while($row8=mysql_fetch_array($query8))
			{
				$totalPriceGuest=$row5['price'].$item[1];
				$sql7="INSERT INTO orderdetails(orderID,proID,price,amount,totalPrice) VALUES('".$row6['id']."','".$item[0]."','".$row8['price']."','".$item[1]."','".$totalPriceGuest."')";
				$query7=mysql_query($sql7,$link);
				if($query7)
				{
					header('Location: orderCompleted.php');
				}
				else
				{
					echo '<h3><font style="color: #FF000B;">Đơn hàng bị lỗi. Vui lòng thử lại sau</font></h3>';	
				}
			}
		}
	}
?>