<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rider_M extends CI_Model
{

    public function add_rider($data)
    {
        return $this->db->insert('rider', $data);
    }

    public function rider_login($rider_email, $rider_password) {
        //query the table 'phone' and get the result count
        $this->db->where('rider_email', $rider_email);
        $this->db->where('rider_password', $rider_password);

        $query = $this->db->get('rider');

        return $query->result_array();
    }
    public function display_rider_detail($rider_email)
    {
        $this->db->select('*');
        $this->db->from("rider");
        $this->db->where('rider_email', $rider_email);
        $query = $this->db->get();
        return $query->result_array();
    }

//    public function display_rider($rider_name)
//    {
//        $this->db->select('*');
//        $this->db->from("rider");
//        $this->db->where('rider_name', $rider_name);
//        $query = $this->db->get();
//        return $query->result_array();
//    }


}
