<?php
Class Menu_model extends CI_Model
{
	
	public function all()
	{

		$data=$this->db->get("menus")->result_array();
		return $data;
	}
}