<div class="heading">
<div class="title">
Viết câu trả lời theo câu hỏi được gợi ý</div>
</div>
<div class="conleft">
	<form action="#" method="post">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="height: 20px; padding: 4px 0px; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #000; text-align: left; padding: 0px 4px;">
        <font style="background:#000; color: #FFF; padding: 2px;">Writing</font><br />
        Type 3: Questions 7 or 8<br />
        -	Answer one of the following questions.<br/>
        </div></td>
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
       	  <td style="width: 49px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tiêu đề</div></td>
          <td style="width: 399px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nội dung câu hỏi</div></td>
          <td style="width: 499px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nội dung câu trả lời</div></td>
         
          <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đánh giá</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
			$sql = "SELECT * FROM lessons_writeanswer";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td style="width: 49px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 43px; height: 40px;">'.$row['title'].'</textarea></div></td>';
			echo '<td style="width: 399px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 393px; height: 40px;">'.$row['content_question'].'</textarea></div></td>';
			echo '<td style="width: 499px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 480px; height: 40px;">'.$row['content_answer'].'</textarea></div></td>';
			echo '<td style="width: 99px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 40px;">'.$row['evaluation'].'</textarea></div></td>';
			echo '<td align="right" style="width: 49px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_writeanswer.php?action=edit&writeansid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_writeanswer.php?action=delete&writeansid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		include('includes/addwriteans.php');
		break;
		case 'edit':
		include('includes/editwriteans.php');
		break;
		case 'delete':
		include('includes/deletewriteans.php');
		break;
		default:
		header('Location: lessons_writeanswer.php');
	}
}
?>