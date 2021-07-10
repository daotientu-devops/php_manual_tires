<?php
if(isset($_GET['writeartdetailid']))
{
	$writeartdetailid=$_GET['writeartdetailid'];
	$strSQL = "SELECT * FROM lessons_writearticle WHERE catid='".$_GET['writeartdetailid']."' AND state=1";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_writeartcatlist.php');
}
?>
<div class="heading">
<div class="title">
&laquo; Luyện kĩ năng viết (Bài viết dưới dạng các câu hỏi thực hành)
</div>
<div class="icon_writing">
</div>
</div>
<div class="content">
<div class="uleft">
<ul>
	<form action="#" method="post" enctype="multipart/form-data">
	<?php
	echo '<b>Question</b><br/><br/>';
	$strSQL = "SELECT * FROM lessons_writearticle WHERE catid = '".$_GET['writeartdetailid']."' AND state=1 LIMIT 0,1";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo 
		'<div style="width: 618px; text-align: left;">'.$row['suggestion'].'</div>'
		;
		echo '<br/>';
		echo 
		'<div style="width: 618px; text-align: left;">'.$row['requirement'].'</div>'
		;
		
		echo '<br/>';
		echo '<div style="float: left;"><input type="file" name="userfile" id="userfile" style="border: 1px solid #790000; width: 200px; color: #790000; font-family: Times New Roman, Times, serif; "/></div>';
		
		echo '<div style="float: left; margin-left: 20px;"><input type="submit" name="submit" value="Gửi" style="font-family: Times New Roman, Times, serif"/></div>';
		echo '<div style="float: left; margin-left: 2px;"><input type="reset" name="reset" value="Hủy" style="font-family: Times New Roman, Times, serif"/></div>';
		
		echo '<br/>';
		echo '<br/>';
		echo '<b>Example:</b>';
		echo 
		'<div style="width: 618px; text-align: left;">'.$row['sample'].'</div>'
		;
	}
	?>
  
	</form>
</ul>
</div>
</div>

<?php
if(isset($_POST['submit']))
{
	if(!isset($_SESSION['loggedUser']))
	{
	header('Location: login.php');
	}
	else
	{
		if($_SESSION['state']==0)	
		{
			echo '<h3>Tài khoản của bạn giới hạn quyền truy cập. Vui lòng nạp thẻ để được hưởng những ưu đãi lớn nhất.</h3>';
		}
		elseif($_SESSION['state']==1)
		{
			$strSQL2="SELECT * FROM userfile WHERE userid = '".$_SESSION['logUser']."'";
			$result2=mysql_query($strSQL2,$link);
			$row2=mysql_num_rows($result2);
			if($row2>0)
			{
				$save_path="CMSforE/uploaded/lessons_writearticle/"; 
			$file = $_FILES['userfile']; 
			$type = $_FILES['userfile']['type'];
			if($type == 'application/msword' || $type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
				{
				move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			if($file['size'] > 0)
			{
			$strSQL4="UPDATE userfile SET writeartid='".$writeartdetailid."',writeartfile='".$save_path.$file['name']."' WHERE userid='".$_SESSION['logUser']."'";
			$result4=mysql_query($strSQL4,$link);
			if($result4)
				{
				echo 'Upload file thành công';
				header('Location: index.php');
				}
			}
			else
			{
			echo 'Bạn chưa chọn file để tải lên';
			}	
			}
			else
			{
			echo 'Bạn không được phép upload loại file này';
			}	
			}
			
			else
			{
			$save_path="uploaded/lessons_writearticle/"; 
			$file = $_FILES['userfile']; 
			$type = $_FILES['userfile']['type'];
			if($type == 'application/msword' || $type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
			{
			move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
			if($file['size'] > 0)
			{
			$strSQL3="INSERT INTO userfile(userid, writeartid, writeartfile) VALUES('".$_SESSION['logUser']."','".$writeartdetailid."','".$save_path.$file['name']."')";
			$result3=mysql_query($strSQL3,$link);
			if($result3)
			{
				echo 'Upload file thành công';
				header('Location: index.php');
			}
			}
			else
			{
			echo 'Bạn chưa chọn file để tải lên';
			}	
			}
			else
			{
			echo 'Bạn không được phép upload loại file này';
			}
			
			}
		}
	}
}
?>