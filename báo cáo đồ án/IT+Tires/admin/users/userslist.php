<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px; margin-top: 10px;">
<font style="font-size: 18px; font-weight: bold; margin-right: 20px;">Quản lý tài khoản</font>
<b>[ Thống kê số lượng người dùng ] - Tổng số : </b>
<?php
	$qr1=mysql_query("SELECT * FROM users",$link);
	$count1=mysql_num_rows($qr1);
	echo '<font style="color: #787878;">'.$count1.'</font> thành viên';
	$qr2=mysql_query("SELECT * FROM users WHERE Role=1",$link);
	$count2=mysql_num_rows($qr2);
	echo ' - <b>Hiện tại có : </b>';
	echo '<font style="color: #787878;">'.$count2.'</font> Admin';
	$qr3=mysql_query("SELECT * FROM users WHERE Role=3",$link);
	$count3=mysql_num_rows($qr3);
	echo ' và ';
	echo '<font style="color: #787878;">'.$count3.'</font> Khách';
?>
</div>
<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;">
<a href="users.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>
<div style="float: left; margin-bottom: 10px;">
	<form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập tên tài khoản:</font>
    	<input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 300px; height: 20px;"/>
        <input name="SearchUser" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
        <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
    </form>
</div>

<div style="clear: both;">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
	<th scope="col">Tên tài khoản</th>
    <th scope="col">Họ và Tên</th>
    <th scope="col">Ngày sinh</th>
    <th scope="col">Giới tính</th>
	<th scope="col">Địa chỉ</th>
    <th scope="col">Tỉnh/Thành phố</th>
    <th scope="col">Nơi công tác</th>
    <th scope="col">Điện thoại</th>
    <th scope="col">Email</th>
    <th scope="col">Quyền</th>
    <th scope="col">Ngày tạo</th>
    <th scope="col">Trạng thái</th>
    <th scope="col">Thao tác</th>
</tr>
<!-- Đã sửa -->
	<?php
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
	$sql1="SELECT * FROM users";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE username like '%".$_GET['keyword']."%'";
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
					echo '<a href="users.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="users.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="users.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="users.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
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
			echo '<td><a href="users.php?action=edit&uid='.$row1['id'].'">'.$row1['username'].'</a></td>';
			echo '<td>'.$row1['name'].'</td>';
			echo '<td>'.$row1['birthday'].'</td>';
			echo '<td>';
			if($row1['sex']==1)
			{
				echo '<b>Nam</b>';
			}
			elseif($row1['sex']==2)
			{
				echo '<b>Nữ</b>';
			}
			echo '</td>';
			echo '<td>'.$row1['address'].'</td>';
			echo '<td>'.$row1['country'].'</td>';
			echo '<td>'.$row1['place_of_work'].'</td>';
			echo '<td>'.$row1['tel'].'</td>';
			echo '<td>'.$row1['email'].'</td>';
			echo '<td>';
			if($row1['Role']==1)
			{
				echo '<b>Admin</b>';
			}
			elseif($row1['Role']==2)
			{
				echo '<b>Support</b>';
			}
			elseif($row1['Role']==3)
			{
				echo '<b>User</b>';
			}
			echo '</td>';
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
			echo '<td><a href="users.php?action=edit&uid='.$row1['id'].'">Sửa </a>
			| <a href="users.php?action=delete&uid='.$row1['id'].'">Xóa </a>
			
			</td>';
			echo '</tr>';
			
		}
	view_page();

	?>
</table>
</div>
<?php
if (isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('users/adduser.php');
		break;
		case 'edit':
		include('users/edituser.php');
		break;
		case 'delete':
		include('users/deleteuser.php');
		break;
		default:
		header('Location: users.php');
	}
}
?>
