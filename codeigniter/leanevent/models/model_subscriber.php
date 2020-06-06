<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-19
 * Time: 16:25
 */

class Model_subscriber extends CI_Model
{

    public function fetch_data($data)
    {

        $this->db->select('*');
        $this->db->from('Lean_subscriber');
        $this->db->where('emailId', $data['emailId']);
        $q = $this->db->get();
        $result = $q->result();
        return $result;
    }

    public function insert_data($data)
    {
        if ($this->fetch_data($data)) {
            return false;
        } else {
            $this->db->insert("Lean_subscriber", $data);
            return true;
        }

    }


}


