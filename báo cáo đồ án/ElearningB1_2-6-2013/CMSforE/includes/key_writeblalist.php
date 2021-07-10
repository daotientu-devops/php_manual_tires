<div class="heading">
<div class="title">
Đáp án viết lại câu giữ nguyên ý</div>
</div>

<div class="conleft">
	<form action="#" method="post">
    <table border="0" cellpadding="2" cellspacing="0">
        <tr>  
       	  <td style="width: 99px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">ID</div></td> 
          <td style="width: 199px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Write Blank ID</div></td>
          <td style="width: 299px; height: 20px; padding: 4px 0px; background: #70201f; border-right: 1px solid #FFF;"><div style="font-weight: bold; color: #FFF; text-align: center">Key Blank</div></td>
          <td style="width: 100px; height: 20px; padding: 4px 0px; background: #70201f; "><div style="font-weight: bold; color: #FFF; text-align: center">Delete</div></td>
    	</tr>
        <?php
		$p=20;
		if(isset($_GET['n']))
		{
			$n=$_GET['n'];
		}
		else
		{
			$n=1;
		}
		$s=($n-1)*$p;
		$sql="SELECT * FROM key_writeblank";
		$result=mysql_query($sql,$link);
		$n_record=mysql_num_rows($result);
		function view_page()
		{
			global $n_record;
			global $p;
			for($i=1;$i<=ceil($n_record/$p);$i++)
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="key_writeblank.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #790000; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="key_writeblank.php?n='.$i.'" style="font-weight: bold; color: #790000; background: #ccc; border: 1px solid #790000; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#790000">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}
		$sql1="SELECT * FROM key_writeblank ORDER BY id ASC limit $s,$p";
		$result1=mysql_query($sql1,$link);
		while($row1 = mysql_fetch_array($result1))
			{
			echo '<tr>';
			echo '<td style="width: 99px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 93px; height: 20px;">'.$row1['id'].'</textarea></div></td>';
			echo '<td style="width: 199px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 193px; height: 20px;">'.$row1['writeblaid'].'</textarea></div></td>';
			echo '<td style="width: 299px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 0px; background: #FFF; "><div style=" color: #000; text-align: left"><textarea  style="width: 293px; height: 20px;">'.$row1['keyblank'].'</textarea></div></td>';
			echo '<td align="right" style="width: 99px; height: 20px; border-right: 1px solid #70201f; border-bottom: 1px solid #70201f; padding: 0px 2px; background: #FFF; ">
<a href="key_writeblank.php?action=delete&keywriteblaid='.$row1['id'].'"><img src="images/icon/icon_delete.png" border="0" alt=""/></a></td>';
			echo '</tr>';
			}
			view_page();
		?>
        <?php
		echo '<tr>';
		echo '<td><div style="margin-top: 5px;">';
		view_page();
		echo '</div></td>';
		echo '</tr>';
		?>
    </table>
    
    </form>
</div>
<?php
//////////////////////////
if(isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'delete':
		include('includes/deletekeywritebla.php');
		break;
		default:
		header('Location: key_writeblank.php');
	}
}
?>
