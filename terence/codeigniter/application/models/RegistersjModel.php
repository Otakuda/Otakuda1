<?php

class RegistersjModel extends CI_Model{
    public function add_user($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('shangjia', $data);
    }
}
