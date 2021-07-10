<?php
if(isset($_GET['readcordetailid']))
{
	$strSQL = "SELECT * FROM lessons_readcor WHERE catid='".$_GET['readcordetailid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_readcorcatlist.php');
}
?>
<div class="heading">
<div class="title">
&laquo; Luyện kĩ năng đọc (Bài học dưới dạng các câu hỏi thực hành)
</div>
<div class="icon_reading">
</div>
</div>

<div class="content">
<div class="uleft">
<ul>
	<form action="#" method="post">
	<?php
	echo '<b>Questions</b><br/>
	- Look at the sentences below about an outdoor activity centre.<br/> 
	- Read the text on the opposite page to decide if each sentence is correct or incorrect.<br/> 
	- If it is correct, mark <b>A on your answer sheet.</b><br/> 
	- If it is not correct, mark <b>B on your answer sheet.</b><br/>
	<br/>
	';
	$strSQL = "SELECT * FROM lessons_readcor WHERE catid = '".$_GET['readcordetailid']."'";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo 
		'<div style="width: 618px; text-align: left;">'.$row['sentences'].'</div><br/>';
		echo '<div><b>Answer is:</b></div>';
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'1)</b> <input type="text" name="txtanswer1'.$sort.'" id="txtanswer1" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id1'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'2)</b> <input type="text" name="txtanswer2'.$sort.'" id="txtanswer2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id2'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'3)</b> <input type="text" name="txtanswer3'.$sort.'" id="txtanswer3" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id3'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'4)</b> <input type="text" name="txtanswer4'.$sort.'" id="txtanswer4" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id4'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'5)</b> <input type="text" name="txtanswer5'.$sort.'" id="txtanswer5" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id5'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'6)</b> <input type="text" name="txtanswer6'.$sort.'" id="txtanswer6" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id6'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'7)</b> <input type="text" name="txtanswer7'.$sort.'" id="txtanswer7" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id7'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'8)</b> <input type="text" name="txtanswer8'.$sort.'" id="txtanswer8" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id8'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'9)</b> <input type="text" name="txtanswer9'.$sort.'" id="txtanswer9" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id9'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; margin-top: 10px;"><b>'.'10)</b> <input type="text" name="txtanswer10'.$sort.'" id="txtanswer10" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id10'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="width: 598px; margin-top: 10px; padding: 10px; text-align: left; border: 1px solid #999">'.$row['paragraph'].'</div><br/>';
	}
	?>
    <li>
    <input type="submit" name="submit" value="Kiểm tra đáp án" style="font-family: 'Times New Roman', Times, serif"/>
    <input type="reset" name="reset" value="Làm lại" style="font-family: 'Times New Roman', Times, serif"/>
    <input type="submit" name="check" value="Xem đáp án" style="font-family: 'Times New Roman', Times, serif"/>
    </li>
	</form>
</ul>
</div>
</div>
<?php
if(isset($_POST['check']))
{
	if(!isset($_SESSION['logged']))
	{
	header('Location: login.php');
	}
	else
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
		$strSQL3 = "SELECT * FROM lessons_readcor WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."' AND id='".$id6."' AND id='".$id7."' AND id='".$id8."' AND id='".$id9."' AND id='".$id10."'";
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
			echo '<b><i>7)</b></i> ';
			echo '<b>'.$row3['cor7'].'</b><br/>';
			echo '<b><i>8)</b></i> ';
			echo '<b>'.$row3['cor8'].'</b><br/>';
			echo '<b><i>9)</b></i> ';
			echo '<b>'.$row3['cor9'].'</b><br/>';
			echo '<b><i>10)</b></i> ';
			echo '<b>'.$row3['cor10'].'</b><br/>';
		}
		$t++;
	}
	}
}

if(isset($_POST['submit']))
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
		$answer1='A';	
	}
	if($answer1=="b")
	{
		$answer1='B';	
	}
	if($answer1=="c")
	{
		$answer1='C';	
	}
	
	$strSQL2 = "SELECT * FROM lessons_readcor WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."' AND id='".$id6."' AND id='".$id7."' AND id='".$id8."' AND id='".$id9."' AND id='".$id10."'";
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
	
	if($row2['cor7']==$answer7)
	{
		echo '<b>7) '.$answer7.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>7) '.$answer7.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor8']==$answer8)
	{
		echo '<b>8) '.$answer8.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>8) '.$answer8.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor9']==$answer9)
	{
		echo '<b>9) '.$answer9.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>9) '.$answer9.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['cor10']==$answer10)
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
	echo '<p><b>Số câu đúng là: '.$count.'/'.$totalRow4.'. Đạt: '.$percent.'%</b></p>';
	
	
}
?>
