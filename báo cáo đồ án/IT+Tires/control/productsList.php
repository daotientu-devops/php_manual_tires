<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Sản phẩm
</div>
</div>

<div class="content_partition1">
<ul>
	<?php
	$p=16;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;	
	}
	$s=($n-1)*$p;
	$sql1="SELECT * FROM products WHERE state=1";
	if(isset($_GET['c2id']))
	{
		$sql1.=" AND catid='".$_GET['c2id']."'";
	}
	elseif(isset($_GET['c3id']))
	{
		$sql1.=" AND subid='".$_GET['c3id']."'";
	}
	$result=mysql_query($sql1,$link);
	$n_record=mysql_num_rows($result);
	$numberPage=ceil($n_record/$p);
	function view_page()
	{
		global $n_record;
		global $p;
		for($i=1;$i<=ceil($n_record/$p);$i++)
		{
			if(isset($_GET['c3id']))
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="products.php?c3id='.$_GET['c3id'].'&n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="products.php?c3id='.$_GET['c3id'].'&n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			
			/*.................................................*/
			elseif(isset($_GET['c2id']))
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="products.php?c2id='.$_GET['c2id'].'&n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="products.php?c2id='.$_GET['c2id'].'&n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
			else
			{
				if(isset($_GET['n']) && $i==$_GET['n'])
				{
					echo '<a href="products.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
				else
				{
					echo '<a href="products.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
				}
			}
		}
	}
	$i=0;
	$sql1.=" ORDER BY RAND() DESC limit $s,$p";
	$result1=mysql_query($sql1,$link);
	while($row1=mysql_fetch_array($result1))
	{
		$i++;
		echo '<li';
		if($i%4==0)
			echo ' class="item_last"';
		else
			echo '';
		echo '>
		<div class="image">
		<a href="productDetail.php?pid='.$row1['id'].'"><img src="admin/'.$row1['image'].'" alt="'.$row1['title'].'" border="0" height="130px"/></a></div>
		<div class="product_name"><a href="productDetail.php?pid='.$row1['id'].'">'.$row1['name'].'</a></div>
		<div class="price">'.number_format($row1['price']).' <u>VND</u></div>
		<div class="addToCart"><a href="cart.php?cid='.$row1['id'].'"><img src="images/icon/icon_cart.jpg"/></a></div>
		</li>';
	}
	echo '<li class="view_more">';
	view_page();
	echo '</li>';
	?>
</ul>
</div>

<div class="header_partition2">
<div class="title">
Sản phẩm nổi bật</div>
</div>
<div class="content_partition2">
	<ul>
    <?php
	$p1=12;
	if(isset($_GET['n1']))
	{
		$n1=$_GET['n1'];
	}
	else
	{
		$n1=1;
	}
	$s1=($n1-1)*$p1;
	$strSQL1="SELECT * FROM products WHERE state=1 AND typePro=2";
	$query1=mysql_query($strSQL1,$link);
	$n_record1=mysql_num_rows($query1);
	function view_page1()
	{
		global $n_record1;
		global $p1;
		for($i1=1;$i1<=ceil($n_record1/$p1);$i1++)
		{
			if(isset($_GET['n1']) && $i1==$_GET['n1'])
			{
				echo '<a href="products.php?n1='.$i1.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i1.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
			else
			{
				echo '<a href="products.php?n1='.$i1.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i1.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
		}
	}
	$i1=0;
	$strSQL3="SELECT * FROM products WHERE state=1 AND typePro=2 ORDER BY RAND() limit $s1,$p1";
	$query3=mysql_query($strSQL3,$link);
	while($row3=mysql_fetch_array($query3))
	{
		$i1++;
		echo '<li';
		if($i1%4==0)
			echo ' class="item_last"';
		else
			echo '';
		echo '>
		<div class="image">
		<a href="productDetail.php?pid='.$row3['id'].'"><img src="admin/'.$row3['image'].'" alt="'.$row3['title'].'" border="0" height="130px"/></a></div>
		<div class="product_name"><a href="productDetail.php?pid='.$row3['id'].'">'.$row3['name'].'</a></div>
		<div class="price">'.number_format($row3['price']).' <u>VND</u></div>
		<div class="addToCart"><a href="cart.php?cid='.$row3['id'].'"><img src="images/icon/icon_cart.jpg"/></a></div>
		</li>';
	}
	echo '<li class="view_more">';
	//view_page1();
	echo '</li>';
	?>
    </ul>
</div>

</div>