<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Shop_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Shop';

		$this->data['shop'] = $this->Shop_model->get_all();
		
		$this->load->view('shop', $this->data);
	}
}