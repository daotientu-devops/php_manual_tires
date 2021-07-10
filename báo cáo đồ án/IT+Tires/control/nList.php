<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Tin tức lốp xe ô tô</div>
</div>
<div class="defaultContent">
<ul>
	<?php
	$p=5;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;
	}
	$s=($n-1)*$p;
	$sql1="SELECT * FROM news WHERE state=1";
	$result=mysql_query($sql1,$link);
	$n_record=mysql_num_rows($result);
	$numberPage=floor($n_record/$p)+1;
	function view_page()
	{
		global $numberPage;
		global $n_record;
		global $p;
		if(isset($_GET['n']) && $_GET['n']>1 && $_GET['n']==$numberPage)
		{
			echo '<a href="newsList.php?n=1"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">Trang đầu</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']>1 && $_GET['n']<$numberPage)
		{
			echo '<a href="newsList.php?n=1"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">Trang đầu</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']>1)
		{
			echo '<a href="newsList.php?n='.($_GET['n']-1).'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">&laquo;</font></a>';
		}
		for($i=1;$i<=$numberPage;$i++)
		{
			if(isset($_GET['n']) && $i==$_GET['n'])
			{
				echo '<a href="newsList.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;</font>';
			}
			else
			{
				echo '<a href="newsList.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;</font>';
			}
		}
		if(isset($_GET['n']) && $_GET['n']<$numberPage)
		{
			echo '<a href="newsList.php?n='.($_GET['n']+1).'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">&raquo;</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']<$numberPage && $_GET['n']>1)
		{
			echo '<a href="newsList.php?n='.$numberPage.'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">Trang cuối</font></a>';
		}
		if(isset($_GET['n']) && $_GET['n']<$numberPage && $_GET['n']==1)
		{
			echo '<a href="newsList.php?n='.$numberPage.'"><font style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">Trang cuối</font></a>';
		}
	}
	$sql1.=" ORDER BY id DESC limit $s,$p";
	$result1=mysql_query($sql1,$link);
	$count1=0;
	while($row1=mysql_fetch_array($result1))
	{
		echo '<li>';
		echo '<div class="newsList_Image">
		<a href="newsDetail.php?nid='.$row1['id'].'"><img src="admin/'.$row1['picture'].'" alt="'.$row1['title'].'" border="0" width="120px" /></a>
		</div>';
		echo '<div class="newsList_Content">
		<div class="newsList_Title"><a href="newsDetail.php?nid='.$row1['id'].'">'.$row1['title'].'</a></div>
		<div class="newsList_Summary">'.$row1['description'].'</div>
		</div>';
		echo '</li>';
		echo '<div class="spacing"></div>';
	}
	view_page();
	?>
</ul>
</div>
</div>