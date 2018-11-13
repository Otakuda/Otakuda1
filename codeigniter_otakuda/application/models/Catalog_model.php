<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Catalog_model extends CI_Model
{

//    function get_shop($id)
//    {
//        $this->db->select('shop.shop_id');
//        $this->db->from('shop');
//        $this->db->where('shop.user_id',$id);
//        $q=$this->db->get();
//        return $q->row_array();
//    }
    function get_catalog($shop)
    {
        $this->db->select('*');
        $this->db->from('shop');
        $this->db->join('products','products.shop_id=shop.shop_id');
        $this->db->join('product_photo','product_photo.product_id=products.product_id');
        $this->db->where('shop.user_id',$shop);
        $q=$this->db->get();
        return $q->result_array();
    }

}