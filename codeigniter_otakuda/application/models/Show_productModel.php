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
        $this->db->join('products', 'shop.shop_id = products.shop_id','left');
        $this->db->join('product_photo','product_photo.product_id=products.product_id','left');
        $this->db->where('shop.shop_id', $id);
        $query = $this->db->get();
        return $query->result_array();

//        $this->db->where('shop_id', $id);
//        $q = $this->db->get('shop');
//        $response = $q->row_array();
//        return $response;
    }
}