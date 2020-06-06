<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-20
 * Time: 15:57
 */

class Model_login extends CI_Model
{

    public function fetch_role($emailId)
    {

        $this->db->select('roleId');
        $this->db->from('Lean_users');
        $this->db->where('emailId', $emailId);
        $q = $this->db->get();
        $result = $q->result();
        return json_decode(json_encode($result), true);
    }



    public function fetch_data($emailId, $password)
    {
        $this->db->where('emailId', $emailId);
        $this->db->where('password', $password);
        $query = $this->db->get('Lean_users');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

        //return json_decode(json_encode($query->result()), true);
    }

    public function get($emailId, $password)
    {
        $this->db->select('*');
        $this->db->where('emailId', $emailId);
        $this->db->where('password', $password);
        $query = $this->db->get('Lean_users');

        if ($query->num_rows() > 0) {
            return json_decode(json_encode($query->result()), true);
        } else {
            return false;
        }

        // return json_decode(json_encode($result), true);
    }
}