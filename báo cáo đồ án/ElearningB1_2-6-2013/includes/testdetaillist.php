
<?php
	if(!isset($_GET['testdetailid']))
	{
		header('Location: index.php');
	}

?>
<div class="heading">
<div class="title">
&laquo; Thời gian làm bài: 125 phút; 
</div>
<div class="icon_test">
</div>
<div id="show">
<?php
if(!$_SESSION['time'])
{
	$_SESSION['time']=time();
}
else
{
	$timeOut=$_SESSION['time']+7500;
	if(time() < $timeOut)	
	{	
		//$tg=time();
		//$subtg=date("d/m/Y [H:i:s]",$tg);	
		$tg=$timeOut-time();
		$minute=ceil($tg/60);
		echo '<b>&spades;Thời gian làm bài test của bạn hiện tại còn lại là: '.$minute.' phút</b>';
	}
	else
	{
		header('Location: TimeOut.php');
	}
}
?>
</div>
</div>

<div class="content">


<div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Bài test đọc - Phần 1</li>
      <li class="TabbedPanelsTab" tabindex="0">P.2</li>
      <li class="TabbedPanelsTab" tabindex="0">P.3</li>
      <li class="TabbedPanelsTab" tabindex="0">P.4</li>
      <li class="TabbedPanelsTab" tabindex="0">Bài test viết</li>
      <li class="TabbedPanelsTab" tabindex="0">Bài test nghe hiểu - Phần 1</li>
      <li class="TabbedPanelsTab" tabindex="0">P.2</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
    
      <div class="TabbedPanelsContent" id="formboxR1">Đọc: 4 phần / 20 câu hỏi (30 điểm)<br />
      - Phần 1: <i>10 câu hỏi (10 điểm).</i> Đọc 10 câu độc lập mỗi câu có một từ bỏ trống, chọn 1 từ đúng trong 4 từ cho sẵn (dạng trắc nghiệm ABCD) để điền vào chỗ trống. Các chỗ trống này cho phép kiểm tra kiến thức ngữ pháp, từ vựng, ngữ nghĩa và kiến thức văn hóa, xã hội.<br />
      <form action="#" method="post" name="R1" id="R1">
      <?php
      	$strSQL = "SELECT * FROM lessons_readtest WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC limit 0,10";
		$result = mysql_query($strSQL, $link);
		$sort=0;
		while($row=mysql_fetch_array($result))
		{
			$sort++;
			echo '<div style="float: left; width: 618px; margin-bottom: 20px;">'. 
			'<div style="width: 618px; text-align: left;">'.$sort.'. '.$row['sentence'].'</div>'.
			$row['select_answer'].'<br/><br/>'.
			'Answer is: '.
			'
			<select name="txtanswerR1'.$sort.'" id="txtanswerR1">
			<option value=""></option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			</select>
			'.
			'<input type="hidden" name="idR1'.$sort.'" value="'.$row['id'].'">'.
			
			'</div>';	
		}  
      ?>
      <div style="width: 618px; margin-top: 20px; text-align: left;">
      <input type="submit" name="submitR1" value="Submit" style="font-family: 'Times New Roman', Times, serif"/>
      <input type="reset" name="resetR1" value="Reset" style="font-family: 'Times New Roman', Times, serif"/>
      </div>
      </form>
<div class="preview"></div>
      <?php
if(isset($_POST['submitR1']))
{
	$countR1=0;
	$kR1=1;
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($iR1=0;$iR1<$sort;$iR1++)
	{
	$idR1=$_POST['idR1'.$kR1];
	$answerR1=$_POST['txtanswerR1'.$kR1];
	$_SESSION['answerR11']=$_POST['txtanswerR11'];
	$_SESSION['answerR12']=$_POST['txtanswerR12'];
	$_SESSION['answerR13']=$_POST['txtanswerR13'];
	$_SESSION['answerR14']=$_POST['txtanswerR14'];
	$_SESSION['answerR15']=$_POST['txtanswerR15'];
	$_SESSION['answerR16']=$_POST['txtanswerR16'];
	$_SESSION['answerR17']=$_POST['txtanswerR17'];
	$_SESSION['answerR18']=$_POST['txtanswerR18'];
	$_SESSION['answerR19']=$_POST['txtanswerR19'];
	$_SESSION['answerR110']=$_POST['txtanswerR110'];
	
	if($answerR1=="")
	{
		$answerR1='E';	
	}
	if($answerR1=="a")
	{
		$answerR1='A';	
	}
	if($answerR1=="b")
	{
		$answerR1='B';	
	}
	if($answerR1=="c")
	{
		$answerR1='C';	
	}
	$strSQL2R1 = "SELECT * FROM lessons_readtest WHERE id='".$idR1."'";
	$result2R1=mysql_query($strSQL2R1,$link);
	
	while($row2R1=mysql_fetch_array($result2R1))
	{
	//if($row2R1['correct_answer']==$answerR1)
	//{
		//$_SESSION['answerR1']=$answerR1;
		//echo '<b>'.$kR1.') '.$_SESSION['answerR1'].'</b><br/>';
	//}
	//else
	//{	
		//echo '<b>'.$kR1.') '.$_SESSION['answerR1'].'</b><br/>';

	//}
	}
	
	
	$strSQL4R1 = "SELECT * FROM lessons_readtest WHERE id='".$idR1."' AND correct_answer='".$answerR1."'";
	$result4R1=mysql_query($strSQL4R1,$link);
	$totalRow4R1=mysql_num_rows($result4R1);
	if($totalRow4R1>0)
	$countR1++;
	$kR1++;
	}
	//echo $countR1;
	$_SESSION['countR1']=$countR1;
	//$percent=($count/$totalRow)*100;
	//echo '<p><b>Số câu đúng là: '.$count.'/'.$totalRow.'. Đạt: '.$percent.'%</b></p>';
	
}
	  ?>
  	<?php
	//echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	if(isset($_SESSION['answerR11']))
	{
		echo '<b>1) '.$_SESSION['answerR11'].'</b><br/>';
	}
	if(isset($_SESSION['answerR12']))
	{
		echo '<b>2) '.$_SESSION['answerR12'].'</b><br/>';
	}
	if(isset($_SESSION['answerR13']))
	{
		echo '<b>3) '.$_SESSION['answerR13'].'</b><br/>';
	}
	if(isset($_SESSION['answerR14']))
	{
		echo '<b>4) '.$_SESSION['answerR14'].'</b><br/>';
	}
	if(isset($_SESSION['answerR15']))
	{
		echo '<b>5) '.$_SESSION['answerR15'].'</b><br/>';
	}
	if(isset($_SESSION['answerR16']))
	{
		echo '<b>6) '.$_SESSION['answerR16'].'</b><br/>';
	}
	if(isset($_SESSION['answerR17']))
	{
		echo '<b>7) '.$_SESSION['answerR17'].'</b><br/>';
	}
	if(isset($_SESSION['answerR18']))
	{
		echo '<b>8) '.$_SESSION['answerR18'].'</b><br/>';
	}
	if(isset($_SESSION['answerR19']))
	{
		echo '<b>9) '.$_SESSION['answerR19'].'</b><br/>';
	}
	if(isset($_SESSION['answerR110']))
	{
		echo '<b>10) '.$_SESSION['answerR110'].'</b><br/>';
	}
	if(isset($_POST['subFinish']))
		{
			echo '<b><i>Đáp án đúng:</i></b><br/>';
			$strSQL5R1 = "SELECT * FROM lessons_readtest WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,10";
			$result5R1 = mysql_query($strSQL5R1, $link);
			$sort5R1=1;
			while($row5R1 = mysql_fetch_array($result5R1))
			{
				echo '<b>'.$sort5R1.') '.$row5R1['correct_answer'].'</b><br/>';
				$sort5R1++;
			}
		}
	?>
      </div>
  <!-- Read phần 2-->    
   
      <div class="TabbedPanelsContent">
      - Phần 2: <i>5 câu hỏi (5 điểm).</i> Đọc 5 biển quảng cáo, bảng báo hiệu thường gặp trong đời sống hàng ngày (dạng hình ảnh không có chữ hoặc có ít chữ) hoặc thông báo ngắn, sau đó chọn một câu trả lời đúng trong 4 câu cho sẵn (dạng trắc nghiệm ABCD).<br />
    <form name="R2" id="R2" action="#" method="post">
	<?php
	$strSQL1 = "SELECT * FROM lessons_readad WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
	$result1 = mysql_query($strSQL1, $link);
	$sort1=0;
	while($row1=mysql_fetch_array($result1))
	{
		$sort1++;
		echo '<div style="float: left; width: 618px; margin-bottom: 20px;">'.'<b>'.$sort1.'. </b><br/>'.
		'<div style="width: 319px; border: 1px solid #666; text-align: center;">'.$row1['content_ad'].'</div><br/>'.
		$row1['content_answer'].'<br/><br/>'.
		'Answer is: '.
		'
		<select name="txtanswerR2'.$sort1.'" id="txtanswerR2">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		</select>
		'.
		'<input type="hidden" name="idR2'.$sort1.'" value="'.$row1['id'].'">'.
		
		'</div>';
	
	}
	?>
    <div style="width: 618px; margin-top: 20px; text-align: left;">
     <input type="submit" name="submitR2" value="Submit" style="font-family: 'Times New Roman', Times, serif"/>
     <input type="reset" name="resetR2" value="Reset" style="font-family: 'Times New Roman', Times, serif"/>
     </div>
    </form> 
    <?php
