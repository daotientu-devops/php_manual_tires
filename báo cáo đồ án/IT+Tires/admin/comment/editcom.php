<?php
if(isset($_GET['comid']))
{
	$strSQL = "SELECT * FROM comment WHERE id ='".$_GET['comid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: comment.php');
}
?>
<div style="margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
<h2>Sửa bình luận</h2>
</div>
<div style="clear: both;">
<form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
    <tr>
    	<td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
    </tr>
    <tr>
        <td colspan="2">
        <?php 
		if($row['type']==1)
		{
			echo '<b>Đánh giá sản phẩm</b>';
		}
		elseif($row['type']==2)
		{
			echo '<b>Tư vấn hỗ trợ kỹ thuật</b>';
		}
		elseif($row['type']==3)
		{
			echo '<b>Đóng góp ý kiến</b>';
		}
		?>
        </td>
    </tr>
    <tr>
    	<td>Mã sản phẩm :</td>
        <td>
        <?php echo $row['proID']; ?>
        </td>
    </tr>
    <tr>
    	<td>Đánh giá (*) :</td>
        <td>
        	<select name="rate" style="background: #F7EDAF; font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
        	<option value="">-- --</option>
            <option value="5" <?php if($row['rate']==5) echo 'selected';?>>5 sao (Tốt nhất)</option>
            <option value="4" <?php if($row['rate']==4) echo 'selected';?>>4 sao</option>
            <option value="3" <?php if($row['rate']==3) echo 'selected';?>>3 sao (Trung bình)</option>
            <option value="2" <?php if($row['rate']==2) echo 'selected';?>>2 sao</option>
            <option value="1" <?php if($row['rate']==1) echo 'selected';?>>1 sao (Tồi nhất)</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Số lượt bình chọn :</td>
        <td>
        <?php echo $row['count']; ?>
        </td>
    </tr>
    <tr>
    	<td>Tiêu đề :</td>
        <td>
        <input type="text" name="title" id="title" style="width: 600px; border: 1px solid #ccc;" value="<?php echo $row['title']; ?>" />
        </td>
    </tr>
    <tr>
    	<td>Nội dung (*) :</td>
        <td>
        <textarea name="content" id="content" style="width: 600px; height: 120px; border: 1px solid #ccc;"><?php echo $row['content']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<td>File đính kèm :</td>
        <td>
        <?php echo $row['file']; ?>
        </td>
    </tr>
    <tr>
    	<td>Trả lời (*) :</td>
        <td>
        <textarea name="reply" id="reply" style="width: 600px; height: 120px; border: 1px solid #ccc;"><?php echo $row['reply']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<td>Họ tên :</td>
        <td>
        <input type="text" name="name" id="name" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['name']; ?>" />
        </td>
    </tr>
    <tr>
    	<td>Số điện thoại :</td>
        <td>
        <input type="text" name="tel" id="tel" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['tel']; ?>" />
        </td>
    </tr>
    <tr>
    	<td>Email :</td>
        <td>
        <input type="text" name="email" id="email" style="width: 440px; border: 1px solid #ccc;" value="<?php echo $row['email']; ?>" />
        </td>
    </tr>
    
    <tr>
    <td>Trạng thái :</td>
    <td>
        <select name="state" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
       	<option value="">-- --</option>
        <option value="1" <?php if($row['state']==1) echo 'selected';?>>Đã xem</option>
        <option value="0" <?php if($row['state']==0) echo 'selected';?>>Chờ xem</option>
        </select>
    </td>
    </tr>
    <tr>
    <td></td>
    <td>
        <input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
        <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='comment.php'" />
    </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['btnUpdate']))
{
	$strSQL4="UPDATE comment SET name='".$_POST['name']."',tel='".$_POST['tel']."',email='".$_POST['email']."',title='".$_POST['title']."',reply='".$_POST['reply']."',content='".$_POST['content']."',rate='".$_POST['rate']."',state='".$_POST['state']."' WHERE id ='".$row['id']."'";
	$result4=mysql_query($strSQL4,$link);
	if($result4)
	{
		header('Location: comment.php');
	}
	else
	{
		echo 'Sửa bình luận thất bại. Vui lòng thử lại sau';
	}
}
?>
<form action="#" method="post">
<table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
	<tr>
    	<td colspan="2"><b>Bình chọn sản phẩm</b></td>
    </tr>
    <tr>
    	<td>Tên sản phẩm :</td>
        <td>
        <?php
		$strSQL5="SELECT * FROM products WHERE id='".$row['proID']."'";
		$result5=mysql_query($strSQL5,$link);
		while($row5=mysql_fetch_array($result5))
		{
			echo '<b>'.$row5['name'].'</b>';
		}
		?>
        </td>
    </tr>
    <?php
	$sql="SELECT proID, SUM(count) as total FROM comment GROUP BY proID HAVING proID='".$row['proID']."'";
	$query=mysql_query($sql,$link);
	while($array=mysql_fetch_array($query))
	{
		$total=$array['total'];
		//echo $total;
	}
	?>

    	<tr>
        <td>5 sao (Tốt nhất) :</td>
        <td>
        <?php
		$strSQL6="SELECT * FROM comment WHERE proID='".$row['proID']."' AND rate=5";
		$result6=mysql_query($strSQL6,$link);
		while($row6=mysql_fetch_array($result6))
		{
			echo '<b>'.$row6['count'].' </b>(lượt)';
			echo '</td>
			<td>Chiếm tỷ lệ :</td>
			<td>';
				$percent1=round(($row6['count']/$total)*100,2);
				echo '<b>'.$percent1.'</b> (%)';
		} 
		?>
        </td>
        </tr>
        
        <tr>
        <td>4 sao :</td>
        <td>
        <?php
		$strSQL7="SELECT * FROM comment WHERE proID='".$row['proID']."' AND rate=4";
		$result7=mysql_query($strSQL7,$link);
		while($row7=mysql_fetch_array($result7))
		{
			echo '<b>'.$row7['count'].' </b>(lượt)';
			echo '</td>
			<td>Chiếm tỷ lệ :</td>
			<td>';
				$percent2=round(($row7['count']/$total)*100,2);
				echo '<b>'.$percent2.'</b> (%)';
		}
		?>
        </td>
        </tr>
        
        <tr>
        <td>3 sao (Trung bình) :</td>
        <td>
        <?php
		$strSQL8="SELECT * FROM comment WHERE proID='".$row['proID']."' AND rate=3";
		$result8=mysql_query($strSQL8,$link);
		while($row8=mysql_fetch_array($result8))
		{
			echo '<b>'.$row8['count'].' </b>(lượt)';
			echo '</td>
			<td>Chiếm tỷ lệ :</td>
			<td>';
				$percent3=round(($row8['count']/$total)*100,2);
				echo '<b>'.$percent3.'</b> (%)';
		}
		?>
        </td>
        </tr>
        
        <tr>
        <td>2 sao :</td>
        <td>
        <?php
		$strSQL9="SELECT * FROM comment WHERE proID='".$row['proID']."' AND rate=2";
		$result9=mysql_query($strSQL9,$link);
		while($row9=mysql_fetch_array($result9))
		{
			echo '<b>'.$row9['count'].' </b>(lượt)';
			echo '</td>
			<td>Chiếm tỷ lệ :</td>
			<td>';
				$percent4=round(($row9['count']/$total)*100,2);
				echo '<b>'.$percent4.'</b> (%)';
		}
		?>
        </td>
        </tr>
        
        <tr>
        <td>1 sao (Tồi nhất) :</td>
        <td>
        <?php
		$strSQL10="SELECT * FROM comment WHERE proID='".$row['proID']."' AND rate=1";
		$result10=mysql_query($strSQL10,$link);
		while($row10=mysql_fetch_array($result10))
		{
			echo '<b>'.$row10['count'].' </b>(lượt)';
			echo '</td>
			<td>Chiếm tỷ lệ :</td>
			<td>';
				$percent5=round(($row10['count']/$total)*100,2);
				echo '<b>'.$percent5.'</b> (%)';
		}
		?>
        </td>
        </tr>
    	
        <tr>
        <td></td>
        <td>
        	<!--<input type="submit" name="btnUpdate" id="btnUpdate" value="Cập nhật kết quả" />-->
        </td>
        </tr>
</table>
</form>
<?php

	
?>