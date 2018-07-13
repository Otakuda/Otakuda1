<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PlaceModel extends CI_Model
{
    // Get cities
    function getState()
    {
        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get('state');
        $response = $q->result_array();

        return $response;
    }

}