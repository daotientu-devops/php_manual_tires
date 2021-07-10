<div class="heading">
<div class="title">
Quản lý thành viên</div>
</div>

<div class="conleft">
	
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="administrators.php?action=new" style="color:#FFF;">Insert a new user (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="administrators.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
        </tr>
    </table>
    <form action="#" method="get">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Tìm theo tên tài khoản:</div> </td>
        <td><input type="text" name="keyword" id="keyword" placeholder="Tìm kiếm theo từ khoá" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="submit" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>     
        </tr>
        </table>
    </form>
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ID</div></td>
          <td style="width: 149px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tên đăng nhập</div></td>  	
          <td style="width: 149px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Họ và Tên</div></td> 
          <td style="width: 59px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Giới tính</div></td>
          <td style="width: 269px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nơi công tác</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điện thoại</div></td>
          <td style="width: 149px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Gmail</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Phân Quyền</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
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
		
		$sql1 = "SELECT * FROM users";
		if(isset($_GET['keyword']))
		{
			$sql1.=" WHERE username like '%".$_GET['keyword']."%'";
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
					echo '<a href="administrators.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="administrators.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="administrators.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="administrators.php?n='.$i.'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}	
	}
		$sql1.=" ORDER BY id ASC limit $s,$p";
		$result1=mysql_query($sql1,$link);
		$count1=0;
		view_page();
		while($row1 = mysql_fetch_array($result1))
			{
				echo '<tr>';
				echo '<td style="width: 49px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 20px;">'.$row1['id'].'</textarea></div></td>';
				echo '<td style="width: 149px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 143px; height: 20px;">'.$row1['username'].'</textarea></div></td>';
				echo '<td style="width: 149px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 143px; height: 20px;">'.$row1['name'].'</textarea></div></td>';
				echo '<td style="width: 59px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 53px; height: 20px;">'.$row1['sex'].'</textarea></div></td>';
				echo '<td style="width: 269px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 263px; height: 20px;">'.$row1['place_of_work'].'</textarea></div></td>';
				echo '<td style="width: 99px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 20px;">'.$row1['tel'].'</textarea></div></td>';
				echo '<td style="width: 149px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 143px; height: 20px;">'.$row1['email'].'</textarea></div></td>';
				echo '<td style="width: 99px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 20px;">'.$row1['RoleID'].'</textarea></div></td>';
				echo '<td align="right" style="width: 100px; height: 20px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="administrators.php?action=edit&uid='.$row1['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="administrators.php?action=delete&uid='.$row1['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
				echo '</tr>';
			}
		?>
        <?php
		echo '<tr>';
		echo '<td><div style="margin-top: 5px;">';
		view_page();
		echo '</div></td>';
		echo '</tr>';
		?>
        </table>

</div>
<?php
//////////////////////////
if(isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('includes/adduser.php');
		break;
		case 'edit':
		include('includes/edituser.php');
		break;
		case 'delete':
		include('includes/deleteuser.php');
		break;
		default:
		header('Location: administrators.php');
	}
}
?>