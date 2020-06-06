<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-22
 * Time: 22:08
 */

class Model_agent_list_events extends CI_Model
{

    public function fetch_events($emailId)
    {


        $this->db->select('*');
        $this->db->where('createdBy', $emailId);
        $query = $this->db->get('Lean_Events');
var_dump($emailId);
        return $query;
//        $result = $q->result();
//        return json_decode(json_encode($result), true);
    }

    function delete_data($data){
        var_dump("here");
        $this->db->where("id", $data['id']);
        var_dump($data['id']);
        $query=$this->db->delete("Lean_Events");
        var_dump($query);
//        $result = $query->result();
//        return json_decode(json_encode($result), true);
        //DELETE FROM tbl_user WHERE id = $id
    }


    function update_data($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("tbl_user", $data);
        //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'
    }
}
