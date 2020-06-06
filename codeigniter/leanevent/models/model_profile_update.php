<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-24
 * Time: 00:33
 */

class Model_profile_update extends CI_Model
{
    public function update_events($data, $emailId)
    {
        $this->db->where("emailId", $emailId);
        $this->db->update("Lean_users", $data);
    }


    public function get($emailId)
    {
        $this->db->select('*');
        $this->db->where('emailId', $emailId);
        $query = $this->db->get('Lean_users');


        return json_decode(json_encode($query->result()), true);
    }

}