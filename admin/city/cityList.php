<div style="clear:both;text-align:left;margin-left:2px;margin-bottom:10px;margin-top:0px;">
<h2>Quản lý danh mục tỉnh/thành phố</h2>
</div>
<div style="float:left;text-align:left;margin-left:2px;margin-right:10px;margin-bottom:8px;">
	<a href="city.php?action=new" style="font-weight:bold;font-size:16px;color:#00F !important;">Thêm mới</a>
</div>
<div style="float:left;margin-top:0px;margin-bottom:5px;">
	<form action="#" method="get">
    	<font style="font-weight:bold;color:#333;">Nhập tên tỉnh/thành phố:</font>
        <input type="text" name="keyword" placeholder="Tìm kiếm theo từ khóa" style="background:#fff;border:1px solid #ccc;width:300px;height:20px;" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>" />
        <input name="SearchCountry" type="submit" value="Tìm kiếm" />
        <input name="Cancel" type="reset" value="Hủy bỏ" />
    </form>
</div>
<?php
	if(isset($_GET['action'])){
		switch($_GET['action']) {
			case 'new': include('city/addCity.php'); break;
			case 'edit': include('city/editCity.php'); break;
			case 'delete': include('city/deleteCity.php'); break;
			default: header('Location: city.php');
		}
	}else{
echo '
<div style="clear:both;">
	<table width="100%" border="1" cellpadding="3" cellspacing="3" class="csstable" style="margin-bottom:10px;">
		<tr>
			<td><h2>MÃ TỈNH/THÀNH PHỐ NĂM 2013</h2></td>
		</tr>
		<tr>
			<td><h3>BẢNG MÃ TỈNH/THÀNH PHỐ NĂM 2013 (SẮP XẾP THEO TÊN)</h3></td>
		</tr>
		<tr>
			<td><h4><font color="#0000FF">CHÚ Ý: bạn có thể sử dụng MÃ SỐ hoặc MÃ CHỮ</font></h4></td>
		</tr>
	</table>
	<table width="100%" border="1" cellpadding="3" cellspacing="3" class="csstable">
    	<tr>
    		<th rowspan="2">ID</th>
        	<th colspan="2">Mã tỉnh</th>
            <th rowspan="2">Tên tỉnh/thành phố</th>
            <th rowspan="2">Thao tác</th>
        </tr>
    	<tr>
            <th scope="col" style="background: #6c491d;">Mã số</th>
            <th scope="col" style="background: #6c491d;">Mã chữ</th>
        </tr>';

			//viết hàm phân trang view_page()
			$p=10;//số bản ghi trên 1 trang
			//kiểm tra biến n trên trình duyệt
			if(isset($_GET['n'])){
				$n=$_GET['n'];
			}else{
				$n=1;
			}
			$s=($n-1)*$p;//lấy số thứ tự bản ghi đầu tiên của trang
			//truy vấn select all
			$sql1="SELECT * FROM city";
			if(isset($_GET['keyword'])){
				$sql1.=" WHERE country_title like '%".$_GET['keyword']."%'";
			}
			$result=mysql_query($sql1,$link);
			$n_record=mysql_num_rows($result);
			//hàm view_page()
			function view_page(){
				global $n_record;
				global $p;
				for($i=1;$i<=ceil($n_record/$p);$i++){
					if(isset($_GET['keyword'])){
						if(isset($_GET['n']) && $i==$_GET['n'])
						{
							echo '<a href="city.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
						}
						else
						{
							echo '<a href="city.php?n='.$i.'&keyword='.$_GET['keyword'].'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
						}
					}
					else
					{
						if(isset($_GET['n']) && $i==$_GET['n'])
						{
							echo '<a href="city.php?n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
						}
						else
						{
							echo '<a href="city.php?n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
						}
					}
				}
			}
			$sql1.=" ORDER BY id ASC limit $s,$p";
			$result1=mysql_query($sql1,$link);
			$count1=0;
			while($row1=mysql_fetch_assoc($result1)){
				$count1++;
				echo '<tr>';
				echo '<td align="center">'.$row1['id'].'</td>';
				echo '<td align="center">'.$row1['city_id'].'</td>';
				echo '<td align="center">'.$row1['city_code'].'</td>';
				echo '<td>'.$row1['city_title'].'</td>';
				echo '<td align="center"><a href="city.php?action=edit&cityid='.$row1['id'].'">Sửa</a> | 
				<a href="city.php?action=delete&cityid='.$row1['id'].'">Xóa</a>'.'</td>';
				echo '</tr>';
			}
			view_page();
	echo '
    </table>
</div>';
	}	
?>