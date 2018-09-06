<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginb extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        $this->load->model("LoginbModel");
    }

    public function index() {

            $this->load->view('loginb_page');

    }

    public function doLoginb() {
        $postData = $this->input->post();
        $validate = $this->LoginbModel->validate_login($postData);
        if ($validate){
            $newdata = array(
                'username' => $validate[0]->username,
                's_id' => $validate[0]->s_id,
                'logged_in' => TRUE,
              
            );
            $this->session->set_userdata($newdata);
            redirect(base_url("index")); 
        }
        else{
            $data = array('alert' => true);
            $this->load->view('loginb',$data);
        }
     
    }

    public function logout() {
         $this->session->sess_destroy();
        redirect(base_url('index'));
    }


}
