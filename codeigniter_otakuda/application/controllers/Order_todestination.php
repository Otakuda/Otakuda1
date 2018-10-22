<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_todestination extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Order_todestination_model');

    }

    public function index()
    {
        $where = $this->session->userdata('shop_id');
        $this->data['order'] = $this->Order_todestination_model->getOrder($where);
        $this->data['order_detail'] = $this->Order_todestination_model->getOrderDetail();
        $this->load->view('header2');
        $this->load->view('order_todestination', $this->data);
    }

    public function updateAccepter($id)
    {
        $uid = $id;
        $data=array(
            'accepter'=>'3'
        );
        $this->Order_todestination_model->update_acc($uid,$data);
        $where = $this->session->userdata('shop_id');
        $this->data['order'] = $this->Order_todestination_model->getOrder($where);
        $this->data['order_detail'] = $this->Order_todestination_model->getOrderDetail();
        $this->load->view('header2');
        $this->load->view('order_todestination', $this->data);
    }
}