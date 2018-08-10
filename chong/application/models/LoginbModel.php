<?php

class LoginbModel extends CI_Model {

     function validate_login($postData){
        $this->db->select('*');
        $this->db->where('username', $postData['username']);
        $this->db->where('password', md5($postData['password']));
        $this->db->where('status', 1);
        $this->db->from('shangjia');
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return false;
        else
            return $query->result();
    }
   

}


