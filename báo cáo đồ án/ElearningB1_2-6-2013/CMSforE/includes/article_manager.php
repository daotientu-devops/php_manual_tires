<div class="heading">
<div class="title">
Quản lý tin bài - nội dung</div><div class="icon_article"></div>
</div>
<div class="conleft">
	<form action="#" method="post">
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="news.php?action=new" style="color:#FFF;">Insert a new Article (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="news.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
       </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Nhập tiêu đề bài viết:</div> </td>
        <td><input type="text" name="keyword" id="keyword" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="button" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>
       </tr>
   </table>
   <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
       	  <td style="width: 39px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">STT</div></td> 
          <td style="width: 399px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tiêu đề</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Trạng thái</div></td>
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Cấp độ Menu</div></td>
          <td style="width: 199px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tác giả (Người viết)</div></td>
          <td style="width: 125px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Ngày viết</div></td>
          <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ID</div></td>
          <td style="width: 80px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
			$sql = "SELECT * FROM news";
			$result = mysql_query($sql, $link);
			$i=0;
			while($row = mysql_fetch_array($result))
			{
			$i++;
			echo '<tr>';
			echo '<td style="width: 39px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 33px; height: 40px;">'.$i.'</textarea></div></td>';
			echo '<td style="width: 399px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 393px; height: 40px;">'.$row['title'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 40px;">'.$row['state'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 40px;">'.$row['typeID'].'</textarea></div></td>';
			echo '<td style="width: 199px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 193px; height: 40px;">'.$row['author'].'</textarea></div></td>';
			echo '<td style="width: 125px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 119px; height: 40px;">'.$row['createDate'].'</textarea></div></td>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row['id'].'</textarea></div></td>';
			echo '<td align="right" style="width: 80px; height: 20px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="news.php?action=edit&nid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="news.php?action=delete&nid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		include('includes/addnews.php');
		break;
		case 'edit':
		include('includes/editnews.php');
		break;
		case 'delete':
		include('includes/deletenews.php');
		break;
		default:
		header('Location: news.php');
	}
}
?>