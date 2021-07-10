<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">
NGÂN LƯỢNG.VN: HỖ TRỢ THANH TOÁN AN TOÀN
</div>
</div>

<div class="content_partition1" style="margin-left: -2px">
<div class="content_part1">
	<div style="width: 560px; margin-top: 0px; text-align: left;">
    <form action="https://www.nganluong.vn/advance_payment.php" method="post" enctype="multipart/form-data">
		<table border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td>
                <input type="hidden" name="receiver" value="daotientu@gmail.com" /> <?php // tài khoản người nhận tiền ?>
                <input type="hidden" name="product" value="<?php echo $_SESSION['idOrderGuest']; ?>" />
                <input type="hidden" name="price" value="<?php echo $totalBill; ?>" /> <?php // cần cẩn thận với biến này bởi nó ăn theo $_SESSION['purchase'] ?>
                <input type="hidden" name="returnURL" value="http://localhost/IT+Tires/" />
                <input type="hidden" name="comments" value="Chờ xử lý" />
                <input type=image src="https://www.nganluong.vn/data/images/buttons/1.gif" />
            </td>
            <td>
            	<a target="_blank" href="http://help.nganluong.vn/">[ Hướng dẫn thanh toán ]</a>
            </td>
          </tr>
       	</table>
    </form>
    </div>
</div>
</div>

</div>