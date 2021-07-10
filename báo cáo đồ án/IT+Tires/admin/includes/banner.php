<div class="title">Administration</div>
<div class="TopLogin">
<?php
		if(!isset($_SESSION['logged']))
		{
    		//echo '<a href="login.php">Đăng nhập </a> &nbsp;|&nbsp; <a href="register.php"> Đăng kí</a>';
		}
		else
		{
			echo '';
		}
	?>
    <?php
		if(isset($_SESSION['logged']))
		{
			echo 'Xin chào bạn, '.$_SESSION['logged'].'&nbsp;&nbsp;|&nbsp;<a href="login.php?action=logout"> Đăng xuất</a>&nbsp;&nbsp;|&nbsp;<a target="_blank" href="../index.php"> Về trang web</a>';
		}
		else
		{

		}
	?>
</div>

<div class="logo"></div>
<!-- -->

<div class="pageLoader">
	<?php
		/*Page Loader*/
		$time=microtime();
		$time=explode(" ", $time);
		$time=$time[1]+$time[0];
		$start=$time;
		
		$time=microtime();
		$time=explode(" ", $time);
		$time=$time[1]+$time[0];
		$finish=$time;
		
		$totalTime=($finish-$start);
		printf("Trang được load trong : %f s",$totalTime);
	?>
</div>
<script type="text/javascript">
	var myvar=setInterval(function(){clock()},1000);
	function clock()
	{
		a=new Date();
		w=Array("Chủ Nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy");	
		var a=w[a.getDay()],
		w=new Date(),
		d=w.getDate();
		m=w.getMonth()+1;
		y=w.getFullYear();
		h=w.getHours();
		mi=w.getMinutes();
		se=w.getSeconds();
		if(d<10){d="0"+d}
		if(m<10){m="0"+m}
		if(h<10){h="0"+h}
		if(mi<10){mi="0"+mi}
		if(se<10){se="0"+se}
		document.getElementById("time").innerHTML=h+":"+mi+":"+se;
		document.getElementById("date").innerHTML=a+", ngày "+d+" tháng "+m+" năm "+y;
	}
</script>
<div class="DateTime">
	<p>
    	<span>Bây giờ là</span>
        <span id="time"></span>
        <span id="date"></span>
    </p>
</div>
