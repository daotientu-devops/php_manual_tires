<?php
if(isset($_GET['proid']))
{
	$strSQL = "SELECT * FROM products WHERE id ='".$_GET['proid']."'";
	$result = mysql_query($strSQL, $link);
	$row = mysql_fetch_array($result);
}
else
{
	header('Location: products.php');
}
?>

<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
  <h2>Sửa sản phẩm</h2>
</div>
<div style="clear: both;">
  <form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
      <tr>
        <td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
      </tr>
      <tr>
        <td>Hình ảnh lưu trữ :</td>
        <td><?php
			$sql1="SELECT * FROM products_images WHERE proID='".$row['id']."'";
			$qr1=mysql_query($sql1,$link);
			$count1=mysql_num_rows($qr1);
			
			if($count1>0 && $count1<8)
			{
				while($ro1=mysql_fetch_array($qr1))
				{
					$order=$ro1['sort_order']+1;
					
					echo '<input type="file" name="imgEdit[]" value="Sửa"/>
					<img src="'.$ro1['image'].'" alt="" border="1" width="80px"/>
					<select name="sort_order'.$ro1['sort_order'].'" style="background: #cfcfcf;">
						<option value="'.$ro1['sort_order'].'">'.$order.'</option>
					</select>
					<input type="submit" name="btnDelete'.$ro1['sort_order'].'" id="btnDelete'.$ro1['sort_order'].'" value="Xóa ảnh" />
					<br/>';
				}
			}
			
			for($n=0;$n<$count1;$n++)
			{
				if(isset($_POST['btnDelete'.$n]))
				{
					$sql6="DELETE FROM products_images WHERE proID='".$row['id']."' AND sort_order='".$n."'";
					$re6=mysql_query($sql6,$link);
					if($re6)
					{
						header('Location: products.php');
					}
					else
					{
						
					}
				}
			}
			
		?></td>
      </tr>
      <tr>
        <td>Thêm file upload :</td>
        <td><input type="text" name="txtNumber" value="<?php if(isset($_POST['txtNumber'])) echo $_POST['txtNumber']; ?>" />
          <input type="submit" name="AcceptNumber" value="Chấp nhận" /></td>
      </tr>
      <tr>
        <td></td>
        <td><?php
			if(isset($_POST['AcceptNumber']))
        	{
				$number=$_POST['txtNumber'];
				if($number>0)
				{
					for($i=0;$i<$number;$i++)
					{
						$j=$i+1;
						echo '<input type="file" name="imgAdd[]" />';
						echo '<select name="sort_order'.$i.'" style="background: #cfcfcf;">';
							echo '<option value=""></option>';
						for($p=1;$p<=100;$p++)
						{
							$q=$p-1;
							echo '<option value="'.$q.'">'.$p.'</option>';
							
						}
						echo '</select>';
						echo '<br/>';
					}
				}
			}
		
		?></td>
      </tr>
      <tr>
        <td>Tên sản phẩm (*) :</td>
        <td><textarea name="name" id="name" style="width: 600px; height:100px; border: 1px solid #ccc;" class="ckeditor"/>
          <?php echo $row['name']; ?>
          </textarea></td>
      </tr>
      <tr>
        <td>Nút danh mục <font style="color: #000099; font-weight: bold">Cha</font> (*) :</td>
        <td><select name="catid" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
            <option value="">------Select------</option>
            <?php
		$strSQL2 = "SELECT * FROM categories WHERE ParentID = 0";
		$result2 = mysql_query($strSQL2,$link);
		while($row2 = mysql_fetch_array($result2))
		{
			if($row2['id']==$row['catid'])
			{
				echo '<option selected="selected" value="'.$row2['id'].'" disabled="disabled">'.$row2['name'].'</option>';
			}
			else
			{
				echo '<option value="'.$row2['id'].'" disabled="disabled">'.$row2['name'].'</option>';
			}
			$strSQL3 = "SELECT * FROM categories WHERE ParentID = '".$row2['id']."'";
			$result3 = mysql_query($strSQL3,$link);
			while($row3 = mysql_fetch_array($result3))
			{
				if($row3['id']==$row['catid'])
				{
					echo '<option selected="selected" value="'.$row3['id'].'">&raquo; '.$row3['name'].'</option>';
				}
				else
				{
					echo '<option value="'.$row3['id'].'">&raquo; '.$row3['name'].'</option>';
				}	
			}
		}
		?>
          </select></td>
      </tr>
      <tr>
        <td>Nút danh mục <font style="color: #000099; font-weight: bold">Con</font> (*) :</td>
        <td><select name="subid" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
            <option value="">------Select------</option>
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
				echo '<option value="'.$row2['id'].'" disabled="disabled">'.$row2['name'].'</option>';
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
					echo '<option value="'.$row3['id'].'" disabled="disabled">&raquo; '.$row3['name'].'</option>';
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
						echo '<option value="'.$row4['id'].'">&rarr; '.$row4['name'].'</option>';
					}	
				}
			}
		}
		?>
          </select></td>
      </tr>
      <tr>
        <td>Title (*) :</td>
        <td><textarea name="title" id="title" style="width: 600px; height:100px; border: 1px solid #ccc;" class="ckeditor"/>
          <?php echo $row['title']; ?>
          </textarea></td>
      </tr>
      <tr>
        <td>Keywords (*) :</td>
        <td><textarea name="keyword" id="keyword" style="width: 600px; height:100px; border: 1px solid #ccc;" class="ckeditor"/>
          <?php echo $row['keyword']; ?>
          </textarea></td>
      </tr>
      <tr>
        <td>Giá bán (VND) (*) :</td>
        <td><input type="text" name="price" id="price" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['price']; ?>"/></td>
      </tr>
      <tr>
        <td>VAT :</td>
        <td><label>
            <input name="vat" id="vat" type="radio" value="1"  <?php if($row['VAT']==1) echo "checked"; ?>/>
            Đã tính </label>
          <label>
            <input name="vat" id="vat" type="radio" value="0"  <?php if($row['VAT']==0) echo "checked"; ?>/>
            Chưa tính </label></td>
      </tr>
      <tr>
        <td>Số lượng (chiếc) (*) :</td>
        <td><input type="text" name="amount" id="amount" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['amount']; ?>"/></td>
      </tr>
      <tr>
        <td>Bảo hành (tháng) (*) :</td>
        <td><input type="text" name="warranty" id="warranty" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['warranty']; ?>"/></td>
      </tr>
      <tr>
        <td>Tình trạng :</td>
        <td><select name="status" style="font-size: 12px; width: 80px; font-family: Arial, Helvetica, sans-serif;">
            <option value="">----</option>
            <option value="1" <?php if($row['status']==1) echo 'selected'; ?>>Mới</option>
            <option value="0" <?php if($row['status']==0) echo 'selected'; ?>>Cũ</option>
          </select></td>
      </tr>
      <tr>
        <td>Đánh giá :</td>
        <td><select name="review" style="width: 280px; border: 1px solid #ccc;">
            <option value="5" <?php if($row['review']==5) echo 'selected'; ?>>5 sao (Tốt nhất)</option>
            <option value="4" <?php if($row['review']==4) echo 'selected'; ?>>4 sao</option>
            <option value="3" <?php if($row['review']==3) echo 'selected'; ?>>3 sao (Trung bình)</option>
            <option value="2" <?php if($row['review']==2) echo 'selected'; ?>>2 sao</option>
            <option value="1" <?php if($row['review']==1) echo 'selected'; ?>>1 sao (Tồi nhất)</option>
          </select></td>
      </tr>
      <tr>
        <td>Xuất xứ (Mới) :</td>
        <td><select name="origin" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
            <option selected="selected" value="0">------------------</option>
            <option selected="" value="United States">United States</option>
            <option selected="" value="Canada">Canada</option>
            <option selected="" value="Abu Dhabi">Abu Dhabi</option>
            <option selected="" value="Afghanistan">Afghanistan</option>
            <option selected="" value="Ajman">Ajman</option>
            <option selected="" value="Aland Islands">Aland Islands</option>
            <option selected="" value="Albania">Albania</option>
            <option selected="" value="Alderney">Alderney</option>
            <option selected="" value="Algeria">Algeria</option>
            <option selected="" value="American Samoa">American Samoa</option>
            <option selected="" value="Andorra">Andorra</option>
            <option selected="" value="Angola">Angola</option>
            <option selected="" value="Anguilla">Anguilla</option>
            <option selected="" value="Antarctica">Antarctica</option>
            <option selected="" value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option selected="" value="Argentina">Argentina</option>
            <option selected="" value="Armenia">Armenia</option>
            <option selected="" value="Aruba">Aruba</option>
            <option selected="" value="Australia-Aboriginal">Australia-Aboriginal</option>
            <option selected="" value="Australia">Australia</option>
            <option selected="" value="Austria">Austria</option>
            <option selected="" value="Azerbaijan">Azerbaijan</option>
            <option selected="" value="Azores">Azores</option>
            <option selected="" value="Bahamas">Bahamas</option>
            <option selected="" value="Bahrain">Bahrain</option>
            <option selected="" value="Balearic Islands">Balearic Islands</option>
            <option selected="" value="Bangladesh">Bangladesh</option>
            <option selected="" value="Barbados">Barbados</option>
            <option selected="" value="Belarus">Belarus</option>
            <option selected="" value="Belgium">Belgium</option>
            <option selected="" value="Belize">Belize</option>
            <option selected="" value="Benin">Benin</option>
            <option selected="" value="Bermuda">Bermuda</option>
            <option selected="" value="Bhutan">Bhutan</option>
            <option selected="" value="Bolivia">Bolivia</option>
            <option selected="" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option selected="" value="Botswana">Botswana</option>
            <option selected="" value="Bouvet Island">Bouvet Island</option>
            <option selected="" value="Brazil">Brazil</option>
            <option selected="" value="British Antarctic Territory">British Antarctic Territory</option>
            <option selected="" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option selected="" value="British Virgin Islands">British Virgin Islands</option>
            <option selected="" value="Brunei">Brunei</option>
            <option selected="" value="Bulgaria">Bulgaria</option>
            <option selected="" value="Burkina Faso">Burkina Faso</option>
            <option selected="" value="Burundi">Burundi</option>
            <option selected="" value="Cambodia">Cambodia</option>
            <option selected="" value="Cameroon">Cameroon</option>
            <option selected="" value="Canary Islands">Canary Islands</option>
            <option selected="" value="Cape Verde">Cape Verde</option>
            <option selected="" value="Cayman Islands">Cayman Islands</option>
            <option selected="" value="Central African Republic">Central African Republic</option>
            <option selected="" value="Chad">Chad</option>
            <option selected="" value="Chile">Chile</option>
            <option selected="" value="China">China</option>
            <option selected="" value="Christmas Island">Christmas Island</option>
            <option selected="" value="Cocos Islands">Cocos Islands</option>
            <option selected="" value="Colombia">Colombia</option>
            <option selected="" value="Comoros">Comoros</option>
            <option selected="" value="Congo-Brazzaville">Congo-Brazzaville</option>
            <option selected="" value="Congo-Kinshasa">Congo-Kinshasa</option>
            <option selected="" value="Cook Islands">Cook Islands</option>
            <option selected="" value="Coral Sea Islands">Coral Sea Islands</option>
            <option selected="" value="Costa Rica">Costa Rica</option>
            <option selected="" value="Cote DIvoire">Cote DIvoire</option>
            <option selected="" value="Croatia">Croatia</option>
            <option selected="" value="Cuba">Cuba</option>
            <option selected="" value="Cyprus">Cyprus</option>
            <option selected="" value="Czech Republic">Czech Republic</option>
            <option selected="" value="Denmark">Denmark</option>
            <option selected="" value="Djibouti">Djibouti</option>
            <option selected="" value="Dominica">Dominica</option>
            <option selected="" value="Dominican Republic">Dominican Republic</option>
            <option selected="" value="Dubai">Dubai</option>
            <option selected="" value="East Timor">East Timor</option>
            <option selected="" value="Ecuador">Ecuador</option>
            <option selected="" value="Egypt">Egypt</option>
            <option selected="" value="El Salvador">El Salvador</option>
            <option selected="" value="England">England</option>
            <option selected="" value="Equatorial Guinea">Equatorial Guinea</option>
            <option selected="" value="Eritrea">Eritrea</option>
            <option selected="" value="Estonia">Estonia</option>
            <option selected="" value="Ethiopia">Ethiopia</option>
            <option selected="" value="Falkland Islands">Falkland Islands</option>
            <option selected="" value="Faroe Islands">Faroe Islands</option>
            <option selected="" value="Fiji">Fiji</option>
            <option selected="" value="Finland">Finland</option>
            <option selected="" value="France">France</option>
            <option selected="" value="French Guiana Independentist">French Guiana Independentist</option>
            <option selected="" value="French Guiana">French Guiana</option>
            <option selected="" value="French Polynesia">French Polynesia</option>
            <option selected="" value="Fujairah">Fujairah</option>
            <option selected="" value="Gabon">Gabon</option>
            <option selected="" value="Gambia">Gambia</option>
            <option selected="" value="Georgia">Georgia</option>
            <option selected="" value="Germany">Germany</option>
            <option selected="" value="Ghana">Ghana</option>
            <option selected="" value="Gibraltar">Gibraltar</option>
            <option selected="" value="Greece">Greece</option>
            <option selected="" value="Greenland">Greenland</option>
            <option selected="" value="Grenada">Grenada</option>
            <option selected="" value="Guadeloupe">Guadeloupe</option>
            <option selected="" value="Guam">Guam</option>
            <option selected="" value="Guatemala">Guatemala</option>
            <option selected="" value="Guernsey">Guernsey</option>
            <option selected="" value="Guinea-Bissau">Guinea-Bissau</option>
            <option selected="" value="Guinea">Guinea</option>
            <option selected="" value="Guyana">Guyana</option>
            <option selected="" value="Haiti">Haiti</option>
            <option selected="" value="Heard and McDonald Islands">Heard and McDonald Islands</option>
            <option selected="" value="Honduras">Honduras</option>
            <option selected="" value="Hong Kong">Hong Kong</option>
            <option selected="" value="Hungary">Hungary</option>
            <option selected="" value="Iceland">Iceland</option>
            <option selected="" value="India">India</option>
            <option selected="" value="Indonesia">Indonesia</option>
            <option selected="" value="Iran">Iran</option>
            <option selected="" value="Iraq">Iraq</option>
            <option selected="" value="Ireland">Ireland</option>
            <option selected="" value="Isle of Man">Isle of Man</option>
            <option selected="" value="Israel">Israel</option>
            <option selected="" value="Italy">Italy</option>
            <option selected="" value="Jamaica">Jamaica</option>
            <option selected="" value="Japan">Japan</option>
            <option selected="" value="Jersey">Jersey</option>
            <option selected="" value="Jordan">Jordan</option>
            <option selected="" value="Kazakhstan">Kazakhstan</option>
            <option selected="" value="Kenya">Kenya</option>
            <option selected="" value="Kiribati">Kiribati</option>
            <option selected="" value="Kuwait">Kuwait</option>
            <option selected="" value="Kyrgyzstan">Kyrgyzstan</option>
            <option selected="" value="Laos">Laos</option>
            <option selected="" value="Latvia">Latvia</option>
            <option selected="" value="Lebanon">Lebanon</option>
            <option selected="" value="Lesotho">Lesotho</option>
            <option selected="" value="Liberia">Liberia</option>
            <option selected="" value="Libya">Libya</option>
            <option selected="" value="Liechtenstein">Liechtenstein</option>
            <option selected="" value="Lithuania">Lithuania</option>
            <option selected="" value="Lord Howe Island">Lord Howe Island</option>
            <option selected="" value="Luxembourg">Luxembourg</option>
            <option selected="" value="Macao">Macao</option>
            <option selected="" value="Macedonia">Macedonia</option>
            <option selected="" value="Madagascar">Madagascar</option>
            <option selected="" value="Madeira">Madeira</option>
            <option selected="" value="Malawi">Malawi</option>
            <option selected="" value="Malaysia">Malaysia</option>
            <option selected="" value="Maldives">Maldives</option>
            <option selected="" value="Mali">Mali</option>
            <option selected="" value="Malta">Malta</option>
            <option selected="" value="Marshall Islands">Marshall Islands</option>
            <option selected="" value="Martinique">Martinique</option>
            <option selected="" value="Mauritania">Mauritania</option>
            <option selected="" value="Mauritius">Mauritius</option>
            <option selected="" value="Mayotte">Mayotte</option>
            <option selected="" value="Mexico">Mexico</option>
            <option selected="" value="Micronesia">Micronesia</option>
            <option selected="" value="Midway Islands">Midway Islands</option>
            <option selected="" value="Moldova">Moldova</option>
            <option selected="" value="Monaco">Monaco</option>
            <option selected="" value="Mongolia">Mongolia</option>
            <option selected="" value="Montenegro">Montenegro</option>
            <option selected="" value="Montserrat">Montserrat</option>
            <option selected="" value="Morocco">Morocco</option>
            <option selected="" value="Mozambique">Mozambique</option>
            <option selected="" value="Myanmar">Myanmar</option>
            <option selected="" value="Namibia">Namibia</option>
            <option selected="" value="Nauru">Nauru</option>
            <option selected="" value="Nepal">Nepal</option>
            <option selected="" value="Netherlands Antilles">Netherlands Antilles</option>
            <option selected="" value="Netherlands">Netherlands</option>
            <option selected="" value="New Caledonia">New Caledonia</option>
            <option selected="" value="New Zealand-Maori">New Zealand-Maori</option>
            <option selected="" value="New Zealand">New Zealand</option>
            <option selected="" value="Nicaragua">Nicaragua</option>
            <option selected="" value="Niger">Niger</option>
            <option selected="" value="Nigeria">Nigeria</option>
            <option selected="" value="Niue">Niue</option>
            <option selected="" value="Norfolk Island">Norfolk Island</option>
            <option selected="" value="North Korea">North Korea</option>
            <option selected="" value="Northern Cyprus">Northern Cyprus</option>
            <option selected="" value="Northern Ireland">Northern Ireland</option>
            <option selected="" value="Northern Marianas">Northern Marianas</option>
            <option selected="" value="Norway">Norway</option>
            <option selected="" value="Oman">Oman</option>
            <option selected="" value="Orkney Islands">Orkney Islands</option>
            <option selected="" value="Pakistan">Pakistan</option>
            <option selected="" value="Palau">Palau</option>
            <option selected="" value="Palestine">Palestine</option>
            <option selected="" value="Panama">Panama</option>
            <option selected="" value="Papua New Guinea">Papua New Guinea</option>
            <option selected="" value="Paraguay">Paraguay</option>
            <option selected="" value="Peru">Peru</option>
            <option selected="" value="Philippine">Philippine</option>
            <option selected="" value="Pitcairn Islands">Pitcairn Islands</option>
            <option selected="" value="Poland">Poland</option>
            <option selected="" value="Portugal,">Portugal,</option>
            <option selected="" value="Puerto Rico">Puerto Rico</option>
            <option selected="" value="Qatar">Qatar</option>
            <option selected="" value="Ras al-Khaimah">Ras al-Khaimah</option>
            <option selected="" value="Reunion">Reunion</option>
            <option selected="" value="Romania">Romania</option>
            <option selected="" value="Russian Federation,">Russian Federation,</option>
            <option selected="" value="Rwanda">Rwanda</option>
            <option selected="" value="Sami">Sami</option>
            <option selected="" value="Samoa">Samoa</option>
            <option selected="" value="San Marino">San Marino</option>
            <option selected="" value="Sao Tome e Principe">Sao Tome e Principe</option>
            <option selected="" value="Sark">Sark</option>
            <option selected="" value="Saudi Arabia">Saudi Arabia</option>
            <option selected="" value="Scotland">Scotland</option>
            <option selected="" value="Seborga">Seborga</option>
            <option selected="" value="Senegal">Senegal</option>
            <option selected="" value="Serbia">Serbia</option>
            <option selected="" value="Seychelles">Seychelles</option>
            <option selected="" value="Sharjah">Sharjah</option>
            <option selected="" value="Shetland Islands">Shetland Islands</option>
            <option selected="" value="Sierra Leone">Sierra Leone</option>
            <option selected="" value="Sikkim">Sikkim</option>
            <option selected="" value="Singapore">Singapore</option>
            <option selected="" value="Slovakia">Slovakia</option>
            <option selected="" value="Slovenia">Slovenia</option>
            <option selected="" value="Solomon Islands">Solomon Islands</option>
            <option selected="" value="Somalia">Somalia</option>
            <option selected="" value="Somaliland">Somaliland</option>
            <option selected="" value="South Africa">South Africa</option>
            <option selected="" value="South Korea">South Korea</option>
            <option selected="" value="Spain">Spain</option>
            <option selected="" value="Sri Lanka">Sri Lanka</option>
            <option selected="" value="St Helena">St Helena</option>
            <option selected="" value="St Kitts and Nevis">St Kitts and Nevis</option>
            <option selected="" value="St Lucia">St Lucia</option>
            <option selected="" value="St Pierre and Miquelon">St Pierre and Miquelon</option>
            <option selected="" value="St Vincent and the Grenadines">St Vincent and the Grenadines</option>
            <option selected="" value="Sudan">Sudan</option>
            <option selected="" value="uriname">uriname</option>
            <option selected="" value="Swaziland">Swaziland</option>
            <option selected="" value="Sweden">Sweden</option>
            <option selected="" value="Switzerland">Switzerland</option>
            <option selected="" value="Syria">Syria</option>
            <option selected="" value="Tahiti">Tahiti</option>
            <option selected="" value="Taiwan">Taiwan</option>
            <option selected="" value="Tajikstan">Tajikstan</option>
            <option selected="" value="Tanzania">Tanzania</option>
            <option selected="" value="Thailand">Thailand</option>
            <option selected="" value="Tibet">Tibet</option>
            <option selected="" value="Togo">Togo</option>
            <option selected="" value="Tokelau">Tokelau</option>
            <option selected="" value="Tonga">Tonga</option>
            <option selected="" value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option selected="" value="Tromelin">Tromelin</option>
            <option selected="" value="Tunisia">Tunisia</option>
            <option selected="" value="Turkey">Turkey</option>
            <option selected="" value="Turkmenistan">Turkmenistan</option>
            <option selected="" value="Tuvalu">Tuvalu</option>
            <option selected="" value="US Virgin Islands">US Virgin Islands</option>
            <option selected="" value="Uganda">Uganda</option>
            <option selected="" value="Ukraine">Ukraine</option>
            <option selected="" value="Umm al-Qaiwan">Umm al-Qaiwan</option>
            <option selected="" value="United Kingdom">United Kingdom</option>
            <option selected="" value="United Nations">United Nations</option>
            <option selected="" value="Uruguay">Uruguay</option>
            <option selected="" value="Uzbekistan">Uzbekistan</option>
            <option selected="" value="Vanuatu">Vanuatu</option>
            <option selected="" value="Vatican City State">Vatican City State</option>
            <option selected="" value="Venezuela">Venezuela</option>
            <option selected="" value="Wake Island">Wake Island</option>
            <option selected="" value="Wales">Wales</option>
            <option selected="" value="Wallis &amp; Futuna">Wallis &amp; Futuna</option>
            <option selected="" value="Western Sahara">Western Sahara</option>
            <option selected="" value="Yemen">Yemen</option>
            <option selected="" value="Yugoslavia">Yugoslavia</option>
            <option selected="" value="Zambia">Zambia</option>
            <option selected="" value="Zimbabwe">Zimbabwe</option>
            <option selected="" value="Vietnam">Vietnam</option>
          </select>
          (Cũ) :
          <input type="text" style="width: 220px; border: 1px solid #ccc;" value="<?php echo $row['origin']; ?>"/></td>
      </tr>
      <tr>
        <td>Phí vận chuyển :</td>
        <td><select name="shipping" style="width: 280px; border: 1px solid #ccc;">
            <option value="1" <?php if($row['shipping']==1) echo 'selected'; ?>>Tính phí khi thanh toán</option>
            <option value="2" <?php if($row['shipping']==2) echo 'selected'; ?>>Miễn phí dưới 10 km</option>
          </select></td>
      </tr>
      <tr>
        <td>Hình ảnh đại diện :</td>
        <td><input type="file" name="image" id="image"/></td>
      </tr>
      <tr>
        <td></td>
        <td><img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" border="1" width="100px"/></td>
      </tr>
      <!--<tr>
    	<td>Hình ảnh lưu trữ :</td>
        <td>
        	<?php
			/*$sql1="SELECT * FROM products_images WHERE proID='".$row['id']."'";
			$qr1=mysql_query($sql1,$link);
			$count1=mysql_num_rows($qr1);
			if($count1>0 && $count1<8)
			{
				while($ro1=mysql_fetch_array($qr1))
				{
					$order=$ro1['sort_order']+1;
					
					echo '<input type="file" name="imgEdit[]" value="Sửa"/>
					<img src="'.$ro1['image'].'" alt="" border="1" width="80px"/>
					<select name="sort_order'.$ro1['sort_order'].'" style="background: #cfcfcf;">
						<option value="'.$ro1['sort_order'].'">'.$order.'</option>
					</select>
					<br/>';
				}
				$number=8;
				if($number>0)
				{
					for($i=$order;$i<$number;$i++)
					{
						$j=$i+1;
						echo '<input type="file" name="imgAdd[]" />
						<select name="sort_order'.$i.'" style="background: #cfcfcf;">
							<option value="'.$i.'">'.$j.'</option>
						</select>
						<br/>';
					}
				}
			}*/
			
			?>
        </td>
   	</tr>-->
      <tr>
        <td>Description (*) :</td>
        <td><textarea name="description" id="description" style="width: 600px; height:300px; border: 1px solid #ccc;" class="ckeditor"/>
          <?php echo $row['description']; ?>
          </textarea></td>
      </tr>
      <tr>
        <td>Mô tả sản phẩm (*) :</td>
        <td><textarea name="products_desc" id="products_desc" style="width: 600px; height:300px; border: 1px solid #ccc;" class="ckeditor"/>
          <?php echo $row['products_desc']; ?>
          </textarea></td>
      </tr>
      <tr>
        <td>Ngày đăng :</td>
        <td><input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;" value="<?php echo $row['date']; ?>"/></td>
      </tr>
      <tr>
        <td>Trạng thái :</td>
        <td><label>
            <input name="state" id="state" type="radio" value="1" <?php if($row['state']==1) echo 'checked';?>/>
            Hoạt động </label>
          <label>
            <input name="state" id="state" type="radio" value="0" <?php if($row['state']==0) echo 'checked';?>/>
            Khóa </label></td>
      </tr>
        <tr>
      
      <td>Loại sản phẩm :</td>
        <td>
      
      <select name="typePro" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">-- --</option>
        <option value="1" <?php if($row['typePro']==1) echo 'selected';?>>Sản phẩm mới</option>
        <option value="2" <?php if($row['typePro']==2) echo 'selected';?>>Sản phẩm bán chạy</option>
          </select>
          </td>
        
          </tr>
        
          <tr>
        
          <td>
          Top bán chạy :
          </td>
        
          <td>
        
          <select name="special" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
        
        <option value="">Top</option>
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
      </select>
        </td>
      
        </tr>
      <?php
      	$qr=mysql_query("SELECT * FROM products_parameter WHERE proid='".$row['id']."'");
		$fc=mysql_fetch_array($qr);
      ?>
      <tr>
        <td colspan="2"><h2><font color="#000066">Sửa thông số kỹ thuật sản phẩm</font></h2></td>
      </tr>
      <tr>
        <td>Loại xe : </td>
        <td><select name="type" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1" <?php if($fc['type']==1) echo 'selected';?>>P(Passenger):lốp xe chở khách</option>
            <option value="2" <?php if($fc['type']==2) echo 'selected';?>>LT(Light Truck):xe tải nhẹ</option>
            <option value="3" <?php if($fc['type']==3) echo 'selected';?>>T(Temporary):lốp thay thế tạm thời</option>
          </select></td>
      </tr>
      <tr>
        <td>Bề ngang lốp (mm) :</td>
        <td><input type="text" name="width_tires" style="width:215px" value="<?php echo $fc['width_tires']; ?>"/></td>
      </tr>
      <tr>
        <td>Tỷ lệ bề dày/chiều rộng lốp (%) :</td>
        <td><input type="text" name="rate" style="width:215px" value="<?php echo $fc['rate']; ?>"/></td>
      </tr>
      <tr>
        <td>Cấu tạo lốp :</td>
        <td><select name="tire_structure" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1" <?php if($fc['tire_structure']==1) echo 'selected';?>>R(hướng tâm): các lớp bố thân lốp xe chạy hướng tâm từ ta-lông bên này sang ta-lông bên kia</option>
            <option value="2" <?php if($fc['tire_structure']==2) echo 'selected';?>>B(bố xiên): các lớp bố xiên chạy xiên từ ta-lông bên này sang ta-lông bên kia, với các lớp bố lần lượt đối hướng để gia cường lẫn nhau</option>
          </select></td>
      </tr>
      <tr>
        <td>Đường kính bánh (inch) :</td>
        <td><input type="text" name="diameter_wheels" class="styleTextBox" style="width:215px;" value="<?php echo $fc['diameter_wheels']; ?>"/></td>
      </tr>
      <tr>
        <td>Chỉ số trọng tải (kg) hoặc pound (cân Anh) :</td>
        <td><input type="text" name="tonnage_index" class="styleTextBox" style="width:215px;" value="<?php echo $fc['tonnage_index']; ?>"/></td>
      </tr>
      <tr>
        <td>Chỉ số tốc độ (km/h) :</td>
        <td><select name="speed_index" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1" <?php if($fc['speed_index']==1) echo 'selected';?>>F(vận tốc tối đa: 80 km/h)</option>
            <option value="2" <?php if($fc['speed_index']==2) echo 'selected';?>>G(vận tốc tối đa: 90 km/h)</option>
            <option value="3" <?php if($fc['speed_index']==3) echo 'selected';?>>J(vận tốc tối đa: 100 km/h)</option>
            <option value="4" <?php if($fc['speed_index']==4) echo 'selected';?>>K(vận tốc tối đa: 110 km/h)</option>
            <option value="5" <?php if($fc['speed_index']==5) echo 'selected';?>>L(vận tốc tối đa: 120 km/h)</option>
            <option value="6" <?php if($fc['speed_index']==6) echo 'selected';?>>M(vận tốc tối đa: 130 km/h)</option>
            <option value="7" <?php if($fc['speed_index']==7) echo 'selected';?>>N(vận tốc tối đa: 140 km/h)</option>
            <option value="8" <?php if($fc['speed_index']==8) echo 'selected';?>>P(vận tốc tối đa: 150 km/h)</option>
            <option value="9" <?php if($fc['speed_index']==9) echo 'selected';?>>Q(vận tốc tối đa: 160 km/h)</option>
            <option value="10" <?php if($fc['speed_index']==10) echo 'selected';?>>R(vận tốc tối đa: 170 km/h)</option>
            <option value="11" <?php if($fc['speed_index']==11) echo 'selected';?>>S(vận tốc tối đa: 180 km/h)</option>
            <option value="12" <?php if($fc['speed_index']==12) echo 'selected';?>>T(vận tốc tối đa: 190 km/h)</option>
            <option value="13" <?php if($fc['speed_index']==13) echo 'selected';?>>U(vận tốc tối đa: 200 km/h)</option>
            <option value="14" <?php if($fc['speed_index']==14) echo 'selected';?>>H(vận tốc tối đa: 210 km/h)</option>
            <option value="15" <?php if($fc['speed_index']==15) echo 'selected';?>>V(vận tốc tối đa: 240 km/h)</option>
            <option value="16" <?php if($fc['speed_index']==16) echo 'selected';?>>Z(vận tốc tối đa: > 240 km/h)</option>
          </select></td>
      </tr>
      <tr>
        <td>Độ kháng mòn của mặt lốp :</td>
        <td><select name="treadwear" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1" <?php if($fc['treadwear']==1) echo 'selected';?>>Trên 100 - Tốt hơn</option>
            <option value="2" <?php if($fc['treadwear']==2) echo 'selected';?>>100 - Mức chuẩn</option>
            <option value="3" <?php if($fc['treadwear']==3) echo 'selected';?>>Dưới 100 - Kém hơn</option>
          </select></td>
      </tr>
      <tr>
        <td>Lực bám kéo :</td>
        <td><select name="traction" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1" <?php if($fc['traction']==1) echo 'selected';?>>A - Tốt nhất</option>
            <option value="2" <?php if($fc['traction']==2) echo 'selected';?>>B - Trung bình</option>
            <option value="3" <?php if($fc['traction']==3) echo 'selected';?>>C - Chấp nhận được</option>
          </select></td>
      </tr>
      <tr>
        <td>Nhiệt độ :</td>
        <td><select name="temperature" style="width:230px;">
            <option value="">-- Lựa chọn --</option>
            <option value="1" <?php if($fc['temperature']==1) echo 'selected';?>>A - Tốt nhất</option>
            <option value="2" <?php if($fc['temperature']==2) echo 'selected';?>>B - Trung bình</option>
            <option value="3" <?php if($fc['temperature']==3) echo 'selected';?>>C - Chấp nhận được</option>
          </select></td>
      </tr>
      <tr>
        <td>M + S (yêu cầu tối thiểu khi đi trên mặt đường lầy lội hoặc phủ tuyết) :</td>
        <td><input type="text" name="ms" class="styleTextBox" style="width:215px;" value="<?php echo $fc['ms']; ?>"/></td>
      </tr>
      <tr>
        <td>Tải trọng tối đa của lốp xe - pound hoặc kg :</td>
        <td><input type="text" name="maximum_load" class="styleTextBox" style="width:215px;" value="<?php echo $fc['maximum_load']; ?>"/></td>
      </tr>
      <tr>
        <td>Áp lực hơi tối đa :</td>
        <td><input type="text" name="maximum_pressure" class="styleTextBox" style="width:215px;" value="<?php echo $fc['maximum_pressure']; ?>"/></td>
      </tr>
      <!--..........................................................-->
      <tr>
        <td></td>
        <td><input type="submit" name="btnUpdate" id="btnUpdate" value="Sửa" />
          <input type="button" name="btnCancel" id="btnCancel" value="Hủy" onclick="window.location='products.php'" /></td>
      </tr>
    </table>
  </form>
