<div style="clear: both; text-align: left; margin-left: 2px; margin-bottom: 10px;">
<h2>Quản lý thông tin liên hệ khách hàng</h2>
</div>

<div style="float: left; text-align: left; margin-left: 2px; margin-right: 10px; margin-bottom: 10px;">
<a href="contact.php?action=new" style="font-weight: bold; font-size: 16px;">Thêm mới</a></div>
<div style="float: left; margin-bottom: 10px;">
	<form action="#" method="get">
    <font style="font-weight: bold; color: #333">Nhập tên khách hàng:</font>
    	<input type="text" name="keyword" placeholder="Tìm kiếm theo từ khoá" style="background:#fff; border: 1px solid #ccc; width: 300px; height: 20px;" value="<?php //echo $_GET['keyword']; ?>"/>
        <input name="SearchCon" type="submit" value="Tìm kiếm" style="font-family: Arial, Helvetica, sans-serif;" />
        <input type="reset" value="Hủy bỏ" style="font-family: Arial, Helvetica, sans-serif;" />
    </form>
</div>

<div style="float: left; text-align: left; margin-left: 10px; margin-bottom: 10px;">
<a href="contact.php?action=contact" style="font-weight: bold; font-size: 16px;">Quản lý thông tin liên hệ website</a>
</div>

<div style="clear: both;">
<table width="100%" border="1" cellspacing="3" cellpadding="3" class="csstable">
<tr>
	<th scope="col">ID</th>
	<th scope="col">Tên khách hàng</th>
    <th scope="col">Địa chỉ</th>
    <th scope="col">Số điện thoại</th>
    <th scope="col">Fax</th>
    <th scope="col">Email</th>
    <th scope="col">Nội dung</th>
    <th scope="col">Ngày gửi</th>
    <th scope="col">Trạng thái</th>
    <th scope="col">Thao tác</th>
</tr>
<?php
	$p=20;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;	
	}
	$s=($n-1)*$p;
	$sql1="SELECT * FROM contact";
	if(isset($_GET['keyword']))
	{
		$sql1.=" WHERE name like '%".$_GET['keyword']."%'";
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
					echo '<a href="contact.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="contact.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="contact.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="contact.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
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
			echo '<td><a href="contact.php?action=edit&conid='.$row1['id'].'">'.$row1['name'].'</a></td>';
			echo '<td>'.$row1['address'].'</td>';
			echo '<td>'.$row1['tel'].'</td>';
			echo '<td>'.$row1['fax'].'</td>';
			echo '<td>'.$row1['email'].'</td>';
			echo '<td>'.$row1['content'].'</td>';
			echo '<td>'.$row1['date'].'</td>';
			echo '<td>';
			if($row1['state']==1)
			{
				echo '<b>Đã trả lời</b>';
			}
			elseif($row1['state']==0)
			{
				echo '<b>Chờ trả lời</b>';
			}
			elseif($row1['state']==2)
			{
				echo '<b>Sổ địa chỉ</b>';
			}
			echo '</td>';
			echo '<td><a href="contact.php?action=edit&conid='.$row1['id'].'">Sửa </a>
			| <a href="contact.php?action=delete&conid='.$row1['id'].'">Xóa </a>
			
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
		case 'contact':
		include('contact/contactToUs.php');
		break;
		case 'new':
		include('contact/addcontact.php');
		break;
		case 'edit':
		include('contact/editcontact.php');
		break;
		case 'delete':
		include('contact/deletecontact.php');
		break;
		default:
		header('Location: contact.php');
	}
}
?>