<div class="heading">
<div class="title">
Moodle - Tổ hợp giáo dục Moodle</div>
</div>

<div class="comment">
	<div class="title">LCMS - Góp ý, báo lỗi, phản hồi</div>
	<div class="content">
    <ul>
	<li><a href="account_errors.php">Góp ý, báo lỗi tài khoản</a></li>
	<li><a href="usercomment.php">Góp ý, báo lỗi Bài Giảng, Audio</a></li>
    <!--<li><a href="usercomment.php">Góp ý, báo lỗi audio</a></li>-->
    </ul>
	</div>
</div>

<div class="note">
	<div class="title">Trả lời thư góp ý</div>
	<div class="content">
    <ul>
	<li><a href="reply_comment.php">Kiến thức môn học</a></li>
	<li><a href="reply_comment.php">Nâng cấp tài khoản</a></li>
    <li><a href="reply_comment.php">Vấn đề xử lý kỹ thuật</a></li>
    </ul>
	</div>
</div>

<div class="date_pick">
	
	<form id="form1" runat="server">
    	<td align="right">Calendar: </td>
        <td align="left"><input type="text" id="datetimepicker" name="datepick" onblur="datepick.value=''" value="<?php echo date('d / m / Y'); ?>"/></td>
    </form>
</div>   

<div class="calendar">
    <script language="javascript">
		setOutputSize("small");
		document.writeln(printSelectedMonth());
		showVietCal();
	</script>
</div>

<div class="re_online">
	<div class="title">Trả lời trực tuyến</div>
	<div class="content">
    <ul>
	<li><a href="chatA.php">Chat room A</a></li>
	
    </ul>
	</div>
</div>
