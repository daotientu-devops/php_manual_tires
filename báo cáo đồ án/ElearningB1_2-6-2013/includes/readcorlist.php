<div class="heading">
<div class="title">
Tìm câu trả lời đúng</div>
</div>
<div class="conleft">
	<form action="#" method="post">
    	<table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="height: 20px; padding: 4px 0px; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #000; text-align: left; padding: 0px 4px;">
        Type 3: Questions 11-20<br />
        -	Look at the sentences below about an outdoor activity centre.<br/>
        -	Read the text on the opposite page to decide if each sentence is correct or incorrect.<br/>
        -	If it is correct, mark A on your answer sheet.<br />
       	-	If it is not correct, mark B on your answer sheet.
        </div></td>
        </tr>
        </table>
        
        <table border="0" cellpadding="2" cellspacing="0">
        <tr>
        <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF; border-bottom: 1px solid #fff;"><div style="font-weight: bold; color: #FFF; text-align: center"><a href="lessons_readcor.php?action=new" style="color:#FFF;">Insert a new lesson (click to add)</a></div></td>
        <td style="background: #70201f;"><div><a href="lessons_readcor.php?action=new"><img src="images/icon/edit_add.png" /></a></div></td>
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
       	  <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tiêu đề</div></td>
          <td style="width: 300px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Đoạn văn</div></td>
          <td style="width: 200px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Mẫu câu</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 1</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 2</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 3</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 4</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 5</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 6</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 7</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 8</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 9</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ĐA 10</div></td>
          <td style="width: 50px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Edit/Delete</div></td>
        </tr>
        <?php
			$sql = "SELECT * FROM lessons_readcor";
			$result = mysql_query($sql, $link);
			while($row = mysql_fetch_array($result))
			{
				echo '<tr>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 48px; height: 40px;">'.$row['title'].'</textarea></div></td>';
				echo '<td style="width: 298px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 294px; height: 40px;">'.$row['paragraph'].'</textarea></div></td>';
				echo '<td style="width: 148px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 164px; height: 40px;">'.$row['sentences'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor1'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor2'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor3'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor4'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor5'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor6'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor7'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor8'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor9'].'</textarea></div></td>';
				echo '<td style="width: 48px; height: 40px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 44px; height: 40px;">'.$row['cor10'].'</textarea></div></td>';
				echo '<td align="right" style="width: 48px; height: 40px; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; "><a href="lessons_readcor.php?action=edit&readcorid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="lessons_readcor.php?action=delete&readcorid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
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
		include('includes/addreadcor.php');
		break;
		case 'edit':
		include('includes/editreadcor.php');
		break;
		case 'delete':
		include('includes/detelereadcor.php');
		break;
		default:
		header('Location: lessons_readcor.php');
	}
}
?>