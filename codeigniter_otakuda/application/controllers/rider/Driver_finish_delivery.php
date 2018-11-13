<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_finish_delivery extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Driver_finish_delivery_model');
    }


    public function index()
    {
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_finish_delivery');
    }

    public function finish_delivery($id)
    {
        $data=array(
            'rider_status'=>1
        );
        $this->Driver_finish_delivery_model->updateStatus($id,$data);
        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_finish_delivery');
    }

    public function insertSign($id)
    {
        $order=$id;
        $rider=$this->session->userdata('rider_id');
        $sign=$this->input->post('signature');
        $data=array(
          'accepter'=>4,
        );
        $this->Driver_finish_delivery_model->update_order($order,$data);

        $data2=array(
            'rider_id'=>$rider,
            'order_id'=>$order,
            'created_date'=>date('Y-m-d H:i:s ')
        );
        $this->Driver_finish_delivery_model->insert_history($data2);

        $data3=array(
            'order_id'=>$order,
            'rider_id'=>$rider,
            'signature'=>$sign,
            'created_date'=>date('Y-m-d H:i:s')
        );
        $this->Driver_finish_delivery_model->insert_sign($data3);

        $rider_data=array(
            'rider_status'=>1
        );
        $this->Driver_finish_delivery_model->updateStatus($id,$rider_data);

        $this->load->view('driver/driver_left');
        $this->load->view('driver/driver_finish_delivery');
    }

}