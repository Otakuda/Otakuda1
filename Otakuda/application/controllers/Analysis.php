<?
class Analysis extends CI_Controller
{
	function __construct()
	{
		parent::__construct();//繼承
		$this->load->model('users_model');//載入資料庫
		$this->load->helper('url');//載入URL 幫手
        $this->load->library("multi_menu");
        $this->load->library('session');
        $this->load->model('analysis_Model');
		$this->load->database();
		$Data=$this->session->userdata('Language');
        if(strlen($Data)!=0)
        {
           $this->lang->load($Data, $Data);
        }
        //$this->multi_menu->set_items($items);
	}
	function index()
	{
		$leavel=$this->session->userdata('leavel');
        $username=$this->session->userdata('username');
        if(strlen($leavel)!=0)
        {
        	$this->load->view('analysis');
        }
		else
		{
			$this->load->view('login');
		}
	}
	function showdatabase()
	{

		$query=$this->analysis_Model->showdatabase();
		$i=0;
		$html="<select id='Database_Option' onchange='Option_class_Change();' style='width:150px; font-size:20px;'><option value=All>All</option>";
		foreach($query->result_array() as $key=>$row)
		{
		   	$html.="<option value=".$row['Schema'].">";
		    $html.=$row['machine']."</option>";
		 
		}
		
		$html.="</select>";
echo $html;
	}

