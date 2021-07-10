<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Tư vấn kỹ thuật</div>
</div>
<div class="defaultContent">
<div class="content_part1">
Nhằm hỗ trợ khách hàng mua sắm và sử dụng sản phẩm công nghệ một cách hiệu quả và an toàn, Tiến Hoàng sẵn sàng trợ giúp quý khách giải đáp các thắc mắc kỹ thuật gặp phải khi sử dụng hoặc cần mua sản phẩm. Vui lòng điền đầy đủ các thông tin yêu form dưới đây, Tiến Hoàng sẽ sớm giải quyết giúp quý khách.<br />

* Lưu ý: Nếu quý khách cần mua sản phẩm hoặc cần giải đáp nhanh chóng, vui lòng liên hệ với Tiến Hoàng <a href="contact.php">tại đây.</a><br />

<?php
if(isset($_POST['btnSend']))
{
	if($_POST['txtCaptcha']=='')
	{
		echo '<h3>Mã xác nhận không được phép để trống. Vui lòng điền đủ mã xác nhận</h3>';	
	}
	else
	{
		if($_POST['txtCaptcha']!=$_SESSION['security_code'])
		{
			echo "<font color='#FF0000'><h3>Mã ghi nhận không hợp lệ</h3></font>";
		}
		else
		{
			$tmp_name=$_FILES['file']['tmp_name'];
			$name=$_FILES['file']['name'];
			$type = $_FILES['file']['type'];
			$size=$_FILES['file']['size'];
			if($size <= 0)
			{
				$strSQL="INSERT INTO comment(name, email, title, content, type, state) 
				VALUES('".$_POST['txtName']."', '".$_POST['txtEmail']."', '".$_POST['txtTitle']."', '".$_POST['txtContent']."', 2, 0)";
				$result=mysql_query($strSQL,$link);
				if($result)
				{
					echo '<h3>Cám ơn bạn đã gửi thắc mắc về cho Tiến Hoàng. Câu hỏi của bạn sẽ sớm được giải đáp.</h3>';
				}
				else
				{
					echo "<font color='#FF0000'><h3>Thao tác dữ liệu không thành công. Vui lòng thử lại sau ít phút nữa.</h3></font>";	
				}
			}
			elseif($size > 200*1024)
			{
				echo "<font color='#FF0000'><h3>Kích thước dung lượng tệp tin mà bạn đính kèm quá lớn. File uploaded chỉ cho phép dung lượng tối đa là 200Kb.</h3></font>";
			}
			elseif($type != 'image/png' || $type != 'image/gif' || $type != 'image/jpg' || $type != 'image/jpeg' || $type != 'application/msword' || $type != 'application/octet-stream' || $type != 'application/pdf')
			{
				echo "<font color='#FF0000'><h3>Loại file không đúng định dạng. Kiểm tra phần đuôi mở rộng của file trước khi up lên.</h3></font>";
			}
			else
			{
				$save_path="admin/uploaded/comment/"; 
				move_uploaded_file($tmp_name,$save_path.$name);
				$strSQL1="INSERT INTO comment(name, email, title, content, file, type, state) 
				VALUES('".$_POST['txtName']."', '".$_POST['txtEmail']."', '".$_POST['txtTitle']."', '".$_POST['txtContent']."', '".$save_path.$name."', 2, 0)";
				$result1=mysql_query($strSQL1,$link);
				if($result1)
				{
					echo '<h3>Cám ơn bạn đã gửi thắc mắc về cho Tiến Hoàng. Câu hỏi của bạn sẽ sớm được giải đáp.</h3>';
				}
				else
				{
					echo "<font color='#FF0000'><h3>Thao tác dữ liệu không thành công. Vui lòng thử lại sau ít phút nữa.</h3></font>";	
				}
			}
		}
	}
}
?>
<form action="#" method="post" enctype="multipart/form-data">
	<table border="1" cellpadding="2" cellspacing="2" class="csstable" width="100%">
	<tr>
    	<td>Họ tên bạn</td>
        <td>
        <input type="text" name="txtName" id="txtName" style="width: 260px; border: 1px solid #ccc;"/>
        </td>
    </tr>
    
    <tr>
    	<td>Địa chỉ Email</td>
        <td>
        <input type="text" name="txtEmail" id="txtEmail" style="width: 260px; border: 1px solid #ccc;"/>
        </td>
    </tr>
    <tr>
    	<td>Tiêu đề</td>
        <td>
        <input type="text" name="txtTitle" id="txtTitle" style="width: 260px; border: 1px solid #ccc;"/>
        </td>
    </tr>
    <tr>
    	<td>Nội dung</td>
        <td>
        <textarea name="txtContent" id="txtContent" style="width: 440px; height: 150px; border: 1px solid #ccc;"></textarea>
        </td>
    </tr>
    
    <tr>
    	<td>File đính kèm (nếu có)</td>
        <td>
        <input type="file" name="file" id="file" /><br />
        (Hỗ trợ file : gif, jpg, png, doc, xls, pdf - Dung lượng tối đa 200KB)
        </td>
    </tr>
    <tr>
    	<td rowspan="2">Nhập mã xác nhận</td>
    	<td><img src="plugins/captcha/captcha.php" /></td>
 	</tr>
  	<tr>
    	<td><input type="text" name="txtCaptcha" style="width: 100px; border: 1px solid #ccc;" /></td>
  	</tr>
    <tr>
    	<td></td>
        <td>
        <input type="submit" name="btnSend" id="btnSend" value="Gửi nội dung"/>
        </td>
    </tr>
	</table>
