<div style="clear:both;margin-left: 2px; margin-top: 10px; margin-bottom: 10px;">
  <h2>Thêm mới sản phẩm</h2>
</div>
<div style="clear: both;">
  <form action="#" method="post" enctype="multipart/form-data">
    <table width="100%" border="1" cellspacing="2" cellpadding="2" class="csstable">
      <tr>
        <td colspan="2">Mục có dấu (*) là thông tin bắt buộc phải điền</td>
      </tr>
      <tr>
        <td colspan="2"><font style="color: #0002A8; font-weight: bold;">Upload nhiều hình</font></td>
      </tr>
      <tr>
        <td>Nhập số lượng file upload :</td>
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
                    echo '<input type="file" name="img[]" />
					<select name="sort_order'.$i.'" style="background: #cfcfcf;">
                		<option value="'.$i.'">'.$j.'</option>
            		</select>
					<br/>';
                }
            }
       	}
    ?></td>
      </tr>
      <tr>
        <td>Tên sản phẩm (*) :</td>
        <td><textarea name="name" id="name" style="width: 600px; height:100px; border: 1px solid #ccc;" class="ckeditor"/>
          </textarea></td>
      </tr>
      <tr>
        <td>Nút danh mục <font style="color: #000099; font-weight: bold">Cha</font> (*) :</td>
        <td><select name="catid" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
            <option value="">------Select------</option>
            <?php
		$strSQL1 = "SELECT * FROM categories WHERE ParentID = 0";
		$result1 = mysql_query($strSQL1,$link);
		while($row1 = mysql_fetch_array($result1))
		{
			echo '<option value="'.$row1['id'].'" disabled="disabled">'.$row1['name'].'</option>';
			$strSQL2 = "SELECT * FROM categories WHERE ParentID = '".$row1['id']."'";
			$result2 = mysql_query($strSQL2,$link);
			while($row2 = mysql_fetch_array($result2))
			{
				echo '<option value="'.$row2['id'].'">&raquo;'.$row2['name'].'</option>';
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
		$strSQL1 = "SELECT * FROM categories WHERE ParentID = 0";
		$result1 = mysql_query($strSQL1,$link);
		while($row1 = mysql_fetch_array($result1))
		{
			echo '<option value="'.$row1['id'].'" disabled="disabled">'.$row1['name'].'</option>';
			$strSQL2 = "SELECT * FROM categories WHERE ParentID = '".$row1['id']."'";
			$result2 = mysql_query($strSQL2,$link);
			while($row2 = mysql_fetch_array($result2))
			{
				echo '<option value="'.$row2['id'].'" disabled="disabled">&raquo;'.$row2['name'].'</option>';
				$strSQL3 = "SELECT * FROM categories WHERE ParentID = '".$row2['id']."'";
				$result3 = mysql_query($strSQL3, $link);
				while($row3 = mysql_fetch_array($result3))
				{
					echo '<option value="'.$row3['id'].'">&bull; '.$row3['name'].'</option>';
					
				}
			}
		}
		?>
          </select></td>
      </tr>
      <tr>
        <td>Title (*) :</td>
        <td><textarea name="title" id="title" style="width: 600px; height:100px; border: 1px solid #ccc;" class="ckeditor"/>
          </textarea></td>
      </tr>
      <tr>
        <td>Keywords (*) :</td>
        <td><textarea name="keyword" id="keyword" style="width: 600px; height:100px; border: 1px solid #ccc;" class="ckeditor"/>
          </textarea></td>
      </tr>
      <tr>
        <td>Giá bán (VND) (*) :</td>
        <td><input type="text" name="price" id="price" style="width: 220px; border: 1px solid #ccc;"/></td>
      </tr>
      <tr>
        <td>VAT :</td>
        <td><label>
            <input name="vat" id="vat" type="radio" value="1" checked />
            Đã tính </label>
          <label>
            <input name="vat" id="vat" type="radio" value="0" />
            Chưa tính </label></td>
      </tr>
      <tr>
        <td>Số lượng (chiếc) (*) :</td>
        <td><input type="text" name="amount" id="amount" style="width: 220px; border: 1px solid #ccc;"/></td>
      </tr>
      <tr>
        <td>Bảo hành (tháng) (*) :</td>
        <td><input type="text" name="warranty" id="warranty" style="width: 220px; border: 1px solid #ccc;"/></td>
      </tr>
      <tr>
        <td>Tình trạng :</td>
        <td><select name="status" style="font-size: 12px; width: 80px; font-family: Arial, Helvetica, sans-serif;">
            <option value="">----</option>
            <option value="1">Mới</option>
            <option value="2">Cũ</option>
          </select></td>
      </tr>
      <tr>
        <td>Đánh giá :</td>
        <td><select name="review" style="width: 280px; border: 1px solid #ccc;">
            <option value="5">5 sao (Tốt nhất)</option>
            <option value="4">4 sao</option>
            <option value="3">3 sao (Trung bình)</option>
            <option value="2">2 sao</option>
            <option value="1">1 sao (Tồi nhất)</option>
          </select></td>
      </tr>
      <tr>
        <td>Xuất xứ :</td>
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
          </select></td>
      </tr>
      <tr>
        <td>Phí vận chuyển :</td>
        <td><select name="shipping" style="width: 280px; border: 1px solid #ccc;">
            <option value="1">Tính phí khi thanh toán</option>
            <option value="2">Miễn phí dưới 10 km</option>
          </select></td>
      </tr>
      <tr>
        <td>Hình ảnh đại diện :</td>
        <td><input type="file" name="image" id="image"/></td>
      </tr>
      <tr>
        <td>Description (*) :</td>
        <td><textarea name="description" id="description" style="width: 600px; height:300px; border: 1px solid #ccc;" class="ckeditor"/>
          </textarea></td>
      </tr>
      <tr>
        <td>Mô tả sản phẩm (*) :</td>
        <td><textarea name="products_desc" id="products_desc" style="width: 600px; height:300px; border: 1px solid #ccc;" class="ckeditor"/>
          </textarea></td>
      </tr>
      <tr>
        <td>Ngày đăng :</td>
        <td><input type="text" name="date" id="date" class="datetimepicker" style="width: 200px; border: 1px solid #ccc;"/></td>
      </tr>
      <tr>
        <td>Trạng thái :</td>
        <td><label>
            <input name="state" id="state" type="radio" value="1" checked />
            Hoạt động </label>
          <label>
            <input name="state" id="state" type="radio" value="0" />
            Khóa </label></td>
      </tr>
        <tr>
      
      <td>Loại sản phẩm :</td>
        <td>
      
      <select name="typePro" style="font-size: 12px; width: 220px; font-family: Arial, Helvetica, sans-serif;">
        <option value="">-- --</option>
        <option value="1">Sản phẩm mới</option>
        <option value="2">Sản phẩm bán chạy</option></select>
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
			echo '<option value="'.$t.'">'.$t.'</option>';
		}
		?>
      </select>
        </td>
      
        </tr>
      

      <tr>
        <td></td>
        <td><input type="submit" name="btnAdd" id="btnAdd" value="Thêm" />
          <input type="reset" name="btnReset" id="btnReset" value="Làm lại" /></td>
      </tr>
    </table>
  </form>
</div>
<?php
if(isset($_POST['btnAdd']))
{
if(($_POST['name']!='') && ($_POST['title']!='') && ($_POST['keyword'])!='')
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
		$sql="INSERT INTO products(name,title,keyword,price,VAT,amount,warranty,status,review,origin,shipping,image,description,products_desc,date,state,typePro,special,catid,subid) 
		VALUES ('".$_POST['name']."','".$_POST['title']."','".$_POST['keyword']."','".$_POST['price']."','".$_POST['vat']."','".$_POST['amount']."','".$_POST['warranty']."','".$_POST['status']."','".$_POST['review']."','".$_POST['origin']."','".$_POST['shipping']."','".$save_path.$file['name']."','".$_POST['description']."','".$_POST['products_desc']."','".$_POST['date']."','".$_POST['state']."','".$_POST['typePro']."','".$_POST['special']."','".$_POST['catid']."','".$_POST['subid']."')";
	}
	else
	{
		$sql="INSERT INTO products(name,title,keyword,price,VAT,amount,warranty,status,review,origin,shipping,description,products_desc,date,state,typePro,special,catid,subid) 
		VALUES ('".$_POST['name']."','".$_POST['title']."','".$_POST['keyword']."','".$_POST['price']."','".$_POST['vat']."','".$_POST['amount']."','".$_POST['warranty']."','".$_POST['status']."','".$_POST['review']."','".$_POST['origin']."','".$_POST['shipping']."','".$_POST['description']."','".$_POST['products_desc']."','".$_POST['date']."','".$_POST['state']."','".$_POST['typePro']."','".$_POST['special']."','".$_POST['catid']."','".$_POST['subid']."')";
	}
		$re=mysql_query($sql,$link);
		
			$sql1="SELECT * FROM products WHERE title='".$_POST['title']."' AND keyword='".$_POST['keyword']."' AND name='".$_POST['name']."'";
			$re1=mysql_query($sql1,$link);
			//chỉ lấy 1 dòng là kết quả của câu truy vấn
			$ro1=mysql_fetch_array($re1);
			$number=$_POST['txtNum'];
			for($j=0;$j<$number;$j++)
			{
				move_uploaded_file($_FILES['img']['tmp_name'][$j],"uploaded/products_images/".$_FILES['img']['name'][$j]);
				$url="uploaded/products_images/"; // Vừa sửa lại dòng này
				$name=$_FILES['img']['name'][$j]; // Vừa sửa lại dòng này
				$sql2="INSERT INTO products_images(proID,image,sort_order) VALUES('".$ro1['id']."','".$url.$name."','".$_POST['sort_order'.$j]."')";
				$re2=mysql_query($sql2,$link);
	
			}
		//thêm thông số kỹ thuật vào sản phẩm


		if($re)
		{
			header('Location: products.php');
		}
		else
		{
			echo 'Thao tác lỗi. Vui lòng thực hiện lại';
		}
}
else
{
	echo '<h3>Dữ liệu cho sản phẩm còn thiếu.</h3>';	
}
}
?>
