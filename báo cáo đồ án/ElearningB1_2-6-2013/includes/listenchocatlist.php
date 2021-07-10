<?php
if(isset($_GET['listenchoid']))
{
	$strSQL = "SELECT * FROM categories WHERE ParentID='".$_GET['listenchoid']."'";
	$result = mysql_query($strSQL,$link);
	$row = mysql_fetch_array($result);
}
else
{
	//header('Location: index.php');
}
?>
<div class="heading">
<div class="title">
&laquo; Luyện kĩ năng nghe
</div>
<div class="icon_listening">
</div>
</div>

<div class="content">

<div class="uleft">
<ul>
	<?php
	$p=20;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];//Lấy biến n trên trình duyệt
	}
	else
	{
		$n=1;
	}
	$s=($n-1)*$p;
	$sql1="SELECT * FROM categories WHERE ParentID = '".$_GET['listenchoid']."' AND state = 1";
	$result1=mysql_query($sql1,$link);
	$n_record=mysql_num_rows($result1);
	
	function view_page()
	{
		global $n_record;
		global $p;
		for($i=1;$i<=ceil($n_record/$p);$i++)
		{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="view_listenchocatlist.php?n='.$i.'&listenchoid='.$_GET['listenchoid'].'" style="color: #FFF; background: #790000; border: 1px solid #790000; padding: 2px; text-decoration: underline;">'.$i.'</a><font color="#790000">&nbsp;&rsaquo;&nbsp;</font>';			
				}
				else
				{
					echo '<a href="view_listenchocatlist.php?n='.$i.'&listenchoid='.$_GET['listenchoid'].'" style="color: #790000; background: #ccc; border: 1px solid #790000; padding: 2px; text-decoration: underline;">'.$i.'</a><font color="#790000">&nbsp;&rsaquo;&nbsp;</font>';
				}
		}
			
			echo '<br/><br/>';
	}
	$sql1.=" ORDER BY id ASC limit $s,$p";
	$result2=mysql_query($sql1, $link);
	$sort=0;
	view_page();
	while($row2=mysql_fetch_array($result2))
	{
		$sort++;
		echo '<li>
		<div class="left"><a href="view_listenchodetaillist.php?listenchodetailid='.$row2['id'].'">'.$sort.' - '.$row2['name'].' - '.$row2['ParentID'].'</a><div>
		
		</li>';
	}
	view_page();
	?>
</ul>
</div>
</div>