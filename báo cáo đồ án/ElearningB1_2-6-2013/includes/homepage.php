<?php
if(isset($_GET['action']))
{
	if($_GET['action']=='logout')
	{
		unset($_SESSION['loggedUser']);
		unset($_SESSION['logUser']);
		header ('Location: index.php');
	}
}
?>
<?php
if(isset($_SESSION['remember']))
{
	setcookie("username",$username,time()+7200);
	setcookie("password",$password,time()+7200);
}
?>
<div class="heading">
<div class="title">
Hệ thống đào tạo trực tuyến</div>
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
		<?php
		//Writearticle
		$strSQL13 = "SELECT * FROM categories WHERE control = 'writearticle'";
		$result13 = mysql_query($strSQL13, $link); 	
		while($row13 = mysql_fetch_array($result13))
		{
			echo '<a href="view_writeartcatlist.php?writeartid='.$row13['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/text_edit.png" alt="" border="0" height="90"/>
            <div class="name">Writing a Article</div>
            </div>
			</a>';
		}
		?>
        <?php
		//Writeanswer
		$strSQL14 = "SELECT * FROM categories WHERE control = 'writeanswer'";
		$result14 = mysql_query($strSQL14, $link); 	
		while($row14 = mysql_fetch_array($result14))
		{   
			echo '<a href="view_writeanscatlist.php?writeansid='.$row14['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/graphics_pen.png" alt="" border="0" height="90"/>
            <div class="name">Writing & Answering</div>
            </div>
			</a>';
		}
		?>
        <?php
		//Writeblank
		$strSQL15 = "SELECT * FROM categories WHERE control = 'writeblank'";
		$result15 = mysql_query($strSQL15, $link); 	
		while($row15 = mysql_fetch_array($result15))
		{ 
			echo '<a href="view_writeblacatlist.php?writeblaid='.$row15['id'].'">
			<div class="icon_wrapper">
            <img src="images/icon/writing.png" alt="" border="0" height="90"/>
            <div class="name">Rewriting the second</div>
            </div>
			</a>';
		}
		?>

		</div>
	</div>
</div>
</div>