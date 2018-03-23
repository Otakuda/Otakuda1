<?
class Report extends CI_Controller
{
	function __construct()
	{
		parent::__construct();//繼承
		$this->load->model('users_model');//載入資料庫
		$this->load->helper('url');//載入URL 幫手
    $this->load->library("multi_menu");
    $this->load->library('session');
    $this->load->model('Report_Model');
		$this->load->database();
    $Data=$this->session->userdata('Language');

    $this->lang->load($Data, $Data);
   
    
        //$this->multi_menu->set_items($items);
	}
	function index()
	{
      $leavel=$this->session->userdata('leavel');
      $username=$this->session->userdata('username');
      if(strlen($leavel)!=0)
      {
        $this->load->view('Report');
      }
      else
      {
         $this->load->view('login');
      }
		
	}
	function showdatabase()
	{
		$query=$this->Report_Model->showdatabase();
		$html="<select id='Database_Option' style='width:120px; font-size:20px;'>";
		foreach($query->result_array() as $key=>$row)
		{
		  $html.="<option value=".$row['Schema'].">";
		  $html.=$row['machine']."</option>";
		}
		
		$html.="</select>";
echo $html;
	}
	function Search_lot_number($database,$start,$end)
	{
		$query=$this->Report_Model->Search_lot_number($database,$start,$end);
		$html="<select id='Lot_number_Option' style='width:160px; font-size:20px;'>";
		$quty=$query->num_rows();
		foreach($query->result_array() as $key=>$row)
		{
			$html.="<option value=".$row['Lot_number'].">";
		    $html.=$row['Lot_number']."</option>";
		}
		$html.="</select>";
echo $html;
	}
	function Initial_again_error()
	{
		$html=$this->Report_Model->Initial_again_error();
		echo $html;
	}
	function Initial_OK()
	{
		$html=$this->Report_Model->Initial_OK();
		echo $html;
	}
	function Search_again_chart($database,$lot_number)
	{
		$html=$this->Report_Model->Search_again_chart($database,$lot_number);
		echo $html;
	}
	function Search_again_error($database,$lot_number)
	{
		$html=$this->Report_Model->Search_again_error($database,$lot_number);
		echo $html;
	}
	function Search_ok($database,$lot_number)
	{
		$html=$this->Report_Model->Search_ok($database,$lot_number);
		echo $html;
	}
	function Search_All($database,$lot_number)
	{
		$html=$this->Report_Model->Search_All($database,$lot_number);
		echo $html;
	}
		function Find_analysis($database,$lot_number)
	{
		$html=$this->Report_Model->Find_analysis($database,$lot_number);
		echo $html[1];
	}
	
	function colhead($database,$lot_number)
	{
		$html=$this->Report_Model->colhead($database,$lot_number);
		echo $html;
	}
	function Draw_chart()
	{
		$html=$this->Report_Model->Draw_chart();
		echo $html;
	}