if(isset($_POST['submitR2']))
{
	$countR2=0;
	$kR2=1;
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($iR2=0;$iR2<$sort1;$iR2++)
	{
	$idR2=$_POST['idR2'.$kR2];
	$answerR2=$_POST['txtanswerR2'.$kR2];
	$_SESSION['answerR21']=$_POST['txtanswerR21'];
	$_SESSION['answerR22']=$_POST['txtanswerR22'];
	$_SESSION['answerR23']=$_POST['txtanswerR23'];
	$_SESSION['answerR24']=$_POST['txtanswerR24'];
	$_SESSION['answerR25']=$_POST['txtanswerR25'];
	if($answerR2=="")
	{
		$answerR2='E';	
	}
	if($answerR2=="a")
	{
		$answerR2='A';	
	}
	if($answerR2=="b")
	{
		$answerR2='B';	
	}
	if($answerR2=="c")
	{
		$answerR2='C';	
	}
	$strSQL2R2 = "SELECT * FROM lessons_readad WHERE id='".$idR2."'";
	//echo $strSQL2;
	$result2R2=mysql_query($strSQL2R2,$link);
	
	while($row2R2=mysql_fetch_array($result2R2))
	{
	//if($row2R2['correct_answer']==$answerR2)
	//{
	//	$_SESSION['answerR2']=$answerR2;
	//	echo '<b>'.$kR2.') '.$_SESSION['answerR2'].'</b><br/>';
	//}
	//else
	//{
		$_SESSION['answerR2']=$answerR2;
		//echo '<b>'.$kR2.') '.$_SESSION['answerR2'].'</b><br/>';
	//}
	}	
	$strSQL4R2 = "SELECT * FROM lessons_readad WHERE id='".$idR2."' AND correct_answer='".$answerR2."'";
	$result4R2=mysql_query($strSQL4R2,$link);
	$totalRow4R2=mysql_num_rows($result4R2);
	if($totalRow4R2>0)
	$countR2++;
	$kR2++;
	}
	$_SESSION['countR2']=$countR2;
	//$percent=($count/$totalRow)*100;
	//echo '<p><b>Số câu đúng là: '.$count.'/'.$totalRow.'. Đạt: '.$percent.'%</b></p>';
	
}
	?>
    <?php
	//echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	if(isset($_SESSION['answerR21']))
	{
		echo '<b>1) '.$_SESSION['answerR21'].'</b><br/>';
	}
	if(isset($_SESSION['answerR22']))
	{
		echo '<b>2) '.$_SESSION['answerR22'].'</b><br/>';
	}
	if(isset($_SESSION['answerR23']))
	{
		echo '<b>3) '.$_SESSION['answerR23'].'</b><br/>';
	}
	if(isset($_SESSION['answerR24']))
	{
		echo '<b>4) '.$_SESSION['answerR24'].'</b><br/>';
	}
	if(isset($_SESSION['answerR25']))
	{
		echo '<b>5) '.$_SESSION['answerR25'].'</b><br/>';
	}
	
	if(isset($_POST['subFinish']))
		{
			echo '<b><i>Đáp án đúng:</i></b><br/>';
			$strSQL5R2 = "SELECT * FROM lessons_readad WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
			$result5R2 = mysql_query($strSQL5R2, $link);
			$sort5R2=1;
			while($row5R2 = mysql_fetch_array($result5R2))
			{
				echo '<b>'.$sort5R2.') '.$row5R2['correct_answer'].'</b><br/>';
				$sort5R2++;
			}
		}
	?>
    </div>
   <!-- Read phần 3-->   
      <div class="TabbedPanelsContent">
      - Phần 3: <i>5 câu hỏi (5 điểm).</i> Đọc một bài khoảng 200-250 từ, chọn các câu trả lời trong 4 khả năng A, B, C, D. Bài đọc lấy từ báo, tạp chí dễ hiểu, dạng phổ biến kiến thức, thường thấy trong đời sống hàng ngày.<br /><br />
    <form name="R3" id="R3" action="#" method="post">
	<?php
	$strSQL2 = "SELECT * FROM lessons_readanswer WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
	$result2 = mysql_query($strSQL2, $link);
	$sort2=0;
	while($row2=mysql_fetch_array($result2))
	{
		$sort2++;
		echo 
		'<div style="float: left; width: 598px; border: 1px solid #999; text-align: left; padding: 10px;">'.$row2['text'].'</div><br/><br/>';
		echo '<div style="float: left; width: 618px; text-align: left; margin-top: 10px;">'.$row2['content_question'].'</div>';
		
		echo '<div><b>Answer is:</b></div>';
		//phải fix chiều rộng cho mỗi txtanswer để tương thích với các trình duyệt
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'1)</b>
		<select name="txtanswer1R3'.$sort2.'" id="txtanswer1R3">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id1R3'.$sort2.'" value="'.$row2['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'2)</b>
		<select name="txtanswer2R3'.$sort2.'" id="txtanswer2R3">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id2R3'.$sort2.'" value="'.$row2['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'3)</b> 
		<select name="txtanswer3R3'.$sort2.'" id="txtanswer3R3">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id3R3'.$sort2.'" value="'.$row2['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'4)</b>
		<select name="txtanswer4R3'.$sort2.'" id="txtanswer4R3">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id4R3'.$sort2.'" value="'.$row2['id'].'"></div><br/><br/>';
		
		echo 
		'<div style="float: left; width: 618px; margin-top: 10px;"><b>'.'5)</b>
		<select name="txtanswer5R3'.$sort2.'" id="txtanswer5R3">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select> 
		'.
		'<input type="hidden" name="id5R3'.$sort2.'" value="'.$row2['id'].'"></div><br/><br/>';
	}
	?>
    <div style="width: 618px; margin-top: 20px; text-align: left;">
     <input type="submit" name="submitR3" value="Submit" style="font-family: 'Times New Roman', Times, serif"/>
     <input type="reset" name="resetR3" value="Reset" style="font-family: 'Times New Roman', Times, serif"/>
     </div>
    </form>
    <?php
