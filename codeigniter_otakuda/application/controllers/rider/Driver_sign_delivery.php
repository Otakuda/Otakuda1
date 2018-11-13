<?php

/**
 * Created by PhpStorm.
 * User: terencelee
 * Date: 19/10/2018
 * Time: 2:58 PM
 */
class Driver_sign_delivery extends CI_Controller
{
    public function index()
    {
        $this->load->view('driver/driver_left');
        $this->load->view('driver/Driver_sign_delivery');
    }

    public function getOrder($id)
    {
        $this->data['order']=$id;
        $this->load->view('driver/driver_left');
        $this->load->view('driver/Driver_sign_delivery',$this->data);
    }
}