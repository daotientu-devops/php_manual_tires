<div class="pattern1">
	<ul>
    	<li><font style="font-weight: bold; text-transform: uppercase; color: #FF000B;"><a href="#">Lốp xe du lịch</a></font></li>
        <li>Lốp ô tô Bridgestone</li>
        <li>Lốp ô tô Michelin</li>
        <li>Lốp ô tô Michelin</li>
        <li>Lốp ô tô Goodyear</li>
        <li>Lốp ô tô Dunlop</li>
        <li>Lốp ô tô Chengshin</li>
        <li>Lốp ô tô Tunggai</li>
        <li>Lốp ô tô Kumho</li>
        <li>Lốp ô tô Hankook</li>
        <li>Lốp ô tô Firelli</li>
        <li>Lốp ô tô Falken</li>
        <li>Lốp ô tô Silvertone</li>
    </ul>
</div>

<div class="pattern1">
	<ul>
    	<li><font style="font-weight: bold; text-transform: uppercase; color: #FF000B;"><a href="#">Lốp xe tải</a></font></li>
        <li>Lốp ô tô Bridgestone</li>
        <li>Lốp ô tô Michelin</li>
        <li>Lốp ô tô Michelin</li>
        <li>Lốp ô tô Goodyear</li>
        <li>Lốp ô tô Dunlop/li>
        <li>Lốp ô tô Chengshin</li>
        <li>Lốp ô tô Tunggai</li>
        <li>Lốp ô tô Kumho</li>
        <li>Lốp ô tô Hankook</li>
        <li>Lốp ô tô Firelli</li>
        <li>Lốp ô tô Falken</li>
        <li>Lốp ô tô Silvertone</li>
    </ul>
</div>

<div class="pattern1">
	<ul>
    	<li><font style="font-weight: bold; text-transform: uppercase; color: #FF000B;"><a href="#">Website học viên ITPlus</a></font></li>

        <?php
        	$sql="SELECT * FROM footer ORDER BY id ASC limit 0,1";
			$query=mysql_query($sql,$link);
			while($row=mysql_fetch_array($query))
			{
				echo '<li>'.$row['info'].'</li>';	
			}
		?>

        <!--<li>Người thực hiện:</li>
        - Học viên 1: <br />
        <b>Họ và Tên:</b> Đào Tiến Tú<br />
        <b>Tel:</b> 0168 809 2229<br />
        <b>Email:</b> daotientu@gmail.com<br />
        - Học viên 2:<br/> 
        <b>Họ và Tên:</b> Nguyễn Chí Linh<br/>
        <b>Tel:</b> 0904 860 082<br />
        <b>Email:</b> acckiemthemoi@gmail.com<br />
        - Học viên 3:<br/> 
        <b>Họ và Tên:</b> Nguyễn Huy Hoàng<br/>
        <b>Tel:</b> 0168 575 5522<br />
        <b>Email:</b> huyhoangds1@gmail.com-->
    </ul>
</div>

<div class="pattern2">
	<ul>
    	<li>Sử dụng: <font color="#0D00A8"><b>DAO TIEN TU</b></font></li>
    </ul>
</div>