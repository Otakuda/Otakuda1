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

    function get($id)
    {
        $this->db->where('product_id',$id);
        $query = $this->db->get('products');
        return $query->row_array();
    }
}