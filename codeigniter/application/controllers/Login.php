<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __Construct()
    {
        parent::__Construct();
        $this->load->model("LoginModel");
    }

    public function index()
    {

        if ($this->session->userdata('logged_in')) {
            redirect("welcome");
        } else {
            $this->load->view('login_page');
        }
    }

    public function dologin()
    {
        $postData = $this->input->post();
        $validate = $this->LoginModel->validate_login($postData);
        if ($validate) {
            $newdata = array(
                'email' => $validate[0]->email,
                'name' => $validate[0]->name,
                'user_id' => $validate[0]->user_id,
                'user_level' => $validate[0]->user_level,
                'logged_in' => TRUE,
                'state' => 'Molek',
                'state_lat' => '1.524543',
                'state_lng' => '103.789807',
            );
            $this->session->set_userdata($newdata);
            redirect("index");
        } else {
            $data = array('alert' => true);
            $this->load->view('login_page', $data);

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }


}
