<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries


        $this->load->database();
        $this->load->model('User_M');
        $this->load->model('Phone_M');
        $this->load->model('Login_M');
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function doLogin()
    {
        //get the input fields from login form
        $phone = $this->input->post('phone');
        $password = $this->input->post('password');

        //send the code pass to query if the user is present or not
        $login = $this->Login_M->check_login($phone,$password);

        if ($login)
        {
            echo "做对了";
        }else{
            echo "做错了";
        }

       }
}