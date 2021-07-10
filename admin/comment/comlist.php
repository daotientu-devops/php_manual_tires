<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px;">
<h2>Quản lý các bình luận</h2>
</div>
<!--<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;">
<a href="comment.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>-->
<div style="float: left; margin-bottom: 10px; margin-left: 2px;">
	<form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập tiêu đề bình luận:</font>
    	<input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 300px; height: 20px;" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>"/>
        <input name="SearchCom" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
        <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
    </form>
</div>
<?php
if (isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'edit':
		include('comment/editcom.php');
		break;
		case 'delete':
		include('comment/deletecom.php');
		break;
		default:
		header('Location: comment.php');
	}
}else{
echo '
<div style="clear: both;">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
    <th scope="col">Tên sản phẩm</th>
    <th scope="col">Đánh giá</th>
    <th scope="col">Số lượt bình chọn</th>
    <th scope="col">Tiêu đề</th>
    <th scope="col">Nội dung</th>
    <th scope="col">Họ & Tên</th>
    <th scope="col">Trạng thái</th>
    <th scope="col">Thao tác</th>
</tr>';
$p=40;
if(isset($_GET['n']))
{
	$n=$_GET['n'];	
}
else
{
	$n=1;
}
$s=($n-1)*$p;
$sql1="SELECT * FROM comment";
if(isset($_GET['keyword']))
{
	$sql1.=" WHERE title like '%".$_GET['keyword']."%'";
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
					echo '<a href="comment.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="comment.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
		}
		else
		{
			if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="comment.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="comment.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
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
		
		$sql2="SELECT * FROM products WHERE id='".$row1['proID']."'";
		$result2=mysql_query($sql2,$link);
		$row2=mysql_fetch_array($result2);
		echo '<td>'.$row2['name'].'</td>';
		
		echo '<td>'.$row1['rate'].'</td>';
		echo '<td>'.$row1['count'].'</td>';
		echo '<td><a href="comment.php?action=edit&comid='.$row1['id'].'">'.$row1['title'].'</a></td>';		
		echo '<td>'.$row1['content'].'</td>';
		echo '<td>'.$row1['name'].'</td>';
		echo '<td>';
			if($row1['state']==1)
			{
				echo '<b>Đã trả lời</b>';
			}
			else
			{
				echo '<b>Chờ trả lời</b>';
			}
		echo '</td>';
		echo '<td><a href="comment.php?action=edit&comid='.$row1['id'].'">Sửa </a>
			| <a href="comment.php?action=delete&comid='.$row1['id'].'">Xóa </a>
			
			</td>';
		echo '</tr>';
	}
	view_page();
echo'
</table>
<div style="margin-top: 10px; margin-bottom: 10px;">';
	view_page();
echo '
</div>
</div>';
}
?>
