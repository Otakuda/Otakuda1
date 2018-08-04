<?php

/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/5/2018
 * Time: 3:09 PM
 */
class User_M extends CI_Model
{

    public function insert($user)
    {
        return $this->db->insert('users', $user);
    }


    public function display_detail($phone)
    {
        $this->db->select('*');
        $this->db->from("users");
        $this->db->where('phone', $phone);

        $query = $this->db->get();
        return $query->result_array();

    }

    public function get($where = array())
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get('users');
        return $query->row_array();
    }

    public function update_shop_level($data = array(), $id)
    {
        $this->db->update('users', $data, array('id' => $id));
    }


    function update_username($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }

}