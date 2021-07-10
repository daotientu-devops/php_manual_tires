<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	require 'configs/configs.php';
	$id=$_GET['uid'];
	$code=$_GET['code'];
	$strcheck="SELECT * FROM active WHERE userid='".$id."' AND code='".$code."'";
	$re=mysql_query($strcheck);
	$rowCount=mysql_num_rows($re);
	if($rowCount>0){
		$qr1=mysql_query("UPDATE users SET state=1 WHERE id='".$id."'");
		$qr2=mysql_query("DELETE FROM active WHERE userid='".$id."'");
		echo '<h1>Kích hoạt tài khoản thành công..!</h1>';
	}else{
		echo '<h1>Kích hoạt tài khoản không thành công..!</h1>';
	}
?>
<script type="text/javascript">
	setTimeout(function(){
		window.location.href="http://localhost/IT+Tires_DAOTIENTU/";
	},2000);
</script>
