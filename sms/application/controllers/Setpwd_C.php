<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setpwd_C extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries


        $this->load->database();
        $this->load->model('User_M');
        $this->load->model('Phone_M');
    }

    public function index()
    {
        $this->load->view('Setpwd');
    }

    public function add_users()
    {
        $phone = $this->input->post('phone');
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $user= array(
            'phone' => $phone,
            'username' => $username,
            'password' => $password,
            'created_date' => date('Y-m-d H:i:s')
        );

        $user_data = $this->User_M->insert($user);


        if ($user_data)
        {
            $this->Phone_M->delete_where($phone);
            $this->load->view('welcome_message');

        }else
        {
            echo "fucking error";
        }

    }
}