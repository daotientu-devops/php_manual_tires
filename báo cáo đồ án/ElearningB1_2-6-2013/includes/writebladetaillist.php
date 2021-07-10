<?php
if(isset($_GET['writebladetailid']))
{
	$writeansdetailid=$_GET['writebladetailid'];
	$strSQL = "SELECT * FROM lessons_writeblank WHERE catid='".$_GET['writebladetailid']."' AND state=1";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_writeblacatlist.php');
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
	echo '- For each question, complete the second sentence so that it means the same as the first, <b>using no more than three words</b><br/>';
	echo '- <b>Write only the missing words on your answer sheet</b><br/><br/>';
	$strSQL = "SELECT * FROM lessons_writeblank WHERE catid = '".$_GET['writebladetailid']."' AND state=1 LIMIT 0,5";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo '<div style="float: left; width: 618px; text-align: left; margin-top: 10px;">'.$row['question'].'</div>';
		echo '<div style="float: left; width: 100px; text-align: left; margin-top: 10px;"><b><i>The blank is:</i></b></div>';
		echo 
		'<div style="float: left; width: 518px; margin-top: 10px;"><b>'.'</b> <input type="text" name="txtanswer'.$sort.'" id="txtanswer" style="width: 200px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
	}
		
		//phải fix chiều rộng cho mỗi txtanswer để tương thích với các trình duyệt
		
	?>
    <li></li>
    <li>
    <input type="submit" name="submit" value="Kiểm tra đáp án" style="font-family: 'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Làm lại" style="font-family: 'Times New Roman', Times, serif"/>
    <input type="submit" name="check" value="Xem đáp án" style="font-family: 'Times New Roman', Times, serif"/>
    </li>
	</form>
    <div id="preview">
<?php

if(isset($_POST['check']))
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
			$s=0;
			$t=1;
			echo '<b><i>Key</b></i><br/>';
			for($u=0;$u<$sort;$u++)
			{
				
				$id=$_POST['id'.$t];
				$strSQL3 = "SELECT * FROM key_writeblank WHERE writeblaid='".$id."'";
				$result3=mysql_query($strSQL3,$link);
				
				while($row3=mysql_fetch_array($result3))
				{
					echo '<b>'.$t.')</b> ';
					echo '<b>'.$row3['keyblank'].'</b><br/>';	
				}
				$t++;
			}
		}
	}
}
if(isset($_POST['submit']))
{
	$count=0;
	$k=1;
	$m=1;
	$g=1;
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($j=0;$j<$sort;$j++)
	{
	$id=$_POST['id'.$m];
	$answer=$_POST['txtanswer'.$m];
		echo '<b>'.$m.') '.$answer.'</b><br/>';
		$m++;
	}
	echo '<br/>';
	echo '<b><i>Đáp án đúng</i></b><br/>';
	for($i=0;$i<$sort;$i++)
	{
	$id=$_POST['id'.$k];
	$answer=$_POST['txtanswer'.$k];
	if($answer=="")
	{
		//$answer='E';	
	}
	if($answer=="a")
	{
		//$answer='A';	
	}
	if($answer=="b")
	{
		//$answer='B';	
	}
	if($answer=="c")
	{
		//$answer='C';	
	}
	
	$strSQL2 = "SELECT * FROM key_writeblank WHERE writeblaid='".$id."' AND keyblank='".$answer."'";
	$result2=mysql_query($strSQL2,$link);
	//echo '<b>'.$k.') '.$answer.'</b><br/>';
	while($row2=mysql_fetch_array($result2))
	{
		
	//if($row2['keyblank'] == $answer)
	//{
		
		echo '<b>'.$k.') '.$answer.' - </b><font color="#002596">True</font><br/>';
	//}
	
	}
	$strSQL4 = "SELECT * FROM key_writeblank WHERE writeblaid='".$id."' AND keyblank='".$answer."'";
	$result4=mysql_query($strSQL4,$link);
	$totalRow4=mysql_num_rows($result4);
	if($totalRow4>0)
	$count++;
	$k++;
	}
	$percent=($count/$totalRow)*100;
	echo '<p><b>Số câu đúng là: '.$count.'/'.$totalRow.'. Đạt: '.$percent.'%</b></p>';
	
	
}
?>
    </div>
</ul>
</div>
</div>
