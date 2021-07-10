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


<div class="banner">
    <div class="fix-center">
        <div class="logo1">
            <a href="index.php"><img src="images/banner/logo.png" /></a>
        </div>
        <div id="main-menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php">Bài học</a></li>
                <li>
				<?php
                $sql = "SELECT * FROM categories WHERE control = 'test'";
                $result = mysql_query($sql, $link);
                while($row = mysql_fetch_array($result))
                {
                    echo '<a href="view_testcatlist.php?testid='.$row['id'].'">Bài Test</a>';
                }
                ?>
                </li>
                <li><a href="introduce.php">Giới thiệu</a></li>
                <li><a href="contact.php">Liên hệ</a></li>
                <li><a href="support.php">Hỗ trợ</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="topmenu">
	<div class="topleft">
     <?php
		if(!isset($_SESSION['loggedUser']))
		{
    	echo '<a href="login.php">Đăng nhập </a> &nbsp;|&nbsp; <a href="register.php"> Đăng kí</a>';
		}
		elseif(!isset($_COOKIE['username']))
		{
			//echo '<a href="login.php">Đăng nhập </a> &nbsp;|&nbsp; <a href="register.php"> Đăng kí</a>';
		}
	?>
    </div>
	<div class="topcenter">
    <?php
		if(isset($_SESSION['loggedUser']))
		{
			echo 'Xin chào bạn, '.$_SESSION['loggedUser'].'&nbsp;&nbsp;<a href="login.php?action=logout">. Đăng xuất</a>';
		}
		elseif(isset($_COOKIE['username']))
		{
			//echo 'Xin chào bạn, '.$_COOKIE['username'].'&nbsp;&nbsp;<a href="login.php?action=logout">. Đăng xuất</a>';
		}
		else
		{
			echo 'Bạn chưa đăng kí làm học viên ở đây.';	
		}
	?>
    </div>

</div>

<div class="centermenu">
<div class="label">Date and Time &raquo;</div>
<div class="time" id="clock">

<script type="text/javascript">
    $(function ()
            {
                $('#clock').epiclock();
			});
</script>
          
	<?php
		echo 'Date & Time: '.date("l").', '.date("d").'/'.date("m").'/'.date("Y");

		echo ' '.date("h").':'.date("i").':'.date("s").' '.date("A").' '.date("T");
		
	?>
</div>
<div class="search">
	<table border="0" cellpadding="0" cellspacing="0">
    	<tr>
        <td align="left"><div style="margin-right: 10px;">Danh mục các kĩ năng học - Tree View </div></td>
     
        <td align="right">
        <?php  
		//view ra toàn bộ các bài học có trong HT
		?>
        <select name="Category" style="width: 300px; background: #e2e2e2; font-family:'Times New Roman', Times, serif">
        <option value="0"> Các bài học sẵn có </option>
        <option value="0">Luyện kĩ năng nghe</option>
        	<option value="1">&raquo;Nghe đoạn hội thoại rồi đánh dấu vào bức tranh / hình ảnh đúng</option>
            <option value="1">&raquo;Nghe đoạn hội thoại dài để chọn câu Đúng hoặc Sai</option>
            <option value="1">&raquo;Nghe đoạn hội thoại ngắn rồi đánh dấu vào đồ vật / sự việc</option>
            <option value="1">&raquo;Nghe đoạn hội thoại hay độc thoại rồi điền vào chi tiết bỏ trống trong bài</option>
        <option value="0">Luyện kĩ năng nói</option>
        	<option value="1">&raquo;Ghi âm lời giới thiệu về tiểu sử bản thân</option>
            <option value="1">&raquo;Luyện nói từng câu thông qua băng ghi âm</option>
            <option value="1">&raquo;Luyện nói theo chủ đề</option>
        <option value="0">Luyện kĩ năng đọc</option>
        	<option value="1">&raquo;Đọc - Chọn đáp án đúng (Dạng trắc nghiệm thường thấy)</option>
            <option value="1">&raquo;Đọc biển quảng cáo, bảng báo hiệu</option>
            <option value="1">&raquo;Đọc đoạn mô tả ngắn rồi chọn các bức tranh tương ứng</option>
            <option value="1">&raquo;Đọc một bài văn ngắn rồi chọn các câu trả lời Đúng hoặc Sai</option>
            <option value="1">&raquo;Làm bài đọc điền từ vào chỗ trống</option>
            <option value="1">&raquo;Đọc - Trả lời câu hỏi (dưới dạng trắc nghiệm)</option>
       	<option value="0">Luyện kĩ năng viết</option>
        	<option value="1">&raquo;Viết lại câu với cách diễn đạt khác sao cho ý nghĩa không thay đổi</option>
            <option value="1">&raquo;Viết một bài viết ngắn có nội dung liên quan đến đời sống hàng ngày</option>
            <option value="1">&raquo;Viết câu trả lời dựa trên một tài liệu gợi ý cho sẵn</option>
        </select>
        </td>
        
        </tr>
    </table>
