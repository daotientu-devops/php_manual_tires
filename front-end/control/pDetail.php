<?php
if(isset($_GET['pid']))
{
	$strSQL="SELECT * FROM products WHERE id='".$_GET['pid']."'";
	$result=mysql_query($strSQL,$link);
	$row=mysql_fetch_array($result);
	$_SESSION['pid']=$_GET['pid'];
	
		$strSQL1="SELECT * FROM categories WHERE id='".$row['catid']."'";
		$result1=mysql_query($strSQL1,$link);
		$row1=mysql_fetch_array($result1);
		
			$strSQL2="SELECT * FROM categories WHERE id='".$row1['ParentID']."'";
			$result2=mysql_query($strSQL2,$link);
			$row2=mysql_fetch_array($result2);
			
				$strSQL3="SELECT * FROM categories WHERE id='".$row2['ParentID']."'";
				$result3=mysql_query($strSQL3,$link);
				$row3=mysql_fetch_array($result3);
	
}
else
{
	header('Location: index.php');	
}
?>
<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
<?php 
	echo $row3['name'].' &raquo; ';
	echo $row2['name'].' &raquo; ';
	echo '<font style="text-transform: none;">'.$row1['name'].'</font>'.' &raquo; '; 
	echo '<font style="color: #FFFCA8;">'.$row['name'].'</font>';
?>
</div>
</div>

<div class="defaultContent">
<form action="#" method="post">
	<table width="100%" border="0" cellpadding="2" cellspacing="2">
	<tr>
    	<td colspan="3"><?php echo '<font style="font-size: 16px; font-weight: bold;">'.$row['name'].'</font>'; ?></td>	
  
    </tr>
    <tr>
    	<td rowspan="10" align="center">
        <?php
        echo '<img src="admin/'.$row['image'].'" alt="'.$row['title'].'" border="0" height="150px" style="border: 0px solid #ccc;"/>';
		?>
		</td>
        
    <td>
    <tr>
    	<td align="right"><b>Giá bán: </b></td>
        <td><?php echo '<font style="color: #9A0E14; font-weight: bold;">'.number_format($row['price']).' <u>đ</u></font>'; ?></td>
    </tr>
    <tr>
    	<td align="right"></td>
        <td><i>
        <?php
			if($row['VAT']==1)
				echo 'Đã có VAT';
			elseif($row['VAT']==0)
				echo 'Chưa có VAT';
		?>
        </i></td>
    </tr>
    <tr>
    	<td align="right"><b>Số lượng đã mua: </b></td>
    	<td>
        <?php
			if(isset($_SESSION['purchase']))
			{
				foreach($_SESSION['purchase'] as $item)
				{
					if($row['id']==$item[0])
					{
						echo $item[1];
					}
					else
					{
						echo 0;	
					}
				}
			}
			else
			{
				echo 0;	
			}
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><b>Tình trạng: </b></td>
        <td>
        <?php
			if($row['status']==1)
				echo 'Hàng mới';
			elseif($row['status']==0)
				echo 'Hàng cũ';
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><b>Đánh giá: </b></td>
        <td>
        <?php
		if($row['review']==5)
			echo '5 sao';
			elseif($row['review']==4)
				echo '4 sao';
				elseif($row['review']==3)
					echo '3 sao';
					elseif($row['review']==2)
						echo '2 sao';
						elseif($row['review']==1)
							echo '1 sao';
		?>
        </td>
    </tr>
    <tr>
    	<td align="right"><b>Nhà sản xuất: </b></td>
        <td>
        <?php echo $row['origin']; ?>
        </td>
    </tr>
    <tr>
    	<td align="right"><b>Phí vận chuyển: </b></td>
        <td>
        <?php
			if($row['shipping']==1)
				echo 'Tính phí khi thanh toán';
			elseif($row['shipping']==2)
				echo 'Miễn phí dưới 10km';
		?>
        </td>
    </tr>
   	<tr>
    	<td align="right"><b>Số lượng: </b></td>
        <td>
    	<input type="text" name="txtCount" id="txtCount" value="1" style="width: 60px; border: 1px solid #ccc;" disabled="disabled"/>
        </td>
    </tr>
    <tr>
    	<td align="right"></td>
        <td>
    	<?php echo '<a href="cart.php?cid='.$row['id'].'">'; ?><input type="button" name="btnSubmit" id="btnSubmit" value="Mua hàng" style="background: #666; color: #FFF;"/><?php echo '</a>'; ?>
        </td>
    </tr>
    </td>
  	</tr>
    <tr>
    	<td colspan="3">
        	<?php
			$sql1="SELECT * FROM products_images WHERE proID='".$row['id']."' ORDER BY sort_order ASC limit 0,5";
			$qr1=mysql_query($sql1,$link);
			while($ro1=mysql_fetch_array($qr1))
			{
				echo '<img src="admin/'.$ro1['image'].'" border="1" height="100px" style="border: 1px solid #ccc;"/>';
			}	
			?>
        </td>
    </tr>
    <tr>
    	<td colspan="3">
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5153cdc262d2d439"></script>
        <!-- AddThis Button END -->
        </td>	
    </tr>
    </table>
