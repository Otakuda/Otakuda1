<?php
/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/6/2018
 * Time: 10:58 AM
 */
class Index_M extends CI_Model{


    public function display_detail($phone) {
        $this->db->select('*');
        $this->db->from("users");
        $this->db->where('phone',$phone);

        $query=$this->db->get();
        return $query->result_array();

    }







}