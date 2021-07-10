<?php
if(isset($_GET['readansdetailid']))
{
	$strSQL = "SELECT * FROM lessons_readanswer WHERE catid='".$_GET['readansdetailid']."' AND state=1";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_readanscatlist.php');
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
	echo '<b>Questions</b></br/>
	- Read the text and questions below<br/>
	- For each question, mark the letter next to the correct answer<b>- A,B,C or D - on your answer sheet</b><br/><br/>';
	$strSQL = "SELECT * FROM lessons_readanswer WHERE catid = '".$_GET['readansdetailid']."' AND state=1";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo 
		'<div style="float: left; width: 598px; border: 1px solid #999; text-align: left; padding: 10px;">'.$row['text'].'</div><br/><br/>';
		echo '<div style="float: left; width: 618px; text-align: left; margin-top: 10px;">'.$row['content_question'].'</div>';
		
		echo '<div><b>Answer is:</b></div>';
		//phải fix chiều rộng cho mỗi txtanswer để tương thích với các trình duyệt
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'1)</b>
		<select name="txtanswer1'.$sort.'" id="txtanswer1">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id1'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'2)</b>
		<select name="txtanswer2'.$sort.'" id="txtanswer2">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id2'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'3)</b> 
		<select name="txtanswer3'.$sort.'" id="txtanswer3">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id3'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'4)</b>
		<select name="txtanswer4'.$sort.'" id="txtanswer4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id4'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'5)</b>
		<select name="txtanswer5'.$sort.'" id="txtanswer5">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id5'.$sort.'" value="'.$row['id'].'"></div><br/><br/>';
	}
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
				
				$id1=$_POST['id1'.$t];
				$id2=$_POST['id2'.$t];
				$id3=$_POST['id3'.$t];
				$id4=$_POST['id4'.$t];
				$id5=$_POST['id5'.$t];
				
				$strSQL3 = "SELECT * FROM lessons_readanswer WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."'";
				$result3=mysql_query($strSQL3,$link);
				
				while($row3=mysql_fetch_array($result3))
				{
					echo '<b><i>1)</b></i> ';
					echo '<b>'.$row3['answer1'].'</b><br/>';	
					echo '<b><i>2)</b></i> ';
					echo '<b>'.$row3['answer2'].'</b><br/>';
					echo '<b><i>3)</b></i> ';
					echo '<b>'.$row3['answer3'].'</b><br/>';
					echo '<b><i>4)</b></i> ';
					echo '<b>'.$row3['answer4'].'</b><br/>';
					echo '<b><i>5)</b></i> ';
					echo '<b>'.$row3['answer5'].'</b><br/>';
					
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
	
	$answer1=$_POST['txtanswer1'.$k];
	$answer2=$_POST['txtanswer2'.$k];
	$answer3=$_POST['txtanswer3'.$k];
	$answer4=$_POST['txtanswer4'.$k];
	$answer5=$_POST['txtanswer5'.$k];
	
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
	
	$strSQL2 = "SELECT * FROM lessons_readanswer WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."'";
	//echo $strSQL2;
	$result2=mysql_query($strSQL2,$link);
	
	while($row2=mysql_fetch_array($result2))
	{
	if($row2['answer1']==$answer1)
	{
		echo '<b>1) '.$answer1.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>1) '.$answer1.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['answer2']==$answer2)
	{
		echo '<b>2) '.$answer2.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>2) '.$answer2.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['answer3']==$answer3)
	{
		echo '<b>3) '.$answer3.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>3) '.$answer3.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['answer4']==$answer4)
	{
		echo '<b>4) '.$answer4.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>4) '.$answer4.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['answer5']==$answer5)
	{
		echo '<b>5) '.$answer5.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>5) '.$answer5.' - </b><font color="#fd0309">False</font><br/>';
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
	$totalRow4=5;
	$percent=($count/$totalRow4)*100;
	echo '<p><b>Số câu đúng là: '.$count.'/'.$totalRow4.'. Đạt: '.$percent.'%</b></p>';
	}
	
}

?>   
    </div>
</ul>
</div>
</div>

