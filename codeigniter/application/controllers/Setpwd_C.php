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
            'password' => md5($password),
            'user_level' => 1,
            'shop_level' => 0,
            'rider_level' => 0,
            'created_date' => date('Y-m-d H:i:s')
        );

        $user_data = $this->User_M->insert($user);


        if ($user_data)
        {
            $this->Phone_M->delete_where($phone);
            echo '<script>alert("You Have Successfully register");</script>';
            $this->load->view('login_page');

        }else
        {
            echo "fucking error";
        }

    }
}