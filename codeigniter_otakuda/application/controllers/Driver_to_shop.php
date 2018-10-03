<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_to_shop extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Driver_to_shop_model');
    }


    public function getDirection($id)
    {
        $this->data['direction'] = $this->Driver_to_shop_model->get($id);

//        $product = $this->Driver_to_shop_model->getProduct($id);
        $this->data['img_url'] = "";
        $this->load->library('ciqrcode');
        $qr_image = 'OrderCode_' . rand() . '.png';
//        $product_name = "";
//        for ($x = 0; $x <= count($product) - 1; $x++) {
//            $product_name .= 'Product Name: ' . $product[$x]['product_name'] . ' 數量: ' . $product[$x]['quantity'] . "\n";
//        }
        $params['data'] =$id;
        $params['level'] = 'H';
        $params['size'] = 8;
        $params['savename'] = FCPATH . "qrimg/" . $qr_image;
        if ($this->ciqrcode->generate($params)) {
            $this->data['img_url'] = $qr_image;
        }
        $this->load->view('driver/driver_to_shop', $this->data);
    }
}