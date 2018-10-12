<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_receive extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('user_receive_model');

    }

    public function get_stock($id)
    {
        $this->data['order']=$this->user_receive_model->getStock($id);
        $this->load->view('header');
        $this->load->view('user_receive',$this->data);
    }
}