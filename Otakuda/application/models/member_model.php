<?php
class member_model extends CI_Model{
   
    function __construct() {
        parent::__construct();
         $this->load->database();
    }
   //條件搜尋
     function where_array($array,$tbale){
        $query = $this->db->where($array)->get($tbale);
        return $query;
    }
    
     function find($array,$tbale){

        $result = $this->db->where($array)->get($tbale);
        $data=$result->row_array();
        return $data;

    }
    //全部搜尋
    function all($table){
        $query = $this->db->get($table);
        return $query;
    }
    //刪除
    function del($array,$table){
        $this->db->where($array)->delete($table);
    }
   // 新增
     function add($all,$table){
        $this->db->insert($table,$all);
    }
    // 修改
    function where_update($array,$all,$table){
        $this->db->where($array)->update($table,$all);
    }
   
}
?>