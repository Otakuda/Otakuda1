<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('PlaceModel');

    }

    public function index()
    {
        // get cities
        $data['states'] = $this->PlaceModel->getState();
        // load view
        $this->load->view('header');
        $this->load->view('place', $data);
        $this->load->view('footer');
    }

    public function update_state(){
        $input = $this->input->post();
        $state = $input['state'];
        $state_data = $this->PlaceModel->get($state);
        $this->session->set_userdata('state', $state_data['state_name']);
        $this->session->set_userdata('state_lat', $state_data['state_lat']);
        $this->session->set_userdata('state_lng', $state_data['state_lng']);
    }



}