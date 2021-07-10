<div class="conleft" style="border-bottom: 1px solid #70201f;">
<form action="#" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="2" cellspacing="2">
    <tr>
	<td align = "right"><div style="font-weight:bold; text-align:right;">Tiêu đề bài viết (title):</div></td>
    <td align = "left"><textarea name="title" id="title" type="text" class="ckeditor" style="width: 400px; height: 100px; background: #e2e2e2"></textarea></td>
	</tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; text-align:right;">Từ khóa (keyword):</div></td>
    <td align = "left"><input type="text" name="tag" id="tag" style="width: 600px; border: 1px solid #790000;"  /></td>
	</tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; text-align:right;">Mô tả (description):</div></td>
    <td align = "left"><textarea name="description" id="description" type="text" class="ckeditor" style="width: 400px; height: 100px; background: #e2e2e2"></textarea></td>
	</tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; text-align:right;">Nội dung bài viết:</div></td>
    <td align = "left"><textarea name="content" id="content" type="text" class="ckeditor" style="width: 400px; height: 100px; background: #e2e2e2"></textarea></td>
	</tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; text-align:right;">Tác giả (Người viết):</div></td>
    <td align = "left"><input type="text" name="author" id="author" style="width: 200px; border: 1px solid #790000;"  /></td>
	</tr>
    <tr>
	<td align = "right"><div style="font-weight:bold; text-align:right;">Ngày viết:</div></td>
    <td align = "left">
    <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="createDate" id="createDate"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
    </td>
	</tr>
    <tr>
   	<td align="right"><div style="font-weight: bold; text-align:right;">Hình ảnh minh họa:</div></td>
    <td align="left"><input name="picture" id="picture" type="file" style="width: 400px; border: 1px solid #790000; color: #790000; font-family: 'Times New Roman', Times, serif;"/></td>
    </tr>
    <tr>
    <td align = "right"><div style="font-weight:bold; text-align:right;">Trạng thái:</div></td>
    <td align = "left">
    <select name="state" style="font-family: 'Times New Roman', Times, serif;">
    <option value="1">Hiện</option>
    <option value="0">Ẩn</option>
    </select>
    </td>
    </tr>
    <tr>
    <td align = "right"><div style="font-weight:bold; text-align:right;">Loại tin tức:</div></td>
    <td align = "left">
    <select name="typeID" style="font-family: 'Times New Roman', Times, serif;  border: 1px solid #790000; color: #790000">
    <option value="0">&hArr;Select&hArr;</option>
    <?php
	$strSQL="SELECT * FROM news_category WHERE ParentID=0";
	$result=mysql_query($strSQL,$link);
	while($row=mysql_fetch_array($result))
	{
		echo '<option value="'.$row['id'].'">'.$row['catName'].'</option>';
		$strSQL2="SELECT * FROM news_category WHERE ParentID='".$row['id']."'";
		$result2=mysql_query($strSQL2,$link);
		while($row2=mysql_fetch_array($result2))
		{
			echo '<option value="'.$row2['id'].'">'.'==&gt;'.$row2['catName'].'</option>';
			$strSQL3="SELECT * FROM news_category WHERE ParentID='".$row2['id']."'";
			$result3=mysql_query($strSQL3,$link);
			while($row3=mysql_fetch_array($result3))
			{
			echo '<option value="'.$row3['id'].'">'.'====&gt;'.$row3['catName'].'</option>';
			
			}
		}
	}
	?>
    </select>
    </td>
    </tr>
    <tr>
    <td></td>
    <td align="left">
    <input type="submit" name="submit" value="Xác nhận" style="font-family: 'Times New Roman', Times, serif;"/>
    <input type="reset" name="cancel" value="Hủy bỏ" style="font-family: 'Times New Roman', Times, serif;"/>
    </td>
    </tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
	$save_path="uploaded/news/"; 
    $file=$_FILES['picture']; 
	//print_r($file);
	move_uploaded_file($file['tmp_name'],$save_path.$file['name']);
	////////////////
	$sql = "INSERT INTO news(title,keyword,description,content,author,createDate,image,state,typeID)
				VALUES ('".$_POST['title']."','".$_POST['tag']."','".$_POST['description']."','".$_POST['content']."','".$_POST['author']."','".$_POST['createDate']."','".$save_path.$file['name']."','".$_POST['state']."','".$_POST['typeID']."')";
	$result = mysql_query($sql, $link);
	if($result)
	{
		header('Location: news.php');
	}
	else
	{
		echo 'Lỗi thao tác, xin vui lòng thử lại sau';
	}
}
?>
</div>
