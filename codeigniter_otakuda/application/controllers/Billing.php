<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Billing_model');
    }

    public function index()
    {
        $this->load->view('billing');
    }

    public function save_order()
    {
        $order = array(
            'date' => date('Y-m-d'),
            'user_id' => $this->input->post('user_id'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );

        $ord_id = $this->Billing_model->insert_order($order);

        if ($cart = $this->cart->contents()):
            foreach ($cart as $item):
                $order_detail = array(
                    'order_id' => $ord_id,
                    'shop_id' => $item['shop_id'],
                    'product_id' => $item['id'],
                    'quantity' => $item['qty'],
                    'price' => $item['subtotal']
                );

                $user_id = $this->Billing_model->insert_order_detail($order_detail);
            endforeach;
        endif;

        echo "Thank You! your order has been placed!<br />";
        echo "<a href=" . base_url() . "map>Go back</a>";
    }
}