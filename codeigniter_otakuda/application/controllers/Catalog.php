<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('Catalog_model');
    }

    public function index()
    {
        $this->load->view('header2');
        $this->load->view('catalog');
    }

    public function getCatalog($id)
    {
//        $shop=$this->Catalog_model->get_shop($id);
        $this->data['product']=$this->Catalog_model->get_catalog($id);
        $this->load->view('header2');
        $this->load->view('catalog',$this->data);
    }

}