<?php
/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/5/2018
 * Time: 3:09 PM
 */
class Phone_M extends CI_Model
{

    public function get($phone)
    {
        $this->db->where('phone',$phone);
        $this->db->order_by('created_date DESC');
        $this->db->limit(1);

        $query = $this->db->get('phone');
        return $query->row_array();
    }

    public function add($data)
    {
        return $this->db->insert('phone', $data);
    }

    public function delete_where($data)
    {
        $this->db->where('phone',$data);
        return $this->db->delete('phone');
    }

    public function check_phone($phone) {
        //query the table 'phone' and get the result count
        $this->db->where('phone', $phone);
        $query = $this->db->get('users');

        return $query->result_array();
    }







}