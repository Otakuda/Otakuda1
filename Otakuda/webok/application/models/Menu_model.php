<?php
Class Menu_model extends CI_Model
{
	
	public function all()
	{

		$data=$this->db->get("menu")->result_array();
		return $data;
	}
}