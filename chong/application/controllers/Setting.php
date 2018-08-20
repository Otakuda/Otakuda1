<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller
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
        // if($logged_in){
        //     //if yes redirect to welcome page
        //     redirect(base_url().'welcome');
        // }
        //if not load the login page


        $this->load->view('header');
        $this->load->view('setting');
        $this->load->view('footer');
    }

    function update_user_name()
    {

        $username = $this->input->post('edit_name');
        $user_id = $this->input->post('user_id');
        $data = array(
            'username' => $username
        );
        $name_edit = $this->User_M->update_username($user_id, $data);
        if ($name_edit) {
            $updated_user_data = $this->User_M->get(array('user_id'=>$user_id));
            $this->session->set_userdata($updated_user_data);
            redirect();
        }
    }
}