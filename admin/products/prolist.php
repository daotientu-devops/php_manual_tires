<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px; margin-top: 10px;">
<font style="font-size: 18px; font-weight: bold; margin-right: 20px;">Quản lý sản phẩm</font>
<b>[ Thống kê số lượng sản phẩm ] - Tổng số các loại : </b>
<?php
	$qr1=mysql_query("SELECT * FROM products",$link);
	$count1=mysql_num_rows($qr1);
	echo '<font style="color: #787878;">'.$count1.'</font> chiếc';
?>
</div>

<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;">
<a href="products.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>
<div style="float: left; margin-bottom: 10px;">
	<form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập tên sản phẩm:</font>
    	<input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 300px; height: 20px;"/>
        <input name="SearchPro" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
        <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
    </form>
</div>
<?php
if (isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('products/addpro.php');
		break;

		case 'edit':
		include('products/editpro.php');
		break;

		case 'delete':
		include('products/deletepro.php');
		break;

        case 'add':
        include('products/addpar.php');
        break;

		default:
		header('Location: products.php');
	}
}else{
	echo '
<div style="clear: both;">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
    <th scope="col">Nút danh mục</th>
	<th scope="col">Tên sản phẩm</th>
    <th scope="col">Title</th>
    <th scope="col">Keywords</th>
    <th scope="col">Giá thành</th>
    <th scope="col">VAT</th>
    <th scope="col">Số lượng</th>
    <th scope="col">Bảo hành</th>
    <th scope="col">Tình trạng</th>
    <th scope="col">Xuất xứ</th>
    <th scope="col">Hình ảnh</th>
    <th scope="col">Description</th>
    <th scope="col">Ngày đăng</th>
    <th scope="col">Trạng thái</th>
    <th scope="col">Top bán chạy</th>
    <th scope="col">Thao tác</th>
</tr>';
	//Xây dựng hàm phân trang view_page()
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
	$sql1="SELECT * FROM products";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE name like '%".$_GET['keyword']."%'";
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
					echo '<a href="products.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="products.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="products.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="products.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
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
			echo '<td>'.$row1['catid'].'</td>';
			echo '<td><a href="products.php?action=edit&proid='.$row1['id'].'">'.$row1['name'].'</a></td>';
			
			echo '<td>'.$row1['title'].'</td>';
			echo '<td>'.$row1['keyword'].'</td>';
			echo '<td>'.$row1['price'].'</td>';
			echo '<td>';
			if($row1['VAT']==1)
			{
				echo '<b>Đã có VAT</b>';
			}
			else
			{
				echo '<b>Chưa có VAT</b>';
			}
			echo '</td>';
			echo '<td>'.$row1['amount'].'</td>';
			echo '<td>'.$row1['warranty'].'</td>';
			echo '<td>';
			if($row1['status']==1)
			{
				echo '<b>Mới</b>';
			}
			elseif($row1['status']==0)
			{
				echo '<b>Cũ</b>';
			}
			echo '</td>';
			echo '<td>'.$row1['origin'].'</td>';
			echo '<td><img src="'.$row1['image'].'" alt="" border="1" width="60px" style="border: 1px solid #ccc;"/></td>';
			echo '<td>'.$row1['description'].'</td>';
			echo '<td>'.$row1['date'].'</td>';
			echo '<td>';
			if($row1['state']==1)
			{
				echo '<b>Hoạt động</b>';
			}
			else
			{
				echo '<b>Khóa</b>';
			}
			echo '</td>';
			echo '<td>'.$row1['special'].'</td>';
			echo '<td>
			<a href="products.php?action=edit&proid='.$row1['id'].'">Sửa </a>
			| <a href="products.php?action=add&proid='.$row1['id'].'">Bổ sung</a>
			| <a href="products.php?action=delete&proid='.$row1['id'].'">Xóa </a>
			
			</td>';
			echo '</tr>';
			
		}
	view_page();
echo '
</table>
</div>';
}
?>
