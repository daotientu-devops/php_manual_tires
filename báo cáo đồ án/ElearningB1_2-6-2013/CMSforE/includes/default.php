
<div class="conleft" style="margin-top: -10px; border-bottom: 1px solid #70201f; padding-bottom: 20px;">
	<div class="tleft">
	
    	<a href="systemInfo.php">
    	<div class="icon_default">
        <img src="images/icon/config-icon.png" alt="" border="0" height="51px"/>
        <div class="name">
        Cấu hình hệ thống
        </div>
        </div>
        </a>
        <?php
		if(isset($_SESSION['log']))
		{
			$strSQL="SELECT * FROM users WHERE id='".$_SESSION['log']."'";
			$query=mysql_query($strSQL,$link);
			while($row=mysql_fetch_array($query))
			{
				if($row['RoleID']=='Teacher')
				{
					echo '';
				}
				elseif($row['RoleID']=='Admin')
				{
					echo '
					<a href="administrators.php">
					<div class="icon_default"> 
					<img src="images/icon/user1.png" alt="" border="0" height="51px"/>
					<div class="name">
					Quản lý tài khoản
					</div>
					</div>
					</a>
					';
				}
			}
		}
		else
		{
			header('Location: login.php');
		}
		?>
   
    </div>
    
    <div class="tright">
      <div id="Accordion1" class="Accordion" tabindex="0">
        <div class="AccordionPanel">
          <div class="AccordionPanelTab"><b>1. Bài thi đọc:</b> 4 phần (30 điểm)</div>
          <div class="AccordionPanelContent">
        <b>Phần 1:</b><i> 10 câu hỏi (10 điểm): </i>
          Đọc 10 câu độc lập mỗi câu có một từ bỏ trống, chọn 1 từ đúng trong 4 từ 		cho sẵn (dạng trắc nghiệm ABCD) để điền vào chỗ trống.Các chỗ trống này cho phép kiểm tra kiến thức ngữ pháp, từ vựng, ngữ nghĩa và kiến thức văn hóa, xã hội.<br />
		<b>Phần 2:</b><i> 5 câu hỏi (5 điểm): </i>Có thể lựa chọn một trong hai hình thức bài tập sau:<br/>
		1)Đọc 5 biển quảng cáo, bảng báo hiệu thường gặp trong đời, sống hàng ngày (dạng hình ảnh không có chữ hoặc có ít chữ) hoặc thông báo ngắn, sau đó chọn một câu trả lời đúng trong 4 câu cho sẵn (dạng trắc nghiệm ABCD).<br/>
		2)Đọc 5 đoạn mô tả ngắn, mỗi đoạn khoảng 3 câu, sau đó chọn các bức tranh tương ứng với đoạn mô tả (5 bức tranh), có nội dung liên quan đến đời sống hàng ngày.<br/>
		<b>Phần 3:</b><i> 5 câu hỏi (5 điểm).</i>Đọc một bài khoảng 200 – 250 từ, chọn các câu trả lời Đúng hoặc Sai hoặc lựa chọn câu trả lời đúng trong 4 khả năng A,B,C,D.Bài đọc có thể lấy từ báo, tạp chí dễ hiểu, dạng phổ biến kiến thức, thường thấy trong đời sống hàng ngày.<br />
		<b>Phần 4:</b><i> 10 câu hỏi (10 điểm).</i>Làm bài đọc điền tử (Cloze test), dạng bỏ từ thứ 7 trong văn bản.Lưu ý: chỉ bỏ ô trống bắt đầu từ câu thứ 3, câu thứ 1 và thứ 2 giữ nguyên để thí sinh làm quen với ngữ cảnh. Bài đọc này dài khoảng 150 từ trong đó có 10 từ bỏ trống.Chọn trong số 15 từ có sẵn các từ phù hợp để điền vào chỗ trống.

          
          </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab"><b>2. Bài thi viết:</b> 2 phần (30 điểm)</div>
          <div class="AccordionPanelContent">
        <b>Phần 1:</b><i> 5 câu hỏi (10 điểm).</i> Cho sẵn 5 câu, viết lại các câu đó với những cách diễn đạt khác đã  được gợi ý bằng 1 – 2 từ sao cho ý nghĩa các câu đó không thay đổi.<br />
		<b>Phần 2:</b><i> (20 điểm).</i> Viết một bài viết ngắn khoảng 100 – 120 từ.Đây là dạng bài viết có nội dung liên quan đến đời sống hàng ngày, thường là viết dựa trên một tài liệu gợi ý cho sẵn.Một số dạng bài thường dùng: viết một lá đơn xin việc sau khi đọc một sản phẩm hoặc dịch vụ sau khi đã mua hàng hoặc dùng dịch vụ theo một quảng cáo; điều vào một mẫu tờ khai trong đó có 2 đoạn, mỗi đoạn dài khoảng 4 – 5 dòng; viết 2-3 lời nhắn qua email, mỗi lời nhắn dài khoảng 4 – 5 dòng; viết 2 – 3 lời nhắn qua email,…

        </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab"><b>3. Bài thi nghe hiểu:</b> 2 phần (20 điểm)</div>
          <div class="AccordionPanelContent">
		<b>Phần 1:</b><i> 5 câu hỏi (10 điểm).</i>Có thể lựa chọn nghe 5 đoạn hội thoại ngắn rồi đánh dấu vào 5 bức tranh/ hình ảnh đúng, mỗi hội thoại có 4 – 6 lần đổi vai; hoặc nghe một đoạn hội thoại dài để chọn 5 câu Đúng hoặc Sai với nội dung và câu hỏi;hoặc nghe một đoạn hội thoại ngắn rồi đánh dấu vào 5 đồ vật/sự việc.<br />
		<b>Phần 2:</b><i> 10 câu hỏi (10 điểm).</i>Nghe một đoạn hội thoại hay độc thoại.Điền vào 10 chi tiết bỏ trống trong bài.Chỗ trống thường là thông tin quan trọng. </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab"><b>4. Bài thi nói:</b> 3 phần (20 điểm)</div>
          <div class="AccordionPanelContent">
          Thí sinh bốc thăm 1 trong số 14 chủ đề nói trình độ B1 liên quan tới 4 lĩnh vực: cá nhân, công cộng, nghề nghiệp, giáo dục.Thời gian chuẩn bị khoảng 5 – 7 phút.<br />
		<b>Phần 1:</b><i> (2 đến 3 phút).</i> Giáo viên hỏi thí sinh một số câu về tiểu sử bản thân để đánh giá khả năng giao tiếp xã hội của thí sinh.<br />
		<b>Phần 2:</b><i> (5 phút).</i> Thí sinh trình bày chủ đề đã bốc thăm.Phần trình bày phải có bố cục rõ ràng, giới thiệu nôi dung, phát triển ý, kết luận, biết sử dụng phương tiện liên kết ý.Tránh liệt kê hàng loạt mà không phát triển kỹ từng ý.<br />
		<b>Phần 3:</b><i> (3 – 5 phút).</i> Giáo viên và thí sinh hội thoại mở rộng thêm về những vấn đề có liên quan đến chủ đề vừa trình bày.Trong phần hội thoại, giáo viên đặt các câu hỏi phản bác hoặc thăm dò ý kiến, thí sinh phải trình bày được quan điểm và đưa ra lý lẽ để bảo vệ quan điểm của mình.

          </div>
        </div>
      </div>
    </div>
    
</div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