</form>
</div>

<div class="defaultContent1">
	<div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Thông tin</li>
        <li class="TabbedPanelsTab" tabindex="0">Đánh giá</li>
      </ul>
   <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
        	<div style="clear:both;margin-top:5px;margin-bottom:10px;">Tìm kiếm từ khóa : <input type="text" id="text-search" style="border:1px solid #ccc;border-radius:4px;padding:2px;"/></div>
         	<script type="text/javascript">
				$("#text-search").bind('keyup change',function(){
					var searchItem=$(this).val(); 
					$(".description").removeHighlight();
					if(searchItem){
						$(".description").highlight(searchItem);
					}
				});
			</script>
            <div class="description">
				<?php
                    echo $row['products_desc'];
					echo '<p><h2>Thông số kỹ thuật của sản phẩm</h2></p>';
                ?>
                
        	</div>
        </div>
   <div class="TabbedPanelsContent">
     <form action="#" method="post">
        <table width="100%" border="0" cellpadding="2" cellspacing="2">
        <tr>
        	<td width="120px">1. Đánh giá: </td>
            <td>
            	<select name="rate" style="width: 280px; border: 1px solid #ccc;">
                	<option value="5">5 sao (Tốt nhất)</option>
                    <option value="4">4 sao</option>
                    <option value="3">3 sao (Trung bình)</option>
                    <option value="2">2 sao</option>
                    <option value="1">1 sao (Tồi nhất)</option>
                </select>
            </td>
        </tr>
        <tr>
        	<td width="120px">2. Tiêu đề: </td>
            <td>
            	<input type="text" name="title" id="title" style="width: 280px; border: 1px solid #ccc;"/>
            </td>
        </tr>
        <tr>
        	<td width="120px">3. Nội dung: </td>
            <td>
            	<textarea name="content" id="content" style="width: 280px; height: 100px; border: 1px solid #ccc; margin-left: 0px"></textarea>
            </td>
        </tr>
        <tr>
        	<td width="120px">4. Họ tên: </td>
            <td>
            	<input type="text" name="name" id="name" style="width: 280px; border: 1px solid #ccc;"/>
            </td>
        </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="2">
        <tr>
        	<td width="120px">5. Mã xác nhận: </td>
            <td>
            	<input type="text" name="txtCaptcha" style="width: 100px; border: 1px solid #ccc;" />
            </td>
            <td><img src="plugins/captcha/captcha.php" /></td>
        </tr>
        </table>
        <table border="0" cellpadding="2" cellspacing="2">
        <tr>
        	<td width="120px"></td>
            <td>
        		<input type="submit" name="btnSend" id="btnSend" value="Gửi bình luận của bạn"/>
            </td>
        </tr>
        </table>
     </form>
     <?php
	 if(isset($_POST['btnSend']))
	 {
		if($_POST['txtCaptcha']=='')
		{
			echo '<h3>Mã xác nhận không được phép để trống. Vui lòng điền đủ mã xác nhận</h3>';
		}
		else
		{
			if($_POST['txtCaptcha']!=$_SESSION['security_code'])
			{
				echo "<font color='#FF0000'>Mã ghi nhận không hợp lệ</font>";
			}
			else
			{
				 $strSQL8="SELECT * FROM comment WHERE proID='".$row['id']."' AND rate='".$_POST['rate']."'";
				 $query8=mysql_query($strSQL8,$link);
				 $num8=mysql_num_rows($query8);
					if($num8>0)
					{
						$strSQL9="UPDATE comment SET name='".$_POST['name']."',title='".$_POST['title']."',content='".$_POST['content']."',rate='".$_POST['rate']."',count=count+1,type=1 WHERE proID='".$row['id']."' AND rate='".$_POST['rate']."'";
						$query9=mysql_query($strSQL9,$link);
						if($query9)
						{
							echo '<b>Cám ơn quý khách hàng đã đánh giá sản phẩm này của chúng tôi</b>';
						}
						else
						{
							echo '<b><font style="color: #FF0000">Thao tác thất bại. Vui lòng thử lại sau ít phút nữa.</font></b>';
						}
					}
					else
					{
						$strSQL10="INSERT INTO comment(name,title,content,rate,count,proID,type) VALUES('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."','".$_POST['rate']."',1,'".$row['id']."',1)";
						$query10=mysql_query($strSQL10,$link);
						if($query10)
						{
							echo '<b>Cám ơn quý khách hàng đã đánh giá sản phẩm này của chúng tôi</b>';
						}
						else
						{
							echo '<b><font style="color: #FF0000">Thao tác thất bại. Vui lòng thử lại sau ít phút nữa.</font></b>';
						}
					}
				
				$strSQL11="SELECT * FROM comment WHERE proID='".$row['id']."' AND rate=5";
				$result11=mysql_query($strSQL11,$link);
				$row11=mysql_fetch_array($result11);
				
				$strSQL12="SELECT * FROM comment WHERE proID='".$row['id']."' AND rate=4";
				$result12=mysql_query($strSQL12,$link);
				$row12=mysql_fetch_array($result12);
				
				$strSQL13="SELECT * FROM comment WHERE proID='".$row['id']."' AND rate=3";
				$result13=mysql_query($strSQL13,$link);
				$row13=mysql_fetch_array($result13);
				
				$strSQL14="SELECT * FROM comment WHERE proID='".$row['id']."' AND rate=2";
				$result14=mysql_query($strSQL14,$link);
				$row14=mysql_fetch_array($result14);
				
				$strSQL15="SELECT * FROM comment WHERE proID='".$row['id']."' AND rate=1";
				$result15=mysql_query($strSQL15,$link);
				$row15=mysql_fetch_array($result15);
				
				$max=$row11['count'];
				if($max>$row12['count'])
				{
					$max=$max;
				}
				else
				{
					$max=$row12['count'];	
				}
				
				if($max>$row13['count'])
				{
					$max=$max;
				}
				else
				{
					$max=$row13['count'];	
				}
				
				if($max>$row14['count'])
				{
					$max=$max;
				}
				else
				{
					$max=$row14['count'];	
				}
				
				if($max>$row15['count'])
				{
					$max=$max;
				}
				else
				{
					$max=$row15['count'];	
				}
				
				$strSQL16="SELECT * FROM comment WHERE proID='".$row['id']."' AND count='".$max."'";
				$result16=mysql_query($strSQL16,$link);
				while($row16=mysql_fetch_array($result16))
				{
					$strSQL17="UPDATE products SET review='".$row16['rate']."' WHERE id='".$row['id']."'";
					$result17=mysql_query($strSQL17,$link);
					
				}
			}
		}
	 }
	 ?>
   </div>
    	
        </div>
	</div>
