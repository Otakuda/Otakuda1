<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_preview extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        // load base_url
        $this->load->helper('url');
        //load model
        $this->load->model('');

    }

    public function index()
    {
        $input=$this->input->post();
//        $user['user_id'] = $input['user_id'];
//        $showUser['show'] = $this->Product_previewModel->get($user['user_id']);
        $this->load->view('header2');
        $this->load->view('product_preview',$input);
    }

    public function list_files()
    {
        $this->load->helper("file");
        $files = get_filenames("./temp_image/");
        // we need name and size for dropzone mockfile
        foreach ($files as &$file) {
            $file = array(
                'name' => $file,
                'size' => filesize("./temp_image/". $file)
            );
        }

        header("Content-type: text/json");
        header("Content-type: application/json");
        echo json_encode($files);
    }




}