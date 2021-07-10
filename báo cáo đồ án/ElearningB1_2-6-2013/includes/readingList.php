<div class="heading">
<div class="title">
Luyện kĩ năng đọc</div>
</div>
<div class="content">
<div class="uleft">
	<div class="content_box">
		<div class="cpanel_left">
        <?php
		//Readad
		$strSQL7 = "SELECT * FROM categories WHERE control = 'readad'";
		$result7 = mysql_query($strSQL7, $link); 	
		while($row7 = mysql_fetch_array($result7))
		{
			echo '<a href="view_readadcatlist.php?readadid='.$row7['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/advertising_icon.jpg" alt="" border="0" height="90"/>
            <div class="name">Reading Advertisement</div>
            </div>
			</a>';
		}
        ?>
        <?php
		//Readtest
		$strSQL8 = "SELECT * FROM categories WHERE control = 'readtest'";
		$result8 = mysql_query($strSQL8, $link); 	
		while($row8 = mysql_fetch_array($result8))
		{
			echo '<a href="view_readtestcatlist.php?readtestid='.$row8['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/exam_icon.jpg" alt="" border="0" height="90"/>
            <div class="name">Reading & Testing</div>
            </div>		
			</a>';
		}
		?>
        <?php
		//Readdes
		$strSQL9 = "SELECT * FROM categories WHERE control = 'readdes'";
		$result9 = mysql_query($strSQL9, $link); 	
		while($row9 = mysql_fetch_array($result9))
		{
			echo '<a href="view_readdescatlist.php?readdesid='.$row9['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/address_book.png" alt="" border="0" height="90"/>
            <div class="name">Reading & Choosing</div>
            </div>
			</a>';
		}
		?>
		<?php
		//Readcorrect
		$strSQL10 = "SELECT * FROM categories WHERE control = 'readcor'";
		$result10 = mysql_query($strSQL10, $link); 	
		while($row10 = mysql_fetch_array($result10))
		{
         	echo '<a href="view_readcorcatlist.php?readcorid='.$row10['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/address_book1.png" alt="" border="0" height="90"/>
            <div class="name">Reading & Checking</div>
            </div>
			</a>';
		}
		?>
        <?php
		//Readanswer
		$strSQL11 = "SELECT * FROM categories WHERE control = 'readanswer'";
		$result11 = mysql_query($strSQL11, $link); 	
		while($row11 = mysql_fetch_array($result11))
		{
			echo '<a href="view_readanscatlist.php?readansid='.$row11['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/aqua_read_only.png" alt="" border="0" height="90"/>
            <div class="name">Reading & Answering</div>
            </div>
			</a>';
		}
		?>
		<?php
		//Readchoose
		$strSQL12 = "SELECT * FROM categories WHERE control = 'readchoose'";
		$result12 = mysql_query($strSQL12, $link); 	
		while($row12 = mysql_fetch_array($result12))
		{
         	echo '<a href="view_readchocatlist.php?readchoid='.$row12['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/address_book2.png" alt="" border="0" height="90"/>
            <div class="name">Reading & Filling</div>
            </div>
			</a>';
		}
		?>
        </div>
    </div>
</div>
</div>