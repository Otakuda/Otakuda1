<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Delivery_finish_model extends CI_Model
{
    public function updateAcc($uid, $data)
    {
        $this->db->where('order_id',$uid);
        $this->db->update('orders',$data);
    }

    public function getRider($id)
    {
        $this->db->select('*');
        $this->db->from('rider_order_history');
        $this->db->join('rider','rider.rider_id=rider_order_history.rider_id');
        $this->db->where('rider_order_history.order_id',$id);
        $query=$this->db->get();
        return $query->row_array();
    }

    public function update_rate($riderM,$rate)
    {
        $this->db->set('number_of_times','number_of_times+' . (int) 1,false);
        $this->db->set('rate_mark','rate_mark+'.$rate,false);
        $this->db->where('rider_id',$riderM);
        $this->db->update('rider_rate');
    }
}