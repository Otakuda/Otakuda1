<?php

/**
 * Created by PhpStorm.
 * User: terencelee
 * Date: 2/8/2018
 * Time: 4:18 PM
 */
class Product_details extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('Product_detailsModel');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('product_details');
        $this->load->view('footer');
    }

    public function product_getDetail($id){
        $pid=$id;
        $this->data['product'] = $this->Product_detailsModel->get($pid);
        $this->load->view('header');
        $this->load->view('product_details',$this->data);
        $this->load->view('footer');
    }


}