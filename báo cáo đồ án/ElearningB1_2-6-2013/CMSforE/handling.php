<?php
//Lấy dữ liệu trên URL
$chat = $_GET['chat'];
//Mở dữ liệu để đọc và ghi dữ liệu
$fp = fopen('file_storage/data.txt','a+');
//Lấy ra địa chỉ ip của client
$ip = $_SERVER['REMOTE_ADDR'];//<- Mảng có sẵn
//ghi dữ liệu vào file, chú ý kí hiệu xuống dòng
fwrite($fp,"\r\n".$ip.': '.$chat);
//đóng file
fclose($fp);

?>