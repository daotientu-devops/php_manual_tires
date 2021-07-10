<?php

  
 // Dataset definition   
 $DataSet = new pData;  
 $DataSet->AddPoint(array(($total_month7/1000000),($total_month8/1000000),($total_month9/1000000),($total_month10/1000000),($total_month11/1000000),($total_month12/1000000)),"Serie1");  
 $DataSet->AddPoint(array("Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"),"Serie2");  
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
 $Test->Render("uploaded/pictures/example14.png"); 
 echo '<div style="float:left;width:600px;height:230px;margin-top:-5px;margin-left:26px;border:2px solid #333;text-align:center;"><img src="uploaded/pictures/example14.png" /></div>';
?>