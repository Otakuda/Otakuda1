<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_to_shop_model extends CI_Model
{
    // Get cities
    public function get($id)
    {
        $this->db->select('orders.*,order_detail.shop_id,shop.shop_name,shop.shop_address');
        $this->db->from('orders');
        $this->db->join('order_detail', 'order_detail.order_id = orders.order_id', 'left');
        $this->db->join('shop', 'shop.shop_id=order_detail.shop_id', 'left');
        $this->db->where('orders.order_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getProduct($id)
    {
        $this->db->select('*');
        $this->db->from('order_detail');
        $this->db->join('shop', 'shop.shop_id=order_detail.shop_id', 'left');
        $this->db->join('products', 'products.product_id=order_detail.product_id', 'left');
        $this->db->where('order_detail.order_id', $id);
        $query = $this->db->get();
        return $query->result_array();

        return $response;
    }

    function insertRider($dataInsert)
    {
        $this->db->insert('rider_order_history', $dataInsert);
    }

    function updateOrder($id, $dataUpdate)
    {
        $this->db->where('order_id',$id);
        $this->db->update('orders',$dataUpdate);
    }

    function updateStatus($id,$data)
    {
        $this->db->where('rider_id',$id);
        $this->db->update('rider',$data);
    }

}