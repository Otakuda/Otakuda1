<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries

        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('Driver_login_model');
    }

    public function index()
    {
        $this->load->view('driver/driver_login');
    }

    public function logout($rider_id)
    {
        $data=array(
          'rider_status'=>0
        );
        $this->Driver_login_model->updateStatus($rider_id,$data);
        $this->session->unset_userdata('rider_login');
        $this->load->view('driver/driver_login');
    }
}

