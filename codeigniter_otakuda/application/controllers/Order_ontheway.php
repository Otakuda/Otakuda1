<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_ontheway extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('Order_ontheway_model');

    }

    public function index() {
            $where=$this->session->userdata('shop_id');
            $this->data['order']=$this->Order_ontheway_model->getOrder($where);
            $this->data['order_detail']=$this->Order_ontheway_model->getOrderDetail();
            $this->load->view('header2');
            $this->load->view('order_ontheway',$this->data);
    }

}