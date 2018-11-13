<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_new_order extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Driver_new_order_model');

    }

    public function index()
    {
        $this->data['orderD'] = $this->Driver_new_order_model->get_orderD();
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_new_order', $this->data);
    }

    public function next($id)
    {
        $uid = $id;
        $data = array(
            'accepter' => '2'
        );
        $this->Driver_new_order_model->update_accepter($uid, $data);
        $this->data['orderD'] = $this->Driver_new_order_model->get_orderD();
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_new_order', $this->data);
    }

}