if(isset($_POST['submitR3']))
{
	$countR3=0;
	$kR3=1;
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($iR3=0;$iR3<$sort2;$iR3++)
	{
	$id1R3=$_POST['id1R3'.$kR3];
	$id2R3=$_POST['id2R3'.$kR3];
	$id3R3=$_POST['id3R3'.$kR3];
	$id4R3=$_POST['id4R3'.$kR3];
	$id5R3=$_POST['id5R3'.$kR3];
	
	$answer1R3=$_POST['txtanswer1R3'.$kR3];
	$answer2R3=$_POST['txtanswer2R3'.$kR3];
	$answer3R3=$_POST['txtanswer3R3'.$kR3];
	$answer4R3=$_POST['txtanswer4R3'.$kR3];
	$answer5R3=$_POST['txtanswer5R3'.$kR3];
	
	$strSQL2R3 = "SELECT * FROM lessons_readanswer WHERE id='".$id1R3."' AND id='".$id2R3."' AND id='".$id3R3."' AND id='".$id4R3."' AND id='".$id5R3."'";
	//echo $strSQL2;
	$result2R3=mysql_query($strSQL2R3,$link);
	
while($row2R3=mysql_fetch_array($result2R3))
	{
		if($row2R3['answer1']==$answer1R3)
		{
			//echo '<b>1) '.$answer1R3.'</b><br/>';
			$countR3+=1;
		}
		else
		{
			//echo '<b>1) '.$answer1R3.'</b><br/>';
			$countR3+=0;
		}
		$_SESSION['answer1R3']=$answer1R3;
		if($row2R3['answer2']==$answer2R3)
		{
			//echo '<b>2) '.$answer2R3.'</b><br/>';
			$countR3+=1;
		}
		else
		{
			//echo '<b>2) '.$answer2R3.'</b><br/>';
			$countR3+=0;
		}
		$_SESSION['answer2R3']=$answer2R3;
		if($row2R3['answer3']==$answer3R3)
		{
			//echo '<b>3) '.$answer3R3.'</b><br/>';
			$countR3+=1;
		}
		else
		{
			//echo '<b>3) '.$answer3R3.'</b><br/>';
			$countR3+=0;
		}
		$_SESSION['answer3R3']=$answer3R3;
		if($row2R3['answer4']==$answer4R3)
		{
			//echo '<b>4) '.$answer4R3.'</b><br/>';
			$countR3+=1;
		}
		else
		{
			//echo '<b>4) '.$answer4R3.'</b><br/>';
			$countR3+=0;
		}
		$_SESSION['answer4R3']=$answer4R3;
		if($row2R3['answer5']==$answer5R3)
		{
			//echo '<b>5) '.$answer5R3.'</b><br/>';
			$countR3+=1;
		}
		else
		{
			//echo '<b>5) '.$answer5R3.'</b><br/>';
			$countR3+=0;
		}
		$_SESSION['answer5R3']=$answer5R3;
	}
	$kR3++;
	$_SESSION['countR3']=$countR3;
	}
}
	?> 
    <?php
	//echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	if(isset($_SESSION['answer1R3']))
	{
		echo '<b>1) '.$_SESSION['answer1R3'].'</b><br/>';
	}
	if(isset($_SESSION['answer2R3']))
	{
		echo '<b>2) '.$_SESSION['answer2R3'].'</b><br/>';
	}
	if(isset($_SESSION['answer3R3']))
	{
		echo '<b>3) '.$_SESSION['answer3R3'].'</b><br/>';
	}
	if(isset($_SESSION['answer4R3']))
	{
		echo '<b>4) '.$_SESSION['answer4R3'].'</b><br/>';
	}
	if(isset($_SESSION['answer5R3']))
	{
		echo '<b>5) '.$_SESSION['answer5R3'].'</b><br/>';
	}
	if(isset($_POST['subFinish']))
	{
		$strSQL5R3 = "SELECT * FROM lessons_readanswer WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
		$result5R3 = mysql_query($strSQL5R3, $link);
		echo '<b><i>Đáp án đúng:</i></b><br/>';
		while($row5R3=mysql_fetch_array($result5R3))
		{
			
				echo '<b><i>1)</b></i> ';
				echo '<b>'.$row5R3['answer1'].'</b><br/>';	
				echo '<b><i>2)</b></i> ';
				echo '<b>'.$row5R3['answer2'].'</b><br/>';
				echo '<b><i>3)</b></i> ';
				echo '<b>'.$row5R3['answer3'].'</b><br/>';
				echo '<b><i>4)</b></i> ';
				echo '<b>'.$row5R3['answer4'].'</b><br/>';
				echo '<b><i>5)</b></i> ';
				echo '<b>'.$row5R3['answer5'].'</b><br/>';
		}
	}
	?>
    </div>
    <div class="TabbedPanelsContent">
    - Phần 4: <i>10 câu hỏi (10 điểm).</i> Làm bài đọc điền từ (Cloze test), dạng bỏ từ thứ 7 trong văn bản. Lưu ý: chỉ bỏ ô trống bắt đầu từ câu thứ 3, câu thứ 1 và thứ 2 giữ nguyên để thí sinh làm quen với ngữ cảnh. Bài đọc này dài khoảng 150 từ trong đó có 10 từ bỏ trống. Chọn trong số 15 từ phù hợp để điền vào chỗ trống.<br />
    <form name="R4" id="R4" action="#" method="post">
	<?php
	$strSQL3 = "SELECT * FROM lessons_readchoose WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
	$result3 = mysql_query($strSQL3, $link);
	$sort3=0;
	while($row3=mysql_fetch_array($result3))
	{
		$sort3++;
		echo 
		'<div style="float: left; width: 598px; border: 1px solid #999; text-align: left; padding: 10px;">'.$row3['text'].'</div><br/><br/>';
		echo '<div style="float: left; width: 618px; text-align: left; margin-top: 10px; margin-bottom: 10px;">'.$row3['content_choose'].'</div>';
		echo '<div style="margin-bottom: 10px;"><b>Answer is:</b></div>';
		echo 
		'<div style="float: left; width: 154px; margin-bottom: 10px;"><b>'.'1)</b>
		<select name="txtanswer1R4'.$sort3.'" id="txtanswer1R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id1R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-bottom: 10px;"><b>'.'4)</b> 
		<select name="txtanswer4R4'.$sort3.'" id="txtanswer4R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id4R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-bottom: 10px;"><b>'.'7)</b>
		<select name="txtanswer7R4'.$sort3.'" id="txtanswer7R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id7R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-bottom: 10px;"><b>'.'10)</b>
		<select name="txtanswer10R4'.$sort3.'" id="txtanswer10R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id10R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-bottom: 10px;"><b>'.'2)</b>
		<select name="txtanswer2R4'.$sort3.'" id="txtanswer2R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id2R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-bottom: 10px;"><b>'.'5)</b>
		<select name="txtanswer5R4'.$sort3.'" id="txtanswer5R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id5R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 312px; margin-bottom: 10px;"><b>'.'8)</b> 
		<select name="txtanswer8R4'.$sort3.'" id="txtanswer8R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id8R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 155px; margin-bottom: 10px;"><b>'.'3)</b>
		<select name="txtanswer3R4'.$sort3.'" id="txtanswer3R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id3R4'.$sort3.'" value="'.$row3['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-bottom: 20px;"><b>'.'6)</b>
		<select name="txtanswer6R4'.$sort3.'" id="txtanswer6R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id6R4'.$sort3.'" value="'.$row3['id'].'"></div>';

		echo 
		'<div style="float: left; width: 154px; margin-bottom: 20px;"><b>'.'9)</b>
		<select name="txtanswer9R4'.$sort3.'" id="txtanswer9R4">
		<option value=""></option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select>
		'.
		'<input type="hidden" name="id9R4'.$sort3.'" value="'.$row3['id'].'"></div>';
	}
	?>
    <div style="clear: both; width: 618px; margin-top: 20px; text-align: left;">
     <input type="submit" name="submitR4" value="Submit" style="font-family: 'Times New Roman', Times, serif"/>
     <input type="reset" name="resetR4" value="Reset" style="font-family: 'Times New Roman', Times, serif"/>
     </div>
    </form>
    <?php
