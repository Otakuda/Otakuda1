<?php
/**
* 
*/
class blog extends CI_Controller
{
	
	function index()
	{
		$data = array('title' =>'welcome the new php',
		              'heading'=>'welcome',
		              'message'=>"www.google.com.tw"              );
		$this->load->view('blog',$data);
	}
}
?>