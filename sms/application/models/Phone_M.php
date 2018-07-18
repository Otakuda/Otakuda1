<?php
/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/5/2018
 * Time: 3:09 PM
 */
class Phone_M extends CI_Model
{

    public function add($data)
    {
        return $this->db->insert('phone', $data);
    }
    public function delete_where($data)
    {
        $this->db->where('phone',$data);
        return $this->db->delete('phone');
    }






}