	function Get_table_header()
	{
		$array=$this->analysis_Model->Get_table_header();
		return $array;
	}
	function search_Lot_number_Receipe($database,$option_class,$start,$end)
	{
		$html=$this->analysis_Model->search_Lot_number_Receipe($database,$option_class,$start,$end);
		echo $html;
	}
	function resolution_NG($database,$option_class,$option,$start,$end)
	{
		//$Yield=array('總隻數','外徑','圓角','缺口深度','重疊','垂直分開','水平分開','偏心','大頭','小頭','大小面','內弧勾狀','外弧凸肚','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切','過切差異','割出','中心研磨不足','刀痕','刀形不良');
		//array_unshift($Yield, '機台','規格名稱','批號');
		$final_array=$this->analysis_Model->resolution_NG($database,$option_class,$option,$start,$end);
	
        
         
        $Yield=$this->Get_table_header();
		$Total_member=$this->lang->line('Total_member');
		$Machine=$this->lang->line('Machine');
		$Recipe=$this->lang->line('Recipe');
		$lot_number=$this->lang->line('lot_number');

		array_push($Yield, $Total_member);
		array_unshift($Yield, $Machine,$Recipe,$lot_number);

        $html="<table border='1'><tr>";
        for($i=0;$i<count($Yield);$i++)
        {
	       $html.="<th>".$Yield[$i]."</th>";
        }
        $html.="</tr>";// 標頭檔
       for($i=0;$i<count($final_array);$i++)
        {
	   
			$sum=(int)$final_array[$i][3];			
		
	    $html.="<tr>";
	   for($j=0;$j<count($Yield);$j++)
	   {
		
		  if($j>4 && $sum>0 )
		  {
			$html.="<td>".round(((int)$final_array[$i][$j]*100/$sum),2)."%</td>";
		  }
		  else
		  {
			if($j>3)
			{
				$html.="<td>".$final_array[$i][$j]."%</td>";
			}
			else
			$html.="<td>".$final_array[$i][$j]."</td>";
		  }
	    }
	    $html.="</tr>";  
	   }
	   $html.="</table>";
	 echo $html;
   }
   function resolution_Reshape_NGs($database,$option_class,$option,$start,$end)
	{
		// $Yield=array('總隻數','外徑','圓角','缺口深度','重疊','垂直分開','水平分開','偏心','大頭','小頭','大小面','內弧勾狀','外弧凸肚','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切','過切差異','割出','中心研磨不足','刀痕','刀形不良');
		// array_unshift($Yield, '機台','規格名稱','批號');

		$Yield=$this->Get_table_header();
		$Total_member=$this->lang->line('Total_member');
		$Machine=$this->lang->line('Machine');
		$Recipe=$this->lang->line('Recipe');
		$lot_number=$this->lang->line('lot_number');

		array_push($Yield, $Total_member);
		array_unshift($Yield, $Machine,$Recipe,$lot_number);

		$final_array=$this->analysis_Model->resolution_Reshape_NGs($database,$option_class,$option,$start,$end);
		$html="<table border='1'><tr>";
        
        for($i=0;$i<count($Yield);$i++)
        {
	       $html.="<th>".$Yield[$i]."</th>";
        }
        $html.="</tr>";// 標頭檔
       for($i=0;$i<count($final_array);$i++)
        {
	   
			$sum=(int)$final_array[$i][3];			
		
	    $html.="<tr>";
	   for($j=0;$j<count($Yield);$j++)
	   {
		
		  if($j>4 && $sum>0 )
		  {
			$html.="<td>".round(((int)$final_array[$i][$j]*100/$sum),2)."%</td>";
		  }
		  else
		  {
			if($j>3)
			{
				$html.="<td>".$final_array[$i][$j]."%</td>";
			}
			else
			$html.="<td>".$final_array[$i][$j]."</td>";
		  }
	    }
	    $html.="</tr>";  
	   }
	   $html.="</table>";
	 echo $html;
   }
   function resolution_Yield($database,$option_class,$option,$start,$end)
   {
   	$html="<table border='1'><tr>";
   	$final_array=$this->analysis_Model->resolution_Yield($database,$option_class,$option,$start,$end);
   	$head=array($this->lang->line('Machine'),$this->lang->line('Recipe'),$this->lang->line('lot_number'),$this->lang->line('Capacity'),$this->lang->line('Yield'),$this->lang->line('Reshape_Rate'),$this->lang->line('Ring_Rate'));   	

   	for($i=0;$i<count($head);$i++)// row head
   	{
   		$html.="<th>".$head[$i]."</th>";
   	}
   	    $html.="</tr>";

   	 for($i=0;$i<count($final_array);$i++)
   	 {
   	 	$html.="<tr>";
   	 	for($j=0;$j<count($head);$j++)
   	 	{
   	 		if($j>2)
   	 		{
   	 			$html.="<td>".round(($final_array[$i][$j]),2)."</td>";//進行數字處理
   	 		}
   	 		else
   	 		{
   	 			$html.="<td>".$final_array[$i][$j]."</td>";
   	 		}
   	 		    
   	 	}
   	 	$html.="</tr>";

   	 }
   	 $html.="</tr></table>";
   	  echo $html;


   }
   function Draw_resolution_Reshape_NGs($database,$option_class,$option,$start,$end)
{
	$final_array=$this->analysis_Model->resolution_Reshape_NGs($database,$option_class,$option,$start,$end);
	for($i=0;$i<count($final_array);$i++)
	{   
		$sum=(int)$final_array[$i][3];	
		for($j=0;$j<(sizeof($final_array,1)/sizeof($final_array))-6;$j++)
		{
			if($j>3 && $sum>0)
			{
				$final_array[$i][$j]=round(((int)$final_array[$i][$j]*100/$sum),2);
			}
		}
	}
	echo json_encode($final_array);
}
   function Draw_resolution_NG($database,$option_class,$option,$start,$end)
{
	$final_array=$this->analysis_Model->resolution_NG($database,$option_class,$option,$start,$end);
	for($i=0;$i<count($final_array);$i++)
	{   
		$sum=(int)$final_array[$i][3];	
		for($j=0;$j<(sizeof($final_array,1)/sizeof($final_array))-6;$j++)
		{
			if($j>3 && $sum>0)
			{
				$final_array[$i][$j]=round(((int)$final_array[$i][$j]*100/$sum),2);
			}
		}
	}
	echo json_encode($final_array);
}
    function Draw_resolution_Yield($database,$option_class,$option,$start,$end)
{
	$final_array=$this->analysis_Model->resolution_Yield($database,$option_class,$option,$start,$end);
	
	echo json_encode($final_array);

  
}
   function Export($database,$option_class,$option,$start,$end)
   {
   	  
   	    error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
        date_default_timezone_set('Europe/London');
		$this->load->library('excel');
		$objPHPExcel = new PHPExcel();
		
		$objPHPExcel->setActiveSheetIndex(0);
		$objWorksheet = $objPHPExcel->getActiveSheet(0);
		$objWorksheet->setTitle('再研率');
		//....................................................resolution_NG
		$Reshape_NGs=$this->analysis_Model->resolution_Reshape_NGs($database,$option_class,$option,$start,$end);
		$NGs=$this->analysis_Model->resolution_NG($database,$option_class,$option,$start,$end);
		//.....................轉換成%
		  for($i=0;$i<count($Reshape_NGs);$i++)
	{   
		$sum=0;
		for($k=0;$k<(sizeof($Reshape_NGs,1)/sizeof($Reshape_NGs))-6;$k++)
		{
			$sum=(int)$Reshape_NGs[$i][$k+3]+$sum;
			
		}
		for($j=0;$j<(sizeof($Reshape_NGs,1)/sizeof($Reshape_NGs))-6;$j++)
		{
			if($j>2 && $sum>0)
			{
				$Reshape_NGs[$i][$j]=round(((int)$Reshape_NGs[$i][$j]*100/$sum),2);
			}
			elseif($j=2)
			{
				$Reshape_NGs[$i][$j]=$Reshape_NGs[$i][0]."/".$Reshape_NGs[$i][1]."/".$Reshape_NGs[$i][2];
			}
		}
	}
	
//.................................................$NG_Head
	//echo sizeof($Reshape_NGs,1)."<br>".sizeof($Reshape_NGs);
     $NG_Head=array('機台','規格','批號','外徑','圓角','缺口深度','重疊','垂直分開','水平分開','偏心','大頭','小頭','大小面','內弧勾狀','外弧凸肚','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切','過切差異','割出','中心研磨不足','刀痕','刀形不良');
		for($i=0;$i<count($NG_Head);$i++)
		{
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i,1,$NG_Head[$i]);
		}
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			for($j=0;$j<sizeof($Reshape_NGs,1)/sizeof($Reshape_NGs)-1;$j++)
			{
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j,$i+2,$Reshape_NGs[$i][$j]);							
			}
		}
		$dataseriesLabels=[];
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			$range='再研率!$C$'.($i+2);
			$dataseriesLabels[$i]=new PHPExcel_Chart_DataSeriesValues('String', $range, NULL, 1);
		}
		$xAxisTickValues = array(
	new PHPExcel_Chart_DataSeriesValues('String', '再研率!$D$1:$AA$1', NULL, 24),	//	Q1 to Q4
);
		$dataSeriesValues =[];
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			$range='再研率!$C$'.($i+2).':$AA$'.($i+2);
			$dataSeriesValues[$i]=new PHPExcel_Chart_DataSeriesValues('Number', '再研率!$D$2:$AA$2', NULL, 24);
		}
		$series = new PHPExcel_Chart_DataSeries(
	PHPExcel_Chart_DataSeries::TYPE_LINECHART,		// plotType
	PHPExcel_Chart_DataSeries::GROUPING_STACKED,	// plotGrouping
	range(0, count($dataSeriesValues)-1),			// plotOrder
	$dataseriesLabels,								// plotLabel
	$xAxisTickValues,								// plotCategory
	$dataSeriesValues								// plotValues
);

