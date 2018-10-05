<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_uploadModel extends CI_Model
{

    public function add_product($data)
    {
        return $this->db->insert('products', $data);
    }

    public function add_productPhoto($photo)
    {
        return $this->db->insert('product_photo', $photo);
    }
}