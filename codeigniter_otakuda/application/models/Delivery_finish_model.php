<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Delivery_finish_model extends CI_Model
{
    public function updateAcc($uid, $data)
    {
        $this->db->where('order_id',$uid);
        $this->db->update('orders',$data);
    }
}