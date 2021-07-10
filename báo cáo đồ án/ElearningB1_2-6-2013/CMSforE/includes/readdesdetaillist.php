<?php
if(isset($_GET['readdesdetailid']))
{
	$strSQL = "SELECT * FROM lessons_readdes WHERE catid='".$_GET['readdesdetailid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_readdescatlist.php');
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
	echo '<b><i>Đọc 5 đoạn mô tả ngắn, mỗi đoạn khoảng 3 câu, sau đó chọn các bức tranh tương ứng với đoạn mô tả (5 bức tranh)</b></i> ';
	$strSQL = "SELECT * FROM lessons_readdes WHERE catid = '".$_GET['readdesdetailid']."'";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo '<li style="float: left; width: 618px; height: 90px;">'.'<b>'.$row['num1'].')</b><br/>'.
		'<div style="width: 618px; text-align: left;">
		<div style="float: left; border: 1px solid #ccc;"><img src="'.$row['pic1'].'" border="0" alt="0" width="98px" style="float: left;"/></div>
		<div style="float: left; width: 508px; text-align: left; margin-left: 10px;">'.$row['des1'].'</div>
		</div>
		'.
		'<div style="float: left; margin-top: 10px; margin-left: 10px;">Answer is: '.'<input type="text" name="txtanswer1'.$sort.'" id="txtanswer1" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id1'.$sort.'" value="'.$row['id'].'"></div>'.
		'		
		</li>';
		
		echo '<li style="float: left; width: 618px; height: 90px;">'.'<b>'.$row['num2'].')</b><br/>'.
		'<div style="width: 618px; text-align: left;">
		<div style="float: left; border: 1px solid #ccc;"><img src="'.$row['pic2'].'" border="0" alt="0" width="98px" style="float: left;"/></div>
		<div style="float: left; width: 508px; text-align: left; margin-left: 10px;">'.$row['des2'].'</div>
		</div>
		'.
		'<div style="float: left; margin-top: 10px; margin-left: 10px;">Answer is: '.'<input type="text" name="txtanswer2'.$sort.'" id="txtanswer2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id2'.$sort.'" value="'.$row['id'].'"></div>'.
		'
		</li>';
		
		echo '<li style="float: left; width: 618px; height: 90px;">'.'<b>'.$row['num3'].')</b><br/>'.
		'<div style="width: 618px; text-align: left;">
		<div style="float: left; border: 1px solid #ccc;"><img src="'.$row['pic3'].'" border="0" alt="0" width="98px" style="float: left;"/></div>
		<div style="float: left; width: 508px; text-align: left; margin-left: 10px;">'.$row['des3'].'</div>
		</div>
		'.
		'<div style="float: left; margin-top: 10px; margin-left: 10px;">Answer is: '.'<input type="text" name="txtanswer3'.$sort.'" id="txtanswer3" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id3'.$sort.'" value="'.$row['id'].'"></div>'.
		'
		</li>';
		
		echo '<li style="float: left; width: 618px; height: 90px;">'.'<b>'.$row['num4'].')</b><br/>'.
		'<div style="width: 618px; text-align: left;">
		<div style="float: left; border: 1px solid #ccc;"><img src="'.$row['pic4'].'" border="0" alt="0" width="98px" style="float: left;"/></div>
		<div style="float: left; width: 508px; text-align: left; margin-left: 10px;">'.$row['des4'].'</div>
		</div>
		'.
		'<div style="float: left; margin-top: 10px; margin-left: 10px;">Answer is: '.'<input type="text" name="txtanswer4'.$sort.'" id="txtanswer4" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id4'.$sort.'" value="'.$row['id'].'"></div>'.
		'
		</li>';
		
		echo '<li style="float: left; width: 618px; height: 90px;">'.'<b>'.$row['num5'].')</b><br/>'.
		'<div style="width: 618px; text-align: left;">
		<div style="float: left; border: 1px solid #ccc;"><img src="'.$row['pic5'].'" border="0" alt="0" width="98px" style="float: left;"/></div>
		<div style="float: left; width: 508px; text-align: left; margin-left: 10px;">'.$row['des5'].'</div>
		</div>
		'.
		'<div style="float: left; margin-top: 10px; margin-left: 10px;">Answer is: '.'<input type="text" name="txtanswer5'.$sort.'" id="txtanswer5" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id5'.$sort.'" value="'.$row['id'].'"></div>'.
		'
		</li>';
		
		echo '<li style="float: left; width: 618px; height: 600px;">'.$row['description'].'</li><br/>';
	
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
		$strSQL3 = "SELECT * FROM lessons_readdes WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."'";
		$result3=mysql_query($strSQL3,$link);
		
		while($row3=mysql_fetch_array($result3))
		{
			echo '<b><i>'.$row3['num1'].')</b></i> ';
			echo '<b>'.$row3['res1'].'</b><br/>';	
			echo '<b><i>'.$row3['num2'].')</b></i> ';
			echo '<b>'.$row3['res2'].'</b><br/>';
			echo '<b><i>'.$row3['num3'].')</b></i> ';
			echo '<b>'.$row3['res3'].'</b><br/>';
			echo '<b><i>'.$row3['num4'].')</b></i> ';
			echo '<b>'.$row3['res4'].'</b><br/>';
			echo '<b><i>'.$row3['num5'].')</b></i> ';
			echo '<b>'.$row3['res5'].'</b><br/>';
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
	$answer1=$_POST['txtanswer1'.$k];
	$answer2=$_POST['txtanswer2'.$k];
	$answer3=$_POST['txtanswer3'.$k];
	$answer4=$_POST['txtanswer4'.$k];
	$answer5=$_POST['txtanswer5'.$k];
	if($answer1=="")
	{
		$answer1='W';	
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
	
	$strSQL2 = "SELECT * FROM lessons_readdes WHERE id='".$id1."' AND id='".$id2."' AND id='".$id3."' AND id='".$id4."' AND id='".$id5."'";
	//echo $strSQL2;
	$result2=mysql_query($strSQL2,$link);
	
	while($row2=mysql_fetch_array($result2))
	{
	if($row2['res1']==$answer1)
	{
		echo '<b>'.$row2['num1'].': '.$answer1.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>'.$row2['num1'].': '.$answer1.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['res2']==$answer2)
	{
		echo '<b>'.$row2['num2'].') '.$answer2.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>'.$row2['num2'].') '.$answer2.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['res3']==$answer3)
	{
		echo '<b>'.$row2['num3'].') '.$answer3.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>'.$row2['num3'].') '.$answer3.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['res4']==$answer4)
	{
		echo '<b>'.$row2['num4'].') '.$answer4.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>'.$row2['num4'].') '.$answer4.' - </b><font color="#fd0309">False</font><br/>';
		$count+=0;
	}
	
	if($row2['res5']==$answer5)
	{
		echo '<b>'.$row2['num5'].') '.$answer5.' - </b><font color="#002596">True</font><br/>';
		$count+=1;
	}
	else
	{
		echo '<b>'.$row2['num5'].') '.$answer5.' - </b><font color="#fd0309">False</font><br/>';
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
?>