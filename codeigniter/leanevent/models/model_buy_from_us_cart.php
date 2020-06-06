<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-26
 * Time: 17:13
 */

class Model_buy_from_us_cart extends CI_Model
{

    public function fetch_id($arg)
    {

        $this->db->select('*');
        $this->db->from('Lean_Events');
        $this->db->where('id', $arg);
        $q = $this->db->get();
        return $q;

    }

public function addToCart($data)
{
    $this->db->insert("tickets" ,$data);
}

}