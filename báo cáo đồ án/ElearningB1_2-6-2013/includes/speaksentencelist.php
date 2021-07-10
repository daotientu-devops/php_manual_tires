<div class="heading">
<div class="title">
Luyện nói T.A theo từng câu</div>
</div>
<div class="conleft">
	<form action="#" method="post">
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="lessons_speaksentence.php?action=new" style="color:#FFF;">Insert a new lesson (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="lessons_speaksentence.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
        </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Nhập tên tiêu đề:</div> </td>
        <td><input type="text" name="keyword" id="keyword" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="button" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>
        </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
       	<td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tiêu đề</div></td>
        <td style="width: 299px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Audio</div></td>
        <td style="width: 299px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Mẫu câu</div></td>
        <td style="width: 349px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Lời dịch</div></td>
        <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
			$sql = "SELECT * FROM lessons_speaksentence";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 40px;">'.$row['title'].'</textarea></div></td>';
			echo '<td style="width: 299px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 293px; height: 40px;">'.$row['audio'].'</textarea></div></td>';
			echo '<td style="width: 299px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 293px; height: 40px;">'.$row['sentence'].'</textarea></div></td>';
			echo '<td style="width: 349px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 330px; height: 40px;">'.$row['translate'].'</textarea></div></td>';
			echo '<td align="right" style="width: 49px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_speaksentence.php?action=edit&speaksenid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_speaksentence.php?action=delete&speaksenid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		include('includes/addspeaksentence.php');
		break;
		case 'edit':
		include('includes/editspeaksentence.php');
		break;
		case 'delete':
		include('includes/deletespeaksentence.php');
		break;
		default:
		header('Location: lessons_speaksentence.php');
	}
}