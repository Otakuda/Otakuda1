<?php

/**
 * Created by PhpStorm.
 * User: terencelee
 * Date: 2/8/2018
 * Time: 4:40 PM
 */
class Product_detailsModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function get($pid)
    {
        $this->db->select('products.*,product_photo.photo_name');
        $this->db->from('products');
        $this->db->join('product_photo','product_photo.product_id=products.product_id','left');
        $this->db->where('products.product_id',$pid);
        $query = $this->db->get();
        return $query->row_array();
    }
}