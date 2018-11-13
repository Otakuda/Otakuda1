<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_login_model extends CI_Model
{
    function updateStatus($rider_id,$data)
    {
        $this->db->where('rider_id',$rider_id);
        $this->db->update('rider',$data);
    }
}