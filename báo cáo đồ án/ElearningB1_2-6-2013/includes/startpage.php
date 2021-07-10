<div id="contan">
<div class="left">Chào mừng các bạn học viên tham gia vào lớp đào tạo trực tuyến E-Learning</div>
<div class="right">
<ul>
<li style="list-style: none; margin-top: 7px;">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5153cdc262d2d439"></script>
<!-- AddThis Button END -->

</li>
<?php
if(isset($_SESSION['logUser']))
{
	echo '<li><a href= "personal.php?perid='.$_SESSION['logUser'].'">Hồ sơ cá nhân của bạn, '.$_SESSION['loggedUser'].'</a></li>';
	echo '<li><a href="usercp.php">Bảng điều chỉnh cá nhân</a></li>';
}
?>

<!--<li><a href="news.php">Tin tức</a></li>
<li><a href="support.php">Hỗ trợ</a></li>-->
</ul>
</div>
</div>