<?php

/**
 * Created by PhpStorm.
 * User: 張柏榆
 * Date: 2018/5/5
 * Time: 下午 09:51
 */
class Demo_M extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function Add($Data)
    {
        $sql=sprintf
        ("Insert into  Demo ('ID','Email','Phone') values ('%s','%s','%s')",$Data['ID'],$Data['Email'],$Data['Phone']);
        if($this->db->query($sql))
        {
            return "OK";
        }
        else
            { return "Fail";}

    }
}