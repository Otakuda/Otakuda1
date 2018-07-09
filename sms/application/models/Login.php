<?php
/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/6/2018
 * Time: 10:58 AM
 */
class Login extends CI_Model{
public function checkLogin($phone, $code) {
    //query the table 'users' and get the result count
    $this->db->where('phone', $phone);
    $this->db->where('code', $code);
    $query = $this->db->get('phone');

    return $query->num_rows();
}
}