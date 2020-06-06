<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-25
 * Time: 15:14
 */

class Model_buy_from_us extends CI_Model
{

    public function fetch_events()
    {


        $this->db->select('*');
        $query = $this->db->get('Lean_Events');
        return $query;
//        $result = $q->result();
//        return json_decode(json_encode($result), true);
    }
}