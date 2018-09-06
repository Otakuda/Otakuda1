<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shangjia extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
//        $this->load->model("LoginModel");
    }

    public function index()
    {
        $this->load->view('shangjiaregister');
    }




}