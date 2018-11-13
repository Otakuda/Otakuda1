<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class rider_M extends CI_Model
{

    public function add_rider($data)
    {
        $id = $this->db->insert('rider', $data);
        if ($id) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function add_icPhoto($photoIc)
    {
        return $this->db->insert('ic_image', $photoIc);
    }

    public function rider_login($rider_email, $rider_password)
    {
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
        $this->db->join('rider_rate','rider_rate.rider_id=rider.rider_id');
        $this->db->where('rider_email', $rider_email);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function display_rider_id($rider_email)
    {
        $this->db->select('rider.rider_id');
        $this->db->from('rider');
        $this->db->where('rider_email', $rider_email);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_rate($rate)
    {
        return $this->db->insert('rider_rate',$rate);
    }

    function getRate($rider_id)
    {
        $this->db->select('rider_rate.rate_mark');
        $this->db->from('rider_rate');
        $this->db->where('rider_rate.rider_id',$rider_id);
        $q=$this->db->get();
        return $q->result_array();
    }

    function updateStatus($rider_email,$status)
    {
        $this->db->where('rider_email',$rider_email);
        $this->db->update('rider',$status);
    }

}
