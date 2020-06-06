<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-22
 * Time: 21:24
 */

class Model_add_event extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert("Lean_Events", $data);
    }

}