//	Set the series in the plot area
$plotarea = new PHPExcel_Chart_PlotArea(NULL, array($series));
//	Set the chart legend
$legend = new PHPExcel_Chart_Legend(PHPExcel_Chart_Legend::POSITION_TOPRIGHT, NULL, false);

$title = new PHPExcel_Chart_Title('再研率');
$yAxisLabel = new PHPExcel_Chart_Title('%');


//	Create the chart
$chart = new PHPExcel_Chart(
	'chart1',		// name
	$title,			// title
	$legend,		// legend
	$plotarea,		// plotArea
	true,			// plotVisibleOnly
	0,				// displayBlanksAs
	NULL,			// xAxisLabel
	$yAxisLabel		// yAxisLabel
);

//	Set the position where the chart should appear in the worksheet
$range_Start="A".(sizeof($Reshape_NGs)+2);
$range_End="O".(sizeof($Reshape_NGs)+20);
$chart->setTopLeftPosition($range_Start);
$chart->setBottomRightPosition($range_End);

//	Add the chart to the worksheet
$objWorksheet->addChart($chart);
// Save Excel 2007 
//..........................

		
//--------------------------------------------------------------------
        $filename='123.xls';
        header('Content-Type: application/vnd.ms-excel'); //mime type
 
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
 
        header('Cache-Control: max-age=0'); 

       
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->setIncludeCharts(TRUE);
$objWriter->save('php://output');


   }
   function Export_text($database,$option_class,$option,$start,$end)
   {
   	  
   	    error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
        date_default_timezone_set('Europe/London');
		$this->load->library('excel');
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		$objWorksheet = $objPHPExcel->getActiveSheet(0);
		$objWorksheet->setTitle('再研率');
		//....................................................resolution_NG
		$Reshape_NGs=$this->analysis_Model->resolution_Reshape_NGs($database,$option_class,$option,$start,$end);
		$Reshape_NGs=$this->analysis_Model->Adjustment($Reshape_NGs);
		$NGs=$this->analysis_Model->resolution_NG($database,$option_class,$option,$start,$end);
        $NGs=$this->analysis_Model->Adjustment($NGs);
		$Yield=$this->analysis_Model->resolution_Yield($database,$option_class,$option,$start,$end);
	
		
//.................................................$NG_Head
	    $NG_Head=array('機台','規格','批號','外徑','圓角','缺口深度','重疊','垂直分開','水平分開','偏心','大頭','小頭','大小面','內弧勾狀','外弧凸肚','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切','過切差異','割出','中心研磨不足','刀痕','刀形不良');
		for($i=0;$i<count($NG_Head);$i++)
		{
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i,1,$NG_Head[$i]);
		}
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			for($j=0;$j<sizeof($Reshape_NGs,1)/sizeof($Reshape_NGs)-1;$j++)
			{
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j,$i+2,$Reshape_NGs[$i][$j]);							
			}
		}
		$dataseriesLabels=[];
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			$range='再研率!$C$'.($i+2);
			$dataseriesLabels[$i]=new PHPExcel_Chart_DataSeriesValues('String', $range, NULL, 1);
		}
		$xAxisTickValues = array(
	new PHPExcel_Chart_DataSeriesValues('String', '再研率!$D$1:$AA$1', NULL, 24),	//	Q1 to Q4
);
		$dataSeriesValues =[];
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			$range='再研率!$C$'.($i+2).':$AA$'.($i+2);
			$dataSeriesValues[$i]=new PHPExcel_Chart_DataSeriesValues('Number', '再研率!$D$2:$AA$2', NULL, 24);
		}
		$series = new PHPExcel_Chart_DataSeries(
	PHPExcel_Chart_DataSeries::TYPE_LINECHART,		// plotType
	PHPExcel_Chart_DataSeries::GROUPING_STACKED,	// plotGrouping
	range(0, count($dataSeriesValues)-1),			// plotOrder
	$dataseriesLabels,								// plotLabel
	$xAxisTickValues,								// plotCategory
	$dataSeriesValues								// plotValues
);

