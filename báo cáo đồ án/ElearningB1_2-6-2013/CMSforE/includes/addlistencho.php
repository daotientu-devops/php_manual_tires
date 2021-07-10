<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data" id="form_listenchoose">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tiêu đề: </div></td>
    <td align="left"><textarea name="title" id="title" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục:</div></td>
    <td align="left">
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000; font-family:'Times New Roman', Times, serif">
    <option value="0">== Select ==</option>
    <?php
    $strSQL = "SELECT * FROM categories WHERE ParentID = 0";
    $result = mysql_query($strSQL,$link);
    while($row = mysql_fetch_array($result))
    {
        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        $strSQL2 = "SELECT * FROM categories WHERE ParentID = '".$row['id']."'";
        $result2 = mysql_query($strSQL2, $link);
        while($row2 = mysql_fetch_array($result2))
        {
            echo '<option value="'.$row2['id'].'">'.'==&gt;'.$row2['name'].'</option>';
			$strSQL3 = "SELECT * FROM categories WHERE ParentID = '".$row2['id']."'";
        	$result3 = mysql_query($strSQL3, $link);
			while($row3 = mysql_fetch_array($result3))
        	{
            	echo '<option value="'.$row3['id'].'">'.'======&gt;'.$row3['name'].'</option>';
			}
        }
    }
    ?>
    </select>
    </td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Audio:</div></td>
    <td align="left"><input name="audio" id="audio" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bài dịch: </div></td>
    <td align="left"><textarea name="translate" id="translate" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 1: </div></td>
    <td align="left"><textarea name="ques1" id="ques1" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 1:</div></td>
    <td align="left"><input name="pic1" id="pic1" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 2:</div></td>
    <td align="left"><input name="pic2" id="pic2" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 3:</div></td>
    <td align="left"><input name="pic3" id="pic3" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 2: </div></td>
    <td align="left"><textarea name="ques2" id="ques2" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 4:</div></td>
    <td align="left"><input name="pic4" id="pic4" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 5:</div></td>
    <td align="left"><input name="pic5" id="pic5" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 6:</div></td>
    <td align="left"><input name="pic6" id="pic6" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 3: </div></td>
    <td align="left"><textarea name="ques3" id="ques3" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 7:</div></td>
    <td align="left"><input name="pic7" id="pic7" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 8:</div></td>
    <td align="left"><input name="pic8" id="pic8" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 9:</div></td>
    <td align="left"><input name="pic9" id="pic9" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 4: </div></td>
    <td align="left"><textarea name="ques4" id="ques4" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 10:</div></td>
    <td align="left"><input name="pic10" id="pic10" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 11:</div></td>
    <td align="left"><input name="pic11" id="pic11" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 12:</div></td>
    <td align="left"><input name="pic12" id="pic12" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 5: </div></td>
    <td align="left"><textarea name="ques5" id="ques5" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 13:</div></td>
    <td align="left"><input name="pic13" id="pic13" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 14:</div></td>
    <td align="left"><input name="pic14" id="pic14" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 15:</div></td>
    <td align="left"><input name="pic15" id="pic15" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 6: </div></td>
    <td align="left"><textarea name="ques6" id="ques6" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 16:</div></td>
    <td align="left"><input name="pic16" id="pic16" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 17:</div></td>
    <td align="left"><input name="pic17" id="pic17" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 18:</div></td>
    <td align="left"><input name="pic18" id="pic18" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 7: </div></td>
    <td align="left"><textarea name="ques7" id="ques7" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 19:</div></td>
    <td align="left"><input name="pic19" id="pic19" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 20:</div></td>
    <td align="left"><input name="picA" id="picA" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 21:</div></td>
    <td align="left"><input name="picB" id="picB" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 1: </div></td>
    <td align="left"><input type="text" name="res1" id="res1" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 2: </div></td>
    <td align="left"><input type="text" name="res2" id="res2" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 3: </div></td>
    <td align="left"><input type="text" name="res3" id="res3" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 4: </div></td>
    <td align="left"><input type="text" name="res4" id="res4" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 5: </div></td>
    <td align="left"><input type="text" name="res5" id="res5" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 6: </div></td>
    <td align="left"><input type="text" name="res6" id="res6" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
   	<tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 7: </div></td>
    <td align="left"><input type="text" name="res7" id="res7" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Ngày tạo:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="date" id="date"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
	</tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nguồn tham khảo: </div></td>
    <td align="left"><input type="text" name="reference" id="reference" style="width: 600px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Trạng thái:</div></td>
    <td align = "left">
    <select name="state" style="font-family: 'Times New Roman', Times, serif;">
    <option value="1">Hiện</option>
    <option value="0">Ẩn</option>
    </select>
    </td>
	</tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Đồng ý" style="font-family:'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif"/>
    </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$save_path_audio="uploaded/lessons_listenchoose/audio/"; 
	$save_path_pic="uploaded/lessons_listenchoose/picture/"; 
	
    $file = $_FILES['audio'];
	
	$pic1 = $_FILES['pic1']; 
	$pic2 = $_FILES['pic2'];
	$pic3 = $_FILES['pic3'];
	$pic4 = $_FILES['pic4'];
	$pic5 = $_FILES['pic5'];
	$pic6 = $_FILES['pic6'];
	$pic7 = $_FILES['pic7'];
	$pic8 = $_FILES['pic8'];
	$pic9 = $_FILES['pic9'];
	$pic10 = $_FILES['pic10'];
	$pic11 = $_FILES['pic11'];
	$pic12 = $_FILES['pic12'];
	$pic13 = $_FILES['pic13'];
	$pic14 = $_FILES['pic14'];
	$pic15 = $_FILES['pic15'];
	$pic16 = $_FILES['pic16'];
	$pic17 = $_FILES['pic17'];
	$pic18 = $_FILES['pic18'];
	$pic19 = $_FILES['pic19'];
	$picA = $_FILES['picA'];
	$picB = $_FILES['picB'];
	
	move_uploaded_file($file['tmp_name'], $save_path_audio.$file['name']);
	
	move_uploaded_file($pic1['tmp_name'], $save_path_pic.$pic1['name']);
	move_uploaded_file($pic2['tmp_name'], $save_path_pic.$pic2['name']);
	move_uploaded_file($pic3['tmp_name'], $save_path_pic.$pic3['name']);
	move_uploaded_file($pic4['tmp_name'], $save_path_pic.$pic4['name']);
	move_uploaded_file($pic5['tmp_name'], $save_path_pic.$pic5['name']);
	move_uploaded_file($pic6['tmp_name'], $save_path_pic.$pic6['name']);
	move_uploaded_file($pic7['tmp_name'], $save_path_pic.$pic7['name']);
	move_uploaded_file($pic8['tmp_name'], $save_path_pic.$pic8['name']);
	move_uploaded_file($pic9['tmp_name'], $save_path_pic.$pic9['name']);
	move_uploaded_file($pic10['tmp_name'], $save_path_pic.$pic10['name']);
	move_uploaded_file($pic11['tmp_name'], $save_path_pic.$pic11['name']);
	move_uploaded_file($pic12['tmp_name'], $save_path_pic.$pic12['name']);
	move_uploaded_file($pic13['tmp_name'], $save_path_pic.$pic13['name']);
	move_uploaded_file($pic14['tmp_name'], $save_path_pic.$pic14['name']);
	move_uploaded_file($pic15['tmp_name'], $save_path_pic.$pic15['name']);
	move_uploaded_file($pic16['tmp_name'], $save_path_pic.$pic16['name']);
	move_uploaded_file($pic17['tmp_name'], $save_path_pic.$pic17['name']);
	move_uploaded_file($pic18['tmp_name'], $save_path_pic.$pic18['name']);
	move_uploaded_file($pic19['tmp_name'], $save_path_pic.$pic19['name']);
	move_uploaded_file($picA['tmp_name'], $save_path_pic.$picA['name']);
	move_uploaded_file($picB['tmp_name'], $save_path_pic.$picB['name']);
	////////////////
	if(!isset($_SESSION['log']))
	{
	header('Location: login.php');
	}
	else
	{
	
		$sql = "INSERT INTO lessons_listenchoose (title, audio, translate, ques1, pic1, pic2, pic3, ques2, pic4, pic5, pic6, ques3, pic7, pic8, pic9, ques4, pic10, pic11, pic12, ques5, pic13, pic14, pic15, ques6, pic16, pic17, pic18, ques7, pic19, pic20, pic21, res1, res2, res3, res4, res5, res6, reference, date, userid, catid, state) 
	values ('".$_POST['title']."','".$save_path_audio.$file['name']."','".$_POST['translate']."','".$_POST['ques1']."','".$save_path_pic.$pic1['name']."','".$save_path_pic.$pic2['name']."','".$save_path_pic.$pic3['name']."','".$_POST['ques2']."','".$save_path_pic.$pic4['name']."','".$save_path_pic.$pic5['name']."','".$save_path_pic.$pic6['name']."','".$_POST['ques3']."','".$save_path_pic.$pic7['name']."','".$save_path_pic.$pic8['name']."','".$save_path_pic.$pic9['name']."','".$_POST['ques4']."','".$save_path_pic.$pic10['name']."','".$save_path_pic.$pic11['name']."','".$save_path_pic.$pic12['name']."','".$_POST['ques5']."','".$save_path_pic.$pic13['name']."','".$save_path_pic.$pic14['name']."','".$save_path_pic.$pic15['name']."','".$_POST['ques6']."','".$save_path_pic.$pic16['name']."','".$save_path_pic.$pic17['name']."','".$save_path_pic.$pic18['name']."',
	'".$_POST['ques7']."','".$save_path_pic.$pic19['name']."','".$save_path_pic.$picA['name']."','".$save_path_pic.$picB['name']."',
	'".$_POST['res1']."','".$_POST['res2']."','".$_POST['res3']."','".$_POST['res4']."','".$_POST['res5']."','".$_POST['res6']."','".$_POST['reference']."','".$_POST['date']."','".$_SESSION['log']."','".$_POST['Category']."','".$_POST['state']."')";
	
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_listenchoose.php');
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
	}
}
?>