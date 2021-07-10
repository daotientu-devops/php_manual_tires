<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px;">
<h2>Quản lý banner quảng cáo</h2>
</div>

<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;">
<a href="ad.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>
<div style="float: left; margin-bottom: 10px;">
	<form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập tên tiêu đề quảng cáo:</font>
    	<input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 300px; height: 20px;"/>
        <input name="SearchAd" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
        <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
    </form>
</div>
<div style="float: left; text-align: left; margin-left: 10px; margin-bottom: 10px;">
<a href="ad.php?action=footer" style="font-weight: bold; font-size: 16px;">Quản lý thông tin footer</a>
</div>

<div style="clear: both;">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
	<th scope="col">Tên tiêu đề</th>
    <th scope="col">Link liên kết</th>
    <th scope="col">Hình ảnh</th>
    <th scope="col">Độ rộng (px)</th>
    <th scope="col">Độ cao (px)</th>
    <th scope="col">Vị trí</th>
    <th scope="col">Thứ tự phân cấp</th>
    <th scope="col">Thứ tự ưu tiên</th>
    <th scope="col">Bộ đếm truy cập</th>
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
	$sql1="SELECT * FROM ad";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE title like '%".$_GET['keyword']."%'";
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
					echo '<a href="ad.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="ad.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="ad.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="ad.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
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
			echo '<td><a href="ad.php?action=edit&adid='.$row1['id'].'">'.$row1['title'].'</a></td>';
			echo '<td>'.$row1['link'].'</td>';
			echo '<td><img src="'.$row1['file'].'" alt="" border="0" height="40px"/></td>';
			echo '<td>'.$row1['width'].'</td>';
			echo '<td>'.$row1['height'].'</td>';
			echo '<td>'.$row1['position'].'</td>';
			echo '<td>'.$row1['ordinal'].'</td>';
			echo '<td>'.$row1['priority'].'</td>';
			echo '<td>'.$row1['count'].'</td>';
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
			echo '<td><a href="ad.php?action=edit&adid='.$row1['id'].'">Sửa </a>
			| <a href="ad.php?action=delete&adid='.$row1['id'].'">Xóa </a>
			
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
		case 'footer':
		include('ad/editfooter.php');
		break;
		case 'new':
		include('ad/addad.php');
		break;
		case 'edit':
		include('ad/editad.php');
		break;
		case 'delete':
		include('ad/deletead.php');
		break;
		default:
		header('Location: ad.php');
	}
}
?>