//	Set the series in the plot area
$plotarea = new PHPExcel_Chart_PlotArea(NULL, array($series));
//	Set the chart legend
$legend = new PHPExcel_Chart_Legend(PHPExcel_Chart_Legend::POSITION_TOPRIGHT, NULL, false);

$title = new PHPExcel_Chart_Title('再研率');
$yAxisLabel = new PHPExcel_Chart_Title('%');


//	Create the chart
$chart = new PHPExcel_Chart(
	'chart1',		// name
	$title,			// title
	$legend,		// legend
	$plotarea,		// plotArea
	true,			// plotVisibleOnly
	0,				// displayBlanksAs
	NULL,			// xAxisLabel
	$yAxisLabel		// yAxisLabel
);

//	Set the position where the chart should appear in the worksheet
$range_Start="A".(sizeof($Reshape_NGs)+2);
$range_End="O".(sizeof($Reshape_NGs)+20);
$chart->setTopLeftPosition($range_Start);
$chart->setBottomRightPosition($range_End);

//	Add the chart to the worksheet
$objWorksheet->addChart($chart);
//...........................................................................
	     $objWorkSheet2 = $objPHPExcel->createSheet(1);
	     $objWorkSheet2->setTitle('缺點');
		for($i=0;$i<count($NG_Head);$i++)
		{
			$objWorkSheet2->setCellValueByColumnAndRow($i,1,$NG_Head[$i]);
		}
		for($i=0;$i<sizeof($NGs);$i++)
		{
			for($j=0;$j<sizeof($NGs,1)/sizeof($NGs)-1;$j++)
			{
				$objWorkSheet2->setCellValueByColumnAndRow($j,$i+2,$NGs[$i][$j]);							
			}
		}
		$dataseriesLabels2=[];
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			$range='缺點!$C$'.($i+2);
			$dataseriesLabels2[$i]=new PHPExcel_Chart_DataSeriesValues('String', $range, NULL, 1);
		}
		$xAxisTickValues2 = array(
	new PHPExcel_Chart_DataSeriesValues('String', '缺點!$D$1:$AA$1', NULL, 24),	//	Q1 to Q4
);
		$dataSeriesValues2 =[];
		for($i=0;$i<sizeof($Reshape_NGs);$i++)
		{
			$range='缺點!$C$'.($i+2).':$AA$'.($i+2);
			$dataSeriesValues2[$i]=new PHPExcel_Chart_DataSeriesValues('Number', '缺點!$D$2:$AA$2', NULL, 24);
		}
		$series2 = new PHPExcel_Chart_DataSeries(
	PHPExcel_Chart_DataSeries::TYPE_LINECHART,		// plotType
	PHPExcel_Chart_DataSeries::GROUPING_STACKED,	// plotGrouping
	range(0, count($dataSeriesValues2)-1),			// plotOrder
	$dataseriesLabels2,								// plotLabel
	$xAxisTickValues2,								// plotCategory
	$dataSeriesValues2								// plotValues
);

