<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Check_lastOrder extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('Check_lastOrder_model');

    }

    public function index() {
        $where=$this->session->userdata('shop_id');
        $this->data['order']=$this->Check_lastOrder_model->getOrder($where);
        $this->data['order_detail']=$this->Check_lastOrder_model->getOrderDetail();
        $this->load->view('header2');
        $this->load->view('check_lastOrder',$this->data);
    }

}