<?php
	$strSQL="SELECT * FROM ad WHERE position=7 AND priority>0 AND state=1 ORDER BY id ASC";
	$query=mysql_query($strSQL,$link);
	while($row=mysql_fetch_array($query))
	{
 		echo '<a target="_blank" href="'.$row['link'].'">
		<img src="admin/'.$row['file'].'" alt="'.$row['title'].'" border="0" />
		</a>';
	}
?>