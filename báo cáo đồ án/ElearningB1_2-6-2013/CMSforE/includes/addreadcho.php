<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data" name="addcomleft" id="addcomleft">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tiêu đề: </div></td>
    <td align="left"><input type="text" name="title" id="title" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục:</div></td>
    <td align="left">
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif">
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
    <td align="right"><div style="font-weight: bold; color: #790000">Nội dung còn trống: </div></td>
    <td align="left"><textarea name="text" id="text" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nội dung lựa chọn: </div></td>
    <td align="left"><textarea name="content_choose" id="content_choose" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 1: </div></td>
    <td align="left"><input type="text" name="choose1" id="choose1" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 2: </div></td>
    <td align="left"><input type="text" name="choose2" id="choose2" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 3: </div></td>
    <td align="left"><input type="text" name="choose3" id="choose3" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 4: </div></td>
    <td align="left"><input type="text" name="choose4" id="choose4" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 5: </div></td>
    <td align="left"><input type="text" name="choose5" id="choose5" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 6: </div></td>
    <td align="left"><input type="text" name="choose6" id="choose6" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 7: </div></td>
    <td align="left"><input type="text" name="choose7" id="choose7" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 8: </div></td>
    <td align="left"><input type="text" name="choose8" id="choose8" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 9: </div></td>
    <td align="left"><input type="text" name="choose9" id="choose9" style="width: 200px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chọn lựa 10: </div></td>
    <td align="left"><input type="text" name="choose10" id="choose10" style="width: 200px; border: 1px solid #790000;" /> </td>
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
	////////////////
	if(!isset($_SESSION['log']))
	{
	header('Location: login.php');
	}
	else
	{
	$sql = "INSERT INTO lessons_readchoose (title, text, content_choose, choose1, choose2, choose3, choose4, choose5, choose6 ,choose7, choose8, choose9, choose10, reference, date, userid, catid, state) 
	values ('".$_POST['title']."','".$_POST['text']."','".$_POST['content_choose']."','".$_POST['choose1']."','".$_POST['choose2']."','".$_POST['choose3']."','".$_POST['choose4']."','".$_POST['choose5']."','".$_POST['choose6']."','".$_POST['choose7']."','".$_POST['choose8']."','".$_POST['choose9']."','".$_POST['choose10']."','".$_POST['reference']."','".$_POST['date']."','".$_SESSION['log']."','".$_POST['Category']."','".$_POST['state']."')";
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_readchoose.php');
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
	}
}
?>