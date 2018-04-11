<?php
class Back extends CI_Controller 
{
	function __constructer()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backmodel');
		$this->load->database();
		$this->load->model('users_model');
	}

	function index()
	{
		$data['count']="";
		$data['html_table']="";
		$this->load->view('back',$data);
	}
	function find()
	{
		$table='receivedetail';
		$flowcard=$this->input->post('flowcard_no');
		$where=array('flowcard_no'=>$flowcard);//接受頁面的資料
		$this->load->model('backmodel');
		$query=$this->backmodel->count_table($where,$table);//計算數量
		$html_table=$this->backmodel->find_data_all($flowcard,$where,$table);
		//$html_table='';
		$data['count']=$query;
		$data['html_table']=$html_table;
		$this->load->view('back',$data);
		//取得資料
	
	}
	function jump($page)
	{
		$this->load->model('backmodel');
		$this->backmodel->jump($page);
        
	}
	
}
?>