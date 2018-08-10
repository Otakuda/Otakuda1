<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Post_M extends CI_Model
{
    
    public function __construct()
    {
        $this->load->database();
    }

   function get_search() {
  $match = $this->input->post('search');
  $this->db->like('name',$match);
  $this->db->or_like('address',$match);
  $this->db->or_like('phone',$match);
  $query = $this->db->get('business');
  return $query->result();
}
}