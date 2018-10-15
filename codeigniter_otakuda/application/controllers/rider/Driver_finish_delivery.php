<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_finish_delivery extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
    }


    public function index()
    {
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_finish_delivery');

    }
}