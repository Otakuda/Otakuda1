<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_receive_model extends CI_Model
{
    public function getStock($id)
    {
        $this->db->select('orders.*,products.product_name,products.product_price,order_detail.*');
        $this->db->from('orders');
        $this->db->join('order_detail','order_detail.order_id=orders.order_id');
        $this->db->join('products','products.product_id=order_detail.product_id');
        $this->db->where('orders.order_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}