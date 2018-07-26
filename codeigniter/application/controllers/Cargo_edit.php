<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_edit extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('Cargo_editModel');

    }

    public function index()
    {
        $input = $this->input->post();
        $category['sel_category'] = $input['sel_category'];
        $categoryshow['show'] = $this->Cargo_editModel->get($category['sel_category']);
        $this->load->view('header2');
        $this->load->view('cargo_edit', $categoryshow);
    }

    public function addImage()
    {
        $image_folder = "temp_image/";
        $image_name = 'product_image_' . rand(9999, 999999) . '_' . date('Ymd_His');
        $config['file_name'] = $image_name;
        $config['upload_path'] = './temp_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if (isset($_FILES['upload_image']) && !empty($_FILES['upload_image']['name'])) {
            if (!$this->upload->do_upload('upload_image')) {
                return FALSE;
            } else {
                $image_data = $this->upload->data();
                $image_name_mime_type = substr($image_data['file_name'], (strpos($image_data['file_name'], '.') ?: -1) + 1);
                $this->data['temp_name'] = $image_folder.$image_name.".".$image_name_mime_type;
                echo json_encode($this->data['temp_name']);
            }
        }

    }

}