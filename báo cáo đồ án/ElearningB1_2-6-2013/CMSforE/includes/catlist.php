<div class="heading">
<div class="title">
&laquo; Quản lý các danh mục chức năng - các khóa học
</div>
<div class="icon_category">
</div>
</div>

<div class="content">
<div class="title">
	<a href="categories.php?action=new">&piv; Insert a new course
<div class="icon_addcategory"></div></a>
</div>

<div class="uleft">
<ul>
<?php

	if(isset($_GET['cid']))
	{
		$sql1 = "SELECT * FROM categories WHERE ParentID ='".$_GET['cid']."' " ;
	}
	else
	{
		$sql1 = "SELECT * FROM categories WHERE ParentID = 0 ";
	}
/////////////////////

	$sql1.=" ORDER BY id ASC";
	$result1 = mysql_query($sql1, $link);
	$sort = 0;
	while($row1 = mysql_fetch_array($result1))
	{
		$sort++;
		echo '<li>
		<div class="left"><a href="categories.php?cid='.$row1['id'].'">'.$sort.' - '.$row1['name'].' - '.$row1['ParentID'].
		'</a></div>
		<div class="right"><a href="categories.php?action=edit&cid='.$row1['id'].'"><img src="images/icon/icon_edit.png" border="0" alt=""/></a>
<a href="categories.php?action=delete&cid='.$row1['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></div>
		</li>';	
	}
	
?>

</ul>
</div>

</div>

<?php
//////////////////////////
if(isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('includes/addcat.php');
		break;
		case 'edit':
		include('includes/editcat.php');
		break;
		case 'delete':
		include('includes/deletecat.php');
		break;
		default:
		header('Location: categories.php');
	}
}
?>
