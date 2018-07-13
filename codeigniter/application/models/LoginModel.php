<?php 
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class LoginModel extends CI_Model {

     function validate_login($postData){
        $this->db->select('*');
        $this->db->where('email', $postData['email']);
        $this->db->where('password', md5($postData['password']));
//        $this->db->where('i_id',1);
        $this->db->from('users');
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return false;
        else
            return $query->result();
    }

}


