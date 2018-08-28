<?php

/**
 * Created by PhpStorm.
 * User: terencelee
 * Date: 2/8/2018
 * Time: 4:18 PM
 */
class testing extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
    }

    public function index() {
        $input=$this->input->post();
        print_r($input);
        $this->load->view('testing');
    }
}