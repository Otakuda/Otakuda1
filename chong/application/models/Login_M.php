<?php
/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/6/2018
 * Time: 10:58 AM
 */
class Login_M extends CI_Model{

    public function check_code($phone, $code) {
        //query the table 'phone' and get the result count
        $this->db->where('phone', $phone);
        $this->db->where('code', $code);
        $this->db->order_by('created_date DESC');

        $query = $this->db->get('phone');

        return $query->row_array();
    }

    public function check_login($phone, $password) {
        //query the table 'phone' and get the result count
        $this->db->where('phone', $phone);
        $this->db->where('password', $password);

        $query = $this->db->get('users');

        return $query->result_array();
    }


}