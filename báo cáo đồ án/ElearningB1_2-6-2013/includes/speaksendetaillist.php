<?php
if(isset($_GET['speaksendetailid']))
{
	$speaktopdetailid=$_GET['speaksendetailid'];
	$strSQL = "SELECT * FROM lessons_speaksentence WHERE catid='".$_GET['speaksendetailid']."' AND state=1";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
	$totalRow=mysql_num_rows($result);
}
else
{
	header('Location: view_speaksencatlist.php');
}
?>
<div class="heading">
<div class="title">
&laquo; Luyện kĩ năng nói (Bài nói dưới dạng các câu hỏi thực hành)
</div>
<div class="icon_speaking">
</div>
</div>

<div class="content">
<div class="uleft">
<ul>
<form action="#" method="post" enctype="multipart/form-data">
	<?php
	
	echo '<b>Lesson: </b><br/><br/>';
	$strSQL = "SELECT * FROM lessons_speaksentence WHERE catid ='".$_GET['speaksendetailid']."' AND state=1 LIMIT 0,1";
	$result = mysql_query($strSQL, $link);
	$sort=0;
	while($row=mysql_fetch_array($result))
	{
		$sort++;
		echo'
		Nếu trình duyệt của bạn chưa hỗ trợ hiển thị file âm thanh. Để nghe, vui lòng <a href="CMSforE/'.$row['audio'].'">download</a> file vào máy tính của bạn.<br/><br/>';

		echo '<audio controls="controls">
			<source src="CMSforE/'.$row['audio'].'" type="audio/mp3" />
			<source src="CMSforE/'.$row['audio'].'" type="audio/wav">
		  	<source src="CMSforE/'.$row['audio'].'" type="audio/ogg" />
		  	<source src="CMSforE/'.$row['audio'].'" type="audio/mpeg" />
			Đoạn này sẽ hiển thị nếu trình duyệt không hỗ trợ
			</audio>';
		
		echo 
		'<div style="width: 618px; text-align: left;">'.$row['sentence'].'</div>';
		
	}
	?>
    
</form>
</ul>
</div>
</div>