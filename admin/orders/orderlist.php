<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px;"> <font style="font-size: 18px; font-weight: bold; margin-right: 20px;">Quản lý hóa đơn</font> <b>[ Thống kê số lượng đơn hàng ] - Tổng số hóa đơn : </b>
  <?php
	$qr1=mysql_query("SELECT * FROM orders",$link);
	$count1=mysql_num_rows($qr1);
	$qr2=mysql_query("SELECT * FROM orders WHERE status=1",$link);
	$count2=mysql_num_rows($qr2);
	$qr3=mysql_query("SELECT * FROM orders WHERE status=0",$link);
	$count3=mysql_num_rows($qr3);
	echo '<font style="color: #787878;">'.$count1.'</font>';
	echo ' | Đã thanh toán: <font style="color: #787878;">'.$count2.'</font>';
	echo ' | Chưa thanh toán: <font style="color: #787878;">'.$count3.'</font>';
?>
</div>
<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;"> <a href="orders.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>
<div style="float: left; margin-bottom: 10px;">
  <form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập ngày đặt hàng:</font>
    <input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 200px; height: 20px;" class="datepicker" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>"/>
    <input name="SearchOrd" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
    <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
  </form>
</div>
<?php
if (isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('orders/addord.php');
		break;
		case 'edit':
		include('orders/editord.php');
		break;
		case 'delete':
		include('orders/deleteord.php');
		break;
		default:
		header('Location: orders.php');
	}
}else{
	echo '
<div style="clear: both;">
  <table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mã khách hàng</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Ngày giao hàng</th>
      <th scope="col">Người giao hàng</th>
      <th scope="col">Ngày thanh toán</th>
      <th scope="col">Hình thức thanh toán</th>
      <th scope="col">Người nhận</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Tổng tiền (VND)</th>
      <th scope="col">Ghi chú</th>
      <th scope="col">Tình trạng</th>
      <th scope="col">Thao tác</th>
    </tr>';
$p=10;//Số bản ghi trên một trang
	//kiểm tra biến n trên trình duyệt
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;
	}
	$s=($n-1)*$p;//lấy số thứ tự bản ghi đầu tiên của trang
	
	//tạo câu truy vấn select all
	$sql1="SELECT * FROM orders";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE orderDate like '%".$_GET['keyword']."%'";
	}
	$result=mysql_query($sql1,$link);
	$n_record=mysql_num_rows($result);
	
	//Hàm view_page()
	function view_page()
	{
		global $n_record;
		global $p;
		for($i=1;$i<=ceil($n_record/$p);$i++)
		{
			if(isset($_GET['keyword']))
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="orders.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="orders.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="orders.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="orders.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}
	}

		$sql1.=" ORDER BY id ASC limit $s,$p";	
		$result1=mysql_query($sql1,$link);
		$count1=0;
		
		while($row1=mysql_fetch_array($result1))
		{
			$count1++;
			echo '<tr>';
			echo '<td>'.$row1['id'].'</td>';	
			echo '<td>'.$row1['cusID'].'</td>';
			echo '<td>'.$row1['orderDate'].'</td>';
			echo '<td>'.$row1['deliveryDate'].'</td>';
			echo '<td>'.$row1['shipper'].'</td>';
			echo '<td>'.$row1['paymentDate'].'</td>';
			echo '<td>'.$row1['paymentForm'].'</td>';
			echo '<td>'.$row1['recipient'].'</td>';
			echo '<td>'.$row1['address'].'</td>';
			echo '<td>'.$row1['tel'].'</td>';
			echo '<td>'.$row1['email'].'</td>';
			echo '<td>'.$row1['totalBill'].'</td>';
			echo '<td>'.$row1['note'].'</td>';
			echo '<td>';
			if($row1['status']==1)
			{
				echo '<b>Đã thanh toán và chuyển hàng</b>';
			}
			else
			{
				echo '<b>Chưa thanh toán</b>';
			}
			echo '</td>';
			echo '<td><a href="orders.php?action=edit&ordid='.$row1['id'].'">Sửa </a>
			| <a href="orders.php?action=delete&ordid='.$row1['id'].'">Xóa </a>
			
			</td>';
			echo '</tr>';
			
		}
	view_page();
echo '
  </table>
</div>';
}
?>
