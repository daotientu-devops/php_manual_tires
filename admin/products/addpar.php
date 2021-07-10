<?php
if(isset($_GET['proid'])){
	$strSQL="SELECT * FROM products WHERE id='".$_GET['proid']."'";
	$result=mysql_query($strSQL);
	$row=mysql_fetch_array($result);
}else{
	header('Location:products.php');
}
?>

<div style="clear:both;margin-left:2px;margin-top:10px;margin-bottom:10px;">
  <h2>Thêm thông số kỹ thuật vào sản phẩm</h2>
</div>
<div style="clear:both;">
  <form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellpadding="2" cellspacing="2" class="csstable">
      <tr>
        <td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
      </tr>
      <tr>
        <td>Tên sản phẩm (*) :</td>
        <td><input type="text" id="name" style="width:400px;" value="<?php echo $row['name']; ?>" disabled="disabled"/></td>
      </tr>
      <tr>
        <td>Nút danh mục <font style="color:#000099;font-weight:bold">Cha</font> (*) :</td>
        <td><select name="catid" style="width:220px;" disabled="disabled">
            <?php
							$strSQL2="SELECT * FROM categories WHERE ParentID=0";
							$result2=mysql_query($strSQL2);
							while($row2=mysql_fetch_array($result2)){
								if($row2['id']==$row['catid']){
									echo '<option selected=""selected" value="'.$row2['id'].'">'.$row2['name'].'</option>';
								}else{
									//
								}
								$strSQL3="SELECT * FROM categories WHERE ParentID='".$row2['id']."'";
								$result3=mysql_query($strSQL3);
								while($row3=mysql_fetch_array($result3)){
									if($row3['id']==$row['catid']){
										echo '<option selected=""selected" value="'.$row3['id'].'">'.$row3['name'].'</option>';
									}else{
										//
									}
								}
							}
						?>
          </select></td>
      </tr>
      <tr>
        <td>Nút danh mục <font style="color:#000099;font-weight:bold;">Con</font> (*) :</td>
        <td><select name="subid" style="font-size:12px;width:220px;" disabled="disabled">
            <?php
							$strSQL2 = "SELECT * FROM categories WHERE ParentID = 0";
							$result2 = mysql_query($strSQL2,$link);
							while($row2 = mysql_fetch_array($result2))
							{
								if($row2['id']==$row['subid'])
								{
									echo '<option selected="selected" value="'.$row2['id'].'" disabled="disabled">'.$row2['name'].'</option>';
								}
								else
								{
									//
								}
								$strSQL3 = "SELECT * FROM categories WHERE ParentID = '".$row2['id']."'";
								$result3 = mysql_query($strSQL3,$link);
								while($row3 = mysql_fetch_array($result3))
								{
									if($row3['id']==$row['subid'])
									{
										echo '<option selected="selected" value="'.$row3['id'].'" disabled="disabled">&raquo; '.$row3['name'].'</option>';
									}
									else
									{
										//
									}	
									$strSQL4 = "SELECT * FROM categories WHERE ParentID = '".$row3['id']."'";
									$result4 = mysql_query($strSQL4,$link);
									while($row4 = mysql_fetch_array($result4))
									{
										if($row4['id']==$row['subid'])
										{
											echo '<option selected="selected" value="'.$row4['id'].'">&rarr; '.$row4['name'].'</option>';
										}
										else
										{
											//
										}	
									}
								}
							}
						?>
          </select></td>
      </tr>
      <tr>
        <td>Title (*) :</td>
        <td><input type="text" id="title" style="width:400px;" value="<?php echo $row['title']; ?>" disabled="disabled"/></td>
      </tr>
      <tr>
        <td>Keyword (*) :</td>
        <td><textarea id="keyword" style="width:400px;height:80px;" disabled="disabled"><?php echo $row['keyword']; ?></textarea></td>
      </tr>
      <tr>
        <td>Giá bán (VND) (*) :</td>
        <td><input type="text" id="price" style="width:210px;" value="<?php echo $row['price']; ?>" disabled="disabled"/></td>
      </tr>
      <tr>
        <td>VAT :</td>
        <td><label>
            <input type="radio" id="vat" value="1" <?php if($row['VAT']==1) echo "checked"; ?> disabled="disabled"/>
            Đã tính </label>
          <label>
            <input type="radio" id="vat" value="0" <?php if($row['VAT']==0) echo "checked"; ?> disabled="disabled"/>
            Chưa tính </label></td>
      </tr>
      <tr>
        <td>Số lượng (chiếc) (*) :</td>
        <td><input type="text" id="amount" style="width:210px;" value="<?php echo $row['amount']; ?>" disabled="disabled"/></td>
      </tr>
      <tr>
        <td>Bảo hành (tháng) (*) :</td>
        <td><input type="text" id="warranty" style="width:210px;" value="<?php echo $row['warranty']; ?>" disabled="disabled"/></td>
      </tr>
      <tr>
        <td>Tình trạng :</td>
        <td><select name="status" style="width:80px;" disabled="disabled">
            <option value="1" <?php if($row['status']==1) echo 'selected="selected"'; ?>>Mới</option>
            <option value="0" <?php if($row['status']==0) echo 'selected="selected"'; ?>>Cũ</option>
          </select></td>
      </tr>
      <tr>
        <td>Đánh giá :</td>
        <td><select name="review" style="width: 280px;" disabled="disabled">
            <option value="5" <?php if($row['review']==5) echo 'selected'; ?>>5 sao (Tốt nhất)</option>
            <option value="4" <?php if($row['review']==4) echo 'selected'; ?>>4 sao</option>
            <option value="3" <?php if($row['review']==3) echo 'selected'; ?>>3 sao (Trung bình)</option>
            <option value="2" <?php if($row['review']==2) echo 'selected'; ?>>2 sao</option>
            <option value="1" <?php if($row['review']==1) echo 'selected'; ?>>1 sao (Tồi nhất)</option>
          </select></td>
      </tr>
      <tr>
        <td>Xuất xứ (Mới) :</td>
        <td><select name="origin" style="width:220px;" disabled="disabled">
            <option value=""><?php echo $row['origin']?></option>
          </select></td>
      </tr>
      <tr>
        <td>Phí vận chuyển :</td>
        <td><select name="shipping" style="width:280px;" disabled="disabled">
            <option value="1" <?php if($row['shipping']==1) echo 'selected'; ?>>Tính phí khi thanh toán</option>
            <option value="2" <?php if($row['shipping']==2) echo 'selected'; ?>>Miễn phí dưới 10 km</option>
          </select></td>
      </tr>
      <tr>
        <td>Description (*) :</td>
        <td><textarea id="description" style="width:400px;height:80px;" disabled="disabled"><?php echo $row['description']; ?></textarea></td>
      </tr>
      <tr>
        <td>Mô tả sản phẩm (*) :</td>
        <td><textarea id="products_desc" style="width:400px;height:80px;" class="ckeditor" disabled="disabled" ><?php echo $row['products_desc']; ?></textarea></td>
      </tr>
      <tr>
        <td>Ngày đăng :</td>
        <td><input type="text" id="date" style="width:210px;" value="<?php echo $row['date']; ?>" disabled="disabled"/></td>
      </tr>
      <tr>
        <td>Trạng thái :</td>
        <td><label>
            <input name="state" id="state" type="radio" value="1" <?php if($row['state']==1) echo 'checked';?> disabled="disabled"/>
            Hoạt động </label>
          <label>
            <input name="state" id="state" type="radio" value="0" <?php if($row['state']==0) echo 'checked';?> disabled="disabled"/>
            Khóa </label></td>
      </tr>
      <tr>
        <td>Loại sản phẩm : </td>
        <td><select name="typePro" style="width: 220px;" disabled="disabled">
            <option value="1" <?php if($row['typePro']==1) echo 'selected';?>>Sản phẩm mới</option>
            <option value="2" <?php if($row['typePro']==2) echo 'selected';?>>Sản phẩm bán chạy</option>
          </select></td>
      </tr>
      <tr>
        <td>Top bán chạy :</td>
        <td><select name="special" style="width: 220px;" disabled="disabled">
            <?php
						for($t=1;$t<=10;$t++)
						{
							if($row['special']==$t)
							{
								echo '<option value="'.$t.'" selected="selected">'.$t.'</option>';
							}
							else
							{
								//echo '<option value="'.$t.'">'.$t.'</option>';
							}
						}
						?>
          </select></td>
      </tr>
      <tr>
        <td colspan="2"><h2><font color="#000066">Thêm thông số kỹ thuật vào sản phẩm</font></h2></td>
      </tr>
      <tr>
        <td>Loại xe : </td>
        <td><select name="type" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1">P(Passenger):lốp xe chở khách</option>
            <option value="2">LT(Light Truck):xe tải nhẹ</option>
            <option value="3">T(Temporary):lốp thay thế tạm thời</option>
          </select></td>
      </tr>
      <tr>
        <td>Bề ngang lốp (mm) :</td>
        <td><input type="text" name="width_tires" style="width:215px"/></td>
      </tr>
      <tr>
        <td>Tỷ lệ bề dày/chiều rộng lốp (%) :</td>
        <td><input type="text" name="rate" style="width:215px"/></td>
      </tr>
      <tr>
        <td>Cấu tạo lốp :</td>
        <td><select name="tire_structure" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1">R(hướng tâm): các lớp bố thân lốp xe chạy hướng tâm từ ta-lông bên này sang ta-lông bên kia</option>
            <option value="2">B(bố xiên): các lớp bố xiên chạy xiên từ ta-lông bên này sang ta-lông bên kia, với các lớp bố lần lượt đối hướng để gia cường lẫn nhau</option>
          </select></td>
      </tr>
      <tr>
        <td>Đường kính bánh (inch) :</td>
        <td><input type="text" name="diameter_wheels" class="styleTextBox" style="width:215px;"/></td>
      </tr>
      <tr>
        <td>Chỉ số trọng tải (kg) hoặc pound (cân Anh) :</td>
        <td><input type="text" name="tonnage_index" class="styleTextBox" style="width:215px;"/></td>
      </tr>
      <tr>
        <td>Chỉ số tốc độ (km/h) :</td>
        <td><select name="speed_index" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1">F(vận tốc tối đa: 80 km/h)</option>
            <option value="2">G(vận tốc tối đa: 90 km/h)</option>
            <option value="3">J(vận tốc tối đa: 100 km/h)</option>
            <option value="4">K(vận tốc tối đa: 110 km/h)</option>
            <option value="5">L(vận tốc tối đa: 120 km/h)</option>
            <option value="6">M(vận tốc tối đa: 130 km/h)</option>
            <option value="7">N(vận tốc tối đa: 140 km/h)</option>
            <option value="8">P(vận tốc tối đa: 150 km/h)</option>
            <option value="9">Q(vận tốc tối đa: 160 km/h)</option>
            <option value="10">R(vận tốc tối đa: 170 km/h)</option>
            <option value="11">S(vận tốc tối đa: 180 km/h)</option>
            <option value="11">T(vận tốc tối đa: 190 km/h)</option>
            <option value="11">U(vận tốc tối đa: 200 km/h)</option>
            <option value="11">H(vận tốc tối đa: 210 km/h)</option>
            <option value="11">V(vận tốc tối đa: 240 km/h)</option>
            <option value="11">Z(vận tốc tối đa: > 240 km/h)</option>
          </select></td>
      </tr>
      <tr>
        <td>Độ kháng mòn của mặt lốp :</td>
        <td><select name="treadwear" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1">Trên 100 - Tốt hơn</option>
            <option value="2">100 - Mức chuẩn</option>
            <option value="3">Dưới 100 - Kém hơn</option>
          </select></td>
      </tr>
      <tr>
        <td>Lực bám kéo :</td>
        <td><select name="traction" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1">A - Tốt nhất</option>
            <option value="2">B - Trung bình</option>
            <option value="3">C - Chấp nhận được</option>
          </select></td>
      </tr>
      <tr>
        <td>Nhiệt độ :</td>
        <td><select name="temperature" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1">A - Tốt nhất</option>
            <option value="2">B - Trung bình</option>
            <option value="3">C - Chấp nhận được</option>
          </select></td>
      </tr>
      <tr>
        <td>M + S (yêu cầu tối thiểu khi đi trên mặt đường lầy lội hoặc phủ tuyết) :</td>
        <td><input type="text" name="ms" class="styleTextBox" style="width:215px;"/></td>
      </tr>
      <tr>
        <td>Tải trọng tối đa của lốp xe - pound hoặc kg :</td>
        <td><input type="text" name="maximum_load" class="styleTextBox" style="width:215px;"/></td>
      </tr>
      <tr>
        <td>Áp lực hơi tối đa :</td>
        <td><input type="text" name="maximum_pressure" class="styleTextBox" style="width:215px;"/></td>
      </tr>
      <tr>
      	<td></td>
      	<td>
      		<input type="submit" name="btnUpgrade" id="btnUpgrade" value="Bổ sung"/>
      		<input type="button" name="btnCancel" id="btnCancel" value="Hủy bỏ" onclick="window.location='products.php'" /></td>
      	</td>
      </tr>
    </table>
  </form>
</div>
<?php //
if(isset($_POST['btnUpgrade'])){
	$qr=mysql_query("INSERT INTO products_parameter(proid,type,width_tires,rate,tire_structure,diameter_wheels,tonnage_index,speed_index,treadwear,traction,temperature,ms,maximum_load,maximum_pressure) VALUES('".$row['id']."','".$_POST['type']."','".$_POST['width_tires']."','".$_POST['rate']."','".$_POST['tire_structure']."','".$_POST['diameter_wheels']."','".$_POST['tonnage_index']."','".$_POST['speed_index']."','".$_POST['treadwear']."','".$_POST['traction']."','".$_POST['temperature']."','".$_POST['ms']."','".$_POST['maximum_load']."','".$_POST['maximum_pressure']."')");
	if($qr){
		header('Location: products.php');
	}else{
		echo '<h1>Thêm thông số kỹ thuật thất bại..!</h1>';	
	}
}
?>
