<?php
	if(isset($_GET['nid']))
	{
		$strSQL="SELECT * FROM news WHERE id='".$_GET['nid']."'";
		$result=mysql_query($strSQL,$link);
		$row=mysql_fetch_array($result);	
	}
	else
	{
		header('Location: newsList.php');	
	}
?>
<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle"><?php echo $row['title']; ?></div>
</div>
<div class="defaultContent">
<ul>
	<?php
	echo '<li>';
	echo '<div class="Title">'.$row['title'].'</div>';
	echo '<div class="Content">'.$row['content'].'</div>';
	echo '</li>';
	?>
</ul>
<div class="AddThis">
		<!-- AddThis Button BEGIN -->
        <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=ra-5153cdc262d2d439"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5153cdc262d2d439"></script>
        <!-- AddThis Button END -->
</div>
<font style="color: #a80002; font-weight: bold;">Các tin khác:</font>
<hr style="border-top: 1px solid #ccc;" />

<div class="otherNews">
<ul>
	<?php
	$strSQL1="SELECT * FROM news WHERE id!='".$row['id']."' ORDER BY id DESC limit 0,10";
	$result1=mysql_query($strSQL1,$link);
	while($row1=mysql_fetch_array($result1))
	{
		echo '<li>';
		echo '<div class="otherNews_Icon"></div>';
		echo '<div class="otherNews_Title"><a href="newsDetail.php?nid='.$row1['id'].'">'.$row1['title'].'</a></div>';
		echo '</li>';
	}
	?>
</ul>
</div>

</div>

</div>