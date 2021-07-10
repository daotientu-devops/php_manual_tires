<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Sổ địa chỉ</div>
</div>

<div class="defaultContent">
Tất cả các thông tin về địa chỉ được sử dụng để chuyển hàng trong sổ địa chỉ của bạn được hiển thị dưới đây.<br />
Bạn cũng có thể 
<?php
	
	$strSQL = "SELECT * FROM contact WHERE userid='".$_GET['addressId']."' AND state=2 limit 0,5";
	$query = mysql_query($strSQL,$link);

	echo '<a href="addAddress.php">tạo thêm thông tin một địa chỉ mới.</a>';
	$k=0;
	while($row=mysql_fetch_array($query))
	{		
		$k++;
		$_SESSION['customerId']=$row['userid'];
		echo '<div style="float: left; width: 572px; margin-top: 10px; border-top: 1px dotted #ccc;"></div>';
		echo '<div style="float: left; width: 572px; margin-top: 10px;"><b>'.$row['name'].'</b></div>';
		echo '<div style="float: left; width: 572px; margin-top: 10px;">
		<a href="editAddress.php?Id='.$row['id'].'">Chỉnh sửa</a> | <a href="address_book.php?addressId='.$_GET['addressId'].'&action=delete&Id='.$row['id'].'">Xóa</a>
		</div>';
		echo '<div style="float: left; width: 572px; margin-top: 10px;">Địa chỉ '.$k.': '.$row['address'].'</div>';
		echo '<div style="float: left; width: 572px; margin-top: 10px;">Điện thoại: '.$row['tel'].'</div>';
		
	}

?>

</div>
</div>
<?php
//////////////////////////
if(isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'delete':
		include('deleteAddress.php');
		break;
		default:
		header('Location: address_book.php?addressId='.$_GET['addressId'].'');
	}
}
?>












