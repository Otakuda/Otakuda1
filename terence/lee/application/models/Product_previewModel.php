<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_previewModel extends CI_Model
{

//    function get($user)
//    {
//        $this->db->select('*');
//        $this->db->from('users');
//        $this->db->join('shop', 'users.user_id = shop.user_id', 'INNER');
//        $this->db->where('users.users_id', $user);
////        $this->db->where('business_id',$id);
//        $query = $this->db->get();
//        return $query->row_array();
//
//    }

    public function get($user)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('shop', 'users.user_id = shop.user_id', 'INNER');
        $this->db->where('users.users_id', $user);
//        $this->db->where('business_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
}