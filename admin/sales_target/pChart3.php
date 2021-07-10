<?php
  
  
 // Dataset definition   
 $DataSet = new pData;  
 $DataSet->AddPoint(array(($total_month1/1000000),($total_month2/1000000),($total_month3/1000000),($total_month4/1000000),($total_month5/1000000),($total_month6/1000000)),"Serie1");  
 $DataSet->AddPoint(array("Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6"),"Serie2");  
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie("Serie2");
 // Initialise the graph  
 $Test = new pChart(300,200);  
 $Test->drawFilledRoundedRectangle(7,7,293,193,5,240,240,240);  
 $Test->drawRoundedRectangle(5,5,295,195,5,230,230,230);  
  
 // Draw the pie chart  
 $Test->setFontProperties("pChart/Fonts/tahoma.ttf",8);  
 $Test->setShadowProperties(2,2,200,200,200);  
 $Test->drawFlatPieGraphWithShadow($DataSet->GetData(),$DataSet->GetDataDescription(),120,100,60,PIE_PERCENTAGE,10);  
 $Test->drawPieLegend(230,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);
 $Test->Render("uploaded/pictures/example13.png"); 
 echo '<div style="float:left;width:600px;height:230px;margin-top:-90px;margin-left:30px;border:2px solid #333;text-align:center;"><img src="uploaded/pictures/example13.png" /></div>';
?>