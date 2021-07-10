<?php
if(isset($_GET['action']))
{
	if($_GET['action']=='logout')
	{
	$_POST['remember']=false;
	setcookie('remember',$_SESSION['remember'],time()-60*60*24);
	setcookie('id',$_SESSION['id'],time()-60*60*24);
	setcookie('username',$_SESSION['username'],time()-60*60*24);
	setcookie('password',$_SESSION['password'],time()-60*60*24);
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	header('Location: index.php');
	exit;
	}
}
?>
<div class="heading">
<div class="title">
<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="4" direction="left" width="572" height="30" align="right">Chào mừng các bạn đến với Website Lốp xe ô tô ! Chúc các bạn có những thông tin bổ ích về Lốp xe ô tô, cách bảo trì lốp xe và mua được cho mình những lốp xe nhập khẩu chính hãng tốt nhất, với giá lốp xe cạnh tranh nhất. Lốp xe du lịch và lốp xe tải các hãng như lốp ô tô michelin, lốp ô tô goodyear,...Chúc các bạn luôn lái xe an toàn</marquee></div>
</div>
<div class="content">
<div class="header_partition1">
<div class="title">
Sản phẩm mới</div>
</div>
<div class="content_partition1">
	<ul>
    <!--<li>
    <div class="image">
    <a href="#"><img src="images/truck tires/5922369lop xe tai Casumina CA402F.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải Casumina CA402F</a></div>
    <div class="price">4.000.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/truck tires/5151317lop xe tai Casumina CA402G.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải Casumina CA402G</a></div>
    <div class="price">2.350.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/truck tires/3958336lop xe tai Casumina CA405M.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải Casumina CA405M</a></div>
    <div class="price">3.700.000 VND</div>
    <div class="addToCart"></div>
    </li>
    
    <li class="item_last">
    <div class="image">
    <a href="#"><img src="images/truck tires/3653635lop xe tai Casumina CA402B.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải Casumina CA402B</a></div>
    <div class="price">1.400.000 VND</div>
    <div class="addToCart"></div>
    </li>
    
     <li>
    <div class="image">
    <a href="#"><img src="images/truck tires/1432271lop xe tai XZE2 - Michelin.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải XZE2 - Michelin</a></div>
    <div class="price">4.300.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/truck tires/1214221lop xe tai XZY3 - Michelin.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải XZY3 - Michelin</a></div>
    <div class="price">1.750.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/truck tires/2914240lop xe tai URBAN MCS - Goodyear.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải URBAN MCS - Goodyear</a></div>
    <div class="price">4.800.000 VND</div>
    <div class="addToCart"></div>
    </li>
    
    <li class="item_last">
    <div class="image">
    <a href="#"><img src="images/truck tires/2016908lop xe tai REGIONAL RHD II - Goodyear 1.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe tải REGIONAL RHD II</a></div>
    <div class="price">3.700.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <div class="view_more">
    <a href="#">Xem thêm</a></div>
    -->
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
	$strSQL="SELECT * FROM products WHERE state=1 AND typePro=1";
	$query=mysql_query($strSQL,$link);
	$n_record=mysql_num_rows($query);
	function view_page()
	{
		global $n_record;
		global $p;
		for($i=1;$i<=ceil($n_record/$p);$i++)
		{
			if(isset($_GET['n']) && $i==$_GET['n'])
			{
				echo '<a href="index.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
			else
			{
				echo '<a href="index.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
		}
	}
	$i=0;
	$strSQL2="SELECT * FROM products WHERE state=1 AND typePro=1 ORDER BY RAND() limit $s,$p";
	$query2=mysql_query($strSQL2,$link);
	while($row2=mysql_fetch_array($query2))
	{
		$i++;
		echo '<li';
		if($i%4==0)
			echo ' class="item_last"';
		else
			echo '';
		echo '>
		<div class="image">
		<a href="productDetail.php?pid='.$row2['id'].'"><img src="admin/'.$row2['image'].'" alt="'.$row2['title'].'" border="0" height="130px"/></a></div>
		<div class="product_name"><a href="productDetail.php?pid='.$row2['id'].'">'.$row2['name'].'</a></div>
		<div class="price">'.number_format($row2['price']).' <u>VND</u></div>
		<div class="addToCart"><a href="cart.php?cid='.$row2['id'].'"><img src="images/icon/icon_cart.jpg"/></a></div>
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
    <!--<li>
    <div class="image">
    <a href="#"><img src="images/tourism tires/1415146lop xe ECO EC201 Dunlop.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe ECO EC201 Dunlop</a></div>
    <div class="price">5.800.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/tourism tires/4539530Lop xe DURAPLUS - Goodyear.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe DURAPLUS - Goodyear</a></div>
    <div class="price">1.550.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/tourism tires/3832524Lop xe EAGLE LS2000 HYBRID II - Goodyear.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe EAGLE LS2000 HYBRID</a></div>
    <div class="price">3.800.000 VND</div>
    <div class="addToCart"></div>
    </li>
    
    <li class="item_last">
    <div class="image">
    <a href="#"><img src="images/tourism tires/1648828Lop xe Energy XM1 - michelin.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe Energy XM1 - michelin</a></div>
    <div class="price">7.300.000 VND</div>
    <div class="addToCart"></div>
    </li>
    
     <li>
    <div class="image">
    <a href="#"><img src="images/tourism tires/1225580Lop xeEnergy MXV8 - michelin.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe Energy MXV8 - michelin</a></div>
    <div class="price">3.350.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/tourism tires/0901486Lop xe Agilis - michelin.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe Agilis - michelin</a></div>
    <div class="price">4.300.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <li>
    <div class="image">
    <a href="#"><img src="images/tourism tires/0324782Lop xe Pilot Sport 3 (PS3) - michelin.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe Pilot Sport 3(PS3) - michelin</a></div>
    <div class="price">3.350.000 VND</div>
    <div class="addToCart"></div>
    </li>
    
    <li class="item_last">
    <div class="image">
    <a href="#"><img src="images/tourism tires/5912619Lop xe Primacy LC - michelin.113.130.png" /></a></div>
    <div class="product_name"><a href="#">Lốp xe Primacy LC - michelin</a></div>
    <div class="price">4.300.000 VND</div>
    <div class="addToCart"></div>
    </li>
    <div class="view_more">
    <a href="#">Xem thêm</a></div>
    -->
    <?php
	$p1=16;
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
				echo '<a href="index.php?n1='.$i1.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i1.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
			else
			{
				echo '<a href="index.php?n1='.$i1.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i1.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
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
	view_page1();
	echo '</li>';
	?>
    </ul>
    </div>

</div>