<div class="heading">
<div class="title">
Luyện kĩ năng viết</div>
</div>
<div class="content">
<div class="uleft">
	<div class="content_box">
		<div class="cpanel_left">
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