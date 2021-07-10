<div class="heading">
<div class="title">
&laquo; Quản lý các bài học 
</div>
<div class="icon_lesson">
</div>
</div>

<div class="content">
<div class="title">
	<a href="lessons_fill.php?action=new">&piv; Insert a new lesson
<div class="icon_addlesson"></div></a>
</div>

<div class="searchles">
<form action="#" method="get">
<table border="0" cellpadding="3" cellspacing="3">
<tr></tr>

<tr>
<td align="" style="border: 1px solid #cdc9c4; color: #FFF">Nhập tên bài học: </td>
<td>
<input name="keyword" type="text" style="background: #e2e2e2;width: 260px; height: 20px;"  /></td>
<td align=""><input name="SearchLes" type="submit" value="Tìm kiếm" /></td>
</tr>
</table>
</form>
</div>

<div class="uleft">
<ul>

<?php
if(isset($_GET['SearchLes']))
{
	$sql2 = "SELECT * FROM lessons_fill WHERE title like '%".$_GET['keyword']."%'";

$result2 = mysql_query($sql2, $link);
$sort = 0;
while ($row2 = mysql_fetch_array($result2))
{
	$sort++;
	echo '<li>
	<div class="left"><a href="lesfilldetailslist.php?lesdetail='.$row2['id'].'">'.$sort.' - '
	.$row2['title'].
	'</a></div>
	
	<div class="right"><a href="lessons_fill.php?action=edit&lesid='.$row2['id'].'"><img src="images/icon/icon_edit.png" border="0"/></a>        
	<a href="lessons_fill.php?action=delete&lesid='.$row2['id'].'"><img src="images/icon/icon_delete.png" border="0"/></a></div>
	</li>';
}
}
else
{
$p = 11;//Số bản ghi trên một trang

if(isset($_GET['n']))
{
	$n = $_GET['n'];//Lấy chuỗi query string gọi trang hiện thời vào biến n
}
else
{
	$n = 1;
}
$s = ($n-1)*$p;    //Lấy tổng số sản phẩm trên (n) trang

$sql1 = "SELECT * FROM lessons_fill";
$result1 = mysql_query($sql1, $link);
$n_record = mysql_num_rows($result1);

function view_page()
{
	global $n_record;
	global $p;
	echo '<a href="lessons_fill.php?n=1" style="color: #006666;background: #CCC; border: 1px solid #006666; padding: 2px;"> << <<</a>';
	$j=ceil($n_record/($p*2));
	$k=ceil($n_record/($p));
	for($i=1;$i <= ceil($n_record/$p);$i++)
	{
		//$j = $i + 10;
		echo '<a href="lessons_fill.php?n='.$i.'" style="color: #006666;background: #CCC; border: 1px solid #006666; padding: 2px;"> &gt;</font>';
	}
	echo '<a href="lessons_fill.php?n='.$j.'" style="color: #006666;background: #CCC; border: 1px solid #006666; padding: 2px;"> >></a>';
	echo '<a href="lessons_fill.php?n='.$k.'" style="color: #006666;background: #CCC; border: 1px solid #006666; padding: 2px;"> >> >></a>';
	echo '<a href="lessons_fill.php?n=All" style="color: #006666;background: #CCC; border: 1px solid #006666; padding: 2px;"> All</a>';
	
	echo '<br/><br/>';
}

if($n!='All')
{
	$sql = "SELECT * FROM lessons_fill ORDER BY id DESC limit $s,$p";
}
else
{
	$sql = "SELECT * FROM lessons_fill ORDER BY id DESC";
}

$result = mysql_query($sql, $link);
$sort = 0;

view_page();

while ($row = mysql_fetch_array($result))
{
	$sort++;
	echo '<li>
	<div class="left"><a href="lesfilldetailslist.php?lesdetail='.$row['id'].'">'.$sort.' - '
	.$row['title'].
	'</a></div>
	
	<div class="right"><a href="lessons_fill.php?action=edit&lesid='.$row['id'].'"><img src="images/icon/icon_edit.png" border="0"/></a>        
	<a href="lessons_fill.php?action=delete&lesid='.$row['id'].'"><img src="images/icon/icon_delete.png" border="0"/></a></div>
	</li>';
}
}
?>

</ul>

</div>


</div>
<?php
/////////////
if (isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'new':
		include('includes/addlesfill.php');
		break;
		case 'edit':
		include('includes/editlesfill.php');
		break;
		case 'delete':
		include('includes/deletelesfill.php');
		break;
		default:
		header('Location: lessons_fill.php');
	}
}

?>



