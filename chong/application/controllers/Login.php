<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('User_M');
        $this->load->model('Phone_M');
        $this->load->model('Login_M');
        $this->load->model('Index_M');
    }

    public function index()
    {

        if ($this->session->userdata('logged_in')) {
            redirect("welcome");
        } else {
            $this->load->view('login_page');
        }
    }


    public function doLogin()
    {
        //get the input fields from login form
        $phone = $this->input->post('phone');
        $password = md5($this->input->post('password'));

        //send the code pass to query if the user is present or not
        $login = $this->Login_M->check_login($phone, $password);

        if ($login == TRUE) {

            $data = $this->User_M->display_detail($phone);

            $userdata = array(

                'username' => $data[0]['username'],
                'phone' => $data[0]['phone'],
                'logged_in' =>TRUE,
                'user_level' => $data[0]['user_level'],
                'shop_level' => $data[0]['shop_level'],
                'rider_level' => $data[0]['rider_level'],

            );
            $this->session->set_userdata($userdata);

            redirect('index');
        }else{

        }
    }

        public function logout() {
        $this->session->sess_destroy();
            $this->load->view('header');
            $this->load->view('index');
            $this->load->view('footer');
    }

}