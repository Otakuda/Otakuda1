<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Trader extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        
       
    }

    public function index() {
        //check if the user is already logged in 
        $logged_in = $this->session->userdata('logged_in');
         if($logged_in and $this->session->userdata('i_id') == 1)
         {
            redirect('shangjia');
         }
         elseif($logged_in and $this->session->userdata('i_id') == 2)
         {
             redirect('setting');
         }
        //if not load the login page

    }
}