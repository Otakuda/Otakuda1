<?php 

class Pic_model extends CI_Model{
	

	//save picture data to db
	function store_pic_data($data){

        $insert_data['pic_nric'] = $data['pic_nric'];
        $insert_data['pic_lesen'] = $data['pic_lesen'];
        $query = $this->db->insert('rider', $insert_data);

	}
	
}