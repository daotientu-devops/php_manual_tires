<?php
if(isset($_GET['perid']))
{
$sql = "SELECT * FROM users WHERE id='".$_GET['perid']."'";
$result = mysql_query($sql,$link);
$row = mysql_fetch_array($result);
}
else
{
	header('Location: index.php');
}
?>
<div class="heading" style="border: 1px solid #790000;">

<div class="title">
<font color="#790000">&raquo; Hồ sơ cá nhân của bạn được lưu trữ trong này &raquo; <?php echo $row['name']; ?> &raquo; Cập nhật hồ sơ cá nhân</font>
</div>
<div class="icon_profile">
</div>
</div>
<div class="content">
<div class="uleft">
<div style="margin-top: 10px; text-align: center; font-size: 18px; font-weight: bold;"><?php echo $row['name']; ?></div>
<form action="#" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="3" cellpadding="3">
	<tr>
    <td></td>
	<td></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000; ">Mã học viên:</div></td>
    <td align="left"><div style="font-weight: bold; color: #790000; "><?php echo $row['id']; ?></div></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Họ và tên:</div></td>
    <td align="left"><input type="text" name="name" id="name" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row['name']; ?>"/></td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Ngày sinh:</div></td>
    <td align="left">
    <div style="font-weight: bold; color: #790000">Ngày
    <input type="text" name="date" id="date" style="width: 30px; border: 1px solid #790000; text-align: center;" value="<?php echo $row['date']; ?>"/>
    Tháng
    <input type="text" name="month" id="month" style="width: 30px; border: 1px solid #790000; text-align: center;" value="<?php echo $row['month']; ?>"/>
    Năm
    <input type="text" name="year" id="year" style="width: 50px; border: 1px solid #790000; text-align: center;" value="<?php echo $row['year']; ?>"/>
    </div>
    </td>
    </tr>
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Giới tính:</div></td>
    <td align="left"><input type="text" name="sex" id="sex" style="width: 50px; border: 1px solid #790000;" value="<?php echo $row['sex']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Địa chỉ Email:</div></td>
    <td align="left"><input type="text" name="email" id="email" style="width: 400px; border: 1px solid #790000;" value="<?php echo $row['email']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Địa chỉ hiện tại:</div></td>
    <td align="left"><textarea name="address" id="address" style="width: 400px; height: 40px;border: 1px solid #790000;"><?php echo $row['address']; ?></textarea></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Thành phố / Tỉnh:</div></td>
    <td align="left"><input type="text" name="country" id="country" style="width: 300px; border: 1px solid #790000;" value="<?php echo $row['country']; ?>"/></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Nơi công tác:</div></td>
    <td align="left"><textarea name="place_of_work" id="place_of_work" style="width: 400px; height: 40px;border: 1px solid #790000; color: #790000"><?php echo $row['place_of_work']; ?></textarea></td>
    </tr>
    
    <tr>
    <td align="right"><div style="font-weight: bold; color: #790000">Số điện thoại:</div></td>
    <td align="left"><input type="text" name="tel" id="tel" style="width: 200px; border: 1px solid #790000;" value="<?php echo $row['tel']; ?>"/></td>
    </tr>
    
    <tr>
   	<td align="right"><div style="font-weight: bold; color: #790000">Ảnh đại diện:</div></td>
    <td align="left"><input name="userfile" id="userfile" type="file" style="border: 1px solid #790000; width: 200px; color: #790000"/></td>
    </tr>
    
    <tr>
    <td align="right"></td>
    <td align="left">
    <input type="submit" name="sSubmit" value="Cập nhật hồ sơ" style="font-family: 'Times New Roman', Times, serif"/>
    </td>
    </tr>
</table>
</form>


<?php
	if(isset($_POST['sSubmit']))
	{
		$save_path="uploaded/avatar/"; 
    	$file = $_FILES['userfile']; 
		$type = $_FILES['userfile']['type'];
		if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
		{
		move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
		}
		else
		echo 'Bạn không được phép upload loại file này';
		if($file['size'] > 0)
		{
		$stSQL2 = "UPDATE users SET name='".$_POST['name']."', date='".$_POST['date']."', month='".$_POST['month']."',year='".$_POST['year']."', sex='".$_POST['sex']."', address='".$_POST['address']."', country='".$_POST['country']."', place_of_work='".$_POST['place_of_work']."', tel='".$_POST['tel']."', email='".$_POST['email']."', avatar='".$save_path.$file['name']."', RoleID='".$_POST['role']."' WHERE id='".$row['id']."'";
		}
		else
		{
		$stSQL2 = "UPDATE users SET name='".$_POST['name']."', date='".$_POST['date']."', month='".$_POST['month']."',year='".$_POST['year']."', sex='".$_POST['sex']."', address='".$_POST['address']."', country='".$_POST['country']."', place_of_work='".$_POST['place_of_work']."', tel='".$_POST['tel']."', email='".$_POST['email']."', RoleID='".$_POST['role']."' WHERE id='".$row['id']."'";
		}
		$result2 = mysql_query($stSQL2, $link);
		if($result2)
		{
		header('Location: index.php');
		}
		else
		{
		echo 'Có lỗi xảy ra';
		}
			
		
	}
	
