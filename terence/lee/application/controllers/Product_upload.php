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
            $product_image = $this->input->post('product_image');
            $cargo_id = $this->input->post('cargo_id');

            $data = [
                'product_name' => $product_name, 'product_brief' => $product_brief, 'product_brief_detail' => $product_brief_detail,
                'product_price' => $product_price, 'product_quantity' => $product_quantity,'product_image'=>$product_image,'cargo_id'=>$cargo_id
            ];

        $insert_data = $this->Product_uploadModel->add_product($data);

        if ($insert_data) {
            redirect(base_url() . 'product_upload');
        }


    }
}