<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_finish_delivery_model extends CI_Model
{
   function update_order($order,$data)
   {
       $this->db->where('order_id',$order);
       $this->db->update('orders',$data);
   }

   function insert_history($data2)
   {
       $this->db->insert('rider_order_history',$data2);
   }

   function insert_sign($data3)
   {
       $this->db->insert('user_sign',$data3);
   }

   function updateStatus($id,$data)
   {
       $this->db->where('rider_id',$id);
       $this->db->update('rider',$data);
   }
}