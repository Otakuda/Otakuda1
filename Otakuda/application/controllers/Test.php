<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("menu_model", "menu");
		$this->load->library("multi_menu");
		$this->multi_menu->set_items($items);
		$this->load->library('table');
		$this->load->database();
	
	}
	public function index()
	{
		
		$this->load->view("test");
	}
	public function basic()
	{
		$this->load->view("basic");
	}
	public function inject()
	{
		$this->load->view("inject");
	}
	public function bootstrap1()
	{
		$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
		$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
		$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
		$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
		$config["item_divider"]          = "<li class='divider'></li>";
		$this->multi_menu->initialize($config);
		$this->load->view("bootstrap1");
	}
	public function bootstrap2()
	{		
		$this->load->view("bootstrap2");
	}
	function count_table()//計算幾筆
	{
		$query=array();
		$sql="Select * from power where `id`='admin' and `passward`='123456';";
        $result = $this->db->query($sql);
        $data=$result->row_array();
        $number=count($data);
        //echo $array;
     print_r(array_values($data));
     echo $data['Leavel'];
	}
	function excel2()
	{
		$this->load->library('excel');
//activate worksheet number 1
$this->excel->setActiveSheetIndex(0);
//name the worksheet
$this->excel->getActiveSheet()->setTitle('test worksheet');
//set cell A1 content with some text
$this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
//change the font size
$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
//make the font become bold
$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
//merge cell A1 until D1
$this->excel->getActiveSheet()->mergeCells('A1:D1');
//set aligment to center for that merged cell (A1 to D1)
$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 
$filename='just_some_random_name.xls'; //save our workbook as this file name
header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
            
//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
//if you want to save it as .XLSX Excel 2007 format
$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
//force user to download the Excel file without writing it to server's HD
$objWriter->save('php://output');
	}
}