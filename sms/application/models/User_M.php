<?php
/**
 * Created by PhpStorm.
 * User: Chong 123
 * Date: 7/5/2018
 * Time: 3:09 PM
 */
class User_M extends CI_Model
{

    public function insert($user)
    {
        return $this->db->insert('user', $user);
    }

}