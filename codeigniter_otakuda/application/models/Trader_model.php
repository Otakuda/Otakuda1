<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trader_model extends CI_Model
{
    function getOrder($where)
    {
        $this->db->select('orders.*,order_detail.quantity,order_detail.price,order_detail.remark,products.product_name,products.product_price');
        $this->db->from('orders');
        $this->db->join('order_detail','order_detail.order_id=orders.order_id');
        $this->db->join('products','products.product_id=order_detail.product_id','left');
        $this->db->where('order_detail.shop_id',$where);
        $this->db->where('orders.accepter',0);
        $this->db->group_by('orders.order_id');
        $q = $this->db->get();
        return $q->result_array();
    }

    function getOrderDetail()
    {
        $this->db->select('order_detail.*,products.*');
        $this->db->from('order_detail');
        $this->db->join('products','products.product_id=order_detail.product_id','left');
        $q=$this->db->get();
        return $q->result_array();
    }

    function update_order($uid,$data)
    {
        $this->db->where('order_id',$uid);
        $this->db->update('orders',$data);
    }

    function get_Rider()
    {
        $this->db->select_max('rider_rate.rate_mark');
        $this->db->from('rider_rate');
        $this->db->join('rider','rider.rider_id=rider_rate.rider_id');
        $this->db->where('rider.rider_status',1);
        $q=$this->db->get();

        return $q->row_array();
    }

    function get_riderId($rider_mark)
    {
        $this->db->select('rider_rate.rider_id');
        $this->db->from('rider_rate');
        $this->db->where('rate_mark',$rider_mark);
        $q=$this->db->get();
        return $q->row_array();
    }

    function insertDecide($dataNew)
    {
        $this->db->insert('rider_order_decide',$dataNew);
    }
}