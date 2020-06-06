<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-27
 * Time: 14:55
 */

class Agent_list_business extends CI_Controller
{

    public function index()
    {
        $data = array();
        $data["fetch_event"] = '';
        $this->load->model("Model_agent_list_business");
        $data["fetch_event"] = $this->Model_agent_list_business->fetch_data();
        $this->renderView($this->session->userdata(), $data);


    }


    public function renderView($data, $value)
    {
        $this->load->view('template/agent-header', $data);
        $this->load->view('agent-list-business', $value);
        $this->load->view('template/sub-footer');

    }

}