<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px;">
<h2>Quản lý giao diện người dùng</h2>
</div>

<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;">
<a href="templateStyles.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>
<div style="float: left; margin-bottom: 10px;">
	<form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập tên giao diện:</font>
    	<input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 300px; height: 20px;" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>"/>
        <input name="SearchTemp" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
        <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
    </form>
</div>
<?php
if (isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('templateStyles/addtemp.php');
		break;
		case 'edit':
		include('templateStyles/edittemp.php');
		break;
		case 'delete':
		include('templateStyles/deletetemp.php');
		break;
		default:
		header('Location: templateStyles.php');
	}
}
else{
	echo '
<div style="clear: both;">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
    <th scope="col">Hình ảnh</th>
	<th scope="col">Tiêu đề</th>
    <th scope="col">Tên giao diện</th>
    <th scope="col">Mô tả</th>
    <th scope="col">Vị trí thể hiện</th>
    <th scope="col">Đường dẫn tệp tin</th>
    <th scope="col">Ngày tạo</th>
    <th scope="col">Người viết</th>
    <th scope="col">Trạng thái</th>
    <th scope="col">Thao tác</th>
</tr>';
	$p=10;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;	
	}
	$s=($n-1)*$p;
	$sql1="SELECT * FROM template_styles";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE styleName like '%".$_GET['keyword']."%'";
	}
	$result=mysql_query($sql1,$link);
	$n_record=mysql_num_rows($result);
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
					echo '<a href="templateStyles.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="templateStyles.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="templateStyles.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="templateStyles.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}
	}
	$sql1.=" ORDER BY id ASC limit $s,$p";
	$result1=mysql_query($sql1,$link);
	while($row1=mysql_fetch_array($result1))
	{
		echo '<tr>';
		echo '<td>'.$row1['id'].'</td>';
		echo '<td><img src="'.$row1['image'].'" alt="" border="0" width="200px" />'.'</td>';
		echo '<td><a href="templateStyles.php?action=edit&tempid='.$row1['id'].'">'.$row1['styleName'].'</a></td>';
		echo '<td>'.$row1['templateName'].'</td>';
		echo '<td>'.$row1['description'].'</td>';
		echo '<td>';
			if($row1['location']==1)
			{
				echo '<b>Site</b>';
			}
			elseif($row1['location']==2)
			{
				echo '<b>Administrator</b>';
			}
		echo '</td>';
		echo '<td>'.$row1['href'].'</td>';
		echo '<td>'.$row1['date'].'</td>';
		echo '<td>'.$row1['author'].'</td>';
		
			if($row1['state']==1)
			{
				echo '<td style="background: #59be6e; font-weight: bold; color: #FFF;">Kích hoạt</td>';
			}
			else
			{
				echo '<td style="background: #c01815; font-weight: bold; color: #FFF;">Hủy bỏ</td>';
			}

		echo '<td><a href="templateStyles.php?action=edit&tempid='.$row1['id'].'">Sửa </a>
			| <a href="templateStyles.php?action=delete&tempid='.$row1['id'].'">Xóa </a>
			
			</td>';
		echo '</tr>';
	}
	view_page();
echo '
</table>
</div>
<div style="margin-top: 10px; margin-bottom: 10px;">';
	view_page();
echo '
</div>';
}
?>



