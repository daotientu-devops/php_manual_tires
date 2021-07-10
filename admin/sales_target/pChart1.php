<?php
		
	 	// Dataset definition   
	 	$DataSet = new pData;  
	 	$DataSet->AddPoint(array(($total_month1/1000000),($total_month2/1000000),($total_month3/1000000),($total_month4/1000000),($total_month5/1000000),($total_month6/1000000),($total_month7/1000000),($total_month8/1000000),($total_month9/1000000),($total_month10/1000000),($total_month11/1000000),($total_month12/1000000)),"Serie1");  
	 	//$DataSet->AddPoint(array(10,11,11,12,12,13,14,15,17,19,22,24),"Serie2");  
	 	$DataSet->AddPoint(array(1,2,3,4,5,6,7,8,9,10,11,12),"Serie3");  
		 $DataSet->AddAllSeries();  
	 	$DataSet->RemoveSerie("Serie3");  
	 	$DataSet->SetAbsciseLabelSerie("Serie3");  
	 	$DataSet->SetSerieName("Tires","Serie1");  
	 	//$DataSet->SetSerieName("February","Serie2");  
	 	$DataSet->SetYAxisName("Money (VND)");  
	 	$DataSet->SetYAxisUnit("tr");  
	 	$DataSet->SetXAxisUnit(".mon");  
  
	 	// Initialise the graph  
	 	$Test = new pChart(700,230);  
	 	$Test->drawGraphAreaGradient(132,153,172,50,TARGET_BACKGROUND);  
	 	$Test->setFontProperties("pChart/Fonts/tahoma.ttf",8);  
	 	$Test->setGraphArea(60,20,585,180);  
	 	$Test->drawGraphArea(213,217,221,FALSE);  
	 	$Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,213,217,221,TRUE,0,2);  
	 	$Test->drawGraphAreaGradient(162,183,202,50);  
	 	$Test->drawGrid(4,TRUE,230,230,230,20);  
  
	 	// Draw the line chart  
	 	$Test->drawLineGraph($DataSet->GetData(),$DataSet->GetDataDescription());  
	 	$Test->drawPlotGraph($DataSet->GetData(),$DataSet->GetDataDescription(),2);  
  
	 	// Draw the legend  
	 	$Test->setFontProperties("pChart/Fonts/tahoma.ttf",8);  
	 	$Test->drawLegend(605,142,$DataSet->GetDataDescription(),236,238,240,52,58,82);  
  
	 	// Draw the title  
	 	$Title = "Sales Target of Year  ";  
	 	$Test->drawTextBox(0,210,700,230,$Title,0,255,255,255,ALIGN_RIGHT,TRUE,0,0,0,30);  
  
	 	// Render the picture  
	 	$Test->AddBorder(2);  
	 	$Test->Render("uploaded/pictures/example21.png"); 
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	 	echo '<div style="float:left;width:700px;margin-bottom:30px;"><img src="uploaded/pictures/example21.png" /></div>';
 	?>
    