</div>
</div>

<!--<div class="bottommenu">
	<ul>
    	<li><div class="level1icon"></div><a href="administrators.php">User Manager</a></li>
        
        <li><div class="level1icon"></div><a href="categories.php">Category Manager</a></li>
       
        <li><div class="level1icon"></div><a href="comments.php">Comment</a></li>
        
        <li><div class="level1icon"></div><a href="category_manager.php">News Manager</a></li>
        
        <li><div class="level1icon"></div><a href="news.php">Article Manager</a></li>
    </ul>
</div>
<div class="bottommenu2">
	<ul>
    	<li><div class="level1icon"></div><a href="lessons_listenchoose.php">Listen choose</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_listencorrect.php">Listen correct</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_listendialog.php">Listen dialog</a></li>
        
    	<li><div class="level1icon"></div><a href="lessons_listenfill.php">Listen fill</a></li>
        
        
    </ul>
</div>
<div class="bottommenu3">
	<ul>
    
    	<li><div class="level1icon"></div><a href="lessons_speakintro.php">Speak Introduce</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_speaksentence.php">Speak sentence</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_speaktopic.php">Speak topic</a></li>
    
    </ul>
</div>
<div class="bottommenu4">
	<ul>
    
    	<li><div class="level1icon"></div><a href="lessons_readad.php">Read ad</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_readanswer.php">Read answer</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_readchoose.php">Read choose</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_readcor.php">Read correct</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_readdes.php">Read description</a></li>
    
    	<li><div class="level1icon"></div><a href="lessons_readtest.php">Read test</a></li>
    </ul>
</div>
<div class="bottommenu5">
	<ul>
    
    	<li><div class="level1icon"></div><a href="lessons_writeanswer.php">Write answer</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_writearticle.php">Write article</a></li>
        
        <li><div class="level1icon"></div><a href="lessons_writeblank.php">ReWrite blank</a></li>
    
    </ul>
</div>-->
	<div class="slideshow">
	<div id="slide">
        <img src="images/slideshow/banner12.png" alt="Picture A" />
        <img src="images/slideshow/banner.jpg" alt="Picture B" />
        <img src="images/slideshow/banner13.png" alt="Picture C" />
        <img src="images/slideshow/blog_banner.jpg" alt="Picture D" />
    </div>
	<div id="slide_nav"></div>
    </div>

<div class="navmenu">
	<ul>
    	<li class="current"><a href="index.php"><img src="images/icon/icon-home.png" /></a></li>
        <li><a href="#">Bài học chuẩn B1</a>
        	<ul>
            	<li><a href="listening.php">Nghe</a></li>
                <li><a href="speaking.php">Nói</a></li>
                <li><a href="reading.php">Đọc</a></li>
                <li><a href="writing.php">Viết</a></li>
            </ul>
        </li>
        
        <li>
        <?php
		$sql = "SELECT * FROM categories WHERE control = 'test'";
		$result = mysql_query($sql, $link);
		while($row = mysql_fetch_array($result))
		{
			echo '<a href="view_testcatlist.php?testid='.$row['id'].'">Bài Test chuẩn B1</a>';
		}
        ?>
        </li>
        
    </ul>
</div>