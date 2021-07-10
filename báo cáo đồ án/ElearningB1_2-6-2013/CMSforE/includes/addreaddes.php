<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data" name="addcomleft" id="addcomleft">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Tên tiêu đề: </div></td>
    <td align="left"><input type="text" name="title" id="title" style="width: 200px; border: 1px solid #790000;"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Danh mục:</div></td>
    <td align="left">
    <select name="Category" style="width: 200px; border: 1px solid #790000; color: #790000">
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
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num1" id="num1" style="width: 200px; border: 1px solid #790000;"/> </td>
    </tr>
    <tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 1: </div></td>
    <td align="left"><input type="file" name="pic1" id="pic1" style="width: 200px; border: 1px solid #790000;"/> </td>
    </tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 1: </div></td>
    <td align="left"><textarea name="des1" id="des1" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num2" id="num2" style="width: 200px; border: 1px solid #790000;"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 2: </div></td>
    <td align="left"><input type="file" name="pic2" id="pic2" style="width: 200px; border: 1px solid #790000;"/> </td>  
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 2: </div></td>
    <td align="left"><textarea name="des2" id="des2" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num3" id="num3" style="width: 200px; border: 1px solid #790000;"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 3: </div></td>
    <td align="left"><input type="file" name="pic3" id="pic3" style="width: 200px; border: 1px solid #790000;"/> </td>
   
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 3: </div></td>
    <td align="left"><textarea name="des3" id="des3" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num4" id="num4" style="width: 200px; border: 1px solid #790000;"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 4: </div></td>
    <td align="left"><input type="file" name="pic4" id="pic4" style="width: 200px; border: 1px solid #790000;"/> </td>
    
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 4: </div></td>
    <td align="left"><textarea name="des4" id="des4" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số  thứ tự của câu: </div></td>
    <td align="left"><input type="text" name="num5" id="num5" style="width: 200px; border: 1px solid #790000;"/> </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Bức hình 5: </div></td>
    <td align="left"><input type="file" name="pic5" id="pic5" style="width: 200px; border: 1px solid #790000;"/> </td>
    
    </tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Mô tả 5: </div></td>
    <td align="left"><textarea name="des5" id="des5" style="width: 700px; height: 40px;border: 1px solid #790000; color: #790000" class="ckeditor"></textarea></td>
    </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đoạn mô tả tương ứng: </div></td>
    <td align="left"><textarea name="description" id="description" class="ckeditor" style="width: 900px; height: 500px;border: 1px solid #790000; color: #790000"></textarea></td>
    </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 1: </div></td>
    <td align="left"><input type="text" name="res1" id="res1" style="width: 200px; border: 1px solid #790000;"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 2: </div></td>
    <td align="left"><input type="text" name="res2" id="res2" style="width: 200px; border: 1px solid #790000;"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 3: </div></td>
    <td align="left"><input type="text" name="res3" id="res3" style="width: 200px; border: 1px solid #790000;"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 4: </div></td>
    <td align="left"><input type="text" name="res4" id="res4" style="width: 200px; border: 1px solid #790000;"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Đáp án 5: </div></td>
    <td align="left"><input type="text" name="res5" id="res5" style="width: 200px; border: 1px solid #790000;"/></td>
    </tr>
    </table>
    <table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
	<td align = "right"><div style="font-weight:bold; color: #790000">Ngày tạo:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="date" id="date"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
	</tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nguồn tham khảo: </div></td>
    <td align="left"><input type="text" name="reference" id="reference" style="width: 600px; border: 1px solid #790000;"/></td>
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
		if(!isset($_SESSION['log']))
		{
		header('Location: login.php');
		}
		else
		{
		$save_path="uploaded/lessons_readdes/";
		$pic1 = $_FILES['pic1'];
		$type1 = $_FILES['pic1']['type'];
		
		$pic2 = $_FILES['pic2'];
		$type2 = $_FILES['pic2']['type'];
		
		$pic3 = $_FILES['pic3'];
		$type3 = $_FILES['pic3']['type'];
		
		$pic4 = $_FILES['pic4'];
		$type4 = $_FILES['pic4']['type'];
		
		$pic5 = $_FILES['pic5'];
		$type5 = $_FILES['pic5']['type'];
		
		if(($type1 == 'image/png' || $type1 == 'image/gif' || $type1 == 'image/jpg' || $type1 == 'image/jpeg')
		|| ($type2 == 'image/png' || $type2 == 'image/gif' || $type2 == 'image/jpg' || $type2 == 'image/jpeg')
		|| ($type3 == 'image/png' || $type3 == 'image/gif' || $type3 == 'image/jpg' || $type3 == 'image/jpeg')
		|| ($type4 == 'image/png' || $type4 == 'image/gif' || $type4 == 'image/jpg' || $type4 == 'image/jpeg')
		|| ($type5 == 'image/png' || $type5 == 'image/gif' || $type5 == 'image/jpg' || $type5 == 'image/jpeg')
		)
		{
			move_uploaded_file($pic1['tmp_name'], $save_path.$pic1['name']);
			move_uploaded_file($pic2['tmp_name'], $save_path.$pic2['name']);
			move_uploaded_file($pic3['tmp_name'], $save_path.$pic3['name']);
			move_uploaded_file($pic4['tmp_name'], $save_path.$pic4['name']);
			move_uploaded_file($pic5['tmp_name'], $save_path.$pic5['name']);
		}
		else
		{
		echo 'Bạn không được phép upload loại file này';
		}
			$sql = "INSERT INTO lessons_readdes (title,num1,pic1,des1,num2,pic2,des2,num3,pic3,des3,num4,pic4,des4,num5,pic5,des5,description,res1,res2,res3,res4,res5,reference,date,userid,catid,state)
		VALUES ('".$_POST['title']."','".$_POST['num1']."','".$save_path.$pic1['name']."','".$_POST['des1']."','".$_POST['num2']."','".$save_path.$pic2['name']."','".$_POST['des2']."','".$_POST['num3']."','".$save_path.$pic3['name']."','".$_POST['des3']."','".$_POST['num4']."','".$save_path.$pic4['name']."','".$_POST['des4']."','".$_POST['num5']."','".$save_path.$pic5['name']."','".$_POST['des5']."','".$_POST['description']."','".$_POST['res1']."','".$_POST['res2']."','".$_POST['res3']."','".$_POST['res4']."','".$_POST['res5']."','".$_POST['reference']."','".$_POST['date']."','".$_SESSION['log']."','".$_POST['Category']."','".$_POST['state']."')";
			$result = mysql_query($sql,$link);
			if($result)
			{
				header('Location: lessons_readdes.php');
			}
			else
			{
				echo 'Không thể thực hiện được thao tác này.';
			}
		}
	}
?>