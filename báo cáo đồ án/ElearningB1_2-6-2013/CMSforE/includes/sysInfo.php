<div class="heading">
<div class="title">
Cấu hình Website &raquo;</div>
<div class="icon_settings"></div>
</div>

<div class="content">
<div class="uleft">
<ul>
	<?php
	echo "<b>- MySQL host info: </b>".mysql_get_host_info();
	echo '<br/>';
	echo "<b>- MySQL client info: </b>".mysql_get_client_info();
	echo '<br/>';
	echo "<b>- MySQL protocol version: </b>".mysql_get_proto_info();
	echo '<br/>';
	echo "<b>- MySQL server version: </b>".mysql_get_server_info();
	echo '<br/>';
	echo '<b>- Current PHP version: </b>'.phpversion();
	
	?>
</ul>
</div>
</div>






















