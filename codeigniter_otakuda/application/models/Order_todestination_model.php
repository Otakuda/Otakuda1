<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_todestination_model extends CI_Model
{
    function getOrder($where)
    {
        $this->db->select('orders.*,order_detail.quantity,order_detail.price,order_detail.remark,products.product_name,products.product_price');
        $this->db->from('orders');
        $this->db->join('order_detail','order_detail.order_id=orders.order_id');
        $this->db->join('products','products.product_id=order_detail.product_id','left');
        $this->db->where('order_detail.shop_id',$where);
        $this->db->where('orders.accepter',2);
        $this->db->group_by('orders.order_id');
        $q = $this->db->get();
        return $q->result_array();
    }

    function getOrderDetail()
    {
        $this->db->select('order_detail.*,products.*');
        $this->db->from('order_detail');
        $this->db->join('products','products.product_id=order_detail.product_id','left');
//        $this->db->group_by('order_id');
        $q=$this->db->get();
        return $q->result_array();
    }

    function update_acc($uid,$data)
    {
        $this->db->where('order_id',$uid);
        $this->db->update('orders',$data);
    }
}