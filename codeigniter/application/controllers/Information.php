<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('User_M');


    }

    public function index()
    {
        //check if the user is already logged in 
        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in) {
            //if yes redirect to welcome page
            redirect(base_url() . 'welcome');
        }
        //if not load the login page

        $this->load->view('information');

    }

    function update_user_name()
    {
        $id = $this->input->post('user_id');
        $username = $this->input->post('username');
        $data = array(
            'username' => $username

        );
        $this->User_M->update_username($id, $data);

    }
}