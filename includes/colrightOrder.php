<div class="header_cart">
<div class="title">
Giỏ hàng</div>
</div>
<div class="content_cart">
	<div class="cart"><img src="images/icon/cart.png" alt="" border="0" width="100px"/></div>
	<div class="sp_cart">
    <?php
    	/*if(isset($_SESSION['numberPro'])&&$_SESSION['purchase'])
		{
			echo '(';
			echo '<a href="cart.php?id=">'.$_SESSION['numberPro'];
			echo ' sản phẩm</a>)';
		}
		else
		{
			echo '(<font style="color: #FF000B; font-weight: bold;">0 sản phẩm</font>)';
		}*/
	?>
	</div>
</div>
<div class="spacing"></div>
<div class="header_onlineSupport">
<div class="title">
Hỗ trợ online</div>
</div>
<div class="content_onlineSupport">
	<div class="logo">

	</div>
    <div class="consultant">
    <ul>Hỗ trợ bán lốp
    <?php
		$strSQL3="SELECT * FROM users WHERE Role=2 AND state=1 limit 0,2";
		$query3=mysql_query($strSQL3,$link);
		while($row3=mysql_fetch_array($query3))
		{
			echo '<li>'.$row3['name'].' <br />';	
			echo 'ĐT: '.$row3['tel'].'<br />';
			echo 'Email: '.$row3['email'].'<br />';
			echo '<div class="onlineIcon">
    		<a href="ymsgr:SendIM?'.$row3['yahoo'].'"><img src="http://mail.opi.yahoo.com/online?u='.$row3['yahoo'].'&amp;m=g&amp;t=13" alt="Yahoo Messenger"/></a>
    		</div>';
			echo '</li>';
		}
	?>
    <!--<li>Mr.Tú <br />
    ĐT: 0168 809 2229<br />
    Email: daotientu@gmail.com<br />
    <a href="#">&raquo; Chat room A</a>
    <div class="onlineIcon">
    <a href="ymsgr:SendIM?daotientu2801"><img src="http://mail.opi.yahoo.com/online?u=daotientu2801&amp;m=g&amp;t=13" alt="Yahoo Messenger"/></a>
    </div>
    </li>
    <li>Mr.Hoàng <br />
    ĐT: 0168 575 5522<br />
    Email: huyhoangds1@gmail.com<br />
    <a href="#">&raquo; Chat room B</a>
    <div class="onlineIcon">
    <a href="ymsgr:SendIM?kaka_1993_acmilan"><img src="http://mail.opi.yahoo.com/online?u=kaka_1993_acmilan&amp;m=g&amp;t=13" alt="Yahoo Messenger"/></a>
    </div>
    </li>-->
    </ul>
    </div>
</div>

<div class="header_selling">
<div class="title">
Sản phẩm bán chạy</div>
</div>
<div class="content_selling">
	<ul>
    <!--<li class="item_first">
    <div class="index"><font size="+2"><b>1</b></font></div>
    <a href="#"><img src="images/selling_product/1415146lop xe ECO EC201 Dunlop.113.130.png" /></a>
    <div class="product_name">
    <a href="#">Lốp xe ECO EC201 Dunlop</a>
    </div>
    </li>-->
    <?php
	for($i=1;$i<=5;$i++)
	{
		if($i==1)
		{
			$strSQL="SELECT * FROM products WHERE state=1 AND typePro=2 AND special=".$i;
			$query=mysql_query($strSQL,$link);
			while($row=mysql_fetch_array($query))
			{
				echo '<li class="item_first">
			<div class="index"><font size="+2"><b>1</b></font></div>
			<a href="#"><img src="admin/'.$row['image'].'" /></a>
			<div class="product_name">
			<a href="#">'.$row['name'].'</a>
			</div>
			</li>';
			}
		}
		else
		{
			$strSQL1="SELECT * FROM products WHERE state=1 AND typePro=2 AND special=".$i;
			$query1=mysql_query($strSQL1,$link);
			while($row1=mysql_fetch_array($query1))
			{
				echo '<li class="items">
				<div class="index"><font size="+1"><b>'.$i.'</b></font></div>
				<div class="product_name">
				<a href="#">'.$row1['name'].'</a>
				</div>
				</li> ';
			}
		}
	}
   	?>
    <!--<li class="items">
    <div class="index"><font size="+1"><b>2</b></font></div>
    <div class="product_name">
    <a href="#">Lốp xe tải Casumina CA405N</a>
    </div>
    </li> 
    
    <li class="items">
    <div class="index"><font size="+1"><b>3</b></font></div>
    <div class="product_name">
    <a href="#">Lốp xe tải Casumina CA402D</a>
    </div>
    </li> 
    
    <li class="items">
    <div class="index"><font size="+1"><b>4</b></font></div>
    <div class="product_name">
    <a href="#">Lốp xe tải Casumina CA405C</a>
    </div>
    </li> 
    
    <li class="items">
    <div class="index"><font size="+1"><b>5</b></font></div>
    <div class="product_name">
    <a href="#">Lốp xe tải Casumina CA405J</a>
    </div>
    </li> -->
    </ul>
</div>
<div class="spacing"></div>
<div class="header_news">
<div class="title">
Tin mới</div>
</div>
<div class="content_news">
	<ul>
    <!--
    <li>
    <div class="image">
    <a href="#"><img src="images/news/Thumbnail.jpg" /></a></div>
    <div class="title">
    <a href="#">Đừng thay lốp quá muộn</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/2012122885622285.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Bắt "bệnh" trên lốp ô tô</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/201212311035634.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Khi nào cần đảo lốp xe ô tô ?</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/2012123103253283.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Lốp ô tô tự bơm</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/2012112217389599.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Nhà máy sản xuất lốp ô tô đầu tiên tại Việt Nam đi vào hoạt động</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/201112308193972.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Lốp ô tô lớn nhất thế giới</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/20111230111638517.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Kumho giới thiệu quy trình sản xuất lốp xe mới</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/2011123011957895.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Căn chỉnh góc đặt bánh xe</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/20111230118548.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">Hãng lốp xe ô tô Michelin mở rộng hoạt động</a>
    </div>
    </li>
    <div class="spacing"></div>
    
    <li>
    <div class="image">
    <a href="#"><img src="images/news/2011123011045269.60.60.jpg" /></a></div>
    <div class="title">
   	<a href="#">CTCP Thế giới vỏ xe giới thiệu sản phẩm Ultraseal chống xì hơi lốp xe ô tô</a>
    </div>
    </li>
    -->
    <?php
	$strSQL2="SELECT * FROM news ORDER BY id DESC limit 0,10";
	$query2=mysql_query($strSQL2,$link);
	while($row2=mysql_fetch_array($query2))
	{
		echo '<li>';
		echo '<div class="image"><a href="#"><img src="admin/'.$row2['picture'].'" alt="'.$row2['title'].'" border="1" width="60px" style="border: 1px solid #ccc;"/></a></div>';
		echo '<div class="title"><a href="#">'.$row2['title'].'</a></div>';
		echo '</li>';
		echo '<div class="spacing"></div>';
	}
	?>
    
    <div class="view_more">
    <a href="newsList.php?n=1">&raquo; Xem thêm</a></div>
    </ul>
</div>