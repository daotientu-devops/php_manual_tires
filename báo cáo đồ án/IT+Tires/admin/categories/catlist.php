<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px;">
<h2>Quản lý danh mục sản phẩm</h2>
</div>

<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;">
<a href="categories.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>
<div style="float: left; margin-bottom: 10px;">
	<form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập tên danh mục:</font>
    	<input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 300px; height: 20px;" value="<?php //echo $_GET['keyword']; ?>"/>
        <input name="SearchCat" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
        <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
    </form>
</div>

<div style="clear: both;">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
	<th scope="col">Tên danh mục</th>
    <th scope="col">Nút đa cấp</th>
    <th scope="col">Title</th>
    <th scope="col">Keywords</th>
    <th scope="col">Description</th>
    <th scope="col">Logo</th>
    <th scope="col">Vị trí</th>
    <th scope="col">Thứ tự sắp xếp</th>
    <th scope="col">Ngày tạo</th>
    <th scope="col">Trạng thái</th>
    <th scope="col">Thao tác</th>
</tr>
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
	$sql1="SELECT * FROM categories";		
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
					echo '<a href="categories.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="categories.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="categories.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="categories.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
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
			echo '<td><a href="categories.php?action=edit&catid='.$row1['id'].'">'.$row1['name'].'</a></td>';
			echo '<td>'.$row1['ParentID'].'</td>';
			echo '<td>'.$row1['title'].'</td>';
			echo '<td>'.$row1['keyword'].'</td>';
			echo '<td>'.$row1['description'].'</td>';
			echo '<td>'.$row1['logo'].'</td>';
			echo '<td>'.$row1['position'].'</td>';
			echo '<td>'.$row1['sort'].'</td>';
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
			echo '<td><a href="categories.php?action=edit&catid='.$row1['id'].'">Sửa </a>
			| <a href="categories.php?action=delete&catid='.$row1['id'].'">Xóa </a>
			
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
		include('categories/addcat.php');
		break;
		case 'edit':
		include('categories/editcat.php');
		break;
		case 'delete':
		include('categories/deletecat.php');
		break;
		default:
		header('Location: categories.php');
	}
}
?>

