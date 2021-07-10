<div class="heading">
<div class="title">
Quản lý thành viên</div>
</div>

<div class="conleft">
	<form action="#" method="post">
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="administrators.php?action=new" style="color:#FFF;">Insert a new user (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="administrators.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
        </tr>
    </table>
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Nhập ID:</div> </td>
        <td><input type="text" name="keywordID" id="keywordID" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="button" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>     
        </tr>
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Nhập Họ & Tên:</div> </td>
        <td><input type="text" name="keyword" id="keyword" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="button" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>     
        </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tên đăng nhập</div></td>  	
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Họ và Tên</div></td> 
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Giới tính</div></td>
          <td style="width: 350px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nơi công tác</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điện thoại</div></td>
          <td style="width: 150px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Gmail</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Phân Quyền</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
			$sql = "SELECT * FROM users";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
				echo '<tr>';
				echo '<td style="width: 100px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 20px;">'.$row['username'].'</textarea></div></td>';
				echo '<td style="width: 100px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 20px;">'.$row['name'].'</textarea></div></td>';
				echo '<td style="width: 100px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 20px;">'.$row['sex'].'</textarea></div></td>';
				echo '<td style="width: 330px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 330px; height: 20px;">'.$row['place_of_work'].'</textarea></div></td>';
				echo '<td style="width: 100px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 20px;">'.$row['tel'].'</textarea></div></td>';
				echo '<td style="width: 150px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 150px; height: 20px;">'.$row['email'].'</textarea></div></td>';
				echo '<td style="width: 100px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 20px;">'.$row['RoleID'].'</textarea></div></td>';
				echo '<td align="right" style="width: 100px; height: 20px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="administrators.php?action=edit&uid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="administrators.php?action=delete&uid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
				echo '</tr>';
			}
		?>
        </table>
   	</form>

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