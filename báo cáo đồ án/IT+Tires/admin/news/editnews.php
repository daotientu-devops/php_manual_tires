<?php
if(isset($_GET['newid']))
{
	$strSQL = "SELECT * FROM news WHERE id ='".$_GET['newid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: news.php');
}
?>

<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa bài viết</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
    	<td>Title (*) :</td>
        <td>
        <textarea name="title" id="title" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['title']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Keywords (*) :</td>
        <td>
        <textarea name="keyword" id="keyword" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['keyword']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Description (*) :</td>
        <td>
        <textarea name="description" id="description" style="width: 600px; height: 100px; border: 1px solid #ccc;"><?php echo $row['description']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Nội dung bài viết (*) :</td>
        <td>
        <textarea name="content" id="content" style="width: 600px; height: 100px; border: 1px solid #ccc;" class="ckeditor"><?php echo $row['content']; ?></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Tác giả (*) :</td>
        <td><input type="text" name="author" id="author" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['author']; ?>"/></td>
    </tr>
    <tr>
    	<td>Hình minh họa :</td>
        <td><input type="file" name="picture" id="picture"/></td>
    </tr>
    <tr>
    	<td></td>
        <td><img src="<?php echo $row['picture']; ?>" alt="<?php echo $row['title']; ?>" border="1" /></td>
    </tr>
    <tr>
        <td>Ngày đăng :</td>
        <td>
        <input type="text" name="createDate" id="createDate" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['createDate']; ?>"/>
        </td>
    </tr>
    <tr>
    	<td>Người đăng :</td>
        <td><input type="text" name="userCreate" id="userCreate" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['userCreate']; ?>"/></td>
    </tr>
    <tr>
        <td>Trạng thái :</td>
        <td>
        <label>
        <input name="state" id="state" type="radio" value="1" checked />Hoạt động
        </label>
        <label>
        <input name="state" id="state" type="radio" value="0" />Khóa
        </label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
        <input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='news.php'" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if (isset($_POST['btnUpdate']))
{
	$save_path="uploaded/news/";
	$file=$_FILES['picture'];
	$type=$_FILES['picture']['type'];
	if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
	{
		move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
	}
	else
	{
	echo 'Bạn không được phép upload loại file này';
	}
	if($file['size']>0)
	{
		$strSQL4 = "UPDATE news SET title='".$_POST['title']."',keyword='".$_POST['keyword']."',description='".$_POST['description']."',content='".$_POST['content']."',author='".$_POST['author']."',picture='".$save_path.$file['name']."',createDate='".$_POST['createDate']."',userCreate='".$_POST['userCreate']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	}
	else
	{
		$strSQL4 = "UPDATE news SET title='".$_POST['title']."',keyword='".$_POST['keyword']."',description='".$_POST['description']."',content='".$_POST['content']."',author='".$_POST['author']."',createDate='".$_POST['createDate']."',userCreate='".$_POST['userCreate']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	}
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{	
		header('Location: news.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>