<?php
include('application_top.php');
if($_REQUEST)
{
	$username 	= $_REQUEST['username'];
	if($username){
	
		$query = "select * from users where username = '".strtolower($username)."'";
		$results = mysql_query( $query) or die('ok');
		
			if(strlen($username) < 5 || strlen($username) > 20){
				echo '<div id="Error">Tên phải từ 5 - 20 ký tự !</div>';
			}
			else{
				if(mysql_num_rows(@$results) > 0) // not available
				{
					echo '<div id="Error">Tài khoản đã tồn tại !</div>';
				}
				elseif(mysql_num_rows(@$results) <= 0)
				{
					echo '<div id="Success">Tài khoản hợp lệ !</div>';
				}
			}
		
	}else{
		echo '<div id="Error">Bạn cần nhập Tên đăng nhập</div>';
                ?>
<script type="text/javascript">$('#username').focus();</script>
                    <?php
	}
}
?>