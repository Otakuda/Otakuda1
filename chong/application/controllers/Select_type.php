<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Select_type extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();


    }

    public function index() {

            $this->load->view('header2');
            $this->load->view('select_type');


        //if not load the login page

    }
}