<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-29
 * Time: 12:23
 */

class Model_agent_list_business extends CI_Model
{
    public function fetch_data()
    {


        $this->db->select('*');
        $this->db->from('registered_event');
        $this->db->where('roleId', 2);
        $this->db->join('Lean_Events', 'Lean_Events.id = registered_event.id');
        $this->db->join('Lean_users', 'Lean_users.emailId= registered_event.emailId');
        $query = $this->db->get();
        return $query;

    }


}