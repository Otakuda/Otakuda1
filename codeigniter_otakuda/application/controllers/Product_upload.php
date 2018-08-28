<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Product_uploadModel');
    }

    public function index()
    {
        $this->load->view('header2');
        $this->load->view('product_upload');
    }

    public function doUpload()
    {
        $product_name = $this->input->post('product_name');
        $product_brief = $this->input->post('product_brief');
        $product_brief_detail = $this->input->post('product_brief_detail');
        $product_price = $this->input->post('product_price');
        $product_quantity = $this->input->post('product_quantity');
        $cargo_id = $this->input->post('cargo_id');
        $shop_id = '9';

        $data = [
            'product_name' => $product_name, 'product_brief' => $product_brief, 'product_brief_detail' => $product_brief_detail,
            'product_price' => $product_price, 'product_quantity' => $product_quantity, 'cargo_id' => $cargo_id, 'shop_id'=>$shop_id ,'date_time' => date('Y-m-d H:i:s')
        ];

        $pic = $this->input->post('image_path');
        $file = $pic;
        $image_name = 'product_image_' . rand(9999, 999999) . '_' . date('Ymd_His');
        $image_name_mime_type = substr($pic, (strpos($pic, '.') ?: -1) + 1);
        $image_folder = "product_image/";
        $data['product_image'] = $image_folder . $image_name . '.' . $image_name_mime_type;
        if (!copy($file,$data['product_image'])) {
            echo "failed to copy $file...";
        } else {
            $insert_data = $this->Product_uploadModel->add_product($data);
            if ($insert_data) {
                redirect(base_url() . 'product_upload');
            }

        }
    }
}