</div>
<div class="defaultContent2">
    <div class="header_partition1">
        <div class="title">
        Sản phẩm cùng loại</div>
    </div>
	<div class="content_partition1">
	<ul>
    <?php
	$p=2;
	if(isset($_GET['n']))
	{
		$n=$_GET['n'];
	}
	else
	{
		$n=1;
	}
	$s=($n-1)*$p;
	$strSQL4="SELECT * FROM products WHERE state=1 AND catid='".$row1['id']."'";
	$query4=mysql_query($strSQL4,$link);
	$n_record=mysql_num_rows($query4);
	function view_page()
	{
		global $n_record;
		global $p;
		for($i=1;$i<=ceil($n_record/$p);$i++)
		{
			if(isset($_GET['n']) && $i==$_GET['n'])
			{
				echo '<a href="productDetail.php?pid='.$_SESSION['pid'].'&n='.$i.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
			else
			{
				echo '<a href="productDetail.php?pid='.$_SESSION['pid'].'&n='.$i.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
		}
	}
	$i=0;
	$strSQL6="SELECT * FROM products WHERE state=1 AND catid='".$row1['id']."' ORDER BY RAND() limit $s,$p";
	$query6=mysql_query($strSQL6,$link);
	while($row6=mysql_fetch_array($query6))
	{
		$i++;
		echo '<li';
		if($i%4==0)
			echo ' class="item_last"';
		else
			echo '';
		echo '>
		<div class="image">
		<a href="productDetail.php?pid='.$row6['id'].'"><img src="admin/'.$row6['image'].'" alt="'.$row6['title'].'" border="0" height="130px"/></a></div>
		<div class="product_name"><a href="productDetail.php?pid='.$row6['id'].'">'.$row6['name'].'</a></div>
		<div class="price">'.$row6['price'].'</div>
		<div class="addToCart"><a href="cart.php?cid='.$row6['id'].'"><img src="images/icon/icon_cart.jpg"/></a></div>
		</li>';
	}
	echo '<li class="view_more">';
	view_page();
	echo '</li>';
	?>
    </ul>
    </div>
</div>

<div class="defaultContent2">
    <div class="header_partition1">
        <div class="title">
        Sản phẩm nổi bật</div>
    </div>
    <div class="content_partition1">
	<ul>
    <?php
	$p1=2;
	if(isset($_GET['n1']))
	{
		$n1=$_GET['n1'];
	}
	else
	{
		$n1=1;
	}
	$s1=($n1-1)*$p1;
	$strSQL5="SELECT * FROM products WHERE state=1 AND typePro=2";
	$query5=mysql_query($strSQL5,$link);
	$n_record1=mysql_num_rows($query5);
	function view_page1()
	{
		global $n_record1;
		global $p1;
		for($i1=1;$i1<=ceil($n_record1/$p1);$i1++)
		{
			if(isset($_GET['n1']) && $i1==$_GET['n1'])
			{
				echo '<a href="productDetail.php?pid='.$_SESSION['pid'].'&n1='.$i1.'" style="font-weight: bold; color: #FFF; background: #006666; border: 1px solid #FFF; margin-left: 2px; padding: 2px;">'.$i1.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
			else
			{
				echo '<a href="productDetail.php?pid='.$_SESSION['pid'].'&n1='.$i1.'" style="font-weight: bold; color: #006666; background: #ccc; border: 1px solid #006666; margin-left: 2px; padding: 2px;">'.$i1.'</a><font color="#006666">&nbsp;<b>&rsaquo;</b>&nbsp;</font>';
			}
		}
	}
	$i1=0;
	$strSQL7="SELECT * FROM products WHERE state=1 AND typePro=2 ORDER BY RAND() limit $s1,$p1";
	$query7=mysql_query($strSQL7,$link);
	while($row7=mysql_fetch_array($query7))
	{
		$i1++;
		echo '<li';
		if($i1%4==0)
			echo ' class="item_last"';
		else
			echo '';
		echo '>
		<div class="image">
		<a href="productDetail.php?pid='.$row7['id'].'"><img src="admin/'.$row7['image'].'" alt="'.$row7['title'].'" border="0" height="130px"/></a></div>
		<div class="product_name"><a href="productDetail.php?pid='.$row7['id'].'">'.$row7['name'].'</a></div>
		<div class="price">'.$row7['price'].'</div>
		<div class="addToCart"><a href="cart.php?cid='.$row7['id'].'"><img src="images/icon/icon_cart.jpg"/></a></div>
		</li>';
	}
	echo '<li class="view_more">';
	view_page1();
	echo '</li>';
	?>
    </ul>
    </div>
</div>    

</div>