<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_order_record extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Driver_order_record_model');

    }

    public function index()
    {
        $id=$this->session->userdata('rider_id');
        $this->data['outputRecord'] = $this->Driver_order_record_model->getDate($id);
        $this->data['revenue'] = $this->Driver_order_record_model->revenue();
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_order_record',$this->data);
    }

    public function getRecord($id)
    {
        $this->data['outputRecord']=$this->Driver_order_record_model->getDate($id);
        $this->data['revenue'] = $this->Driver_order_record_model->revenue();
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_order_record',$this->data);
    }

}