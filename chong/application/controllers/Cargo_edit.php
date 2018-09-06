<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_edit extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Cargo_editModel');

    }

    public function index()
    {
        $input=$this->input->post();
        $category['sel_category']=$input['sel_category'];
        $categoryshow['show'] = $this->Cargo_editModel->get($category['sel_category']);
        $this->load->view('header2');
        $this->load->view('cargo_edit', $categoryshow);

    }




}