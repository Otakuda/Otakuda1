<?php
/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/5/2018
 * Time: 3:09 PM
 */
class Add_phone extends CI_Model
{

    public function add($data)
    {
        return $this->db->insert('phone', $data);
    }



}