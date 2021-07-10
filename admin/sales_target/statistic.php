<?php  // Standard inclusions     
 include("pChart/pChart/pData.class");  
 include("pChart/pChart/pChart.class");  
?>
<div style="width:100%;height:40px;line-height:40px;background:#8cc63f;color:#fff;">
	<h2 style="float:left;width:auto;padding:0;margin:0px 10px;">BÁO CÁO KINH DOANH (hàng tháng)</h2>
    <form action="#" method="get">
    	<select name="chooseYear" class="styleSelectBox" style="float:left;width:95px;margin-top:5px;">
        	<option value="">-- Năm --</option>
            <?php
			//
			for($i=2000;$i<=2020;$i++){
				//
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			?>
        </select>
        <input type="submit" name="btnSubmit" value="Thống kê" style="float:left;padding:4px;margin-top:5px;margin-left:10px;"/>
    </form>
</div>
<div style="clear:both">
	<table width="100%" border="1" cellpadding="2" cellspacing="2" class="csstable" style="color:#333">
    	<tr>
            <th scope="col" style="background:#404040">...</th>
            <th scope="col" style="background:#404040">Tháng 01</th>
            <th scope="col" style="background:#404040">Tháng 02</th>
            <th scope="col" style="background:#404040">Tháng 03</th>
            <th scope="col" style="background:#404040">Tháng 04</th>
            <th scope="col" style="background:#404040">Tháng 05</th>
            <th scope="col" style="background:#404040">Tháng 06</th>
            <th scope="col" style="background:#404040">Tháng 07</th>
            <th scope="col" style="background:#404040">Tháng 08</th>
            <th scope="col" style="background:#404040">Tháng 09</th>
            <th scope="col" style="background:#404040">Tháng 10</th>
            <th scope="col" style="background:#404040">Tháng 11</th>
            <th scope="col" style="background:#404040">Tháng 12</th>
        </tr>
        <tr>
        	<td style="background:#7f7f7f;color:#fff;"><strong>Số tiền</strong></td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 1 của năm
                $total_month1=0;
                if(isset($_GET['chooseYear'])){
					$sql1="SELECT * FROM orders WHERE paymentDate LIKE '01%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql1="SELECT * FROM orders WHERE paymentDate LIKE '01%' ORDER BY id DESC";
				}
                $month1=mysql_query($sql1);
                while($fetch_array1=mysql_fetch_array($month1)){
                    $total_month1+=$fetch_array1['totalBill'];
                }
                echo number_format($total_month1).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 2 của năm
                $total_month2=0;
                if(isset($_GET['chooseYear'])){
					$sql2="SELECT * FROM orders WHERE paymentDate LIKE '02%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql2="SELECT * FROM orders WHERE paymentDate LIKE '02%' ORDER BY id DESC";
				}
                $month2=mysql_query($sql2);
                while($fetch_array2=mysql_fetch_array($month2)){
                    $total_month2+=$fetch_array2['totalBill'];
                }
                echo number_format($total_month2).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 3 của năm
                $total_month3=0;
                if(isset($_GET['chooseYear'])){
					$sql3="SELECT * FROM orders WHERE paymentDate LIKE '03%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql3="SELECT * FROM orders WHERE paymentDate LIKE '03%' ORDER BY id DESC";
				}
                $month3=mysql_query($sql3);
                while($fetch_array3=mysql_fetch_array($month3)){
                    $total_month3+=$fetch_array3['totalBill'];
                }
                echo number_format($total_month3).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 4 của năm
                $total_month4=0;
                if(isset($_GET['chooseYear'])){
					$sql4="SELECT * FROM orders WHERE paymentDate LIKE '04%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql4="SELECT * FROM orders WHERE paymentDate LIKE '04%' ORDER BY id DESC";
				}
                $month4=mysql_query($sql4);
                while($fetch_array4=mysql_fetch_array($month4)){
                    $total_month4+=$fetch_array4['totalBill'];
                }
                echo number_format($total_month4).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 5 của năm
                $total_month5=0;
                if(isset($_GET['chooseYear'])){
					$sql5="SELECT * FROM orders WHERE paymentDate LIKE '05%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql5="SELECT * FROM orders WHERE paymentDate LIKE '05%' ORDER BY id DESC";
				}
                $month5=mysql_query($sql5);
                while($fetch_array5=mysql_fetch_array($month5)){
                    $total_month5+=$fetch_array5['totalBill'];
                }
                echo number_format($total_month5).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 6 của năm
                $total_month6=0;
                if(isset($_GET['chooseYear'])){
					$sql6="SELECT * FROM orders WHERE paymentDate LIKE '06%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql6="SELECT * FROM orders WHERE paymentDate LIKE '06%' ORDER BY id DESC";
				}
                $month6=mysql_query($sql6);
                while($fetch_array1=mysql_fetch_array($month1)){
                    $total_month6+=$fetch_array6['totalBill'];
                }
                echo number_format($total_month6).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 7 của năm
                $total_month7=0;
                if(isset($_GET['chooseYear'])){
					$sql7="SELECT * FROM orders WHERE paymentDate LIKE '07%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql7="SELECT * FROM orders WHERE paymentDate LIKE '07%' ORDER BY id DESC";
				}
                $month7=mysql_query($sql7);
                while($fetch_array7=mysql_fetch_array($month7)){
                    $total_month7+=$fetch_array7['totalBill'];
                }
                echo number_format($total_month7).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 8 của năm
                $total_month8=0;
                if(isset($_GET['chooseYear'])){
					$sql8="SELECT * FROM orders WHERE paymentDate LIKE '08%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql8="SELECT * FROM orders WHERE paymentDate LIKE '08%' ORDER BY id DESC";
				}
                $month8=mysql_query($sql8);
                while($fetch_array8=mysql_fetch_array($month8)){
                    $total_month8+=$fetch_array8['totalBill'];
                }
                echo number_format($total_month8).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 9 của năm
                $total_month9=0;
                if(isset($_GET['chooseYear'])){
					$sql9="SELECT * FROM orders WHERE paymentDate LIKE '09%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql9="SELECT * FROM orders WHERE paymentDate LIKE '09%' ORDER BY id DESC";
				}
                $month9=mysql_query($sql9);
                while($fetch_array9=mysql_fetch_array($month9)){
                    $total_month9+=$fetch_array9['totalBill'];
                }
                echo number_format($total_month9).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 10 của năm
                $total_month10=0;
                if(isset($_GET['chooseYear'])){
					$sql10="SELECT * FROM orders WHERE paymentDate LIKE '10%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql10="SELECT * FROM orders WHERE paymentDate LIKE '10%' ORDER BY id DESC";
				}
                $month10=mysql_query($sql10);
                while($fetch_array10=mysql_fetch_array($month10)){
                    $total_month10+=$fetch_array10['totalBill'];
                }
                echo number_format($total_month10).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 11 của năm
                $total_month11=0;
                if(isset($_GET['chooseYear'])){
					$sql11="SELECT * FROM orders WHERE paymentDate LIKE '11%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql11="SELECT * FROM orders WHERE paymentDate LIKE '11%' ORDER BY id DESC";
				}
                $month11=mysql_query($sql11);
                while($fetch_array11=mysql_fetch_array($month11)){
                    $total_month11+=$fetch_array11['totalBill'];
                }
                echo number_format($total_month11).' VND';
                ?>
            </td>
            <td style="background:#e8f4d8;">
				<?php //Tháng 12 của năm
                $total_month12=0;
                if(isset($_GET['chooseYear'])){
					$sql12="SELECT * FROM orders WHERE paymentDate LIKE '12%".$_GET['chooseYear']."%' ORDER BY id DESC";   
                }else{
					$sql12="SELECT * FROM orders WHERE paymentDate LIKE '12%' ORDER BY id DESC";
				}
                $month12=mysql_query($sql12);
                while($fetch_array12=mysql_fetch_array($month12)){
                    $total_month12+=$fetch_array12['totalBill'];
                }
                echo number_format($total_month12).' VND';
                ?>
            </td>
        </tr>
    </table>
    <?php
		include 'sales_target/pChart1.php';
		include 'sales_target/pChart3.php';
		include 'sales_target/pChart2.php';
		include 'sales_target/pChart4.php';
	?>
</div>