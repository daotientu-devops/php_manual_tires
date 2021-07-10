<div class="conright">
<form action="#" method="post" id="form_category">
<table border="0" cellspacing="3" cellpadding="3">
<tr>
<td align = "right"><div style="font-weight:bold; text-align:center;">Tên danh mục:</div></td>
<td align = "right"><div style="width: 860px;"><textarea name="catname" type="text" class="ckeditor" style="width: 860px;height: 100px; background: #e2e2e2"></textarea></div></td>
</tr>
<tr>
<td align="right"><div style="font-weight:bold; text-align:center;">Parent Node ID:</div></td>
<td align="right">
<select name="Parent" style="font-size:13px; width: 860px; font-family: 'Times New Roman', Times, serif;">
	<option value="0">&hArr;Root&hArr;</option>
    <?php
	$strSQL = "SELECT * FROM categories WHERE ParentID = 0";
	$result = mysql_query($strSQL, $link);
	while($row = mysql_fetch_array($result))
	{
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		$strSQL2 = "SELECT * FROM categories WHERE ParentID = '".$row['id']."'";
		$result2 = mysql_query($strSQL2, $link);
		while($row2 = mysql_fetch_array($result2))
		{
			echo '<option value="'.$row2['id'].'">---&gt;'.$row2['name'].'</option>';
		}
	}
	?>
</select>
</td>
</tr>
<tr>
<td align="right"><div style="font-weight:bold; text-align:center;">Đặc tả:</div></td>
<td align="left">
<select name="control" style="width: 560px; font-size:13px; font-family: 'Times New Roman', Times, serif;">
	<option value="">&hArr;None&hArr;</option>
    <option value="test">Bài test</option>
	<option value="listenchoose">Nghe đoạn hội thoại rồi đánh dấu vào bức tranh / hình ảnh đúng</option>
    <option value="listencor">Nghe đoạn hội thoại dài để chọn câu Đúng hoặc Sai</option>
    <option value="listendialog">Nghe đoạn hội thoại ngắn rồi đánh dấu vào đồ vật / sự việc</option>
    <option value="listenfill">Nghe đoạn hội thoại hay độc thoại rồi điền vào chi tiết bỏ trống</option>
    <option value="readad">Đọc biển quảng cáo, bảng báo hiệu</option>
    <option value="readanswer">Đọc một đoạn văn ngắn rồi trả lời câu hỏi (dưới dạng trắc nghiệm)</option>
	<option value="readchoose">Làm bài đọc điền từ vào chỗ trống</option>
    <option value="readcor">Đọc một bài văn ngắn rồi chọn câu trả lời Đúng hoặc Sai (hoặc lựa chọn câu trả lời dưới dạng trắc nghiệm)</option>
    <option value="readdes">Đọc đoạn mô tả ngắn rồi chọn các bức tranh tương ứng</option>
    <option value="readtest">Đọc - Chọn đáp án đúng (dạng trắc nghiệm thường thấy)</option>
    <option value="speakintro">Ghi âm lời giới thiệu về tiểu sử bản thân</option>
    <option value="speaksentence">Luyện nói từng câu thông qua băng ghi âm</option>
    <option value="speaktopic">Luyện nói theo chủ đề</option>
    <option value="writeanswer">Viết câu trả lời theo câu hỏi có lời gợi ý cho sẵn</option>
    <option value="writearticle">Viết một bài viết ngắn có nội dung liên quan đến đời sống hàng ngày</option>
    <option value="writeblank">Viết lại câu với cách diễn đạt khác bằng 1-2 từ vào chỗ trống</option>
</select>
</td>
</tr>
<tr>
<td align="right"><div style="font-weight:bold; text-align:center;">Trạng thái:</div></td>
<td align="left">
<select name="state" style="font-size:13px; font-family: 'Times New Roman', Times, serif;">
	<option value="1">Hiện</option>
    <option value="0">Ẩn</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td align="left">
<input type="submit" name="submit" value="Xác nhận" style="font-family: 'Times New Roman', Times, serif;"/>
<input type="reset" name="cancel" value="Hủy bỏ" onclick="window.location='categories.php'" style="font-family: 'Times New Roman', Times, serif;"/>
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST['submit']))
{
	$sql = "INSERT INTO categories(name, ParentID, control, state) VALUES ('".$_POST['catname']."','".$_POST['Parent']."','".$_POST['control']."','".$_POST['state']."')";
	$result = mysql_query($sql, $link);
	if($result)
	{
		header('Location: categories.php');
	}
	else
	{
		echo 'Thao tác đã bị lỗi.Vui lòng thử lại sau';
	}
}

?>
</div>