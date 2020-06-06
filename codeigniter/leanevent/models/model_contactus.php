<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-19
 * Time: 12:59
 */

class Model_contactus extends CI_Model
{
    public  function insert_data($data){
        $this->db->insert("Lean_contact" ,$data);
    }

}