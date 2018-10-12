<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_finish extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Delivery_finish_model');

    }

    public function close_order($id)
    {
       $uid=$id;
       $data=array(
           'accepter'=>'3'
       );
       $this->Delivery_finish_model->updateAcc($uid,$data);
       $this->load->view('header');
       $this->load->view('orderClose');
    }
}