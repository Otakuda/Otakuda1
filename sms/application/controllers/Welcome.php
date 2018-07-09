<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries


        $this->load->database();
        $this->load->model('Add_phone');
    }

    public function index()
    {
        $this->load->view('welcome_message');


    }

    public function add_phone()
    {
        $phone = $this->input->post('phone');
        $code = $this->input->post('code');

        $data = array(
            'phone' => $phone,
            'code' => $code
        );

        $this->Add_phone->add($data);

        redirect('Welcome/index', 'refresh');
    }

    public function doLogin()
    {
        //get the input fields from login form
        $phone = $this->input->post('phone');
        $code = $this->input->post('code');

        //send the email pass to query if the user is present or not
        $check_login = $this->welcome->checkLogin($phone, $code);

        if ($check_login)
        {
            echo "right";
        }else
        {
            echo "wrong";
        }
    }
}
