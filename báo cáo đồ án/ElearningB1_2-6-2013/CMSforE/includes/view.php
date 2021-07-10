<?php
$fp = fopen('../file_storage/data.txt','r');
function smileys($str)
{
	$str = str_replace(':D','<img src="images/icon/bad_smile.png">',$str);
	$str = str_replace(':d','<img src="images/icon/bad_smile.png">',$str);
	$str = str_replace(':))','<img src="images/icon/haha-smile.png">',$str);
	$str = str_replace(':)','<img src="images/icon/big-smile-icon.png">',$str);
	$str = str_replace(':((','<img src="images/icon/cry.png">',$str);
	$str = str_replace(':-P','<img src="images/icon/grimace.png">',$str);
	$str = str_replace(':-p','<img src="images/icon/grimace.png">',$str);
	$str = str_replace('B-)','<img src="images/icon/secret-smile-icon.png">',$str);
	$str = str_replace('b-)','<img src="images/icon/secret-smile-icon.png">',$str);
	return $str;
}

if($fp)
{
	//vòng lặp in ra toàn bộ dữ liệu trong file
	while(!feof($fp))
	{
		echo smileys(fgets($fp));
		echo '<br/>';
	}
	fclose($fp);//đóng file
}

?>