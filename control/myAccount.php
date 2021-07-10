<?php
if(isset($_GET['perid']))
{
$strSQL = "SELECT * FROM users WHERE id='".$_GET['perid']."'";
$query = mysql_query($strSQL,$link);
$row = mysql_fetch_array($query);
$_SESSION['perid']=$row['id'];
}
else
{
	header('Location: index.php');
}
?>

<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Tài khoản của tôi</div>
</div>
<div class="defaultContent">
<ul>
	<li><div class="iconLi">
    <?php
    echo '<a href="address_book.php?addressId='.$row['id'].'">';
    ?>
    <img src="images/icon/Address-book.png" alt="" border="0" width="50px"/></a></div>
    <div class="personal">
    <div class="prefix">
    <?php
    echo '<a href="address_book.php?addressId='.$row['id'].'">';
    ?>
    Sổ địa chỉ</a></div>
    <div class="contentLi">Thêm mới, chỉnh sửa hoặc xóa bỏ các thông tin về địa chỉ người nhận hàng hoặc thông tin người thanh toán từ sổ địa chỉ của bạn.</div>
    </div>
    </li>
	<li class="sep"></li>
	<li><div class="iconLi">
    <?php
    echo '<a href="information.php?infoId='.$row['id'].'">';
    ?>
    <img src="images/icon/_account.png" alt="" border="0" width="50px"/></a></div>
    <div class="personal">
    <div class="prefix">
    <?php
    echo '<a href="information.php?infoId='.$row['id'].'">';
    ?>
    Thông tin tài khoản</a></div>
    <div class="contentLi">Cập nhật thông tin cá nhân, địa chỉ Email và(hoặc) thay đổi mật khẩu truy cập website của bạn.</div>
    </div>
    </li>
</ul>
</div>
</div>

