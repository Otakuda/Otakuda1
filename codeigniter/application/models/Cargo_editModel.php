<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_editModel extends CI_Model
{

    public function get($category)
    {
        $this->db->where('cargo_id', $category);
        $q = $this->db->get('cargo_category');
        $response = $q->row_array();
        return $response;
    }

}