<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
Sản phẩm
</div>
</div>

<div class="content_partition1">
<div class="content_part1">
<form action="searchList.php" method="get">
	<table border="0" cellpadding="2" cellspacing="2">
	<tr>
    	<td colspan="2"><b>Thông tin tìm kiếm</b></td>
    </tr>
    <tr>
        <td align="right">Từ khóa: </td>
        <td>
            <input type="text" name="keyword" id="keyword" style="width: 380px; border: 1px solid #ccc;"/> 
        </td>
    </tr>
    <tr>
        <td align="right">Mã sản phẩm: </td>
        <td>
            <input type="text" name="id" id="id" style="width: 100px; border: 1px solid #ccc;"/> 
        </td>
    </tr>
    <tr>
        <td align="right">Danh mục: </td>
        <td>
            <div style="width: 320px; height: 150px; border: 1px solid #ccc; overflow: scroll;">
            <?php
        		$strSQL="SELECT * FROM categories WHERE ParentID=0";
				$result=mysql_query($strSQL,$link);		
				while($row=mysql_fetch_array($result))
				{
					echo '<div style="float: left; width: 280px; height: 20px; margin: 10px 10px 0px 10px;">- '.$row['name'].'</div>';
					$strSQL1="SELECT * FROM categories WHERE ParentID='".$row['id']."'";
					$result1=mysql_query($strSQL1,$link);		
					while($row1=mysql_fetch_array($result1))
					{
						echo '<div style="float: left; width: 280px; height: 20px; margin: 10px 10px 0px 30px;">+ '.$row1['name'].'</div>';
						$strSQL2="SELECT * FROM categories WHERE ParentID='".$row1['id']."'";
						$result2=mysql_query($strSQL2,$link);		
						while($row2=mysql_fetch_array($result2))
						{
							echo '<div style="float: left; width: 260px; height: 20px; margin: 10px 10px 0px 50px;"><input type="checkbox" name="subid" id="subid" value="'.$row2['id'].'"/> '.$row2['name'].'</div>';
						}
					}
				}
			?>
            </div>
        </td>
    </tr>
    <tr>
        <td align="right"></td>
        <td>
            <!--<input type="checkbox" name="ParentID" id="ParentID" checked="checked" value=""/> Tự động tìm kiếm cả các danh mục con-->
        </td>
    </tr>
    <tr>
    	<td colspan="2"><hr style="border: 1px solid #ccc; width: 560px;"/></td>
    </tr>
    <tr>
    	<td colspan="2"><b>Tìm theo giá</b></td>
    </tr>
    <tr>
        <td align="right">Khoảng giá: </td>
        <td>
        Từ
            <input type="text" name="price1" id="price1" style="width: 80px; border: 1px solid #ccc;"/> 
        đến
        	<input type="text" name="price2" id="price2" style="width: 80px; border: 1px solid #ccc;"/> 
        </td>
    </tr>
    <tr>
    	<td colspan="2"><hr style="border: 1px solid #ccc; width: 560px;"/></td>
    </tr>
    <tr>
    	<td colspan="2"><b>Tìm theo thiết lập</b></td>
    </tr>
    <tr>
        <td align="right">Sản phẩm nổi bật:</td>
        <td>
            <input type="checkbox" name="typePro2" id="typePro2" value="2"/> 
        </td>
    </tr>
    <tr>
        <td align="right">Sản phẩm mới:</td>
        <td>
            <input type="checkbox" name="typePro1" id="typePro1" value="1"/> 
        </td>
    </tr>
    <tr>
        <td align="right"></td>
        <td>
            <input type="submit" name="btnSubmit" id="btnSubmit" value="Tìm kiếm"/> 
        </td>
    </tr>
    </table>
</form>
</div>
</div>

</div>