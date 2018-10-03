<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_new_order_detail_model extends CI_Model
{
    function get_order($id)
    {
        $this->db->select('*');
        $this->db->from('order_detail');
        $this->db->where('order_detail.order_id', $id);
        $this->db->join('shop','shop.shop_id=order_detail.shop_id','left');
        $this->db->join('products','products.product_id=order_detail.product_id','left');
        $query = $this->db->get();
        return $query->result_array();

        return $response;
    }
}