<?php
if(isset($_GET['listenchoid']))
{
	$strSQL5 = "SELECT * FROM lessons_listenchoose WHERE id='".$_GET['listenchoid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: lessons_listenchoose.php');
}
?>
<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data" id="form_listenchoose">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">User ID: </div></td>
    <td align="left"><?php echo $row5['userid']; ?></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tiêu đề: </div></td>
    <td align="left"><textarea name="title" id="title" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['title']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục:</div></td>
    <td align="left">
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif;">
    <option value="0">== Select ==</option>
    <?php
    $strSQL2 = "SELECT * FROM categories WHERE ParentID = 0";
	$result2 = mysql_query($strSQL2, $link);
	  while($row2 = mysql_fetch_array($result2))
	  {
		  if($row5['catid'] == $row2['id'])
		  {
			  echo '<option selected="selected" value="'.$row2['id'].'">'.$row2['name'].'</option>';
		  }
		  else
		  {
			  echo '<option value="'.$row2['id'].'">'.$row2['name'].'</option>';
			  $strSQL3 = "SELECT * FROM categories WHERE ParentID='".$row2['id']."'";
			  $result3 = mysql_query($strSQL3, $link);
			  while($row3 = mysql_fetch_array($result3))
			  {
				  if($row5['catid'] == $row3['id'])
				  {
					  echo '<option selected="selected" value="'.$row3['id'].'">&raquo;'.$row3['name'].'</option>';
				  }
				  else
				  {
					  echo '<option value="'.$row3['id'].'">&raquo;'.$row3['name'].'</option>';
					  $strSQL4 = "SELECT * FROM categories WHERE ParentID='".$row3['id']."'";
					  $result4 = mysql_query($strSQL4, $link);
					  while($row4 = mysql_fetch_array($result4))
					  {
						  if($row5['catid'] == $row4['id'])
						  {
							  echo '<option selected="selected" value="'.$row4['id'].'">&raquo;&raquo;&raquo;&raquo;'.$row4['name'].'</option>';
						  }
						  else
						  {
							  echo '<option value="'.$row4['id'].'">&raquo;&raquo;&raquo;&raquo;'.$row4['name'].'</option>';
							  
						  }
					  }
				  }
			  }
		  }
	  }
    ?>
    </select>
    </td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Audio:</div></td>
    <td align="left"><input name="audio" id="audio" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left"><input type="text" style="width: 440px; border: 1px solid #790000;" value="<?php echo $row5['audio']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bài dịch: </div></td>
    <td align="left"><textarea name="translate" id="translate" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['translate']; ?></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 1: </div></td>
    <td align="left"><textarea name="ques1" id="ques1" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['ques1']; ?></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 1:</div></td>
    <td align="left"><input name="pic1" id="pic1" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic1']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 2:</div></td>
    <td align="left"><input name="pic2" id="pic2" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic2']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 3:</div></td>
    <td align="left"><input name="pic3" id="pic3" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic3']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 2: </div></td>
    <td align="left"><textarea name="ques2" id="ques2" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['ques2']; ?></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 4:</div></td>
    <td align="left"><input name="pic4" id="pic4" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic4']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 5:</div></td>
    <td align="left"><input name="pic5" id="pic5" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic5']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 6:</div></td>
    <td align="left"><input name="pic6" id="pic6" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic6']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 3: </div></td>
    <td align="left"><textarea name="ques3" id="ques3" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['ques3']; ?></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 7:</div></td>
    <td align="left"><input name="pic7" id="pic7" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic7']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 8:</div></td>
    <td align="left"><input name="pic8" id="pic8" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic8']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 9:</div></td>
    <td align="left"><input name="pic9" id="pic9" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic9']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 4: </div></td>
    <td align="left"><textarea name="ques4" id="ques4" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['ques4']; ?></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 10:</div></td>
    <td align="left"><input name="pic10" id="pic10" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic10']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 11:</div></td>
    <td align="left"><input name="pic11" id="pic11" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic11']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 12:</div></td>
    <td align="left"><input name="pic12" id="pic12" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
	<tr>
    <td></td>
    <td><img src="<?php echo $row5['pic12']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 5: </div></td>
    <td align="left"><textarea name="ques5" id="ques5" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['ques5']; ?></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 13:</div></td>
    <td align="left"><input name="pic13" id="pic13" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic13']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 14:</div></td>
    <td align="left"><input name="pic14" id="pic14" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic14']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 15:</div></td>
    <td align="left"><input name="pic15" id="pic15" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic15']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 6: </div></td>
    <td align="left"><textarea name="ques6" id="ques6" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['ques6']; ?></textarea></td>
    </tr>
    
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 16:</div></td>
    <td align="left"><input name="pic16" id="pic16" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic16']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 17:</div></td>
    <td align="left"><input name="pic17" id="pic17" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic17']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 18:</div></td>
    <td align="left"><input name="pic18" id="pic18" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic18']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Câu hỏi 7: </div></td>
    <td align="left"><textarea name="ques7" id="ques7" style="width: 600px; height: 100px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['ques7']; ?></textarea></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 19:</div></td>
    <td align="left"><input name="pic19" id="pic19" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic19']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 20:</div></td>
    <td align="left"><input name="picA" id="picA" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic20']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Hình ảnh 21:</div></td>
    <td align="left"><input name="picB" id="picB" type="file" style="width: 400px; border: 1px solid #790000; color: #790000;"/>
    
    </td>
    </tr>
    <tr>
    <td></td>
    <td><img src="<?php echo $row5['pic21']; ?>" alt="<?php echo $row5['title']; ?>" border="1" width="40px" height="40px"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 1: </div></td>
    <td align="left"><input type="text" name="res1" id="res1" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['res1']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 2: </div></td>
    <td align="left"><input type="text" name="res2" id="res2" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['res2']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 3: </div></td>
    <td align="left"><input type="text" name="res3" id="res3" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['res3']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 4: </div></td>
    <td align="left"><input type="text" name="res4" id="res4" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['res4']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 5: </div></td>
    <td align="left"><input type="text" name="res5" id="res5" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['res5']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 6: </div></td>
    <td align="left"><input type="text" name="res6" id="res6" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['res6']; ?>"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 7: </div></td>
    <td align="left"><input type="text" name="res7" id="res7" style="width: 100px; border: 1px solid #790000;" value="<?php echo $row5['res7']; ?>"/> </td>
    </tr>
    
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Ngày tạo:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="date" id="date" value="<?php echo $row5['date']; ?>"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
	</tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nguồn tham khảo: </div></td>
    <td align="left"><input type="text" name="reference" id="reference" style="width: 600px; border: 1px solid #790000;" value="<?php echo $row5['reference']; ?>"/> </td>
    </tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Trạng thái:</div></td>
    <td align = "left">
    <select name="state" style="font-family: 'Times New Roman', Times, serif;">
    <option value="1" <?php if($row5['state']==1) echo 'selected';?>>Hiện</option>
    <option value="0" <?php if($row5['state']==0) echo 'selected';?>>Ẩn</option>
    </select>
    </td>
	</tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Xác nhận" style="font-family:'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="lessons_listenchoose.php"'/>
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
		if($file['size']>0 || $pic1['size']>0 || $pic2['size']>0 || $pic3['size']>0 || $pic4['size']>0 || $pic5['size']>0 || $pic6['size']>0 || $pic7['size']>0 || $pic8['size']>0 || $pic9['size']>0 || $pic10['size']>0 || $pic11['size']>0 || $pic12['size']>0 || $pic13['size']>0 || $pic14['size']>0 || $pic15['size']>0 || $pic16['size']>0 || $pic17['size']>0 || $pic18['size']>0 || $pic19['size']>0 || $picA['size']>0 || $picB['size']>0)
		{
			$sql = "UPDATE lessons_listenchoose SET title = '".$_POST['title']."',audio = '".$save_path_audio.$file['name']."',translate = '".$_POST['translate']."',ques1 = '".$_POST['ques1']."',pic1 = '".$save_path_pic.$pic1['name']."',pic2 = '".$save_path_pic.$pic2['name']."',pic3 = '".$save_path_pic.$pic3['name']."',
		ques2 = '".$_POST['ques2']."',pic4 = '".$save_path_pic.$pic4['name']."',pic5 = '".$save_path_pic.$pic5['name']."',pic6 = '".$save_path_pic.$pic6['name']."',
		ques3 = '".$_POST['ques3']."',pic7 = '".$save_path_pic.$pic7['name']."',pic8 = '".$save_path_pic.$pic8['name']."',pic9 = '".$save_path_pic.$pic9['name']."',
		ques4 = '".$_POST['ques4']."',pic10 = '".$save_path_pic.$pic10['name']."',pic11 = '".$save_path_pic.$pic11['name']."',pic12 = '".$save_path_pic.$pic12['name']."',
		ques5 = '".$_POST['ques5']."',pic13 = '".$save_path_pic.$pic13['name']."',pic14 = '".$save_path_pic.$pic14['name']."',pic15 = '".$save_path_pic.$pic15['name']."',
		ques6 = '".$_POST['ques6']."',pic16 = '".$save_path_pic.$pic16['name']."',pic17 = '".$save_path_pic.$pic17['name']."',pic18 = '".$save_path_pic.$pic18['name']."',
		ques7 = '".$_POST['ques7']."',pic19 = '".$save_path_pic.$pic19['name']."',pic20 = '".$save_path_pic.$picA['name']."',pic21 = '".$save_path_pic.$picB['name']."',
		res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',res6 = '".$_POST['res6']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
		else
		{
			$sql = "UPDATE lessons_listenchoose SET title = '".$_POST['title']."',translate = '".$_POST['translate']."',ques1 = '".$_POST['ques1']."',
		ques2 = '".$_POST['ques2']."',
		ques3 = '".$_POST['ques3']."',
		ques4 = '".$_POST['ques4']."',
		ques5 = '".$_POST['ques5']."',
		ques6 = '".$_POST['ques6']."',
		ques7 = '".$_POST['ques7']."',
		res1 = '".$_POST['res1']."',res2 = '".$_POST['res2']."',res3 = '".$_POST['res3']."',res4 = '".$_POST['res4']."',res5 = '".$_POST['res5']."',res6 = '".$_POST['res6']."',reference = '".$_POST['reference']."',date = '".$_POST['date']."',catid = '".$_POST['Category']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
		}
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