  function Get_Chart_Header()
  {
     $String=$this->Report_Model->Get_Chart_Header();
     echo $String;
  }
	function find_detail($database,$lot_number,$test_number)
    {
       $data['html'] = $this->Report_Model->find_detail($database,$lot_number,$test_number);
       $data['measurement']=$this->Report_Model->find_detail_test_number($database,$lot_number,$test_number);
       $data['Receipes']=$this->Report_Model->find_Receipes($database,$lot_number,$test_number);
       $data['database']="<input type='hidden' id='database' value="."'".$database."'>";
       $data['lot_number']="<input type='hidden' id='lot_number' value="."'".$lot_number."'>";
       $data['img']=$this->Report_Model->Initial_img($database,$lot_number,$test_number);
       $this->load->view('Detail',$data);
    }
    function Export($database,$lot_number)
	{
		error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
        date_default_timezone_set('Europe/London');
		    $this->load->library('excel');
        //activate worksheet number 1
        $objPHPExcel = PHPExcel_IOFactory::load("template/Report_Template.xlt");
        //製造欄位索引
         $col_Index=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
         $analysis_head=array('研磨良率','進料總數','刃檢總數','刃檢良品','總長不良','良品','特徵不良','刃檢不良','再研率','再研總數','再研不良','再研良率');
        //load excel
        $objPHPExcel->setActiveSheetIndex(1);
        $colhead =$this->Report_Model->colhead($database,$lot_number);
        $coldata=$this->Report_Model->get_receipe_data($database,$lot_number);//Get test_data NGS by lot number
        $analysis=$this->Report_Model->Find_analysis($database,$lot_number);//Find Analysis

        
        $colhead_DB =$this->Report_Model->colhead_DB($database,$lot_number);
        $colstring=implode(",",$colhead_DB);//確認要那些資料
        $test_data=$this->Report_Model->get_test_data($database,$lot_number,$colstring);
       

        //..........................................................最上面TITLE
        $lot_number_title="批號 : ".$lot_number;
        $time="報表產生時間 :".date('Y-m-d');
        $objPHPExcel->getActiveSheet()->setCellValue('C2', $lot_number_title);
        $objPHPExcel->getActiveSheet()->setCellValue('G2', $time);
        $objPHPExcel->getActiveSheet()->setCellValue('G9', 'NG數');
        //............................................良率資料
        $j=count($colhead)+3;$k=0;
        for($i=0;$i<(count($analysis_head)/2);$i++)
        {
            
           
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j,2*$i+8,$analysis_head[$k]);//2*i跳2格
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j,2*$i+9,$analysis[$k]);//數據


            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j+1,2*$i+8,$analysis_head[$k+1]);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j+1,2*$i+9,$analysis[$k+1]);

            $range=$col_Index[$j].($i*2+8).":".$col_Index[$j+1].($i*2+8);
            $objPHPExcel->getActiveSheet()
               ->getStyle($range)
               ->applyFromArray(
    array(
         'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D3D3D3')),
         "font" => array("bold" => false,'size'  => 15,'name'  => '微軟正黑體')
        )
    );
               $range=$col_Index[$j].($i*2+9).":".$col_Index[$j+1].($i*2+9);
            $objPHPExcel->getActiveSheet()
               ->getStyle($range)
               ->applyFromArray(
    array(
         'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF')),
         "font" => array("bold" => false,'size'  => 15,'name'  => '微軟正黑體')
        )
    );

         

        $k=$k+2;       
        
        }
        //.................................................................................外框
        $range_1=$col_Index[$j]."8:".$col_Index[$j+1].(count($analysis_head)/2+13);
        $objPHPExcel->getActiveSheet()->getStyle($range_1)->getBorders()->getOutline()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);//Outline
        $objPHPExcel->getActiveSheet()->getStyle($range_1)->getBorders()->getInside()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);//Inline
      
         //.........................................................................缺點資料
        for($i=0;$i<count($colhead);$i++)
         {
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i+3,8,$colhead[$i]);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i+3,9,$coldata[$i]);
         }
         //...................................................................缺點資料color border
          $range=$col_Index[3]."8:".$col_Index[(count($colhead)+2)]."8";
            $objPHPExcel->getActiveSheet()
               ->getStyle($range)
               ->applyFromArray(
   array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D3D3D3')),
         "font" => array("bold" => false,'name'  => '微軟正黑體' )
        )
        );

         $range=$col_Index[3]."9:".$col_Index[(count($colhead)+2)]."9";
            $objPHPExcel->getActiveSheet()
               ->getStyle($range)
               ->applyFromArray(
   array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'ffffff')),
         "font" => array("bold" => false,'name'  => '微軟正黑體' )
        )
        );

        $range_1=$col_Index[3]."8:".$col_Index[(count($colhead)+2)]."9";
        $objPHPExcel->getActiveSheet()->getStyle($range_1)->getBorders()->getOutline()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);//Outline
        $objPHPExcel->getActiveSheet()->getStyle($range_1)->getBorders()->getInside()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);//Inline
        

         ////...................上面區塊結束
        
        
         //增加量測項目
         array_push($colhead, '進料總長','出料總長','作業時間','再研次數');
         array_unshift($colhead,' ');

         //........................................................................寫入下面區塊HEAD
         for($j=0;$j<count($colhead);$j++)
         	{
         		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j+2,24,$colhead[$j]);      		
         	}
         	

         //..................................................................進行資料寫入
         for($i=0;$i<sizeof($test_data);$i++)
         {
         	for($j=0;$j<sizeof($test_data[$i]);$j++)
         	{
         		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j+2,$i+25,$test_data[$i][$j]);      		
         	}
         	$range=$col_Index[2].($i+24).":".$col_Index[count($colhead)+1].($i+25);
         	if($i%2==0)
         	{
         	$objPHPExcel->getActiveSheet()
               ->getStyle($range)
               ->applyFromArray(
    array(
         'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFFFF')),
         "font" => array("bold" => false,'size'  => 15,'name'  => '微軟正黑體')
        )
    );

             }
             else
             {
              $objPHPExcel->getActiveSheet()
               ->getStyle($range)
               ->applyFromArray(
    array(
         'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF99')),
         "font" => array("bold" => false,'size'  => 15, 'name'  => '微軟正黑體')
        )
    );
             }
          }
          //.............................................................填顏色HEADBAR
          $range=$col_Index[2]."24:".$col_Index[(count($colhead)+1)]."24";
            $objPHPExcel->getActiveSheet()
               ->getStyle($range)
               ->applyFromArray(
   array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D3D3D3')),
         "font" => array("bold" => false,'name'  => '微軟正黑體' )
        )
        );


          //..........................................................置中
        $range="C24:".$col_Index[count($colhead)+1].(sizeof($test_data)+25);
        $objPHPExcel->getActiveSheet()->getStyle($range)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //.......................................................................................................................外框
        $objPHPExcel->getActiveSheet()->getStyle($range)->getBorders()->getOutline()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);//Outline
        $objPHPExcel->getActiveSheet()->getStyle($range)->getBorders()->getInside()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);//Inline
        //.........................................................................圖表
        

        //....................................................................

       

 
       $filename=$database."-".$lot_number.'.xls'; //save our workbook as this file name
 
        header('Content-Type: application/vnd.ms-excel'); //mime type
 
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
 
        header('Cache-Control: max-age=0'); //no cache
                    
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->setIncludeCharts(TRUE);
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
	}
  function test()
  {
    error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/London');

        $this->load->library('excel');
        //activate worksheet number 1
        $objPHPExcel = PHPExcel_IOFactory::load("template/Template.xls");
$objWorksheet = $objPHPExcel->getActiveSheet();
$objWorksheet->fromArray(
  array(
    array('', 2010, 2011, 2012),
    array('Q1',   12,   15,   21),
    array('Q2',   56,   73,   86),
    array('Q3',   52,   61,   69),
    array('Q4',   30,   32,   0),
  )
);

//  Set the Labels for each data series we want to plot
//    Datatype
//    Cell reference for data
//    Format Code
//    Number of datapoints in series
//    Data values
//    Data Marker
$dataseriesLabels = array(
  new PHPExcel_Chart_DataSeriesValues('String', 'Worksheet!$B$1', NULL, 1), //  2010
  new PHPExcel_Chart_DataSeriesValues('String', 'Worksheet!$C$1', NULL, 1), //  2011
  new PHPExcel_Chart_DataSeriesValues('String', 'Worksheet!$D$1', NULL, 1), //  2012
);
//  Set the X-Axis Labels
//    Datatype
//    Cell reference for data
//    Format Code
//    Number of datapoints in series
//    Data values
//    Data Marker
$xAxisTickValues = array(
  new PHPExcel_Chart_DataSeriesValues('String', 'Worksheet!$A$2:$A$5', NULL, 4),  //  Q1 to Q4
);
//  Set the Data values for each data series we want to plot
//    Datatype
//    Cell reference for data
//    Format Code
//    Number of datapoints in series
//    Data values
//    Data Marker
$dataSeriesValues = array(
  new PHPExcel_Chart_DataSeriesValues('Number', 'Worksheet!$B$2:$B$5', NULL, 4),
  new PHPExcel_Chart_DataSeriesValues('Number', 'Worksheet!$C$2:$C$5', NULL, 4),
  new PHPExcel_Chart_DataSeriesValues('Number', 'Worksheet!$D$2:$D$5', NULL, 4),
);

//  Build the dataseries
$series = new PHPExcel_Chart_DataSeries(
  PHPExcel_Chart_DataSeries::TYPE_BARCHART,   // plotType
  PHPExcel_Chart_DataSeries::GROUPING_STANDARD, // plotGrouping
  range(0, count($dataSeriesValues)-1),     // plotOrder
  $dataseriesLabels,                // plotLabel
  $xAxisTickValues,               // plotCategory
  $dataSeriesValues               // plotValues
);
//  Set additional dataseries parameters
//    Make it a vertical column rather than a horizontal bar graph
$series->setPlotDirection(PHPExcel_Chart_DataSeries::DIRECTION_COL);

//  Set the series in the plot area
$plotarea = new PHPExcel_Chart_PlotArea(NULL, array($series));
//  Set the chart legend
$legend = new PHPExcel_Chart_Legend(PHPExcel_Chart_Legend::POSITION_RIGHT, NULL, false);

$title = new PHPExcel_Chart_Title('Test Column Chart');
$yAxisLabel = new PHPExcel_Chart_Title('Value ($k)');


//  Create the chart
$chart = new PHPExcel_Chart(
  'chart1',   // name
  $title,     // title
  $legend,    // legend
  $plotarea,    // plotArea
  true,     // plotVisibleOnly
  0,        // displayBlanksAs
  NULL,     // xAxisLabel
  $yAxisLabel   // yAxisLabel
);

//  Set the position where the chart should appear in the worksheet
$chart->setTopLeftPosition('D10');
$chart->setBottomRightPosition('M17');

//  Add the chart to the worksheet
$objWorksheet->addChart($chart);


// Save Excel 2007 file
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->setIncludeCharts(TRUE);
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;


// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Done writing file" , EOL;
echo 'File has been created in ' , getcwd() , EOL;

  }
function sort_error($database,$item,$lot_number)
{
 $message=$this->Report_Model->sort_error($database,$item,$lot_number);
 echo $message;
}
}
?>