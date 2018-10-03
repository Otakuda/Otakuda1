<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_new_order_model extends CI_Model
{
    // Get cities
    function get_orderD()
    {
        $this->db->select('orders.*,order_detail.shop_id,shop.shop_name,shop.shop_address');
        $this->db->from('orders');
        $this->db->join('order_detail', 'order_detail.order_id = orders.order_id', 'left');
        $this->db->join('shop', 'shop.shop_id=order_detail.shop_id', 'left');
        $this->db->where('orders.accepter',1);
        $this->db->group_by('orders.order_id,orders.accepter');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();

        return $response;
    }

    function update_accepter($uid, $data)
    {
        $this->db->where('order_id', $uid);
        $this->db->update('orders',$data);
    }


}