<?php

class Registersj extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        
        //load our Register model here
        $this->load->model('RegistersjModel', 'registersj');
    }

    //registration form page
    public function index() {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            redirect('welcome');
        }
        $this->load->view('shangjiaregister');
    }

    //register validation and logic
    public function doRegister() {
        //set the form validation here
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect('registersj');
        } else {
            //if not get the input values
            $username = $this->input->post('username');
            $phone = $this->input->post('phone');
            $password = md5($this->input->post('password'));

            $data = [
                'username' => $username,'phone' => $phone, 'password' => $password
            ];

            //pass the input values to the register model
            $insert_data = $this->registersj->add_user($data);

            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', '请等待审核结果');
                redirect('loginb');
            }
        }
    }

}
