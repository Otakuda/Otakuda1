<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        
       
    }

    public function index() {
        //check if the user is already logged in 
        
       
        $this->load->view('collection');
       
    }
}