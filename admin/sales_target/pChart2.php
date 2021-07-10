<?php
	 
	  
	 // Dataset definition   
	 $DataSet = new pData;  
	 $DataSet->AddPoint(array(0,($total_month1/1000000),($total_month2/1000000),($total_month3/1000000),($total_month4/1000000),($total_month5/1000000),($total_month6/1000000),($total_month7/1000000),($total_month8/1000000),($total_month9/1000000),($total_month10/1000000),($total_month11/1000000),($total_month12/1000000)),"Serie1");   
	 //$DataSet->AddPoint(array(3,3,-4,1,-2,2,1,0,-1,6,3),"Serie2");  
	 //$DataSet->AddPoint(array(4,1,2,-1,-4,-2,3,2,1,2,2),"Serie3");  
	 $DataSet->AddAllSeries();  
	 $DataSet->SetAbsciseLabelSerie();  
	 $DataSet->SetSerieName("Tires","Serie1");  
	 //$DataSet->SetSerieName("February","Serie2");  
	 //$DataSet->SetSerieName("March","Serie3");  
	  
	 // Initialise the graph  
	 $Test = new pChart(700,230);  
	 $Test->setFontProperties("pChart/Fonts/tahoma.ttf",8);  
	 $Test->setGraphArea(50,30,680,200);  
	 $Test->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);  
	 $Test->drawRoundedRectangle(5,5,695,225,5,230,230,230);  
	 $Test->drawGraphArea(255,255,255,TRUE);  
	 $Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2,TRUE);     
	 $Test->drawGrid(4,TRUE,230,230,230,50);  
	  
	 // Draw the 0 line  
	 $Test->setFontProperties("pChart/Fonts/tahoma.ttf",6);  
	 $Test->drawTreshold(0,143,55,72,TRUE,TRUE);  
	  
	 // Draw the bar graph  
	 $Test->drawBarGraph($DataSet->GetData(),$DataSet->GetDataDescription(),TRUE);  
	  
	 // Finish the graph  
	 $Test->setFontProperties("pChart/Fonts/tahoma.ttf",8);  
	 $Test->drawLegend(596,150,$DataSet->GetDataDescription(),255,255,255);  
	 $Test->setFontProperties("pChart/Fonts/tahoma.ttf",10);  
	 $Test->drawTitle(50,22,"Sales Target of Year (Money: milions of VND)",50,50,50,585);  
	 $Test->Render("uploaded/pictures/example12.png");  
 
	echo '<div style="float:left;width:700px;margin-bottom:30px;border:2px solid #333;"><img src="uploaded/pictures/example12.png" /></div>';
?>