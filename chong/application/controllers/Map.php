<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('Post_M');
    }

    public function index()
    {
        $data['query'] = $this->Post_M->get_search();
        $this->load->view('header');
        $this->load->view('map', $data);
        $this->load->view('footer');
    }

}