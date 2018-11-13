<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Trader extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('trader_model');

    }

    public function index()
    {
        //check if the user is already logged in 
        $logged_in = $this->session->userdata('logged_in');

        if ($logged_in and $this->session->userdata('shop_level') == 0) {
            redirect('registerb');
        } else if ($logged_in and $this->session->userdata('shop_level') == 1) {
            $where = $this->session->userdata('shop_id');
            $this->data['order'] = $this->trader_model->getOrder($where);
            $this->data['order_detail'] = $this->trader_model->getOrderDetail();
            $this->load->view('header2');
            $this->load->view('trader', $this->data);
        }
    }

    public function accept_order($id)
    {
        $uid = $id;
        $data = array(
            'accepter' => '1'
        );
        $this->trader_model->update_order($uid, $data);

        $where = $this->session->userdata('shop_id');
        $this->data['order'] = $this->trader_model->getOrder($where);
        $this->data['order_detail'] = $this->trader_model->getOrderDetail();

//        $rider_mark = $this->trader_model->get_Rider();
//        $rider_id = $this->trader_model->get_riderId($rider_mark);
//        print_r($rider_id);

//        $dataNew = array(
//            'rider_id' =>$rider_id,
//            'order_id' =>$id,
//            'status' => 0
//        );
//        $this->trader_model->insertDecide($dataNew);

        $this->load->view('header2');
        $this->load->view('trader', $this->data);
    }


}