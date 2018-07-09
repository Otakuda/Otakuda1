<?php

/**
 * 
 */
class Shoppingcart extends CI_Model
{
	
	public function mycart()
	{
		 $this->db->select('order_detail.id,order.id');
		 $this->db->from('order_detail');
		 $this->db->join('order','order.id=order_detail.orderid');

         $query = $this->db->get(); 
    if($query->num_rows() != 0)
    {
        return $query->result_array();
    }
    else
    {
        return false;
    }
}

	}
