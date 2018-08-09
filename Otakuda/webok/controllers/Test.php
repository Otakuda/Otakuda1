<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("menu_model", "menu");
		$items = $this->menu->all();
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
		$count=10;
		$html='<table  border="0"  ><tr>';
		$html.='<td style="height:10px;width:50px;" align="center" valign="middle" bgcolor="#999999"><a href=http://localhost/index.php/Test/count_table><p>上一頁</p></a></td>';
		for($i=1;$i<=$count;$i++)
		{
			$html.='<td style="height:10px;width:50px;" align="center" valign="middle" bgcolor="#999999"><a href=http://localhost/index.php/Test/count_table>'.$i.'</a></td>';
		}
		$html.='<td style="height:10px;width:50px;" align="center" valign="middle" bgcolor="#999999"><a href=http://localhost/index.php/Test/count_table><p>下一頁</p></a></td>';
	    $data['html']=$html;
	    $this->load->view('test',$data);
	}
}