?>
<div style="font-size: 14px; text-align: center; text-transform: uppercase;"><b>Bảng điểm phần test</b></div><br/>
<form>
<table border="0" cellspacing="0" cellpadding="2">
	<tr>
    <td style="width: 29px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">STT</div></td>      
    <td style="width: 99px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Tên bài test</div></td>
    <td style="width: 99px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Mã bài test</div></td>
    <td style="width: 99px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Thời gian test</div></td>
    <td style="width: 79px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm phần nghe</div></td>
    <td style="width: 77px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm phần đọc</div></td>
    <td style="width: 79px; height: 40px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Điểm phần viết</div></td>
    <td style="width: 70px; height: 40px; padding: 4px 0px; background: #70201f;"><div style="font-weight: bold; color: #FFF; text-align: center">Tổng điểm</div></td>
    </tr>
	<?php
	$strSQL="SELECT * FROM score WHERE userid='".$_GET['perid']."'";
	$query=mysql_query($strSQL,$link);
	while($row=mysql_fetch_array($query))
	{
	echo '<tr>';
	echo '<td style="width: 29px; height: 30px; border: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row['id'].'</div></td>';
		$strSQL2="SELECT * FROM categories WHERE id='".$row['catid']."'";
		$query2=mysql_query($strSQL2,$link);
		while($row2=mysql_fetch_array($query2))
		{
		echo '<td style="width: 99px; height: 30px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row2['name'].'</div></td>';
		}
	echo '<td style="width: 99px; height: 30px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row['catid'].'</div></td>';
	echo '<td style="width: 99px; height: 30px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row['test_date'].'</div></td>';
	echo '<td style="width: 79px; height: 30px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row['listening_score'].'</div></td>';
	echo '<td style="width: 77px; height: 30px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row['reading_score'].'</div></td>';
	echo '<td style="width: 79px; height: 30px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row['writing_score'].'</div></td>';
	echo '<td style="width: 70px; height: 30px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; border-top: none;"><div style="font-weight: bold; text-align: center">'.$row['total_score'].'</div></td>';
	echo '</tr>';
	}
	?>
</table>
</form>

<div style="margin-top: 20px; font-size: 14px; text-align: center; text-transform: uppercase;"><b>Điểm phần upload file</b></div><br/>
<form>
<table border="0" cellspacing="2" cellpadding="2">	
	<tr>
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Ngày chấm: </div>
    </td>
    <td align="left">
    <?php
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		echo $row3['date']; 
	}
	?>
    </td>
    </tr>
    
    <tr>
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Bài nói giới thiệu tiểu sử về bản thân: </div>
    </td>
    <td align="left">
	<?php 
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		$strSQL4="SELECT * FROM categories WHERE id='".$row3['speakintid']."'";
		$query4=mysql_query($strSQL4,$link);
		while($row4=mysql_fetch_array($query4))
		{
			echo $row4['name']; 
		}
	}
	?>
    </td>  

    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Điểm số: </div>
    </td>
    <td align="left">
    <?php
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		echo $row3['speakintpoint'];
	}
	?>
    </td>
    </tr>
    
    <tr>
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Bài nói theo chủ đề: </div>
    </td>
    <td align="left">
	<?php 
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		$strSQL5="SELECT * FROM categories WHERE id='".$row3['speaktopid']."'";
		$query5=mysql_query($strSQL5,$link);
		while($row5=mysql_fetch_array($query5))
		{
			echo $row5['name']; 
		}
	}
	?>
    </td>  

    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Điểm số: </div>
    </td>
    <td align="left">
    <?php
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		echo $row3['speaktoppoint'];
	}
	?>
    </td>
    </tr>
    
    <tr>
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Bài viết câu trả lời dựa theo lời gợi ý cho sẵn: </div>
    </td>
    <td align="left">
	<?php 
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		$strSQL6="SELECT * FROM categories WHERE id='".$row3['writeansid']."'";
		$query6=mysql_query($strSQL6,$link);
		while($row6=mysql_fetch_array($query6))
		{
			echo $row6['name']; 
		}
	}
	?>
    </td>
    
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Điểm số: </div>
    </td>
    <td align="left">
    <?php
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		echo $row3['writeanspoint'];
	}
	?>
    </td>
    </tr>
    
    <tr>
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Bài viết theo chủ đề: </div>
    </td>
    <td align="left">
	<?php 
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		$strSQL7="SELECT * FROM categories WHERE id='".$row3['writeartid']."'";
		$query7=mysql_query($strSQL7,$link);
		while($row7=mysql_fetch_array($query7))
		{
			echo $row7['name']; 
		}
	}
	?>
    </td>
    
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Điểm số: </div>
    </td>
    <td align="left">
    <?php
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		echo $row3['writeartpoint'];
	}
	?>
    </td>
    </tr>
    
    <tr>
    <td align="right">
    <div style="font-weight: bold; color: #790000; ">Đánh giá của người chấm: </div>
    </td>
    <td align="left">
    <?php
	$strSQL3="SELECT * FROM userfile WHERE userid='".$_GET['perid']."'";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		echo $row3['evaluate'];
	}
	?>
    </td>
    </tr>
</table>
</form>
</div>

</div>
</div>