//	Set the series in the plot area
$plotarea2 = new PHPExcel_Chart_PlotArea(NULL, array($series2));
//	Set the chart legend
$legend2 = new PHPExcel_Chart_Legend(PHPExcel_Chart_Legend::POSITION_TOPRIGHT, NULL, false);

$title2 = new PHPExcel_Chart_Title('缺點');
$yAxisLabel2 = new PHPExcel_Chart_Title('%');


//	Create the chart
$chart2 = new PHPExcel_Chart(
	'chart1',		// name
	$title2,			// title
	$legend2,		// legend
	$plotarea2,		// plotArea
	true,			// plotVisibleOnly
	0,				// displayBlanksAs
	NULL,			// xAxisLabel
	$yAxisLabel2		// yAxisLabel
);

//	Set the position where the chart should appear in the worksheet
$range_Start="A".(sizeof($NGs)+2);
$range_End="O".(sizeof($NGs)+20);
$chart2->setTopLeftPosition($range_Start);
$chart2->setBottomRightPosition($range_End);

//	Add the chart to the worksheet
$objWorkSheet2->addChart($chart2);
		
//......................................................................
		 $objWorkSheet3 = $objPHPExcel->createSheet(2);
	     $objWorkSheet3->setTitle('良率');
	     $Yield_Head=array('機台','規格名稱','批號','產能','良率','再研率','補環良率'); 
		for($i=0;$i<count($Yield_Head);$i++)
		{
			$objWorkSheet3->setCellValueByColumnAndRow($i,1,$Yield_Head[$i]);
		}
		for($i=0;$i<sizeof($Yield);$i++)
		{
			for($j=0;$j<sizeof($Yield,1)/sizeof($Yield)-1;$j++)
			{
				$objWorkSheet3->setCellValueByColumnAndRow($j,$i+2,$Yield[$i][$j]);							
			}
		}
		$dataseriesLabels3=[];
		for($i=0;$i<sizeof($Yield);$i++)
		{
			$range='良率!$C$'.($i+2);
			$dataseriesLabels3[$i]=new PHPExcel_Chart_DataSeriesValues('String', $range, NULL, 1);
		}
		$xAxisTickValues3 = array(
	new PHPExcel_Chart_DataSeriesValues('String', '良率!$D$1:$AA$1', NULL, 24),	//	Q1 to Q4
);
		$dataSeriesValues3 =[];
		for($i=0;$i<sizeof($Yield);$i++)
		{
			$range='良率!$C$'.($i+2).':$AA$'.($i+2);
			$dataSeriesValues3[$i]=new PHPExcel_Chart_DataSeriesValues('Number', '良率!$D$2:$AA$2', NULL, 24);
		}
		$series3 = new PHPExcel_Chart_DataSeries(
	PHPExcel_Chart_DataSeries::TYPE_LINECHART,		// plotType
	PHPExcel_Chart_DataSeries::GROUPING_STACKED,	// plotGrouping
	range(0, count($dataSeriesValues3)-1),			// plotOrder
	$dataseriesLabels3,								// plotLabel
	$xAxisTickValues3,								// plotCategory
	$dataSeriesValues3								// plotValues
);

//	Set the series in the plot area
$plotarea3 = new PHPExcel_Chart_PlotArea(NULL, array($series3));
//	Set the chart legend
$legend3 = new PHPExcel_Chart_Legend(PHPExcel_Chart_Legend::POSITION_TOPRIGHT, NULL, false);

$title3 = new PHPExcel_Chart_Title('良率');
$yAxisLabel3 = new PHPExcel_Chart_Title('%');


//	Create the chart
$chart3 = new PHPExcel_Chart(
	'chart1',		// name
	$title3,			// title
	$legend3,		// legend
	$plotarea3,		// plotArea
	true,			// plotVisibleOnly
	0,				// displayBlanksAs
	NULL,			// xAxisLabel
	$yAxisLabel3		// yAxisLabel
);

//	Set the position where the chart should appear in the worksheet
$range_Start="A".(sizeof($Yield)+2);
$range_End="O".(sizeof($Yield)+20);
$chart3->setTopLeftPosition($range_Start);
$chart3->setBottomRightPosition($range_End);

//	Add the chart to the worksheet
$objWorkSheet3->addChart($chart3);
//--------------------------------------------------------------------
        $filename='分析報告.xls';
        header('Content-Type: application/vnd.ms-excel'); //mime type
 
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
 
        header('Cache-Control: max-age=0'); 

       
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->setIncludeCharts(TRUE);


$objWriter->save('php://output');
   }
}