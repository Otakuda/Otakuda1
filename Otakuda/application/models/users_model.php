<?php
class users_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
        $this->load->database();
	}
	function where_array($where,$table)
	{
		$query=$this->db->where($where)->get($table);
		return $query;

	}
}

?>