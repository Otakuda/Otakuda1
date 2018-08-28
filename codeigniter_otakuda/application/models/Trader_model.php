<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trader_model extends CI_Model
{
//    // Get cities
//    function getShop()
//    {
//        $response = array();
//        // Select record
//        $this->db->select('*');
//        $q = $this->db->get('shop');
//        $response = $q->row_array();
//        return $response;
//    }

    function getOrder($where=array())
    {
        $this->db->select('*');
        $this->db->where($where);
        $q = $this->db->get('order_detail');
        return $q->result_array();

//        $this->db->where('shop_id');
//        $q = $this->db->get('order_detail');
//        $response = $q->result_array();
//        return $response;
    }
}