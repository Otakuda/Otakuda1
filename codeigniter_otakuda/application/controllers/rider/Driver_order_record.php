<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_order_record extends CI_Controller
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
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_order_record');

    }
}