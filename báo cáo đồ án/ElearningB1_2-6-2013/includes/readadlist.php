<div class="heading">
<div class="title">
Đọc biển quảng cáo, báo hiệu và chọn câu trả lời đúng<i>(Theo chuẩn bài thi có 5 câu)</i></div>
</div>

<div class="conleft">
	<form action="#" method="post">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="height: 20px; padding: 4px 0px; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #000; text-align: left; padding: 0px 4px;">
        Type 2: Questions 11-15<br />
        -	Look at the text in each question.<br/>
        -	What does it say?<br/>
        -	Mark the letter next to the correct explanation - A, B or C - on your answer sheet.
       
        </div></td>
        </tr>
        </table>
    
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="lessons_readad.php?action=new" style="color:#FFF;">Insert a new question (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="lessons_readad.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
       </tr>
       </table>
       <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center">Nhập tên đề bài:</div> </td>
        <td><input type="text" name="keyword" id="keyword" style="width: 800px; background: #f3f3f3;"/></td>
        <td><input type="button" name="btnSearch" value="Tìm kiếm" style="font-family:'Times New Roman', Times, serif"/></td>
       </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
       	  <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tên tiêu đề</div></td> 
          <td style="width: 400px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Chủ đề quảng cáo</div></td>  	
          <td style="width: 400px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nội dung câu trả lời cho sẵn</div></td> 
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đáp án đúng</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr> 
        <?php
			$sql = "SELECT * FROM lessons_readad";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td style="width: 100px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 40px;">'.$row['title'].'</textarea></div></td>';
			echo '<td style="width: 400px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 400px; height: 40px;">'.$row['content_ad'].'</textarea></div></td>';
			echo '<td style="width: 400px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 400px; height: 40px;">'.$row['content_answer'].'</textarea></div></td>';
			echo '<td style="width: 100px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 40px;">'.$row['correct_answer'].'</textarea></div></td>';
			echo '<td align="right" style="width: 100px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_readad.php?action=edit&readadid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_readad.php?action=delete&readadid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		include('includes/addreadad.php');
		break;
		case 'edit':
		include('includes/editreadad.php');
		break;
		case 'delete':
		include('includes/deletereadad.php');
		break;
		default:
		header('Location: lessons_readad.php');
	}
}
?>