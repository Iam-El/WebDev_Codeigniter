<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-23
 * Time: 18:56
 */

class Model_individual_homepage extends CI_Model
{

    public function fetch_events()
    {


        $this->db->select('*');
        $query = $this->db->get('Lean_Events');
        return $query;
//        $result = $q->result();
//        return json_decode(json_encode($result), true);
    }


    public function fetch_data($data,$arg)
    {

        $this->db->select('*');
        $this->db->from('registered_event');
        $this->db->where('emailId',$data);
        $this->db->where('id',$arg);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {

            return true;
        } else {
            return false;
        }

    }


    public function confirmEvent($data, $value)
    {
        $insertData["emailid"] = $value;
        $insertData["id"] = $data;
        $result = $this->db->insert("registered_event", $insertData);
        return $result;

    }
}