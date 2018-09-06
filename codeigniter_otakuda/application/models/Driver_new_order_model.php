<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_new_order_model extends CI_Model
{
    // Get cities
    function get_orderD()
    {
        $this->db->select('*');
        $this->db->from('order_detail');
//        $this->db->join('order', 'order.order_id = order_detail.order_id','left');
//        $this->db->where('order.order_id', $id);
        $query = $this->db->get();
        return $query->result_array();

        return $response;
    }



}