</div>
<?php
if (isset($_POST['btnUpdate']))
{
	$save_path="uploaded/products/";
	$file=$_FILES['image'];
	$type=$_FILES['image']['type'];
	if($type == 'image/png' || $type == 'image/gif' || $type == 'image/jpg' || $type == 'image/jpeg')
	{
		move_uploaded_file($file['tmp_name'], $save_path.$file['name']);
	}
	else
	{
	echo 'Bạn không được phép upload loại file này';
	}
	if($file['size']>0)
	{
		$strSQL4 = "UPDATE products SET name='".$_POST['name']."',title='".$_POST['title']."',keyword='".$_POST['keyword']."',price='".$_POST['price']."',VAT='".$_POST['vat']."',amount='".$_POST['amount']."',warranty='".$_POST['warranty']."',status='".$_POST['status']."',review='".$_POST['review']."',origin='".$_POST['origin']."',shipping='".$_POST['shipping']."',image='".$save_path.$file['name']."',description='".$_POST['description']."',products_desc='".$_POST['products_desc']."',date='".$_POST['date']."',state='".$_POST['state']."',typePro='".$_POST['typePro']."',special='".$_POST['special']."',catid='".$_POST['catid']."',subid='".$_POST['subid']."' WHERE id ='".$row['id']."'";
	}
	else
	{
		$strSQL4 = "UPDATE products SET name='".$_POST['name']."',title='".$_POST['title']."',keyword='".$_POST['keyword']."',price='".$_POST['price']."',VAT='".$_POST['vat']."',amount='".$_POST['amount']."',warranty='".$_POST['warranty']."',status='".$_POST['status']."',review='".$_POST['review']."',origin='".$_POST['origin']."',shipping='".$_POST['shipping']."',description='".$_POST['description']."',products_desc='".$_POST['products_desc']."',date='".$_POST['date']."',state='".$_POST['state']."',typePro='".$_POST['typePro']."',special='".$_POST['special']."',catid='".$_POST['catid']."',subid='".$_POST['subid']."' WHERE id ='".$row['id']."'";
	}
	$result4 = mysql_query($strSQL4, $link);
	
	$sql2="SELECT * FROM products_images WHERE proID='".$row['id']."'";
	$qr2=mysql_query($sql2,$link);
	$count2=mysql_num_rows($qr2);
	
	for($k=0;$k<$count2;$k++)
	{
		$url="uploaded/products_images/"; // Vừa sửa lại dòng này
		$name=$_FILES['imgEdit']['name'][$k]; // Vừa sửa lại dòng này
		$fileSize=$_FILES['imgEdit']['size'][$k];
		if($fileSize>0)
		{
			
			move_uploaded_file($_FILES['imgEdit']['tmp_name'][$k],$url.$name); // Vừa sửa lại dòng này
			$sql3="UPDATE products_images SET image='".$url.$name."' WHERE proID='".$row['id']."' AND sort_order='".$k."'";
			$qr3=mysql_query($sql3,$link);
			
		}
		else
		{
		
		}
	}
	
	$number=$_POST['txtNumber'];
	for($m=0;$m<$number;$m++)
	{	
		$path="uploaded/products_images/"; 
		$products_name=$_FILES['imgAdd']['name'][$m];
		$ImageSize=$_FILES['imgAdd']['size'][$m];
		if($ImageSize>0)
		{ 
			move_uploaded_file($_FILES['imgAdd']['tmp_name'][$m],"uploaded/products_images/".$_FILES['imgAdd']['name'][$m]);
			$sql4="INSERT INTO products_images(proID,image,sort_order) VALUES('".$row['id']."','".$path.$products_name."','".$_POST['sort_order'.$m]."')"; 
			$re4=mysql_query($sql4,$link);
		}
		else
		{
			
		}
	}
	//Lưu ý: có thể gọi lại tên biến nhiều lần ở các vị trí truy vấn khác nhau
	$qr=mysql_query("UPDATE products_parameter SET type='".$_POST['type']."',width_tires='".$_POST['width_tires']."',rate='".$_POST['rate']."',tire_structure='".$_POST['tire_structure']."',diameter_wheels='".$_POST['diameter_wheels']."',tonnage_index='".$_POST['tonnage_index']."',speed_index='".$_POST['speed_index']."',treadwear='".$_POST['treadwear']."',traction='".$_POST['traction']."',temperature='".$_POST['temperature']."',ms='".$_POST['ms']."',maximum_load='".$_POST['maximum_load']."',maximum_pressure='".$_POST['maximum_pressure']."' WHERE proid='".$row['id']."'");
	
	if($result4)
	{	
		header('Location: products.php');
	}
	else
	{
		echo 'Thao tác lỗi. Vui lòng thực hiện lại.';
	}
}
?>
