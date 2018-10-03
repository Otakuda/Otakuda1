<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_order_delivery extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Driver_order_delivery_model');
    }


    public function getDirection($id)
    {
        $this->data['img']=$this->input->post('order_id');
        $this->data['direction'] = $this->Driver_order_delivery_model->get($id);
        $this->load->view('driver/driver_order_delivery', $this->data);
    }
}