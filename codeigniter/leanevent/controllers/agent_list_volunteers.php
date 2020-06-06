<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-26
 * Time: 23:47
 */

class Agent_list_volunteers extends CI_Controller
{

    public function index()
    {
        $data = array();
        $data["fetch_event"] = '';
        $this->load->model("model_agent_list_volunteers");
        $data["fetch_event"] = $this->model_agent_list_volunteers->fetch_data();
        $this->renderView($this->session->userdata(), $data);


    }


    public function renderView($data, $value)
    {
        $this->load->view('template/agent-header', $data);
        $this->load->view('agent-list-volunteers', $value);
        $this->load->view('template/sub-footer');

    }

}