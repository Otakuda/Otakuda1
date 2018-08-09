<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select_category extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Category_cargo');

    }

    public function index()
    {
        $data['categorys'] = $this->Category_cargo->get_category();
        // load view
        $this->load->view('header2');
        $this->load->view('select_category', $data);
    }


}