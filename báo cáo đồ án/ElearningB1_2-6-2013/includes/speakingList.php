<div class="heading">
<div class="title">
Luyện kĩ năng nói</div>
</div>
<div class="content">
<div class="uleft">
	<div class="content_box">
		<div class="cpanel_left">
        <?php
		//Speakintro
		$strSQL4 = "SELECT * FROM categories WHERE control = 'speakintro'";
		$result4 = mysql_query($strSQL4, $link); 	
		while($row4 = mysql_fetch_array($result4))
		{
			echo '<a href="view_speakintcatlist.php?speakintid='.$row4['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/icon_speaking2_orange.png" alt="" border="0" height="90"/>
            <div class="name">Speaking & Introducing</div>
            </div>
			</a>';		
		}
		?>
        <?php
		//Speaktopic
		$strSQL5 = "SELECT * FROM categories WHERE control = 'speaktopic'";
		$result5 = mysql_query($strSQL5, $link); 	
		while($row5 = mysql_fetch_array($result5))
		{
			echo '<a href="view_speaktopcatlist.php?speaktopid='.$row5['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/003155-firey-orange-jelly-icon-media-loud-speaker.png" alt="" border="0" height="90"/>
            <div class="name">Speaking Topic</div>
            </div>
			</a>';
		}
        ?>   
		<?php
		//Speaksentence
		$strSQL6 = "SELECT * FROM categories WHERE control = 'speaksentence'";
		$result6 = mysql_query($strSQL6, $link); 	
		while($row6 = mysql_fetch_array($result6))
		{
         	echo '<a href="view_speaksencatlist.php?speaksenid='.$row6['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/icon_Speaking-Training.png" alt="" border="0" height="90"/>
            <div class="name">Speaking to Communicate</div>
            </div>
			</a>';
		}
		?>
        </div>
    </div>
</div>
</div>