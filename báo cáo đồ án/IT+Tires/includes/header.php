<script type="text/javascript" src="javascript/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="javascript/jquery.cycle.all.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
        $("#slide").cycle({
			fx: 'fade', //hiệu ứng
			speed: 1000, //tốc độ diễn ra hiệu ứng
			timeout: 3000, //3 giây: thời gian thay đổi giữa các hình 
			pager: '#slide_nav' //tạo phân trang cho <div id="slide_nav"></div>
		});
    });
</script>

<div class="topbanner">
<?php
	$strSQL="SELECT * FROM ad WHERE position=1 AND priority=1 AND state=1 limit 0,1";
	$query=mysql_query($strSQL,$link);
	while($row=mysql_fetch_array($query))
	{
		echo '<a href="'.$row['link'].'"><img src="admin/'.$row['file'].'" alt="'.$row['title'].'" border="0" width="1000px"/></a>';
	}
?>
</div>

<div class="navmenu">
	<ul>
    	<li class="current"><a href="index.php">Trang chủ</a></li>
        <li><a href="introduce.php">Giới thiệu</a></li>
        <li><a href="products.php?n=1">Sản phẩm</a></li>
        <li><a href="newsList.php?n=1">Tin tức</a></li>
        <li><a href="map.php">Bản đồ</a></li>
        <li><a href="contact.php">Liên hệ</a></li>
        <!--<li><a href="#">Dịch vụ</a></li>-->
        <li><a href="exchangeRate.php">Tỷ giá ngoại tệ</a></li>
    </ul>
    <div class="search">
    <form action="searchList.php" method="get" name="search">
    <table border-"0" cellpadding="0" cellspacing="0" style="margin-top: 6px;">
    <tr>
    <td><input type="text" name="keyword" style="height: 20px; width: 260px; margin-right: 5px;" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>"/></td>
    <td><input type="submit" name="btnsearch" value="Tìm kiếm" style="font-family:Arial, Helvetica, sans-serif; background:#000; color: #FFF; cursor: pointer; margin-right: 5px;"/></td>
    <td style="padding-right: 5px;"><a href="searchAdvance.php"><img src="images/icon/basic-icon-search.png" /></a></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<div class="bottombanner">
	<div class="slideshow">
	<div id="slide">
    <?php
	$strSQL1="SELECT * FROM ad WHERE position=2 AND priority>0 AND state=1 ORDER BY id ASC";
	$query1=mysql_query($strSQL1,$link);
	while($row1=mysql_fetch_array($query1))
	{
		echo '<a href="'.$row1['link'].'"><img src="admin/'.$row1['file'].'" alt="'.$row1['title'].'" border="0" width="1000px"/></a>';
	}
	?>
        <!--<img src="images/slideshow/BB-banner-tires-999x432.jpg" alt="Picture A" />
        <img src="images/slideshow/HomeSlideEU-Summer.jpg" alt="Picture B" />
        <img src="images/slideshow/tires-banner3.jpg" alt="Picture C" />
        <img src="images/slideshow/Legal-banner.jpg" alt="Picture D" />
        <img src="images/slideshow/Specials Banner.jpg" alt="Picture E" />
        <img src="images/slideshow/warranty_banner.jpg" alt="Picture F" />-->
    </div>
	<div id="slide_nav"></div>
    </div>
</div>