<div class="heading">
<div class="title">
Đọc - Chọn đáp án đúng (dạng trắc nghiệm thường thấy)<i>(Theo chuẩn bài thi có 10 câu)</i></div>
</div>
<div class="conleft">
	<form action="#" method="post">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="height: 20px; padding: 4px 0px; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #000; text-align: left; padding: 0px 4px;">
        Type 1: Questions 1-10<br />
        -	Đọc 10 câu độc lập mỗi câu có một từ bỏ trống, chọn 1 từ đúng trong 4 từ cho sẵn (dạng trắc nghiệm ABCD) để điền vào chỗ trống. Các chỗ trống này cho phép kiểm tra kiến thức về ngữ pháp, từ vựng, ngữ nghĩa và kiến thức văn hóa, xã hội.
        
       
        </div></td>
        </tr>
        </table>
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="lessons_readtest.php?action=new" style="color:#FFF;">Insert a new question (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="lessons_readtest.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
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
       	  <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tiêu đề </div></td> 
          <td style="width: 400px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Nội dung câu trắc nghiệm</div></td> 
          <td style="width: 400px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đáp án lựa chọn</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đáp án đúng</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
         <?php
			$sql = "SELECT * FROM lessons_readtest";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
			echo '<tr>';
			echo '<td style="width: 100px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 40px;">'.$row['title'].'</textarea></div></td>';
			echo '<td style="width: 400px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 400px; height: 40px;">'.$row['sentence'].'</textarea></div></td>';
			echo '<td style="width: 400px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 400px; height: 40px;">'.$row['select_answer'].'</textarea></div></td>';
			echo '<td style="width: 100px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 100px; height: 40px;">'.$row['correct_answer'].'</textarea></div></td>';
			echo '<td align="right" style="width: 100px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_readtest.php?action=edit&readtestid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_readtest.php?action=delete&readtestid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		include('includes/addreadtest.php');
		break;
		case 'edit':
		include('includes/editreadtest.php');
		break;
		case 'delete':
		include('includes/deletereadtest.php');
		break;
		default:
		header('Location: lessons_readtest.php');
	}
}
?>