if(isset($_POST['submitR4']))
{
	$countR4=0;
	$kR4=1;
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($iR4=0;$iR4<$sort3;$iR4++)
	{
	$id1R4=$_POST['id1R4'.$kR4];
	$id2R4=$_POST['id2R4'.$kR4];
	$id3R4=$_POST['id3R4'.$kR4];
	$id4R4=$_POST['id4R4'.$kR4];
	$id5R4=$_POST['id5R4'.$kR4];
	$id6R4=$_POST['id6R4'.$kR4];
	$id7R4=$_POST['id7R4'.$kR4];
	$id8R4=$_POST['id8R4'.$kR4];
	$id9R4=$_POST['id9R4'.$kR4];
	$id10R4=$_POST['id10R4'.$kR4];
	$answer1R4=$_POST['txtanswer1R4'.$kR4];
	$answer2R4=$_POST['txtanswer2R4'.$kR4];
	$answer3R4=$_POST['txtanswer3R4'.$kR4];
	$answer4R4=$_POST['txtanswer4R4'.$kR4];
	$answer5R4=$_POST['txtanswer5R4'.$kR4];
	$answer6R4=$_POST['txtanswer6R4'.$kR4];
	$answer7R4=$_POST['txtanswer7R4'.$kR4];
	$answer8R4=$_POST['txtanswer8R4'.$kR4];
	$answer9R4=$_POST['txtanswer9R4'.$kR4];
	$answer10R4=$_POST['txtanswer10R4'.$kR4];
	
	$strSQL2R4 = "SELECT * FROM lessons_readchoose WHERE id='".$id1R4."' AND id='".$id2R4."' AND id='".$id3R4."' AND id='".$id4R4."' AND id='".$id5R4."' AND id='".$id6R4."' AND id='".$id7R4."' AND id='".$id8R4."' AND id='".$id9R4."' AND id='".$id10R4."'";
	//echo $strSQL2;
	$result2R4=mysql_query($strSQL2R4,$link);
	
	while($row2R4=mysql_fetch_array($result2R4))
	{
		if($row2R4['choose1']==$answer1R4)
		{
			//echo '<b>1) '.$answer1R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>1) '.$answer1R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer1R4']=$answer1R4;
		if($row2R4['choose2']==$answer2R4)
		{
			//echo '<b>2) '.$answer2R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>2) '.$answer2R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer2R4']=$answer2R4;
		if($row2R4['choose3']==$answer3R4)
		{
			//echo '<b>3) '.$answer3R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>3) '.$answer3R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer3R4']=$answer3R4;
		if($row2R4['choose4']==$answer4R4)
		{
			//echo '<b>4) '.$answer4R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>4) '.$answer4R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer4R4']=$answer4R4;
		if($row2R4['choose5']==$answer5R4)
		{
			//echo '<b>5) '.$answer5R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>5) '.$answer5R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer5R4']=$answer5R4;
		if($row2R4['choose6']==$answer6R4)
		{
			//echo '<b>6) '.$answer6R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>6) '.$answer6R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer6R4']=$answer6R4;
		if($row2R4['choose7']==$answer7R4)
		{
			//echo '<b>7) '.$answer7R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>7) '.$answer7R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer7R4']=$answer7R4;
		if($row2R4['choose8']==$answer8R4)
		{
			//echo '<b>8) '.$answer8R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>8) '.$answer8R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer8R4']=$answer8R4;
		if($row2R4['choose9']==$answer9R4)
		{
			//echo '<b>9) '.$answer9R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>9) '.$answer9R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer9R4']=$answer9R4;
		if($row2R4['choose10']==$answer10R4)
		{
			//echo '<b>10) '.$answer10R4.'</b><br/>';
			$countR4+=1;
		}
		else
		{
			//echo '<b>10) '.$answer10R4.'</b><br/>';
			$countR4+=0;
		}
		$_SESSION['answer10R4']=$answer10R4;
		}
	$kR4++;
	$_SESSION['countR4']=$countR4;
	}
}
	?>
    <?php
	//echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	if(isset($_SESSION['answer1R4']))
	{
		echo '<b>1) '.$_SESSION['answer1R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer2R4']))
	{
		echo '<b>2) '.$_SESSION['answer2R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer3R4']))
	{
		echo '<b>3) '.$_SESSION['answer3R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer4R4']))
	{
		echo '<b>4) '.$_SESSION['answer4R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer5R4']))
	{
		echo '<b>5) '.$_SESSION['answer5R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer6R4']))
	{
		echo '<b>6) '.$_SESSION['answer6R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer7R4']))
	{
		echo '<b>7) '.$_SESSION['answer7R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer8R4']))
	{
		echo '<b>8) '.$_SESSION['answer8R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer9R4']))
	{
		echo '<b>9) '.$_SESSION['answer9R4'].'</b><br/>';
	}
	if(isset($_SESSION['answer10R4']))
	{
		echo '<b>10) '.$_SESSION['answer10R4'].'</b><br/>';
	}
	if(isset($_POST['subFinish']))
	{
		$strSQL5R4 = "SELECT * FROM lessons_readchoose WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,10";
		$result5R4 = mysql_query($strSQL5R4, $link);
		echo '<b><i>Đáp án đúng:</i></b><br/>';
		while($row5R4=mysql_fetch_array($result5R4))
		{
			
				echo '<b><i>1)</b></i> ';
				echo '<b>'.$row5R4['choose1'].'</b><br/>';	
				echo '<b><i>2)</b></i> ';
				echo '<b>'.$row5R4['choose2'].'</b><br/>';
				echo '<b><i>3)</b></i> ';
				echo '<b>'.$row5R4['choose3'].'</b><br/>';
				echo '<b><i>4)</b></i> ';
				echo '<b>'.$row5R4['choose4'].'</b><br/>';
				echo '<b><i>5)</b></i> ';
				echo '<b>'.$row5R4['choose5'].'</b><br/>';
				echo '<b><i>6)</b></i> ';
				echo '<b>'.$row5R4['choose6'].'</b><br/>';
				echo '<b><i>7)</b></i> ';
				echo '<b>'.$row5R4['choose7'].'</b><br/>';
				echo '<b><i>8)</b></i> ';
				echo '<b>'.$row5R4['choose8'].'</b><br/>';
				echo '<b><i>9)</b></i> ';
				echo '<b>'.$row5R4['choose9'].'</b><br/>';
				echo '<b><i>10)</b></i> ';
				echo '<b>'.$row5R4['choose10'].'</b><br/>';
		}
	}
	?>
    </div>
     <!-- Write phần 1-->
    <div class="TabbedPanelsContent">
    Viết: 1 phần (10 điểm)<br />
    - Phần 1: <i>5 câu hỏi (10 điểm).</i> Cho sẵn 5 câu, viết lại các câu đó với những cách diễn đạt khác đã được gợi ý bằng 1-2 từ sao cho ý nghĩa các câu đó không thay đổi.<br />
    <form name="W1" id="W1" action="#" method="post">
	<?php
	$strSQL4 = "SELECT * FROM lessons_writeblank WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
	$result4 = mysql_query($strSQL4, $link);
	$sort4=0;
	while($row4=mysql_fetch_array($result4))
	{
		$sort4++;
		echo '<div style="float: left; width: 618px; text-align: left; margin-top: 10px;">'.$row4['question'].'</div>';
		echo '<div style="float: left; width: 100px; text-align: left; margin-top: 10px; margin-bottom: 10px;"><b><i>The blank is:</i></b></div>';
		echo 
		'<div style="float: left; width: 518px; margin-top: 10px; margin-bottom: 10px;"><b>'.'</b> <input type="text" name="txtanswerW1'.$sort4.'" id="txtanswerW1" style="width: 200px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="idW1'.$sort4.'" value="'.$row4['id'].'"></div><br/><br/>';
	}
	?>
    <div style="clear: both; width: 618px; margin-top: 20px; text-align: left;">
     <input type="submit" name="submitW1" value="Submit" style="font-family: 'Times New Roman', Times, serif"/>
     <input type="reset" name="resetW1" value="Reset" style="font-family: 'Times New Roman', Times, serif"/>
     </div>
    </form>
    <?php
if(isset($_POST['submitW1']))
{
	$countW1=0;
	$kW1=1;
	$mW1=1;
	$gW1=1;
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($jW1=0;$jW1<$sort4;$jW1++)
	{
	$idW1=$_POST['idW1'.$mW1];
	$answerW1=$_POST['txtanswerW1'.$mW1];
	$_SESSION['answerW11']=$_POST['txtanswerW11'];
	$_SESSION['answerW12']=$_POST['txtanswerW12'];
	$_SESSION['answerW13']=$_POST['txtanswerW13'];
	$_SESSION['answerW14']=$_POST['txtanswerW14'];
	$_SESSION['answerW15']=$_POST['txtanswerW15'];
	$_SESSION['answerW1']=$answerW1;
		//echo '<b>'.$mW1.') '.$answerW1.'</b><br/>';
		//echo '<b>'.$mW1.') '.$_SESSION['answerW1'].'</b><br/>';
		$mW1++;
	}
	
	//echo '<b><i>Đáp án đúng</i></b><br/>';
	for($iW1=0;$iW1<$sort4;$iW1++)
	{
		$idW1=$_POST['idW1'.$kW1];
		$answerW1=$_POST['txtanswerW1'.$kW1];
	
	
		$strSQL4W1 = "SELECT * FROM key_writeblank WHERE writeblaid='".$idW1."' AND keyblank='".$answerW1."'";
		$result4W1=mysql_query($strSQL4W1,$link);
		$totalRow4W1=mysql_num_rows($result4W1);
		if($totalRow4W1>0)
		$countW1+=2;
		$kW1++;
	}
	$_SESSION['countW1']=$countW1;
}
	?>
    <?php
	//echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	if(isset($_SESSION['answerW11']))
	{
		echo '<b>1) '.$_SESSION['answerW11'].'</b><br/>';
	}
	if(isset($_SESSION['answerW12']))
	{
		echo '<b>2) '.$_SESSION['answerW12'].'</b><br/>';
	}
	if(isset($_SESSION['answerW13']))
	{
		echo '<b>3) '.$_SESSION['answerW13'].'</b><br/>';
	}
	if(isset($_SESSION['answerW14']))
	{
		echo '<b>4) '.$_SESSION['answerW14'].'</b><br/>';
	}
	if(isset($_SESSION['answerW15']))
	{
		echo '<b>5) '.$_SESSION['answerW15'].'</b><br/>';
	}
		if(isset($_POST['subFinish']))
		{
			echo '<b><i>Các đáp án đúng</i></b><br/>';
			$strSQL2W1 = "SELECT * FROM lessons_writeblank WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
			$result2W1 = mysql_query($strSQL2W1, $link);
			$sort3W1=1;
			while($row2W1 = mysql_fetch_array($result2W1))
			{
				$strSQL3W1 = "SELECT * FROM key_writeblank WHERE writeblaid = '".$row2W1['id']."' ORDER BY id ASC";
				$result3W1 = mysql_query($strSQL3W1, $link);
				
				while($row3W1=mysql_fetch_array($result3W1))
				{
					echo '<b>'.$sort3W1.') '.$row3W1['keyblank'].'</b><br/>';
					
				}
				$sort3W1++;
			}
		}
	?>
    </div>
    <div class="TabbedPanelsContent">
    Bài thi nghe hiểu gồm 2 phần<br />
    Điểm: 20 điểm / 100 điểm<br />
    - Phần 1: <i>5 câu hỏi (10 điểm).</i> Có thể lựa chọn nghe 5 đoạn hội thoại ngắn rồi đánh dấu vào 5 bức tranh / hình ảnh đúng, mỗi hội thoại có 4 - 6 lần đổi vai.<br />
    <form name="L1" id="L1" action="#" method="post">
	<?php
	$strSQL5 = "SELECT * FROM lessons_listenchoose WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
	$result5 = mysql_query($strSQL5, $link);
	$sort5=0;
	while($row5=mysql_fetch_array($result5))
	{
		$sort5++;
		echo'
		Nếu trình duyệt của bạn chưa hỗ trợ hiển thị file âm thanh. Để nghe, vui lòng <a href="CMSforE/'.$row5['audio'].'">download</a> file vào máy tính của bạn.<br/><br/>';
		echo '<audio controls="controls">
			
			<source src="CMSforE/'.$row5['audio'].'" type="audio/mp3" />
			<source src="CMSforE/'.$row5['audio'].'" type="audio/wav">
		  	<source src="CMSforE/'.$row5['audio'].'" type="audio/ogg" />
			<source src="CMSforE/'.$row5['audio'].'" type="audio/x-ms-wma"/>
		  	<source src="CMSforE/'.$row5['audio'].'" type="audio/mpeg" />
			Đoạn này sẽ hiển thị nếu trình duyệt không hỗ trợ
			</audio>';
		
		//Question 1
		echo '<div style="width: 618px; float: left; margin-top: 10px;">'.$row5['ques1'].'</div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-left: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic1'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; text-align: center;"><img src="CMSforE/'.$row5['pic2'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-right: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic3'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-left: 9px; text-align: center;"> 
		<input type="radio" name="txtanswer1L1'.$sort5.'" id="txtanswer1L1" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id1L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; text-align: center;">
		<input type="radio" name="txtanswer1L1'.$sort5.'" id="txtanswer1L1" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id1L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-right: 9px; text-align: center;">
		<input type="radio" name="txtanswer1L1'.$sort5.'" id="txtanswer1L1" style="width: 10px; border: 1px solid #790000;" value="C"/>C'.
		'<input type="hidden" name="id1L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		
		//Question 2
		echo '<div style="width: 618px; float: left; margin-top: 10px;">'.$row5['ques2'].'</div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-left: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic4'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; text-align: center;"><img src="CMSforE/'.$row5['pic5'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-right: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic6'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-left: 9px; text-align: center;"> 
		<input type="radio" name="txtanswer2L1'.$sort5.'" id="txtanswer2L1" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id2L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; text-align: center;">
		<input type="radio" name="txtanswer2L1'.$sort5.'" id="txtanswer2L1" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id2L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-right: 9px; text-align: center;">
		<input type="radio" name="txtanswer2L1'.$sort5.'" id="txtanswer2L1" style="width: 10px; border: 1px solid #790000;" value="C"/>C'.
		'<input type="hidden" name="id2L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		
		//Question 3
		echo '<div style="width: 618px; float: left; margin-top: 10px;">'.$row5['ques3'].'</div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-left: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic7'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; text-align: center;"><img src="CMSforE/'.$row5['pic8'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-right: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic9'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-left: 9px; text-align: center;"> 
		<input type="radio" name="txtanswer3L1'.$sort5.'" id="txtanswer3L1" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id3L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; text-align: center;">
		<input type="radio" name="txtanswer3L1'.$sort5.'" id="txtanswer3L1" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id3L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-right: 9px; text-align: center;">
		<input type="radio" name="txtanswer3L1'.$sort5.'" id="txtanswer3L1" style="width: 10px; border: 1px solid #790000;" value="C"/>C'.
		'<input type="hidden" name="id3L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		
		//Question 4
		echo '<div style="width: 618px; float: left; margin-top: 10px;">'.$row5['ques4'].'</div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-left: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic10'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; text-align: center;"><img src="CMSforE/'.$row5['pic11'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-right: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic12'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-left: 9px; text-align: center;"> 
		<input type="radio" name="txtanswer4L1'.$sort5.'" id="txtanswer4L1" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id4L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; text-align: center;">
		<input type="radio" name="txtanswer4L1'.$sort5.'" id="txtanswer4L1" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id4L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-right: 9px; text-align: center;">
		<input type="radio" name="txtanswer4L1'.$sort5.'" id="txtanswer4L1" style="width: 10px; border: 1px solid #790000;" value="C"/>C'.
		'<input type="hidden" name="id4L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		
		//Question 5
		echo '<div style="width: 618px; float: left; margin-top: 10px;">'.$row5['ques5'].'</div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-left: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic13'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; text-align: center;"><img src="CMSforE/'.$row5['pic14'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo '<div style="width: 200px; float: left; margin-top: 10px; margin-right: 9px; text-align: center;"><img src="CMSforE/'.$row5['pic15'].'" alt="" border="0" width="98px" height="98px"/></div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-bottom: 10px; margin-left: 9px; text-align: center;"> 
		<input type="radio" name="txtanswer5L1'.$sort5.'" id="txtanswer5L1" style="width: 10px; border: 1px solid #790000;" value="A"/>A'.
		'<input type="hidden" name="id5L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-bottom: 10px; text-align: center;">
		<input type="radio" name="txtanswer5L1'.$sort5.'" id="txtanswer5L1" style="width: 10px; border: 1px solid #790000;" value="B"/>B'.
		'<input type="hidden" name="id5L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
		echo 
		'<div style="float: left; width: 200px; margin-top: 10px; margin-bottom: 10px; margin-right: 9px; text-align: center;">
		<input type="radio" name="txtanswer5L1'.$sort5.'" id="txtanswer5L1" style="width: 10px; border: 1px solid #790000;" value="C"/>C'.
		'<input type="hidden" name="id5L1'.$sort5.'" value="'.$row5['id'].'">
		</div>';
	}
	?>
    <div style="clear: both; width: 618px; margin-top: 20px; text-align: left;">
     <input type="submit" name="submitL1" value="Submit" style="font-family: 'Times New Roman', Times, serif"/>
     <input type="reset" name="resetL1" value="Reset" style="font-family: 'Times New Roman', Times, serif"/>
     </div>
    </form>
    <?php
if(isset($_POST['submitL1']))
{
		$countL1=0;
		$kL1=1;
		echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($iL1=0;$iL1<$sort5;$iL1++)
	{
		$id1L1=$_POST['id1L1'.$kL1];
		$id2L1=$_POST['id2L1'.$kL1];
		$id3L1=$_POST['id3L1'.$kL1];
		$id4L1=$_POST['id4L1'.$kL1];
		$id5L1=$_POST['id5L1'.$kL1];
		//$id6L1=$_POST['id6L1'.$kL1];
		$answer1L1=$_POST['txtanswer1L1'.$kL1];
		$answer2L1=$_POST['txtanswer2L1'.$kL1];
		$answer3L1=$_POST['txtanswer3L1'.$kL1];
		$answer4L1=$_POST['txtanswer4L1'.$kL1];
		$answer5L1=$_POST['txtanswer5L1'.$kL1];
		//$answer6L1=$_POST['txtanswer6L1'.$kL1];
	$strSQL2L1 = "SELECT * FROM lessons_listenchoose WHERE id='".$id1L1."' AND id='".$id2L1."' AND id='".$id3L1."' AND id='".$id4L1."' AND id='".$id5L1."'";
	//echo $strSQL2;
	$result2L1=mysql_query($strSQL2L1,$link);
	
	while($row2L1=mysql_fetch_array($result2L1))
	{
	if($row2L1['res1']==$answer1L1)
	{
		//echo '<b>1) '.$answer1.' - </b><font color="#002596">True</font><br/>';
		$countL1+=2;
	}
	else
	{
		//echo '<b>1) '.$answer1.' - </b><font color="#fd0309">False</font><br/>';
		$countL1+=0;
	}
	$_SESSION['answer1L1']=$answer1L1;
	if($row2L1['res2']==$answer2L1)
	{
		//echo '<b>2) '.$answer2.' - </b><font color="#002596">True</font><br/>';
		$countL1+=2;
	}
	else
	{
		//echo '<b>2) '.$answer2.' - </b><font color="#fd0309">False</font><br/>';
		$countL1+=0;
	}
	$_SESSION['answer2L1']=$answer2L1;
	if($row2L1['res3']==$answer3L1)
	{
		//echo '<b>3) '.$answer3.' - </b><font color="#002596">True</font><br/>';
		$countL1+=2;
	}
	else
	{
		//echo '<b>3) '.$answer3.' - </b><font color="#fd0309">False</font><br/>';
		$countL1+=0;
	}
	$_SESSION['answer3L1']=$answer3L1;
	if($row2L1['res4']==$answer4L1)
	{
		//echo '<b>4) '.$answer4.' - </b><font color="#002596">True</font><br/>';
		$countL1+=2;
	}
	else
	{
		//echo '<b>4) '.$answer4.' - </b><font color="#fd0309">False</font><br/>';
		$countL1+=0;
	}
	$_SESSION['answer4L1']=$answer4L1;
	if($row2L1['res5']==$answer5L1)
	{
		//echo '<b>5) '.$answer5.' - </b><font color="#002596">True</font><br/>';
		$countL1+=2;
	}
	else
	{
		//echo '<b>5) '.$answer5.' - </b><font color="#fd0309">False</font><br/>';
		$countL1+=0;
	}
	$_SESSION['answer5L1']=$answer5L1;
	}
	$kL1++;
	$_SESSION['countL1']=$countL1;
	}
}
	?>
    <?php
	//echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	if(isset($_SESSION['answer1L1']))
	{
		echo '<b>1) '.$_SESSION['answer1L1'].'</b><br/>';
	}
	if(isset($_SESSION['answer2L1']))
	{
		echo '<b>2) '.$_SESSION['answer2L1'].'</b><br/>';
	}
	if(isset($_SESSION['answer3L1']))
	{
		echo '<b>3) '.$_SESSION['answer3L1'].'</b><br/>';
	}
	if(isset($_SESSION['answer4L1']))
	{
		echo '<b>4) '.$_SESSION['answer4L1'].'</b><br/>';
	}
	if(isset($_SESSION['answer5L1']))
	{
		echo '<b>5) '.$_SESSION['answer5L1'].'</b><br/>';
	}
if(isset($_POST['subFinish']))
{
	$strSQL5L1 = "SELECT * FROM lessons_listenchoose WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,5";
	$result5L1 = mysql_query($strSQL5L1, $link);
	echo '<b><i>Bài dịch:</i></b><br/>';
	while($row5L1=mysql_fetch_array($result5L1))
	{
		
		echo '<div style="float: left; width: 618px;">'.$row5L1['translate'].'</div>';
		echo '<b><i>Đáp án đúng:</i></b><br/>';
			echo '<b><i>1)</b></i> ';
			echo '<b>'.$row5L1['res1'].'</b><br/>';	
			echo '<b><i>2)</b></i> ';
			echo '<b>'.$row5L1['res2'].'</b><br/>';
			echo '<b><i>3)</b></i> ';
			echo '<b>'.$row5L1['res3'].'</b><br/>';
			echo '<b><i>4)</b></i> ';
			echo '<b>'.$row5L1['res4'].'</b><br/>';
			echo '<b><i>5)</b></i> ';
			echo '<b>'.$row5L1['res5'].'</b><br/>';
			echo '<b><i>6)</b></i> ';
			echo '<b>'.$row5L1['res6'].'</b><br/>';
	}
}
	?>
    </div>
    <div class="TabbedPanelsContent">
    - Phần 2: <i>10 câu hỏi (10 điểm).</i> Nghe một đoạn hội thoại hay độc thoại. Điền vào 10 chi tiết bỏ trống trong bài. Chỗ trống thường là thông tin quan trọng.<br />
    <form name="L2" id="L2" action="#" method="post">
	<?php
	$strSQL6 = "SELECT * FROM lessons_listenfill WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,10";
	$result6 = mysql_query($strSQL6, $link);
	$sort6=0;
	while($row6=mysql_fetch_array($result6))
	{
		$sort6++;
		
		echo $row6['title'].'<br/>';
		
		echo'
		Nếu trình duyệt của bạn chưa hỗ trợ hiển thị file âm thanh. Để nghe, vui lòng <a href="CMSforE/'.$row6['audio'].'">download</a> file vào máy tính của bạn.<br/><br/>';

		echo '<audio controls="controls">
			<source src="CMSforE/'.$row6['audio'].'" type="audio/mp3" />
			<source src="CMSforE/'.$row6['audio'].'" type="audio/wav">
		  	<source src="CMSforE/'.$row6['audio'].'" type="audio/ogg" />
		  	<source src="CMSforE/'.$row6['audio'].'" type="audio/mpeg" />
			Đoạn này sẽ hiển thị nếu trình duyệt không hỗ trợ
			</audio>';
		echo '<div style="width: 598px; border: 1px solid #a2a2a2; padding: 10px;">'.$row6['text'].'</div>';
		echo '<div><b>Answer is:</b></div>';
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'1)</b> <input type="text" name="txtanswer1L2'.$sort6.'" id="txtanswer1L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id1L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'4)</b> <input type="text" name="txtanswer4L2'.$sort6.'" id="txtanswer4L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id4L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'7)</b> <input type="text" name="txtanswer7L2'.$sort6.'" id="txtanswer7L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id7L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'10)</b> <input type="text" name="txtanswer10L2'.$sort6.'" id="txtanswer10L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id10L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'2)</b> <input type="text" name="txtanswer2L2'.$sort6.'" id="txtanswer2L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id2L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px;"><b>'.'5)</b> <input type="text" name="txtanswer5L2'.$sort6.'" id="txtanswer5L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id5L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 312px; margin-top: 10px;"><b>'.'8)</b> <input type="text" name="txtanswer8L2'.$sort6.'" id="txtanswer8L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id8L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 155px; margin-top: 10px;"><b>'.'3)</b> <input type="text" name="txtanswer3L2'.$sort6.'" id="txtanswer3L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id3L2'.$sort6.'" value="'.$row6['id'].'"></div>';
		
		echo 
		'<div style="float: left; width: 154px; margin-top: 10px; margin-bottom: 20px;"><b>'.'6)</b> <input type="text" name="txtanswer6L2'.$sort6.'" id="txtanswer6L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id6L2'.$sort6.'" value="'.$row6['id'].'"></div>';

		echo 
		'<div style="float: left; width: 154px; margin-top: 10px; margin-bottom: 20px;"><b>'.'9)</b> <input type="text" name="txtanswer9L2'.$sort6.'" id="txtanswer9L2" style="width: 50px; border: 1px solid #790000;"/>'.
		'<input type="hidden" name="id9L2'.$sort6.'" value="'.$row6['id'].'"></div>';
	}
	?>
    <div style="clear: both; width: 618px; margin-top: 20px; text-align: left;">
     <input type="submit" name="submitL2" value="Submit" style="font-family: 'Times New Roman', Times, serif"/>
     <input type="reset" name="resetL2" value="Reset" style="font-family: 'Times New Roman', Times, serif"/>
     </div>
    </form>
    <?php
