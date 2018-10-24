<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_order_record_model extends CI_Model
{
    public function getDate($id)
    {
        $this->db->select('*');
        $this->db->from('rider_order_history');
        $this->db->join('orders','orders.order_id=rider_order_history.order_id');
        $this->db->join('order_detail','order_detail.order_id=orders.order_id');
        $this->db->join('shop','shop.shop_id=order_detail.shop_id');
        $this->db->where('rider_order_history.rider_id',$id);
        $this->db->group_by('rider_order_history.history_id');
        $query=$this->db->get();
        return $query->result_array();
    }

    function revenue ()
    {
        $query = $this->db->select('SUM(price) AS `total`', FALSE)
            ->from('order_detail')
            ->group_by('order_detail.order_id')
            ->get();

        $row = $query->row_array();
        return $row['total'];
    }

}