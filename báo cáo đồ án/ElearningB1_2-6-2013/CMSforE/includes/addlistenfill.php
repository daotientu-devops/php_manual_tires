<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data">
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
    <td align="right"><div style="font-weight: bold; color: #790000">Nội dung bài điền từ: </div></td>
    <td align="left"><textarea name="text" id="text" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bài dịch: </div></td>
    <td align="left"><textarea name="translate" id="translate" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 1: </div></td>
    <td align="left"><input type="text" name="blank1" id="blank1" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 2: </div></td>
    <td align="left"><input type="text" name="blank2" id="blank2" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 3: </div></td>
    <td align="left"><input type="text" name="blank3" id="blank3" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 4: </div></td>
    <td align="left"><input type="text" name="blank4" id="blank4" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 5: </div></td>
    <td align="left"><input type="text" name="blank5" id="blank5" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 6: </div></td>
    <td align="left"><input type="text" name="blank6" id="blank6" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 7: </div></td>
    <td align="left"><input type="text" name="blank7" id="blank7" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 8: </div></td>
    <td align="left"><input type="text" name="blank8" id="blank8" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 9: </div></td>
    <td align="left"><input type="text" name="blank9" id="blank9" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án chỗ trống 10: </div></td>
    <td align="left"><input type="text" name="blank10" id="blank10" style="width: 100px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Các đáp án khác: </div></td>
    <td align="left"><textarea name="note" id="note" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
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
	$save_path="uploaded/lessons_listenfill/"; 
    $file=$_FILES['audio']; 
	move_uploaded_file($file['tmp_name'],$save_path.$file['name']);
	////////////////
	if(!isset($_SESSION['log']))
	{
	header('Location: login.php');
	}
	else
	{
	if($file['size']>0)
	{
		$sql = "INSERT INTO lessons_listenfill (title, audio, text, translate, blank1, blank2, blank3, blank4, blank5, blank6, blank7, blank8, blank9, blank10, note, reference, date, userid, catid, state) 
	VALUES ('".$_POST['title']."','".$save_path.$file['name']."','".$_POST['text']."','".$_POST['translate']."','".$_POST['blank1']."','".$_POST['blank2']."','".$_POST['blank3']."','".$_POST['blank4']."','".$_POST['blank5']."','".$_POST['blank6']."','".$_POST['blank7']."','".$_POST['blank8']."','".$_POST['blank9']."','".$_POST['blank10']."','".$_POST['note']."','".$_POST['reference']."','".$_POST['date']."','".$_SESSION['log']."','".$_POST['Category']."','".$_POST['state']."')";
	}
	else
	{
		$sql = "INSERT INTO lessons_listenfill (title, text, translate, blank1, blank2, blank3, blank4, blank5, blank6, blank7, blank8, blank9, blank10, note, reference, date, userid, catid, state) 
	VALUES ('".$_POST['title']."','".$_POST['text']."','".$_POST['translate']."','".$_POST['blank1']."','".$_POST['blank2']."','".$_POST['blank3']."','".$_POST['blank4']."','".$_POST['blank5']."','".$_POST['blank6']."','".$_POST['blank7']."','".$_POST['blank8']."','".$_POST['blank9']."','".$_POST['blank10']."','".$_POST['note']."','".$_POST['reference']."','".$_POST['date']."','".$_SESSION['log']."','".$_POST['Category']."','".$_POST['state']."')";
	}
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_listenfill.php');
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
	}
}
?>