if(isset($_POST['submitL2']))
{
	$countL2=0;
	$kL2=1;
	echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	for($iL2=0;$iL2<$sort6;$iL2++)
	{
	$id1L2=$_POST['id1L2'.$kL2];
	$id2L2=$_POST['id2L2'.$kL2];
	$id3L2=$_POST['id3L2'.$kL2];
	$id4L2=$_POST['id4L2'.$kL2];
	$id5L2=$_POST['id5L2'.$kL2];
	$id6L2=$_POST['id6L2'.$kL2];
	$id7L2=$_POST['id7L2'.$kL2];
	$id8L2=$_POST['id8L2'.$kL2];
	$id9L2=$_POST['id9L2'.$kL2];
	$id10L2=$_POST['id10L2'.$kL2];
	
	$answer1L2=$_POST['txtanswer1L2'.$kL2];
	$answer2L2=$_POST['txtanswer2L2'.$kL2];
	$answer3L2=$_POST['txtanswer3L2'.$kL2];
	$answer4L2=$_POST['txtanswer4L2'.$kL2];
	$answer5L2=$_POST['txtanswer5L2'.$kL2];
	$answer6L2=$_POST['txtanswer6L2'.$kL2];
	$answer7L2=$_POST['txtanswer7L2'.$kL2];
	$answer8L2=$_POST['txtanswer8L2'.$kL2];
	$answer9L2=$_POST['txtanswer9L2'.$kL2];
	$answer10L2=$_POST['txtanswer10L2'.$kL2];
	$strSQL2L2 = "SELECT * FROM lessons_listenfill WHERE id='".$id1L2."' AND id='".$id2L2."' AND id='".$id3L2."' AND id='".$id4L2."' AND id='".$id5L2."' AND id='".$id6L2."' AND id='".$id7L2."' AND id='".$id8L2."' AND id='".$id9L2."' AND id='".$id10L2."'";
	//echo $strSQL2;
	$result2L2=mysql_query($strSQL2L2,$link);
	
	while($row2L2=mysql_fetch_array($result2L2))
	{
		if($row2L2['blank1']==$answer1L2)
		{
			//echo '<b>1) '.$answer1L2.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>1) '.$answer1.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer1L2']=$answer1L2;
		if($row2L2['blank2']==$answer2L2)
		{
			//echo '<b>2) '.$answer2.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>2) '.$answer2.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer2L2']=$answer2L2;
		if($row2L2['blank3']==$answer3L2)
		{
			//echo '<b>3) '.$answer3.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>3) '.$answer3.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer3L2']=$answer3L2;
		if($row2L2['blank4']==$answer4L2)
		{
			//echo '<b>4) '.$answer4.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>4) '.$answer4.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer4L2']=$answer4L2;
		if($row2L2['blank5']==$answer5L2)
		{
			//echo '<b>5) '.$answer5.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>5) '.$answer5.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer5L2']=$answer5L2;
		if($row2L2['blank6']==$answer6L2)
		{
			//echo '<b>6) '.$answer6.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>6) '.$answer6.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer6L2']=$answer6L2;
		if($row2L2['blank7']==$answer7L2)
		{
			//echo '<b>7) '.$answer7.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>7) '.$answer7.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer7L2']=$answer7L2;
		if($row2L2['blank8']==$answer8L2)
		{
			//echo '<b>8) '.$answer8.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>8) '.$answer8.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer8L2']=$answer8L2;
		if($row2L2['blank9']==$answer9L2)
		{
			//echo '<b>9) '.$answer9.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>9) '.$answer9.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer9L2']=$answer9L2;
		if($row2L2['blank10']==$answer10L2)
		{
			//echo '<b>10) '.$answer10.' - </b><font color="#002596">True</font><br/>';
			$countL2+=1;
		}
		else
		{
			//echo '<b>10) '.$answer10.' - </b><font color="#fd0309">False</font><br/>';
			$countL2+=0;
		}
		$_SESSION['answer10L2']=$answer10L2;
	}
	$kL2++;
	$_SESSION['countL2']=$countL2;
	}
}
	?>
    <?php
	//echo '<b><i>Đáp án vừa trả lời</i></b><br/>';
	if(isset($_SESSION['answer1L2']))
	{
		echo '<b>1) '.$_SESSION['answer1L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer2L2']))
	{
		echo '<b>2) '.$_SESSION['answer2L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer3L2']))
	{
		echo '<b>3) '.$_SESSION['answer3L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer4L2']))
	{
		echo '<b>4) '.$_SESSION['answer4L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer5L2']))
	{
		echo '<b>5) '.$_SESSION['answer5L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer6L2']))
	{
		echo '<b>6) '.$_SESSION['answer6L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer7L2']))
	{
		echo '<b>7) '.$_SESSION['answer7L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer8L2']))
	{
		echo '<b>8) '.$_SESSION['answer8L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer9L2']))
	{
		echo '<b>9) '.$_SESSION['answer9L2'].'</b><br/>';
	}
	if(isset($_SESSION['answer10L2']))
	{
		echo '<b>10) '.$_SESSION['answer10L2'].'</b><br/>';
	}
	?>
    <?php
	if(isset($_POST['subFinish']))
	{
	$strSQL6L2 = "SELECT * FROM lessons_listenfill WHERE catid = '".$_GET['testdetailid']."' AND state = 1 ORDER BY id ASC LIMIT 0,10";
	$result6L2 = mysql_query($strSQL6L2, $link);
	echo '<b><i>Bài dịch:</i></b><br/>';
	while($row6L2=mysql_fetch_array($result6L2))
	{
		
		echo '<div style="float: left; width: 618px;">'.$row6L2['translate'].'</div>';
		echo '<b><i>Đáp án đúng:</i></b><br/>';
			echo '<b><i>1)</b></i> ';
			echo '<b>'.$row6L2['blank1'].'</b><br/>';	
			echo '<b><i>2)</b></i> ';
			echo '<b>'.$row6L2['blank2'].'</b><br/>';
			echo '<b><i>3)</b></i> ';
			echo '<b>'.$row6L2['blank3'].'</b><br/>';
			echo '<b><i>4)</b></i> ';
			echo '<b>'.$row6L2['blank4'].'</b><br/>';
			echo '<b><i>5)</b></i> ';
			echo '<b>'.$row6L2['blank5'].'</b><br/>';
			echo '<b><i>6)</b></i> ';
			echo '<b>'.$row6L2['blank6'].'</b><br/>';	
			echo '<b><i>7)</b></i> ';
			echo '<b>'.$row6L2['blank7'].'</b><br/>';
			echo '<b><i>8)</b></i> ';
			echo '<b>'.$row6L2['blank8'].'</b><br/>';
			echo '<b><i>9)</b></i> ';
			echo '<b>'.$row6L2['blank9'].'</b><br/>';
			echo '<b><i>10)</b></i> ';
			echo '<b>'.$row6L2['blank10'].'</b><br/>';
			echo '<b><i>Các đáp án tham khảo khác:</i></b><br/>';
			echo $row6L2['note'];
	}
	}
	?>
    </div>

    </div>
    <div style="width: 618px; margin-top: 10px; text-align: center;">
    <form action="#" method="post">
    <input type="submit" name="subFinish" value="Finish" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;" onclick="return confirm('Bạn có chắc chắn nộp bài ngay bây giờ không ?');"/>
    </form>
    <?php
	if(isset($_SESSION['countR1']) && isset($_SESSION['countR2']) && isset($_SESSION['countR3']) && isset($_SESSION['countR4']))
	{
		$R1=$_SESSION['countR1'];
	
		$R2=$_SESSION['countR2'];
	
		$R3=$_SESSION['countR3'];
	
		$R4=$_SESSION['countR4'];
		
		$R=$R1+$R2+$R3+$R4;
	}
	if(isset($_SESSION['countW1']))
	{
		$W1=$_SESSION['countW1'];
		
		$W=$W1;
	}
	if(isset($_SESSION['countL1']) && isset($_SESSION['countL2']))
	{
		$L1=$_SESSION['countL1'];
	
		$L2=$_SESSION['countL2'];
	
		$L=$L1+$L2;
	}
	if(isset($R) && isset($W) && isset($L))
	{
		$T=$R+$W+$L;
	}
	if(isset($_POST['subFinish']))
	{
		if(!isset($_SESSION['logUser']))
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
				$sql="SELECT * FROM score WHERE userid = '".$_SESSION['logUser']."' AND catid = '".$_GET['testdetailid']."'";
				$query=mysql_query($sql,$link);
				$num=mysql_num_rows($query);
				if($num>0)
				{
					echo '<h2>Bạn đã làm bài test này rồi. Vui lòng chuyển qua bài test khác</h2>';	
				}
				else
				{
					$sql1="INSERT INTO score (test_date, reading_score, writing_score, listening_score, total_score, userid, catid) VALUES (NOW(), '".$R."', '".$W."', '".$L."', '".$T."', '".$_SESSION['logUser']."', '".$_GET['testdetailid']."')";
					$query1=mysql_query($sql1,$link);
					if($query1)
					{
						echo 'Bạn đã hoàn thành bài test của mình';	
					}
					else
					{
						echo 'Có lỗi. Vui lòng thử lại sau';
					}
				}
			}
		}
	}
	?>
    </div>
</div>



</div>