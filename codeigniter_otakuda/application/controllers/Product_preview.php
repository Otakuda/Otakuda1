<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_preview extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('');

    }

    public function index()
    {

        $input=$this->input->post();
        $input['image_url'] = explode(",",$input['image']);
        $this->load->view('header2');
        $this->load->view('product_preview',$input);

    }
}