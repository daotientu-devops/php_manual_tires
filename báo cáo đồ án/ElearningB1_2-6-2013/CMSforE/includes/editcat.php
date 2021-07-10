<?php
if(isset($_GET['cid']))
{
	$strSQL = "SELECT * FROM categories WHERE id = '".$_GET['cid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: categories.php');
}
?>

<div class="conright">
<form action="#" method="post" enctype="multipart/form-data" id="form_category">
<table border="0" cellpadding="0" cellspacing="3">
<tr>
<td align="right"><div style="font-weight:bold; text-align:right;">Tên danh mục: </div></td>
<td align="right"><div style="width: 860px;"><textarea name="catname" type="text" class="ckeditor" style="width: 860px;height: 100px; background: #e2e2e2"><?php
echo $row['name'];
?></textarea></div></td>
</tr>
<tr>
<td align="right"><div style="font-weight:bold; text-align:right;">Parent Node ID:</td>
<td align="right"><div style="width: 860px;">
<select name="Parent" style="font-size:12px; width: 860px;">
	<option value="0">&hArr;Root&hArr;</option>
    <?php
	$strSQL2 = "SELECT * FROM categories WHERE ParentID = 0";
	$result2 = mysql_query($strSQL2, $link);
	while($row2 = mysql_fetch_array($result2))
	{
		if($row2['id']==$row['ParentID'])
		{
			echo '<option selected="selected" value="'.$row2['id'].'">'.$row2['name'].'</option>';
		}
		else
		{
			echo '<option value="'.$row2['id'].'">'.$row2['name'].'</option>';
		}
		$strSQL3 = "SELECT * FROM categories WHERE ParentID ='".$row2['id']."'";
		$result3 = mysql_query($strSQL3, $link);
		while($row3 = mysql_fetch_array($result3))
		{
			if($row3['id']==$row['ParentID'])
			{
				echo '<option selected="selected" value="'.$row3['id'].'">'.$row3['name'].'</option>';
			}
			else
			{
				echo '<option value="'.$row3['id'].'">---&gt;'.$row3['name'].'</option>';
			}
				$strSQL4 = "SELECT * FROM categories WHERE ParentID ='".$row3['id']."'";
				$result4 = mysql_query($strSQL4, $link);
				while($row4 = mysql_fetch_array($result4))
				{
					if($row4['id']==$row['ParentID'])
					{
						echo '<option selected="selected" value="'.$row4['id'].'">'.$row4['name'].'</option>';
					}
					else
					{
						echo '<option value="'.$row4['id'].'">----&gt;&gt;'.$row4['name'].'</option>';
					}
				
				}
		}
	}
	?>
</select>
</div>
</td>
</tr>
<tr>
<td align="right"><div style="font-weight:bold; text-align:right;">Đặc tả (Mới):</div></td>
<td align="left">
<select name="control" style="width: 560px; font-size:13px; font-family: 'Times New Roman', Times, serif;">
	<option value="">&hArr;None&hArr;</option>
    <option value="test" <?php if($row['control']=='test') echo "selected"; ?>>Bài test</option>
	<option value="listenchoose" <?php if($row['control']=='listenchoose') echo "selected"; ?>>Nghe đoạn hội thoại rồi đánh dấu vào bức tranh / hình ảnh đúng</option>
    <option value="listencor" <?php if($row['control']=='listencor') echo "selected"; ?>>Nghe đoạn hội thoại dài để chọn câu Đúng hoặc Sai</option>
    <option value="listendialog" <?php if($row['control']=='listendialog') echo "selected"; ?>>Nghe đoạn hội thoại ngắn rồi đánh dấu vào đồ vật / sự việc</option>
    <option value="listenfill" <?php if($row['control']=='listenfill') echo "selected"; ?>>Nghe đoạn hội thoại hay độc thoại rồi điền vào chi tiết bỏ trống</option>
    <option value="readad" <?php if($row['control']=='readad') echo "selected"; ?>>Đọc biển quảng cáo, bảng báo hiệu</option>
    <option value="readanswer" <?php if($row['control']=='readanswer') echo "selected"; ?>>Đọc một đoạn văn ngắn rồi trả lời câu hỏi (dưới dạng trắc nghiệm)</option>
	<option value="readchoose" <?php if($row['control']=='readchoose') echo "selected"; ?>>Làm bài đọc điền từ vào chỗ trống</option>
    <option value="readcor" <?php if($row['control']=='readcor') echo "selected"; ?>>Đọc một bài văn ngắn rồi chọn câu trả lời Đúng hoặc Sai (hoặc lựa chọn câu trả lời dưới dạng trắc nghiệm)</option>
    <option value="readdes" <?php if($row['control']=='readdes') echo "selected"; ?>>Đọc đoạn mô tả ngắn rồi chọn các bức tranh tương ứng</option>
    <option value="readtest" <?php if($row['control']=='readtest') echo "selected"; ?>>Đọc - Chọn đáp án đúng (dạng trắc nghiệm thường thấy)</option>
    <option value="speakintro" <?php if($row['control']=='speakintro') echo "selected"; ?>>Ghi âm lời giới thiệu về tiểu sử bản thân</option>
    <option value="speaksentence" <?php if($row['control']=='speaksentence') echo "selected"; ?>>Luyện nói từng câu thông qua băng ghi âm</option>
    <option value="speaktopic" <?php if($row['control']=='speaktopic') echo "selected"; ?>>Luyện nói theo chủ đề</option>
    <option value="writeanswer" <?php if($row['control']=='writeanswer') echo "selected"; ?>>Viết câu trả lời theo câu hỏi có lời gợi ý cho sẵn</option>
    <option value="writearticle" <?php if($row['control']=='writearticle') echo "selected"; ?>>Viết một bài viết ngắn có nội dung liên quan đến đời sống hàng ngày</option>
    <option value="writeblank" <?php if($row['control']=='writeblank') echo "selected"; ?>>Viết lại câu với cách diễn đạt khác bằng 1-2 từ vào chỗ trống</option>
</select>
</td>
</tr>

<tr>
<td align="right"><div style="font-weight:bold; text-align:right;">Trạng thái:</div></td>
<td align="left">
<select name="state" style="font-size:13px; font-family: 'Times New Roman', Times, serif;">
	<option value="1">Hiện</option>
    <option value="0">Ẩn</option>
</select>
</td>
</tr>
<tr>
<td align="right"></td>
<td align="left">
<input name="submit" type="submit" value="Xác nhận" style="font-family: 'Times New Roman', Times, serif;"/>
<input name="cancel" type="reset" value="Hủy bỏ" onclick="window.location='categories.php'" style="font-family: 'Times New Roman', Times, serif;"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
	$strSQL4 = "UPDATE categories SET name = '".$_POST['catname']."',ParentID = '".$_POST['Parent']."',control = '".$_POST['control']."',state = '".$_POST['state']."' WHERE id = '".$row['id']."'";
	$result4 = mysql_query($strSQL4, $link);
	if($result4)
	{
		header('Location: categories.php');
	}
	else
	{
		echo 'Có lỗi xảy ra';
	}
}
?>
</div>