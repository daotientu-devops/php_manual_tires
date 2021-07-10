<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data" name="addcomleft" id="addcomleft">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tiêu đề: </div></td>
    <td align="left"><input type="text" name="title" id="title" style="width: 600px; border: 1px solid #790000;" /> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục:</div></td>
    <td align="left">
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif;">
    <option value="0">&lArr;Cấp cao nhất&rArr;</option>
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
    <td align="right"><div style="font-weight: bold; color: #790000">Các câu nguyên mẫu: </div></td>
    <td align="left"><textarea name="question" id="question" style="width: 800px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
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
    <td align="left"><input type="text" name="reference" id="reference" style="width: 600px; border: 1px solid #790000;" /></td>
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
    </form>
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
	$sql = "INSERT INTO lessons_writeblank (title, question, reference, date, userid, catid, state) 
	values ('".$_POST['title']."','".$_POST['question']."','".$_POST['reference']."','".$_POST['date']."','".$_SESSION['log']."','".$_POST['Category']."','".$_POST['state']."')";
	$result = mysql_query($sql,$link);
	if($result)
	{
		header('Location: lessons_writeblank.php');
		echo '<h2>Thao tác thêm dữ liệu thành công</h2>.';
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
	}
}
?>
<form action="#" method="post" enctype="multipart/form-data">
	<tr>
    <td></td>
    <td><hr color="CCCCCC"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục các câu hỏi: </div></td>
    <td align="left">
    <select name="writeblaid" style="width: 220px; border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif">
    <option value="">Chọn câu hỏi</option>
    <?php
    	$sql="SELECT * FROM lessons_writeblank";
		$re=mysql_query($sql,$link);
		while($ro=mysql_fetch_array($re))
		{
			echo '<option value="'.$ro['id'].'">'.$ro['title'].'</option>';
		}
	?>
    </select>
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chỗ trống của câu| </div></td>
    <td align="left">Lựa chọn thứ 1 - n : <input type="text" name="txt11st" id="txt11st" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="11stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td>
    </tr>
   <!-- <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 2: <input type="text" name="txt12st" id="txt12st" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="12stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 3: <input type="text" name="txt13st" id="txt13st" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="13stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 4: <input type="text" name="txt14st" id="txt14st" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="14stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr> -->
   	
   <!-- <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chỗ trống câu 2| </div></td>
    <td align="left">Lựa chọn thứ 1: <input type="txt21st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="21stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td>
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 2: <input type="txt22st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="22stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 3: <input type="txt23st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="23stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 4: <input type="txt24st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="24stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td></td>
    <td><hr color="CCCCCC"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chỗ trống câu 3| </div></td>
    <td align="left">Lựa chọn thứ 1: <input type="txt31st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="31stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td>
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 2: <input type="txt32st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="32stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 3: <input type="txt33st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="33stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 4: <input type="txt34st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="34stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td></td>
    <td><hr color="CCCCCC"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chỗ trống câu 4| </div></td>
    <td align="left">Lựa chọn thứ 1: <input type="txt41st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="41stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td>
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 2: <input type="txt42st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="42stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 3: <input type="txt43st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="43stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 4: <input type="txt44st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="44stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td></td>
    <td><hr color="CCCCCC"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Chỗ trống câu 5| </div></td>
    <td align="left">Lựa chọn thứ 1: <input type="txt51st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="51stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td>
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 2: <input type="txt52st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="52stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 3: <input type="txt53st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="53stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr>
    <tr>
    <td align="right"></td>
    <td align="left">Lựa chọn thứ 4: <input type="txt54st" name="keyblank" id="keyblank" style="width: 200px; border: 1px solid #790000;" />
    <input type="submit" name="54stChoice" value="Thêm" style="font-family:'Times New Roman', Times, serif"/>
    </td> 
    </tr> -->
    <tr>
    <td></td>
    <td align="left">
    <input type="reset" name="finish" value="Kết thúc" style="font-family:'Times New Roman', Times, serif"  onclick='window.location="lessons_writeblank.php"'/>
    <input type="reset" name="reset" value="Làm lại" style="font-family:'Times New Roman', Times, serif"/>
    </td>
    </tr>
    </table>
<?php
if(isset($_POST['11stChoice']))
{
	////////////////
	if(!isset($_SESSION['log']))
	{
	header('Location: login.php');
	}
	else
	{
		$sql1 = "INSERT INTO key_writeblank (writeblaid, keyblank) 
	VALUES ('".$_POST['writeblaid']."','".$_POST['txt11st']."')";
		$result1 = mysql_query($sql1,$link);
		if($result1)
		{
			//header('Location: lessons_writeblank.php');
			echo '<h2>Thao tác thêm dữ liệu thành công</h2>.';
		}
		else
		{
			echo 'Không thể thực hiện được thao tác này.';
		}
	}
}
?>
<?php
if(isset($_POST['12stChoice']))
{
	////////////////
	if(!isset($_SESSION['log']))
	{
	header('Location: login.php');
	}
	else
	{
		$sql1 = "INSERT INTO key_writeblank (writeblaid, keyblank) 
	VALUES ('".$_POST['writeblaid']."','".$_POST['txt12st']."')";
		$result1 = mysql_query($sql1,$link);
		if($result1)
		{
			//header('Location: lessons_writeblank.php');
			echo '<h2>Thao tác thêm dữ liệu thành công</h2>.';
		}
		else
		{
			echo 'Không thể thực hiện được thao tác này.';
		}
	}
}
?>
<?php
if(isset($_POST['13stChoice']))
{
	////////////////
	if(!isset($_SESSION['log']))
	{
	header('Location: login.php');
	}
	else
	{
		$sql1 = "INSERT INTO key_writeblank (writeblaid, keyblank) 
	VALUES ('".$_POST['writeblaid']."','".$_POST['txt13st']."')";
		$result1 = mysql_query($sql1,$link);
		if($result1)
		{
			//header('Location: lessons_writeblank.php');
			echo '<h2>Thao tác thêm dữ liệu thành công</h2>.';
		}
		else
		{
			echo 'Không thể thực hiện được thao tác này.';
		}
	}
}
?>
<?php
if(isset($_POST['14stChoice']))
{
	////////////////
	if(!isset($_SESSION['log']))
	{
	header('Location: login.php');
	}
	else
	{
		$sql1 = "INSERT INTO key_writeblank (writeblaid, keyblank) 
	VALUES ('".$_POST['writeblaid']."','".$_POST['txt14st']."')";
		$result1 = mysql_query($sql1,$link);
		if($result1)
		{
			//header('Location: lessons_writeblank.php');
			echo '<h2>Thao tác thêm dữ liệu thành công</h2>.';
		}
		else
		{
			echo 'Không thể thực hiện được thao tác này.';
		}
	}
}
?>
</form>
    
</div>
