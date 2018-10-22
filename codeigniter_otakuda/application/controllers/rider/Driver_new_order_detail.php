<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_new_order_detail extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Driver_new_order_detail_model');

    }

    public function index()
    {
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_new_order_detail');
    }

    public function get_orderDetail($id)
    {
        $order_id=$id;
        $this->data['show'] = $this->Driver_new_order_detail_model->get_order($order_id);
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_new_order_detail',$this->data);



    }
}