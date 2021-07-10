<?php
if(isset($_GET['listencordetailid']))
{
	$strSQL = "SELECT * FROM lessons_listencor WHERE catid='".$_GET['listencordetailid']."' AND state=1";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_listencorcatlist.php');
}
?>
<div class="heading">
<div class="title">
&laquo; Luyện kĩ năng nghe (Bài nghe dưới dạng các câu hỏi thực hành)
</div>
<div class="icon_listening">
</div>
</div>

<div class="content">
<div class="uleft">
<ul>
<script language="javascript">
	function checkInput()
	{
		
	}
</script>
<form name="form1" action="#" method="post">
	<?php
	$strSQL = "SELECT * FROM lessons_listencor WHERE catid = '".$_GET['listencordetailid']."' AND state=1 LIMIT 0,1";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	echo 'Nghe một đoạn hội thoại dài để chọn câu Đúng hoặc Sai.<br/>';
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo '<b>Question: </b><br/>';
		echo '- '.$row['title'].'<br/>';
		echo '- Decide if each sentence is correct or incorrect.<br/>';
		echo '- If it is correct, put a tick in the box under <b>A</b> for <b>YES</b>. If it is not correct, put a tick in the box under <b>B</b> for <b>NO</b>. <br/><br/>';
		echo'
		Nếu trình duyệt của bạn chưa hỗ trợ hiển thị file âm thanh. Để nghe, vui lòng <a href="CMSforE/'.$row['audio'].'">download</a> file vào máy tính của bạn.<br/><br/>';
		echo '<audio controls="controls" preload="none">
			<source src="CMSforE/'.$row['audio'].'" type="audio/mp3" />
			<source src="CMSforE/'.$row['audio'].'" type="audio/wav">
		  	<source src="CMSforE/'.$row['audio'].'" type="audio/ogg" />
		  	<source src="CMSforE/'.$row['audio'].'" type="audio/mpeg" />
			Đoạn này sẽ hiển thị nếu trình duyệt không hỗ trợ
			</audio>';
		echo '<div style="width: 598px; border: 1px solid #a2a2a2; padding: 10px;">'.$row['sentences'].'</div>';
		
		echo '<div><b>Answer is:</b></div>';
		//phải fix chiều rộng cho mỗi txtanswer để tương thích với các trình duyệt
		echo 
		'<div style="float: left; width: 309px; margin-top: 10px;"><b>'.'1)</b> 
		<input type="radio" name="txtanswer1'.$sort.'" id="txtanswer1" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id1'.$sort.'" value="'.$row['id'].'">
		&nbsp;
		<input type="radio" name="txtanswer1'.$sort.'" id="txtanswer1" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id1'.$sort.'" value="'.$row['id'].'">
		</div>';
		
		echo 
		'<div style="float: left; width: 309px; margin-top: 10px;"><b>'.'4)</b> 
		<input type="radio" name="txtanswer4'.$sort.'" id="txtanswer4" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id4'.$sort.'" value="'.$row['id'].'">
		&nbsp;
		<input type="radio" name="txtanswer4'.$sort.'" id="txtanswer4" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id4'.$sort.'" value="'.$row['id'].'">
		</div>';
		
		echo 
		'<div style="float: left; width: 309px; margin-top: 10px;"><b>'.'2)</b> 
		<input type="radio" name="txtanswer2'.$sort.'" id="txtanswer2" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id2'.$sort.'" value="'.$row['id'].'">
		&nbsp;
		<input type="radio" name="txtanswer2'.$sort.'" id="txtanswer2" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id2'.$sort.'" value="'.$row['id'].'">
		</div>';
		
		echo 
		'<div style="float: left; width: 309px; margin-top: 10px;"><b>'.'5)</b> 
		<input type="radio" name="txtanswer5'.$sort.'" id="txtanswer5" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id5'.$sort.'" value="'.$row['id'].'">
		&nbsp;
		<input type="radio" name="txtanswer5'.$sort.'" id="txtanswer5" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id5'.$sort.'" value="'.$row['id'].'">
		</div>';
		
		echo 
		'<div style="float: left; width: 309px; margin-top: 10px;"><b>'.'3)</b> 
		<input type="radio" name="txtanswer3'.$sort.'" id="txtanswer3" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id3'.$sort.'" value="'.$row['id'].'">
		&nbsp;
		<input type="radio" name="txtanswer3'.$sort.'" id="txtanswer3" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id3'.$sort.'" value="'.$row['id'].'">
		</div>';
		
		echo 
		'<div style="float: left; width: 309px; margin-top: 10px;"><b>'.'6)</b> 
		<input type="radio" name="txtanswer6'.$sort.'" id="txtanswer6" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id6'.$sort.'" value="'.$row['id'].'">
		&nbsp;
		<input type="radio" name="txtanswer6'.$sort.'" id="txtanswer6" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id6'.$sort.'" value="'.$row['id'].'">
		</div>';
				
		if(isset($_POST['translate']))
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
				echo '<div style="float: left; width: 618px; margin-top: 20px;">'.$row['translate'].'</div>';
				}
			}
		}
	}
	?>
     <li></li>
    <li>
    <input type="submit" name="submit" value="Kiểm tra đáp án" style="font-family: 'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Làm lại" style="font-family: 'Times New Roman', Times, serif"/>
    <input type="submit" name="check" value="Xem đáp án" style="font-family: 'Times New Roman', Times, serif"/>
    <input type="submit" name="translate" value="Xem bài dịch" style="font-family: 'Times New Roman', Times, serif"/>
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
			
			$id1=$_POST['id1'.$t];
			$id2=$_POST['id2'.$t];
			$id3=$_POST['id3'.$t];
			$id4=$_POST['id4'.$t];
			$id5=$_POST['id5'.$t];
			$id6=$_POST['id6'.$t];
			
			
			$strSQL3 = "SELECT * FROM lessons_listencor WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."' AND id='".$id6."'";
			$result3=mysql_query($strSQL3,$link);
			
			while($row3=mysql_fetch_array($result3))
			{
				echo '<b><i>1)</b></i> ';
				echo '<b>'.$row3['cor1'].'</b><br/>';	
				echo '<b><i>2)</b></i> ';
				echo '<b>'.$row3['cor2'].'</b><br/>';
				echo '<b><i>3)</b></i> ';
				echo '<b>'.$row3['cor3'].'</b><br/>';
				echo '<b><i>4)</b></i> ';
				echo '<b>'.$row3['cor4'].'</b><br/>';
				echo '<b><i>5)</b></i> ';
				echo '<b>'.$row3['cor5'].'</b><br/>';
				echo '<b><i>6)</b></i> ';
				echo '<b>'.$row3['cor6'].'</b><br/>';	
			}
			$t++;
		}			
		}
	}
}
if(isset($_POST['submit']))
{
	if(!isset($_SESSION['loggedUser']))
	{
		header('Location: login.php');
	}
	else
	{
	$count=0;
	$k=1;
	
	for($i=0;$i<$sort;$i++)
	{
	$id1=$_POST['id1'.$k];
	$id2=$_POST['id2'.$k];
	$id3=$_POST['id3'.$k];
	$id4=$_POST['id4'.$k];
	$id5=$_POST['id5'.$k];
	$id6=$_POST['id6'.$k];
		
	if(!isset($_POST['txtanswer1'.$k]) || !isset($_POST['txtanswer2'.$k]) || !isset($_POST['txtanswer3'.$k]) || !isset($_POST['txtanswer4'.$k]) || !isset($_POST['txtanswer5'.$k]) || !isset($_POST['txtanswer6'.$k]))
	{
		echo 'Bạn chưa chọn đáp án Đúng / Sai cho câu trả lời';
	}
	else
	{
		echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
		
	$answer1=$_POST['txtanswer1'.$k];
	$answer2=$_POST['txtanswer2'.$k];
	$answer3=$_POST['txtanswer3'.$k];
	$answer4=$_POST['txtanswer4'.$k];
	$answer5=$_POST['txtanswer5'.$k];
	$answer6=$_POST['txtanswer6'.$k];
	
	$strSQL2 = "SELECT * FROM lessons_listencor WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."' AND id='".$id6."'";
	//echo $strSQL2;
	$result2=mysql_query($strSQL2,$link);
	
	while($row2=mysql_fetch_array($result2))
	{
	if($row2['cor1']==$answer1)
	{
		echo '<b>1) '.$answer1.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>1) '.$answer1.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor2']==$answer2)
	{
		echo '<b>2) '.$answer2.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>2) '.$answer2.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor3']==$answer3)
	{
		echo '<b>3) '.$answer3.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>3) '.$answer3.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor4']==$answer4)
	{
		echo '<b>4) '.$answer4.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>4) '.$answer4.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor5']==$answer5)
	{
		echo '<b>5) '.$answer5.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>5) '.$answer5.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor6']==$answer6)
	{
		echo '<b>6) '.$answer6.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>6) '.$answer6.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	}
	//$strSQL4 = "SELECT * FROM lessons_readdes WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."' AND res1='".$answer1."' OR res2='".$answer2."' OR res3='".$answer3."' OR res4='".$answer4."' OR res5='".$answer5."'";
	//$result4=mysql_query($strSQL4,$link);
	//$totalRow4=mysql_num_rows($result4);
	//if($totalRow4>0)
	//$count++;
	$k++;
	}
	$totalRow4=6;
	$percent=($count/$totalRow4)*100;
	echo '<p><b>Số câu đúng là: '.$count.'/'.$totalRow4.'. Đạt: '.$percent.'%</b></p>';

	//echo '<p><b>Số câu đúng là: '.$count.'</b></p>';
	}
	}
}
?>


</div>
</ul>
</div>
</div>
