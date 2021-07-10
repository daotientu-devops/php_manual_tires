<?php
if(isset($_GET['listenfilldetailid']))
{
	$strSQL = "SELECT * FROM lessons_listenfill WHERE catid='".$_GET['listenfilldetailid']."' AND state=1";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_listenfillcatlist.php');
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
	<form action="#" method="post">
	<?php
	$strSQL = "SELECT * FROM lessons_listenfill WHERE catid = '".$_GET['listenfilldetailid']."' AND state=1 LIMIT 0,1";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	echo '<b>Phần 2: 10 câu hỏi (10 điểm).</b> Nghe một đoạn hội thoại hay độc thoại. Điền vào 10 chi tiết bỏ trống trong bài. Chỗ trống thường là thông tin quan trọng.<br/>';
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo '<b>Question: </b><br/>';
		echo $row['title'].'<br/>';
		echo '- For each question, fill in the missing information in the numbered space<br/>';
		echo'
		Nếu trình duyệt của bạn chưa hỗ trợ hiển thị file âm thanh. Để nghe, vui lòng <a href="CMSforE/'.$row['audio'].'">download</a> file vào máy tính của bạn.<br/><br/>';

		echo '<audio controls="controls" preload="none">
			<source src="CMSforE/'.$row['audio'].'" type="audio/mp3" />
			<source src="CMSforE/'.$row['audio'].'" type="audio/wav">
		  	<source src="CMSforE/'.$row['audio'].'" type="audio/ogg" />
		  	<source src="CMSforE/'.$row['audio'].'" type="audio/mpeg" />
			Đoạn này sẽ hiển thị nếu trình duyệt không hỗ trợ
			</audio>';
		echo '<div style="width: 598px; border: 1px solid #a2a2a2; padding: 10px;">'.$row['text'].'</div>';
		echo '<div><b>Answer is:</b></div>';
		//phải fix chiều rộng cho mỗi txtanswer để tương thích với các trình duyệt
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'1)</b> <input type="text" name="txtanswer1'.$sort.'" id="txtanswer1" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id1'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'4)</b> <input type="text" name="txtanswer4'.$sort.'" id="txtanswer4" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id4'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'7)</b> <input type="text" name="txtanswer7'.$sort.'" id="txtanswer7" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id7'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'10)</b> <input type="text" name="txtanswer10'.$sort.'" id="txtanswer10" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id10'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'2)</b> <input type="text" name="txtanswer2'.$sort.'" id="txtanswer2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id2'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'5)</b> <input type="text" name="txtanswer5'.$sort.'" id="txtanswer5" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id5'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 156px; margin-top: 10px;"><b>'.'8)</b> <input type="text" name="txtanswer8'.$sort.'" id="txtanswer8" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id8'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 155px; margin-top: 10px;"><b>'.'3)</b> <input type="text" name="txtanswer3'.$sort.'" id="txtanswer3" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id3'.$sort.'" value="'.$row['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'6)</b> <input type="text" name="txtanswer6'.$sort.'" id="txtanswer6" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id6'.$sort.'" value="'.$row['id'].'"></div>';

		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'9)</b> <input type="text" name="txtanswer9'.$sort.'" id="txtanswer9" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id9'.$sort.'" value="'.$row['id'].'"></div>';
		
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
			$id7=$_POST['id7'.$t];
			$id8=$_POST['id8'.$t];
			$id9=$_POST['id9'.$t];
			$id10=$_POST['id10'.$t];
			
			$strSQL3 = "SELECT * FROM lessons_listenfill WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."' AND id='".$id6."'  AND id='".$id7."' AND id='".$id8."' AND id='".$id9."' AND id='".$id10."'";
			$result3=mysql_query($strSQL3,$link);
			
			while($row3=mysql_fetch_array($result3))
			{
				echo '<b><i>1)</b></i> ';
				echo '<b>'.$row3['blank1'].'</b><br/>';	
				echo '<b><i>2)</b></i> ';
				echo '<b>'.$row3['blank2'].'</b><br/>';
				echo '<b><i>3)</b></i> ';
				echo '<b>'.$row3['blank3'].'</b><br/>';
				echo '<b><i>4)</b></i> ';
				echo '<b>'.$row3['blank4'].'</b><br/>';
				echo '<b><i>5)</b></i> ';
				echo '<b>'.$row3['blank5'].'</b><br/>';
				echo '<b><i>6)</b></i> ';
				echo '<b>'.$row3['blank6'].'</b><br/>';	
				echo '<b><i>7)</b></i> ';
				echo '<b>'.$row3['blank7'].'</b><br/>';
				echo '<b><i>8)</b></i> ';
				echo '<b>'.$row3['blank8'].'</b><br/>';
				echo '<b><i>9)</b></i> ';
				echo '<b>'.$row3['blank9'].'</b><br/>';
				echo '<b><i>10)</b></i> ';
				echo '<b>'.$row3['blank10'].'</b><br/>';
				echo '<b><i>Các đáp án tham khảo khác:</i></b><br/>';
				echo $row3['note'];
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
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($i=0;$i<$sort;$i++)
	{
	$id1=$_POST['id1'.$k];
	$id2=$_POST['id2'.$k];
	$id3=$_POST['id3'.$k];
	$id4=$_POST['id4'.$k];
	$id5=$_POST['id5'.$k];
	$id6=$_POST['id6'.$k];
	$id7=$_POST['id7'.$k];
	$id8=$_POST['id8'.$k];
	$id9=$_POST['id9'.$k];
	$id10=$_POST['id10'.$k];
	
	$answer1=$_POST['txtanswer1'.$k];
	$answer2=$_POST['txtanswer2'.$k];
	$answer3=$_POST['txtanswer3'.$k];
	$answer4=$_POST['txtanswer4'.$k];
	$answer5=$_POST['txtanswer5'.$k];
	$answer6=$_POST['txtanswer6'.$k];
	$answer7=$_POST['txtanswer7'.$k];
	$answer8=$_POST['txtanswer8'.$k];
	$answer9=$_POST['txtanswer9'.$k];
	$answer10=$_POST['txtanswer10'.$k];
	
	if($answer1=="")
	{
		$answer1='W';	
	}
	if($answer2=="")
	{
		$answer2='W';	
	}
	if($answer3=="")
	{
		$answer3='W';	
	}
	if($answer4=="")
	{
		$answer4='W';	
	}
	if($answer5=="")
	{
		$answer5='W';	
	}
	if($answer6=="")
	{
		$answer6='W';	
	}
	if($answer7=="")
	{
		$answer7='W';	
	}
	if($answer8=="")
	{
		$answer8='W';	
	}
	if($answer9=="")
	{
		$answer9='W';	
	}
	if($answer10=="")
	{
		$answer10='W';	
	}
	
	if($answer1=="a")
	{
		//$answer1='A';	
	}
	if($answer1=="b")
	{
		//$answer1='B';	
	}
	if($answer1=="c")
	{
		//$answer1='C';	
	}
	
	$strSQL2 = "SELECT * FROM lessons_listenfill WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."' AND id='".$id6."' AND id='".$id7."' AND id='".$id8."' AND id='".$id9."' AND id='".$id10."'";
	//echo $strSQL2;
	$result2=mysql_query($strSQL2,$link);
	
	while($row2=mysql_fetch_array($result2))
	{
	if($row2['blank1']==$answer1)
	{
		echo '<b>1) '.$answer1.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>1) '.$answer1.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['blank2']==$answer2)
	{
		echo '<b>2) '.$answer2.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>2) '.$answer2.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['blank3']==$answer3)
	{
		echo '<b>3) '.$answer3.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>3) '.$answer3.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['blank4']==$answer4)
	{
		echo '<b>4) '.$answer4.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>4) '.$answer4.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['blank5']==$answer5)
	{
		echo '<b>5) '.$answer5.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>5) '.$answer5.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['blank6']==$answer6)
	{
		echo '<b>6) '.$answer6.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>6) '.$answer6.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	if($row2['blank7']==$answer7)
	{
		echo '<b>7) '.$answer7.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>7) '.$answer7.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	if($row2['blank8']==$answer8)
	{
		echo '<b>8) '.$answer8.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>8) '.$answer8.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	if($row2['blank9']==$answer9)
	{
		echo '<b>9) '.$answer9.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>9) '.$answer9.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	if($row2['blank10']==$answer10)
	{
		echo '<b>10) '.$answer10.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>10) '.$answer10.' - </b><font color="#fd0309">False</font><br/>';
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
	$totalRow4=10;
	$percent=($count/$totalRow4)*100;
	//echo '<p><b>Số câu đúng là: '.$count.'/'.$totalRow4.'. Đạt: '.$percent.'%</b></p>';
	echo '<p><b>Số câu đúng là: '.$count.'</b></p>';
	}
}

?>    
    </div>
</ul>
</div>
</div>
