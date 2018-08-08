<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_cargo extends CI_Model
{
    // Get cities
    function get_category()
    {
        $this->db->select('*');
        $q = $this->db->get('cargo_category');
        $response = $q->result_array();

        return $response;
    }



}