</form>
</div>

<ul>
<?php
	$p=10;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;	
	}
	$s=($n-1)*$p;
	$strSQL2="SELECT * FROM comment WHERE type=2 AND state=1";
	$result2=mysql_query($strSQL2,$link);
	$n_record=mysql_num_rows($result2);
	$numberPage=floor($n_record/$p)+1;
	function view_page()
	{
		global $numberPage;
		global $n_record;
		global $n;
		if(isset($_GET['n']) && $_GET['n']>1 && $_GET['n']==$numberPage)
		{
			echo '<a href="techSupport.php?n=1"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">||&laquo;</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']>1 && $_GET['n']<$numberPage)
		{
			echo '<a href="techSupport.php?n=1"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">||&laquo;</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']>1)
		{
			echo '<a href="techSupport.php?n='.($_GET['n']-1).'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">&laquo;</font></a>';
		}
		for($i=1;$i<=$numberPage;$i++)
		{
			if(isset($_GET['n']) && $i==$_GET['n'])
			{
				echo '<a href="techSupport.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;</font>';
			}
			else
			{
				echo '<a href="techSupport.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;</font>';
			}
		}
		if(isset($_GET['n']) && $_GET['n']<$numberPage)
		{
			echo '<a href="techSupport.php?n='.($_GET['n']+1).'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">&raquo;</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']<$numberPage && $_GET['n']>1)
		{
			echo '<a href="techSupport.php?n='.$numberPage.'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">&raquo;||</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']<$numberPage && $_GET['n']==1)
		{
			echo '<a href="techSupport.php?n='.$numberPage.'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">&raquo;||</font></a>';
		}
	}
	$strSQL3 ="SELECT * FROM comment WHERE type=2 AND state=1 ORDER BY id DESC limit $s,$p";
	$result3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($result3))
	{
		echo '<li style="border-bottom: 1px solid #ccc; margin-top: 5px; margin-bottom: 10px;">';
		echo '<h4 style="margin: 5px 0;">'.$row3['title'].'</h4>';
		echo '<div id="CollapsiblePanel1" class="CollapsiblePanel">
  				<div class="CollapsiblePanelTab" tabindex="0"><font style="color: #0000ee;"><b><u>(Xem chi tiết)</u></b></font></div>
  				<div class="CollapsiblePanelContent">'.
				'<div style="float: left; width: 562px; padding: 5px 5px;">'.$row3['content'].'<div>
				<div style="float: left; width: 562px; margin-top: 5px;"><b><u>Trả lời:</u></b></div>
				<div style="float: left; width: 562px; margin-top: 5px;">'.$row3['reply'].'</div>
				</div>
			  </div>';
		echo '</li>';	
	}
	echo '<li style="margin-top: 10px; margin-bottom: 5px;">';
	view_page();
	echo '</li>';
?>

</ul>

</div>
</div>