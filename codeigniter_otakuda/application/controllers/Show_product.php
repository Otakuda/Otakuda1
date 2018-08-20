<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show_product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('Show_productModel');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('show_product');
        $this->load->view('footer');
    }

    public function shop_detail($id){
        $product_id=$id;
        $this->data['product'] = $this->Show_productModel->get($product_id);
        $this->load->view('header');
        $this->load->view('show_product',$this->data);
        $this->load->view('footer');
    }


}