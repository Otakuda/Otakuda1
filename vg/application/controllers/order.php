<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

   

    public function index() {
        
        $this->load->model('shoppingcart');
        $data['cart']= $this->shoppingcart->mycart();
        $this->load->view('order',$data);
       
    }
}