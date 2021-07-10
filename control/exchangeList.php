<div class="content" style="margin-top: 0px;">
<div class="header">
<div class="defaultTitle">Tỷ giá các ngoại tệ của Ngân hàng thương mại cổ phần Ngoại thương Việt Nam</div>
</div>
<div class="defaultContent">
<?php
class Rate{
var $source;
var $myDate;

function getXML()
{
	return file_get_contents($this->source);
}
function getRate()
{
	$xmlData = NULL;
	$p = xml_parser_create();
	xml_parse_into_struct($p,$this->getXML() , $xmlData);
	xml_parser_free($p);
	$this->myDate = $xmlData['1']['value'];
	$data = array();
	if($xmlData)
	{
		foreach($xmlData as $v)
		if(isset($v['attributes']))
		{
			$data[] = $v['attributes'];
		}
		return $data;
	}
		return false;
	}
	function show()
	{
		$data = $this->getRate();
		print 'Tỷ giá ngoại tệ Vietcombank ngày : '.$this->myDate.'<br />';
		
		print '<table width="100%" class="csstable" cellpadding="0" cellspacing="0">';
		print '<tr>';
		
		print '<th align="center" width="72px">Mã NT</th>';
		print '<th align="center" width="200px">Tên ngoại tệ</th>';
		print '<th align="center" width="100px">Mua tiền mặt</th>';
		print '<th align="center" width="100px">Chuyển khoản</th>';
		print '<th align="center" width="100px">Bán</th>';
		print '</tr>';
		print '</table>';

		foreach($data as $k=>$v){
		print '<table width="100%" class="csstable1" cellpadding="0" cellspacing="0">';
		print '<tr >';
		print '<td align="center" width="72px">'.$v['CURRENCYCODE'].'</td>';
		print '<td align="center" width="200px">'.$v['CURRENCYNAME'].'</td>';
		print '<td align="center" width="100px"> '.$v['BUY'].'</td>';
		print '<td align="center" width="100px"> '.$v['TRANSFER'].'</td>';
		print '<td align="center" width="100px">'.$v['SELL'].'</td>';
		print '</tr>';
		print '</table>';	
	}
}
}
$rate=new Rate();
$rate->source='http://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx';
$rate->show();
?>
</div>
</div>











