<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Thêm mới bài viết</h2>
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
        <textarea name="title" id="title" style="width: 600px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Keywords (*) :</td>
        <td>
        <textarea name="keyword" id="keyword" style="width: 600px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Description (*) :</td>
        <td>
        <textarea name="description" id="description" style="width: 600px; height: 100px; border: 1px solid #ccc;"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Nội dung bài viết (*) :</td>
        <td>
        <textarea name="content" id="content" style="width: 600px; height: 100px; border: 1px solid #ccc;" class="ckeditor"></textarea> 
        </td>
    </tr>
    <tr>
    	<td>Tác giả (*) :</td>
        <td><input type="text" name="author" id="author" style="width: 220px; border: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td>Hình minh họa :</td>
        <td><input type="file" name="picture" id="picture"/></td>
    </tr>
    <tr>
        <td>Ngày đăng :</td>
        <td>
        <input type="text" name="createDate" id="createDate" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;"/>
        </td>
    </tr>
    <tr>
    	<td>Người đăng :</td>
        <td><input type="text" name="userCreate" id="userCreate" style="width: 220px; border: 1px solid #ccc;"/></td>
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
        <input type="submit" name="btnAdd" id="btnAdd" value="Thêm" />
        <input type="reset" name="btnReset" id="btnReset" value="Làm lại" />
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnAdd']))
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
		$sql="INSERT INTO news(title,keyword,description,content,author,picture,createDate,userCreate,state) 
		VALUES ('".$_POST['title']."','".$_POST['keyword']."','".$_POST['description']."','".$_POST['content']."','".$_POST['author']."','".$save_path.$file['name']."','".$_POST['createDate']."','".$_POST['userCreate']."','".$_POST['state']."')";
	}
	else
	{
		$sql="INSERT INTO news(title,keyword,description,content,author,createDate,userCreate,state) 
		VALUES ('".$_POST['title']."','".$_POST['keyword']."','".$_POST['description']."','".$_POST['content']."','".$_POST['author']."','".$_POST['createDate']."','".$_POST['userCreate']."','".$_POST['state']."')";
	}
		$re=mysql_query($sql,$link);
		if($re)
		{
		header('Location: news.php');
		}
		else
		{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}
}
?>