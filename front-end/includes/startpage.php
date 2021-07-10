<div class="left">Công ty TNHH lốp Tiến Hoàng</div>
<div class="right">
<ul>
<li><a href="techSupport.php">Tư vấn kỹ thuật</a></li>
<li><a href="feedBack.php">Đóng góp ý kiến</a></li>
<?php
if(isset($_COOKIE['id']))
{
	echo '<li style="list-style: disc"><a href= "personal.php?perid='.$_COOKIE['id'].'">Tài khoản của bạn, '.$_COOKIE['username'].'</a></li>'.'<li style="list-style: none; margin-left: 5px;"><a href="index.php?action=logout">[ Thoát ]</a></li>';
}
elseif(isset($_SESSION['id']))
{
	echo '<li style="list-style: disc"><a href= "personal.php?perid='.$_SESSION['id'].'">Tài khoản của bạn, '.$_SESSION['username'].'</a></li>'.'<li style="list-style: none; margin-left: 5px;"><a href="index.php?action=logout">[ Thoát ]</a></li>';
}
else
{
	echo '<li><a href="login.php">Đăng nhập</a></li>
		<li><a href="register.php">Đăng ký</a></li>';
}
?>
<!--<li><a href="#"></a></li>-->
<li><a href="orderStatus.php">Quản lý đơn hàng</a></li>
<li><a href="#">Danh sách ưa thích</a></li>
<!--<li>
<?php
  /*  	if(isset($_SESSION['numberPro'])&&$_SESSION['purchase'])
		{
			echo '<a href="cart.php?id=">Giỏ hàng ('.$_SESSION['numberPro'];
			echo ' sản phẩm)</a>';
		}
		else
		{
			echo 'Giỏ hàng (<font style="color: #FF000B; font-weight: bold;">0 sản phẩm</font>)';
		} */
?>
</li>-->
</ul>
</div>