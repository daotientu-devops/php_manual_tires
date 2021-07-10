<?php
	if(isset($_SESSION['id']) || isset($_COOKIE['id']))
	{
		echo '';
	}
	else
	{
		header('Location: login.php');	
	}
?>
<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Quản lý đơn hàng
</div>
</div>

<div class="content_partition1">
        <?php
		if(isset($_SESSION['id']))
		{
			$qr1=mysql_query("SELECT * FROM orders WHERE cusID='".$_SESSION['id']."' ORDER BY id DESC limit 0,5",$link);
		}
		elseif(isset($_COOKIE['id']))
		{
			$qr1=mysql_query("SELECT * FROM orders WHERE cusID='".$_COOKIE['id']."' ORDER BY id DESC limit 0,5",$link);
		}
		while($ro1=mysql_fetch_array($qr1))
		{
			echo '<div class="content_Left">';
			echo '<p>
			<b>Đơn hàng #'.$ro1['id'].'</b><br/>
			Ngày đặt: '.$ro1['orderDate'].'<br/>';
			
			echo 'Trạng thái đơn hàng: ';
			if($ro1['status']==0)
			{
				echo '<font style="color: #FF0000; font-weight: bold">Chờ xử lý</font>';
			}
			elseif($ro1['status']==1)
			{
				echo '<font style="color: #FF0000; font-weight: bold">Đã xử lý</font>';
			}
			echo '<br/>';
			echo 'Trị giá đơn hàng: ';
			echo '<font style="color: #a90404; font-weight: bold">'.number_format($ro1['totalBill']).' <u>đ</u></font>';
			echo '<br/>';
			echo '<font style="font-weight: bold">Phương thức thanh toán: </font>';
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
			echo '<font style="font-weight: bold">Đơn hàng bao gồm: </font>';
			echo '<br/>';
			$qr2=mysql_query("SELECT * FROM orderdetails WHERE orderID='".$ro1['id']."'",$link);
			while($ro2=mysql_fetch_array($qr2))
			{
				$qr3=mysql_query("SELECT * FROM products WHERE id='".$ro2['proID']."'",$link);
				while($ro3=mysql_fetch_array($qr3))
				{
					echo '&piv; '.$ro3['name'].'<br/>';
				}
			}
			echo '</p>';
			echo '</div>';
			echo '<div class="content_Right">';
			echo '<div class="orderButton"><a href="orderDetails.php?orderid='.$ro1['id'].'">Chi tiết đơn hàng</a></div>';
			echo '<div class="messageButton"><a href="message.php?mesid='.$ro1['id'].'">Gửi tin nhắn</a></div>';
			echo '</div>';
			echo '<hr/>';
		}
    	?>
    
</div>

</div>