<?php

/**
 * Created by PhpStorm.
 * User: terencelee
 * Date: 2/8/2018
 * Time: 4:18 PM
 */
class Product_order extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
    }

    public function index() {
        $this->data['title'] = 'Shopping Carts';

        if (!$this->cart->contents()){
            $this->data['message'] = '<p>Your cart is empty!</p>';
        }else{
            $this->data['message'] = $this->session->flashdata('message');
        }

        $this->load->view('product_order', $this->data);
    }

    public function add()
    {
        $insert_room = array(
            'id' => $this->input->post('product_id'),
            'name' => $this->input->post('product_name'),
            'price' => $this->input->post('product_price'),
            'qty' => $this->input->post('product_quantity')
        );
        $this->cart->insert($insert_room);
        redirect('product_order');
    }

    function remove($rowid) {
        if ($rowid=="all"){
            $this->cart->destroy();
        }else{
            $data = array(
                'rowid'   => $rowid,
                'qty'     => 0
            );

            $this->cart->update($data);
        }

        redirect('product_order');
    }
}