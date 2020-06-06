<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-22
 * Time: 16:26
 */

class Agent_list_events extends CI_Controller
{

    public function index()
    {

        $data = array();
        $data["fetch_event"] = '';
        $this->load->model("model_agent_list_events");
        $data["fetch_event"] = $this->model_agent_list_events->fetch_events($this->session->userdata('emailId'));
        $this->renderView($this->session->userdata(), $data);


    }

    public function deleteEvent()
    {

        if ($this->input->post('delete')) {

            $data = array(
                'id' => $this->input->post("eventId")

            );

            $this->load->model("model_agent_list_events");
            $this->model_agent_list_events->delete_data($data);
            redirect(base_url() . "agent_list_events");
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect(base_url() . "login");
    }

    public function renderView($value, $data)
    {
        $this->load->view('template/agent-header', $value);
        $this->load->view('agent-list-events', $data);
        $this->load->view('template/sub-footer');
    }


}