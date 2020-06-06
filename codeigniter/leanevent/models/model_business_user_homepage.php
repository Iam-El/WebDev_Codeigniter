<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-23
 * Time: 19:11
 */

class Model_business_user_homepage extends CI_Model
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