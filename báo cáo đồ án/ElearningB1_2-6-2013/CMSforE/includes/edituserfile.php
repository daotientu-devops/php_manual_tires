<?php
if(isset($_GET['ufileid']))
{
	$strSQL5 = "SELECT * FROM userfile WHERE id='".$_GET['ufileid']."'";
	$result5 = mysql_query($strSQL5, $link);
	$row5 = mysql_fetch_array($result5);
}
else
{
	header('Location: userfile.php');
}
?>
<div class = "conright">
<form action="#" method="post" enctype="multipart/form-data" name="addcomleft" id="addcomleft">
	<table border="0" cellpadding="2" cellspacing="2" style="padding-top: 0px; padding-left: 0px;">
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">User ID: </div></td>
    	<td align="left">
		<?php 
			echo $row5['userid']; 
		?>
        </td>
        <td align="left">
        <?php
			echo '<font style="font-weight: bold; color: #790000">Tài khoản: </font>';
			$sql="SELECT * FROM users WHERE id='".$row5['userid']."'";
			$query=mysql_query($sql,$link);
			while($ro=mysql_fetch_array($query))
			{
				echo $ro['username'];
			}
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Bài nói giới thiệu về tiểu sử bản thân: </div></td>
    	<td align="left">
    	<?php
		$strSQL6="SELECT * FROM categories WHERE id='".$row5['speakintid']."'";
		$result6=mysql_query($strSQL6,$link);
		while($row6=mysql_fetch_array($result6))
		{
			echo $row6['name'];
		}
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">File uploaded to server: </div></td>
        <td align="left">
        <?php
		$str1=$row5['speakintfile'];
		$str1=str_replace('CMSforE/','',$str1);
		echo '<audio controls="controls">
			
			<source src="'.$str1.'" type="audio/mp3" />
			<source src="'.$str1.'" type="audio/wav">
		  	<source src="'.$str1.'" type="audio/ogg" />
			<source src="'.$str1.'" type="audio/x-ms-wma"/>
		  	<source src="'.$str1.'" type="audio/mpeg" />
			Đoạn này sẽ hiển thị nếu trình duyệt không hỗ trợ
			</audio>';
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Chấm điểm: </div></td>
        <td align="left"><input type="text" name="speakintpoint" id="speakintpoint" style="width: 40px; border: 1px solid #790000;" value="<?php echo $row5['speakintpoint']; ?>"/></td>
    </tr>
    <tr>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Bài nói theo chủ đề: </div></td>
    	<td align="left">
    	<?php
		$strSQL7="SELECT * FROM categories WHERE id='".$row5['speaktopid']."'";
		$result7=mysql_query($strSQL7,$link);
		while($row7=mysql_fetch_array($result7))
		{
			echo $row7['name'];
		}
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">File uploaded to server: </div></td>
        <td align="left">
        <?php
		$str2=$row5['speaktopfile'];
		$str2=str_replace('CMSforE/','',$str2);
		echo '<audio controls="controls">
		
			<source src="'.$str2.'" type="audio/mp3" />
			<source src="'.$str2.'" type="audio/wav">
		  	<source src="'.$str2.'" type="audio/ogg" />
			<source src="'.$str2.'" type="audio/x-ms-wma"/>
		  	<source src="'.$str2.'" type="audio/mpeg" />
			Đoạn này sẽ hiển thị nếu trình duyệt không hỗ trợ
			</audio>';
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Chấm điểm: </div></td>
        <td align="left"><input type="text" name="speaktoppoint" id="speaktoppoint" style="width: 40px; border: 1px solid #790000;" value="<?php echo $row5['speaktoppoint']; ?>"/></td>
    </tr>
    <tr>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Bài viết câu trả lời theo lời gợi ý cho sẵn: </div></td>
    	<td align="left">
    	<?php
		$strSQL8="SELECT * FROM categories WHERE id='".$row5['writeansid']."'";
		$result8=mysql_query($strSQL8,$link);
		while($row8=mysql_fetch_array($result8))
		{
			echo $row8['name'];
		}
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">File uploaded to server: </div></td>
        <td align="left">
        <?php
		$str3=$row5['writeansfile'];
		$str3=str_replace('CMSforE/','',$str3);
		echo '&raquo; <a href="'.$str3.'">Link download</a>';
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Chấm điểm: </div></td>
        <td align="left"><input type="text" name="writeanspoint" id="writeanspoint" style="width: 40px; border: 1px solid #790000;" value="<?php echo $row5['writeanspoint']; ?>"/></td>
    </tr>
    <tr>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    <td><hr style="border-top: 1px solid #ccc;"/></td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Bài viết theo chủ đề: </div></td>
    	<td align="left">
    	<?php
		$strSQL8="SELECT * FROM categories WHERE id='".$row5['writeartid']."'";
		$result8=mysql_query($strSQL8,$link);
		while($row8=mysql_fetch_array($result8))
		{
			echo $row8['name'];
		}
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">File uploaded to server: </div></td>
        <td align="left">
        <?php
		$str4=$row5['writeartfile'];
		$str4=str_replace('CMSforE/','',$str4);
		echo '&raquo; <a href="'.$str4.'">Link download</a>';
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Chấm điểm: </div></td>
        <td align="left"><input type="text" name="writeartpoint" id="writeartpoint" style="width: 40px; border: 1px solid #790000;" value="<?php echo $row5['writeartpoint']; ?>"/></td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Đánh giá: </div></td>
        <td align="left"><textarea name="evaluate" id="evaluate" style="width: 400px; height: 400px;border: 1px solid #790000; color: #790000" class="ckeditor"><?php echo $row5['evaluate']; ?></textarea></td>
    </tr>
    <tr>
    	<td align="right"><div style="font-weight: bold; color: #790000">Ngày chấm: </div></td>
        <td align="left">
        <input type="text" class="datetimepicker" style="border: 1px solid #790000; float: left;" name="date" id="date" value="<?php echo $row5['date']; ?>"/>
    <div style="background: url(images/icon/calendar.png) no-repeat; width: 17px; height: 17px; float: left;"></div>
        </td>
    </tr>
    <tr>
        <td align = "right"><div style="font-weight:bold; color: #790000">Trạng thái:</div></td>
        <td align = "left">
        <select name="state" style="font-family: 'Times New Roman', Times, serif;">
        <option value="1" <?php if($row5['state']==1) echo 'selected';?>>Đã chấm</option>
        <option value="0" <?php if($row5['state']==0) echo 'selected';?>>Chờ chấm</option>
        </select>
        </td>
	</tr>
    <tr>
        <td></td>
        <td align="left">
        <input type="submit" name="submit" value="Xác nhận" style="font-family:'Times New Roman', Times, serif"/>
        <input type="reset" name="reset" value="Hủy bỏ" style="font-family:'Times New Roman', Times, serif" onclick='window.location="userfile.php"'/>
        </td>
    </tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	////////////////
	$strSQL9 = "UPDATE userfile SET speakintpoint = '".$_POST['speakintpoint']."',speaktoppoint = '".$_POST['speaktoppoint']."',writeanspoint = '".$_POST['writeanspoint']."',writeartpoint = '".$_POST['writeartpoint']."',evaluate = '".$_POST['evaluate']."',date = '".$_POST['date']."',state = '".$_POST['state']."' WHERE id = '".$row5['id']."'";
	$result9 = mysql_query($strSQL9,$link);
	if($result9)
	{
		header('Location: userfile.php');
	}
	else
	{
		echo 'Không thể thực hiện được thao tác này.';
	}
}
?>