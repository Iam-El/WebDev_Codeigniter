<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-23
 * Time: 22:35
 */

class Model_agent_edit_event extends CI_Model
{

    public function fetch_events($arg)
    {

        $this->db->select('*');
        $this->db->from('Lean_Events');
        $this->db->where('id', $arg);
        $q = $this->db->get();
        $result = $q->result();
        return json_decode(json_encode($result), true);
    }

    public function update_events($data ,$arg){
        $this->db->where("id", $arg);
        $this->db->update("Lean_Events", $data);
        return $this->fetch_events($arg);
    }

}

