<?php
//khai báo 1 lớp có tên là LIB
class LIB{
	public function sendmail($to,$nameto,$title,$content){
		require_once("class.phpmailer.php");
		//khởi tạo đối tượng 
		$mail=new PHPMailer;
		//khai báo các thuộc tính và phương thức cấu hình cho server mail trung gian
		$mail->IsSMTP();//mail gửi kiểu SMTP
		$mail->Host="smtp.gmail.com";//host trung gian để gửi mail
		$mail->Port="465";//cổng chạy service mail
		$mail->SMTPAuth=true;//bật chế độ xác thực tài khoản
		$mail->Username="daotientu@gmail.com";
		$mail->Password="daotientu2801";
		$mail->SMTPSecure="ssl";//cơ chế mã hóa mail
		//phương thức và thuộc tính cấu hình nội dung của mail sẽ gửi
		$mail->FromName="PHP1012E";//Hiển thị tên người gửi thay thế cho mail gửi
		$mail->AddReplyTo("daotientu@gmail.com","DAO TIEN TU");//Mail và tên người nhận thư trả lời (nếu người dùng bấm vào reply)
		$mail->AddAddress($to,$nameto);//Mail người nhận
		$mail->Subject=$title;
		$mail->Body=$content;
		$mail->CharSet="utf-8";
		$mail->IsHTML(true);
		//Gọi phương thức gửi mail
		$mail->Send();
		return $mail->ErrorInfo;
	}
}

?>