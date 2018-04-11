<?
class Sum_C extends CI_Controller
{
	function __construct()
	{
		    parent::__construct();//繼承
		    $this->load->model('users_model');//載入資料庫
		    $this->load->helper('url');//載入URL 幫手
        $this->load->library("multi_menu");
        $this->load->library('session');
        $this->load->model('analysis_Model');
        $this->load->model('Sum_M');
		    $this->load->database();        
        $Data=$this->session->userdata('Language'); 

        $this->lang->load($Data, $Data);//load language
        
        //$this->multi_menu->set_items($items);
	}
	function index()
	{
		
		$this->load->view('Sum');
	}
 
	function showdatabase()
	{

		$query=$this->Sum_M->showdatabase();
		$i=0;
		$html="<select id='Database_Option' onchange='Search_lot_number();' class='form-control'><option value=All>All</option>";
		foreach($query->result_array() as $key=>$row)
		{
		   	$html.="<option value=".$row['Schema'].">";
		    $html.=$row['machine']."</option>";
		 
		}
		
		$html.="</select>";
echo $html;
	}

	function Get_lot_number($database,$start,$end)
	{
		$message=$this->Sum_M->Get_lot_number($database,$start,$end);
		echo $message;
	}

	function Resolution()
	{
		     header('Content-type: application/json');
         $Data = json_decode(file_get_contents('php://input'));
         $message=$this->Sum_M->Resolution($Data);
         echo $message;
	}
  function Sum()
  {
         header('Content-type: application/json');
         $Data = json_decode(file_get_contents('php://input'));
        // $Data=['All','2018-01-10 08:00:00','2018-01-10 18:06:26'];
         $message=$this->Sum_M->Sum($Data);
         echo $message;
  }

  function utilization()
  {
         header('Content-type: application/json');
         $Data = json_decode(file_get_contents('php://input'));
         //$Data=['drm42','2017-05-19 10:54:28','2017-05-19 13:06:26'];
         $message=$this->Sum_M->utilization($Data);
         echo $message;
  }
  function Sum_All()
  {
         header('Content-type: application/json');
         $Data = json_decode(file_get_contents('php://input'));
         //$Data=['All','2016-05-19 10:54:28','2017-05-30 13:06:26'];
         $message=$this->Sum_M->Sum_All($Data);
         echo $message;
  }

  function NGs_analysis()
  {
         header('Content-type: application/json');
         $Data = json_decode(file_get_contents('php://input'));
        
         $message=$this->Sum_M->NGs_analysis($Data);
         echo $message;
  }

  function Reshape_NGs_analysis()
  {
         header('Content-type: application/json');
         $Data = json_decode(file_get_contents('php://input'));
        //$Data=['All','2017-05-01','2017-06-01'];
         $message=$this->Sum_M->Reshape_NGs_analysis($Data);
         echo $message;
  }

	function export_excel()
	{
		    header('Content-type: application/json');
        $Data = json_decode(file_get_contents('php://input'));
        $Header=$this->Sum_M->Get_Report_Header();
        $Table=$this->Sum_M->Prepare_Data($Data);
        $utilization_Table=$this->Sum_M->Prepare_utilization_Data($Data);
        $Header_Between=$this->lang->line('Header_Between');
        $Header_Date=$this->lang->line('Header_Date');     
     
       $Between=$Data[1]."~".$Data[2];
       error_reporting(E_ALL);
       ini_set('display_errors', TRUE);
       ini_set('display_startup_errors', TRUE);
       define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
       date_default_timezone_set('Europe/London');
       $Date=date("Y-m-d");
       $this->load->library('excel');
        //activate worksheet number 1
       $objPHPExcel = PHPExcel_IOFactory::load("template/sum.xls");
       $objPHPExcel->setActiveSheetIndex(0);
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,2,$Header_Date);//日期
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,2,$Date);//日期
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,2,$Header_Between);
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,2,$Between);
       //Header

         for($i=0;$i<count($Header);$i++)
         {
           $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i,3,$Header[$i]);
         }
       // Content
       for($i=0;$i<count($Table);$i++)
       {
           $y=$i+4;
          for($j=0;$j<count($Table[$i]);$j++)
          {
            $x=$j;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($x,$y,$Table[$i][$j]);
          }          
       }

       $objPHPExcel->getActiveSheet()->getStyle('A4:S'.$y)->getFont()->setSize(16);//調整font size
       $objPHPExcel->getActiveSheet()->getStyle('A4:S'.$y)->getBorders()->getAllborders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

       
       $objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

       $objPHPExcel->getActiveSheet()->getStyle('A4:S'.$y)->getAlignment()->setWrapText(true);
       $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
//******************************************************************************************************************************** worksheet (1)
       $objPHPExcel->setActiveSheetIndex(1);
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,2,$Header_Date);//日期
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,2,$Date);//日期
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,2,$Header_Between);
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,2,$Between);
       
        // Content
       for($i=0;$i<count($utilization_Table);$i++)
       {
           $y=$i+4;
          for($j=0;$j<count($utilization_Table[$i]);$j++)
          {
            $x=$j;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($x,$y,$utilization_Table[$i][$j]);
          }          
       }

      $objPHPExcel->getActiveSheet()->getStyle('A4:G'.$y)->getFont()->setSize(16);//調整font size
       $objPHPExcel->getActiveSheet()->getStyle('A4:G'.$y)->getBorders()->getAllborders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

       
       $objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

       $objPHPExcel->getActiveSheet()->getStyle('A4:G'.$y)->getAlignment()->setWrapText(true);
       $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);



       $filename=$Date.'.xls'; //save our workbook as this file name
 
                     header('Content-Type: application/vnd.ms-excel'); //mime type
 
                     header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
 
                     header('Cache-Control: max-age=0'); //no cache
                    
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
 
                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
                    //$objWriter->save('php://output');
                    $objWriter->save(str_replace(__FILE__,'template/'. $filename,__FILE__));

                    echo date("Y-m-d");

	}
}