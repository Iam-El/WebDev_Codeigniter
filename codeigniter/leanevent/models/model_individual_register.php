<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-20
 * Time: 13:41
 */

class Model_individual_register extends CI_Model
{

    public function fetch_data()
    {

        $this->db->select('*');
        $this->db->from('Lean_roles');
        $this->db->where('roleName', 'individual');
        $q = $this->db->get();
        $result = $q->result();
        return json_decode(json_encode($result), true);
    }



    public function fetch_duplicate_data($data)
    {

        $this->db->select('*');
        $this->db->from('Lean_users');
        $this->db->where('emailId', $data['emailId']);
        $q = $this->db->get();
        $result = $q->result();
        return $result;
    }


    public function insert_data($data)
    {
        if ($this->fetch_duplicate_data($data)) {
            return false;
        } else {
            $this->db->insert("Lean_users", $data);
            return true;
        }

    }


}


