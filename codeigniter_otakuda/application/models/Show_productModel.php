<?php


class Show_productModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function get($id)
    {
        $this->db->select('*');
        $this->db->from('shop');
        $this->db->join('products', 'shop.shop_id = products.shop_id','INNER');
        $this->db->where('shop.shop_id', $id);
//        $this->db->where('business_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
}