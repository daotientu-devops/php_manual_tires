<div class="heading">
<div class="title">
Luyện kĩ năng nghe</div>
</div>
<div class="content">
<div class="uleft">
	<div class="content_box">
		<div class="cpanel_left">
        <?php
		//Listenchoose
		$strSQL = "SELECT * FROM categories WHERE control = 'listenchoose'";
		$result = mysql_query($strSQL, $link); 	
		while($row = mysql_fetch_array($result))
		{
			echo '<a href="view_listenchocatlist.php?listenchoid='.$row['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/cd-audio-icon.png" alt="" border="0" height="90"/>
            <div class="name">Listening & Choosing</div>
            </div>
			</a>';
		}
		?>
        <?php
		//Listencorrect
		$strSQL1 = "SELECT * FROM categories WHERE control = 'listencor'";
		$result1 = mysql_query($strSQL1, $link); 	
		while($row1 = mysql_fetch_array($result1))
		{
			echo '<a href="view_listencorcatlist.php?listencorid='.$row1['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/400-04742717w.jpg" alt="" border="0" height="90"/>
            <div class="name">Listening & Checking</div>
            </div>
			</a>';
		}
		?>   
		<?php
		//Listencorrect
		$strSQL2 = "SELECT * FROM categories WHERE control = 'listendialog'";
		$result2 = mysql_query($strSQL2, $link); 	
		while($row2 = mysql_fetch_array($result2))
		{
			echo '<a href="view_listendiacatlist.php?listendiaid='.$row2['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/mp3_player_black.png" alt="" border="0" height="90"/>
            <div class="name">Listening Dialog</div>
            </div>
			</a>';
		}
		?>
        <?php
		//Listenfill
		$strSQL3 = "SELECT * FROM categories WHERE control = 'listenfill'";
		$result3 = mysql_query($strSQL3, $link); 	
		while($row3 = mysql_fetch_array($result3))
		{
         	echo '<a href="view_listenfillcatlist.php?listenfillid='.$row3['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/8441957-illustration-of-head-phone-icon-on-white-background.jpg" alt="" border="0" height="90"/>
            <div class="name">Listening & Filling</div>
            </div>
			</a>';
		}
		?>
        </div>
    </div>
</div>
</div>