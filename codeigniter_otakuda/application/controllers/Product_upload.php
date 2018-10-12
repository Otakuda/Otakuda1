<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'upload');
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
        $shop_id = $this->input->post('shop_id');

        $data = [
            'product_name' => $product_name, 'product_brief' => $product_brief, 'product_brief_detail' => $product_brief_detail,
            'product_price' => $product_price, 'product_quantity' => $product_quantity, 'cargo_id' => $cargo_id, 'shop_id' => $shop_id, 'create_date' => date('Y-m-d H:i:s')
        ];

        $insert_data = $this->Product_uploadModel->add_product($data);

        $photo = $this->input->post('img_path');

        if (!empty($photo)) {
            foreach ($photo as $row) {
                $image_name = 'product_image_' . $insert_data . "_" . rand(9999, 999999) . '_' . date('Ymd_His');
                $image_name_mime_type = substr($row, (strpos($row, '.') ?: -1) + 1);
                $image_folder = "product_image/";
                $product_image = $image_folder . $image_name . '.' . $image_name_mime_type;
                $dataPhoto = array(
                    'product_id' => $insert_data,
                    'photo_name' => $product_image
                );
                $photo = $this->Product_uploadModel->add_productPhoto($dataPhoto);
                $temp_file = "temp_image/" . $row;

                rename($temp_file, $product_image);
            }
        }
        redirect(base_url() . 'product_upload');
        //new
//        $filesCount = count($_FILES['img_path']['name']);      //my input file name = 'picture'
//
//        for ($i = 0; $i < $filesCount; $i++) {
//
//            $_FILES['userFile']['name'] = $_FILES['img_path']['name'][$i];
//            $_FILES['userFile']['type'] = $_FILES['img_path']['type'][$i];
//            $_FILES['userFile']['tmp_name'] = $_FILES['img_path']['tmp_name'][$i];
//            $_FILES['userFile']['error'] = $_FILES['img_path']['error'][$i];
//            $_FILES['userFile']['size'] = $_FILES['img_path']['size'][$i];
//
//            $config['upload_path'] = 'product_image/';
//            $config['allowed_types'] = 'gif|jpg|png|jpeg';
//            $config['max_size'] = 0;
//
//            $new_name = uniqueId();
//            $config['file_name'] = $new_name;
//
//            $this->load->library('upload', $config);
//
//            $fileData = $this->upload->data();
//            $uploadData[$i]['file_name'] = $fileData['file_name'];
//        }
//
//
//        if (!empty($uploadData)) {
//            $this->Insert_model->setImage($uploadData);
//
//            $isCreate = $this->Product_uploadModel->createImage($uploadData);
//
//        }


        //old
//        $pic = $this->input->post('image_path');
//        $file = $pic;
//        $image_name = 'product_image_' . rand(9999, 999999) . '_' . date('Ymd_His');
//        $image_name_mime_type = substr($pic, (strpos($pic, '.') ?: -1) + 1);
//        $image_folder = "product_image/";
//        $data['product_image'] = $image_folder . $image_name . '.' . $image_name_mime_type;
//        if (!copy($file,$data['product_image'])) {
//            echo "failed to copy $file...";
//        } else {
//            $insert_data = $this->Product_uploadModel->add_product($data);
//            if ($insert_data) {
//
//            }
//
//        }
    }
}