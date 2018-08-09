<?php
class Demo_C extends CI_Controller
{
    function __construct()
    {
        parent::__construct();//繼承
        $this->load->model('Demo_M');//載入資料庫
        $this->load->helper('url');//載入URL 幫手
        $this->load->library("multi_menu");

        //$this->multi_menu->set_items($items);
    }
    function index()
    {
        $this->load->view('Demo');
    }
    function  ADD()
    {
        $Data=array('ID'=>$this->input->post('ID'),
            'Email'=>$this->input->post('Email'),
            'Phone'=>$this->input->post('Phone')
        );
        $message=$this->Demo_M->Add($Data);
        echo $message;

    }
}