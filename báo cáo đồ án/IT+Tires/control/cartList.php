<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Giỏ hàng của bạn 
</div>
</div>

<div class="content_partition1" style="margin-left: -1px">
<div class="content_part1">
<?php
if(isset($_GET['cid']))
{
	$cid=$_GET['cid'];
	if($cid>0)
	{
		$cart=array();
		if(!isset($_SESSION['purchase']) || $_SESSION['purchase']=="")
		{
			$product=array($cid,1);
			array_push($cart,$product);
		}
		else
		{
			$check=false;
			foreach($_SESSION['purchase'] as $item)
			{
				if($cid==$item[0])
				{
					$check=true;
					$amount=$item['1']+1;
					array_push($cart,array($cid,$amount));
				}
				else
				{
					array_push($cart,$item);
				}
			}
			if($check==false)
			{
				array_push($cart,array($cid,1));
			}
		}
		$_SESSION['purchase']=$cart;
	}
	
	if(isset($_POST['btnUpdate']))
	{
		$cart=array();
		foreach($_SESSION['purchase'] as $item)	
		{
			$amount=$_POST['txtAmount'.$item[0]];	
			if($amount>0)
			{
				array_push($cart,array($item[0],$amount));
			}
		}
		$_SESSION['purchase']=$cart;
	}
}
?>
<form action="#" id="frmCart" method="post">
<table width="570px" border="1" cellpadding="2" cellspacing="2" class="csstable1">
<tr>
	<th scope="col">STT</th>
    <th scope="col">ID</th>
    <th scope="col">Sản phẩm</th>
    <th scope="col">Giá bán</th>
    <th scope="col">Số lượng</th>
    <th scope="col">Tổng</th>
</tr>
<?php
	//view cart: xem giỏ hàng
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
			$row=mysql_fetch_array($result);
			$totalPrice=$row['price']*$item[1];
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
			echo '<a href="productDetail.php?pid='.$row['id'].'"><b>'.$row['name'].'</b></a>';
		?>
    </td>
    <td>
    	<?php
			echo number_format($row['price']).' <u>VND</u>';
		?>
    </td>
    <td>
    	<input type="text" name="txtAmount<?php echo $item[0]; ?>" value="<?php echo $item[1]; ?>" style="width: 60px; border: 1px solid #ccc;"/>
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
<tr>
    <td colspan="6" align="right">
    <input type="submit" name="btnUpdate" id="btnUpdate" value="Cập nhật giỏ hàng" />
    <input type="submit" name="btnDelete" id="btnDelete" value="Xóa bỏ giỏ hàng" />
    <input type="button" name="btnCheckOut" id="btnCheckOut" value="Đặt mua & Thanh toán" onclick="<?php

		echo "window.location='checkOutId.php'";

	?>
    "/>
    </td>
</tr>
</table>
<?php
	if(isset($_POST['btnDelete']))
	{
		unset($_SESSION['purchase']);
		unset($_SESSION['numberPro']);
		header('Location: index.php');	
	}
?>
</form>

<form action="#" id="frmOrder" method="post">


</form>
<?php
if(!isset($_GET['cid']))
{
	echo '<div style="margin-top: 5px;">Chưa có sản phẩm trong giỏ hàng của bạn!</div>';
}

?>
</div>
</div>
<!--------------------------------------------------------------------------------------------->

</div>