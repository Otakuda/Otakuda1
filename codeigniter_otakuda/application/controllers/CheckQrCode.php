<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckQrCode extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('CheckQrCode_model');
    }


   public function getOrderId($id)
   {
       $this->data['order']=$this->CheckQrCode_model->getId($id);
       $this->load->view('header2');
       $this->load->view('checkQr',$this->data);
   }
}